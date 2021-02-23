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
                    <h1 class = "light-color-invert xl-title">Karm stores</h1>
                </div>

                <div class="small-12 cell">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales finibus varius. Pellentesque velit velit, blandit eget elementum viverra, vehicula in sapien. Nullam sollicitudin hendrerit urna, at imperdiet ante pellentesque non. Curabitur rutrum non velit sit amet elementum. Donec sed eleifend felis, quis tristique nisi. Morbi sit amet metus erat. Morbi vitae tortor commodo, elementum dolor in, semper turpis.
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
                <h2 class="dark-color-invert padding-bottom small-font-mobile">Details</h2>
            </div>
            <div class="small-12 cell margin-bottom">
                <div class="grid-x grid-container">
                    <div class="small-2 cell relative">
                        <div class="icon-center">
                            <img class = "icons" src="http://lets-go.local/wp-content/uploads/2021/02/Pin-Marker.png"/>
                        </div>
                    </div>
                    <div class="small-10 cell">
                        <h4 class = "dark-color-invert">1551 W. Lamar Alexander Pkwy. Maryville TN, 37801</h4>
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
                        <h4 class = "dark-color-invert">Children 10+ allowed</h4>
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
                        <h4 class = "dark-color-invert">Mask Is Required</h4>
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
                        <h4 class = "dark-color-invert">Event is held Rain or Shine</h4>
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
