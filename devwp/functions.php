<?php
//*****************************************************
//******************** LINK CSS ***********************
//*****************************************************

// MAIN STYLE SHEET REQUIRED BY WORDPRESS
wp_enqueue_style( 'style', get_stylesheet_uri() );


// LOAD IN ALL STYLES COMPILED BY GULP
function load_styles() {
	wp_enqueue_style( 'main.min', get_template_directory_uri() . '/dist/css/main.min.css');
}
add_action('wp_enqueue_scripts', 'load_styles');





//*****************************************************
//******************** LINK JS ************************
//*****************************************************

// LOAD IN JQUERY
wp_enqueue_script( 'jquery' );


// LOAD IN ALL SCRIPTS COMPILED BY JS
function scripts_loadin() {
wp_enqueue_script( 'devwp', get_template_directory_uri() . '/dist/js/devwp.js');
}
add_action('wp_enqueue_scripts', 'scripts_loadin');



//*****************************************************
//***************** EVENT ESPRESSO ********************
//*****************************************************

//Shorten Reservation Timer

function tw_ee_change_session_lifespan() {
    return 10 * MINUTE_IN_SECONDS;
}
add_filter( 'FHEE__EE_Session__construct___lifespan', 'tw_ee_change_session_lifespan');



//*****************************************************
//*************** MENU REGISTRATIONS ******************
//*****************************************************

//*********** Header ***********
function register_my_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********** Footer Col 1 ***********
function register_col_1() {
    register_nav_menu('footer-column-1', ( 'Footer Column 1' ));
}
add_action( 'init', 'register_col_1' );

//*********** Footer Col 2 ***********
function register_col_2() {
    register_nav_menu('footer-column-2', ( 'Footer Column 2' ));
}
add_action( 'init', 'register_col_2' );

//*********** Footer Col 3 ***********
function register_col_3() {
    register_nav_menu('footer-column-3', ( 'Footer Column 3' ));
}
add_action( 'init', 'register_col_3' );


/**
 * Get the Event ID of an Espress Event.
 * If the current post is an Event, it will return null.
 * If it can't find an event, or the necessary classes, it will return null.
 * If it can find the event, and it's not the current post, it will return the ID.
 *
 * @return int|null
 */
function get_event_id(): ?int {
    // if the current post is an event, no further logic is needed
    if (get_post_type() === 'espresso_events') {
        return null; // using null as the id will use the current post
    }

    // is the Espresso Events Registry class registered
    if (!class_exists('EE_Registry')) {
        // we can't find an event ID because the event class can't be found.
        // This shouldn't happen, but a good thing to check.
        return null;
    }

    // create a new instance of registry
    $instance = EE_Registry::instance();

    // make sure the current page is one of Registration or Thank You pages
    if (!(
        is_page( $instance->CFG->core->reg_page_id ) ||
        is_page( $instance->CFG->core->thank_you_page_id)
    )) {
        // if not, then return null, because the following code won't work
        return null;
    }

    // create a new instance of the checkout class
    $checkout = $instance->SSN->checkout();
    $transaction = null; // declare the variable so it exists

    // make sure it has been instantiated correctly
    if ($checkout instanceof EE_Checkout) {
        // get transaction from checkout instance
        $transaction = $checkout->transaction;
    } else if ($checkout === null && isset($_GET['e_reg_url_link'])) {
        // if checkout isn't instantiated, see if we have the URL param e_reg_url_link
        // this url param is used to find the transaction on the thank you page
        $txnModel = EE_Registry::instance()->load_model('Transaction');
        $transaction = $txnModel->get_transaction_from_reg_url_link($_GET['e_reg_url_link']);
    }
    
    // make sure a transaction was found
    if ($transaction instanceof EE_Transaction) {
        // a transaction can in theory have multiple registrations
        foreach ($transaction->registrations() as $registration) {
            if ($registration instanceof EE_Registration) {
                $event = $registration->event();
                // make sure the event is a valid event instance
                if ( $event instanceof EE_Event ) {
                    // return the first event ID we find.
                    // we do this because we only allow 1 event per registration
                    return $event->ID();
                }
            }
        }   
    }
    // fallback if no events were found
    return null;
}

?>