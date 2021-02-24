<?php
/**
 * Template Name: Event Template
 *
 * The Contact Page of the Let's Go Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Let's Go
 * @since 1.0.0
 */

get_header(); ?>

<?php

$pageID = $post->ID;
echo $pageID;

?>

    <div class="full-width main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x ">
                <div class="small-12 cell">
                    <div class="margin-bottom">
                        <a href="#"></a>
                        <button class="btn btn-v1 register-button"><< Back to Homepage</button>
                    </div>
                </div>

                <div class="small-12 cell">
                    <h1 class = "light-color-invert xl-title"><?php the_field('organization_name' , $pageID); ?></h1>
                    <p class = "no-spacing">Scroll down to see available times.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 cell">
                <img class="waves" src="http://lets-go.local/wp-content/uploads/2021/02/Vector-Top-Small.png" alt="">
            </div>
        </div>
    </div>

    <div class="blue-background serve-margin-pull full-width">
        <div class="grid-x grid-container">
            <div class="small-12 cell">
                <h2 class="dark-color-invert small-font-mobile">Details</h2>
            </div>
            <div class="small-12 cell padding-bottom">
                <p class = "dark-color-invert no-spacing"><?php the_field('event_description'); ?></p>
            </div>

            <div class="small-12 cell margin-bottom">
                <div class="grid-x grid-container">
                    <div class="small-2 cell relative">
                        <div class="icon-center">
                            <img class = "icons" src="http://lets-go.local/wp-content/uploads/2021/02/Pin-Marker.png"/>
                        </div>
                    </div>
                    <div class="small-10 cell">
                        <h4 class = "dark-color-invert"><?php the_field('address'); ?></h4>
                    </div>
                </div>
            </div>

            <div class="small-12 cell margin-bottom">
                <div class="grid-x grid-container">
                    <div class="small-2 cell relative">
                        <div class="icon-center">
                            <img class = "icons" src="http://lets-go.local/wp-content/uploads/2021/02/Family-Friendly.png"/>
                        </div>
                    </div>
                    <div class="small-10 cell">
                        <h4 class = "dark-color-invert"><?php the_field('child_information'); ?></h4>
                    </div>
                </div>
            </div>

            <div class="small-12 cell margin-bottom">
                <div class="grid-x grid-container">
                    <div class="small-2 cell relative">
                        <div class="icon-center">
                            <img class = "icons" src="http://lets-go.local/wp-content/uploads/2021/02/Mask.png"/>
                        </div>
                    </div>
                    <div class="small-10 cell">
                        <h4 class = "dark-color-invert"><?php the_field('mask_information'); ?></h4>
                    </div>
                </div>
            </div>

            <div class="small-12 cell margin-bottom">
                <div class="grid-x grid-container">
                    <div class="small-2 cell relative">
                        <div class="icon-center">
                            <img class = "icons" src="http://lets-go.local/wp-content/uploads/2021/02/Weather.png"/>
                        </div>
                    </div>
                    <div class="small-10 cell">
                        <h4 class = "dark-color-invert"><?php the_field('weather_information'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 low-z-index cell">
                <img class="waves" src="http://lets-go.local/wp-content/uploads/2021/02/Header-Small.png" alt="">
            </div>
        </div>
    </div>


    <div class="full-width main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>





<?php get_footer();
