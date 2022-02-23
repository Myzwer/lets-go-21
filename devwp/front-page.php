<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Let's Go Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Let's Go
 * @since 1.0.0
 */

get_header(); ?>
    <div class="z-2 absolute">
        <img class="small-margin-pull" src="https://lets-go.local/wp-content/uploads/2022/02/Header-Top-Bar.png" alt="">
    </div>

    <img class="homepage-top-left" src="https://lets-go.local/wp-content/uploads/2022/02/Top-Left-Corner-Alt.png"
         alt="">
    <div class="full-width main-background">
        <div class="grid-x mobile-homepage-header">
            <div class="small-12 medium-offset-1 medium-4 cell z-3 relative homepage-header">
                <img class = "mobile-padding" src="https://lets-go.local/wp-content/uploads/2022/02/Asset-5.png" alt="">
            </div>
            <div class="small-12 medium-offset-1 medium-5 z-3 relative">
                <div class="content-middle w-full">
                    <h1 class = "lr-padding">Some text and stuff about a brandscript of lets go asking you to do things.</h1>
                    <div class="lr-padding">
                        <button class="btn btn-v1">Register Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <img class="z-3 relative" src="https://lets-go.local/wp-content/uploads/2022/02/Header-Bottom.png" alt="">

    <div class="full-width orange-background">
        <div class="grid-x margin-bottom">
            <div class="small-12 center cell">
                <div class="drop-effect">
                <h2>What is Let's Go?</h2>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="small-12 medium-4 cell padding-bottom">
                    <div class="center">
                        <img class = "w-half padding-bottom" src="https://lets-go.local/wp-content/uploads/2022/02/Icon-1.png" alt="">
                    </div>
                        <h3 class="dark-color-invert">Look Up</h3>
                    <p class="no-spacing dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Culpa ex illum ipsam ipsum labore, nihil nisi numquam officiis quaerat, rerum sequi soluta sunt?
                        Aliquam at dolore harum ut, veniam vitae.</p>
                </div>

                <div class="small-12 medium-4 cell middle-icon-push padding-bottom">
                    <div class="center">
                        <img class = "w-half padding-bottom" src="https://lets-go.local/wp-content/uploads/2022/02/Icon-1.png" alt="">
                    </div>
                    <h3 class="dark-color-invert">Look Up</h3>
                    <p class="no-spacing dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Culpa ex illum ipsam ipsum labore, nihil nisi numquam officiis quaerat, rerum sequi soluta sunt?
                        Aliquam at dolore harum ut, veniam vitae.</p>
                </div>

                <div class="small-12 medium-4 cell padding-bottom">
                    <div class="center">
                        <img class = "w-half padding-bottom" src="https://lets-go.local/wp-content/uploads/2022/02/Icon-1.png" alt="">
                    </div>
                    <h3 class="dark-color-invert">Look Up</h3>
                    <p class="no-spacing dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Culpa ex illum ipsam ipsum labore, nihil nisi numquam officiis quaerat, rerum sequi soluta sunt?
                        Aliquam at dolore harum ut, veniam vitae.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width orange-background">
        <img src="https://lets-go.local/wp-content/uploads/2022/02/About-Bottom-Wave.png" alt="">
    </div>
    <div class="full-width blue-background">
        <div class="grid-x">
            <div class="small-12 center cell">
                <h3>Serving Opportunities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eaque facilis recusandae. At
                    eligendi et fugit vero. Beatae illum minus obcaecati, possimus reprehenderit rerum similique veniam.
                    Aliquid esse porro possimus.</p>
            </div>
        </div>
    </div>

<?php get_footer();
