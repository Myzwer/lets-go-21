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
    <div class="absolute">
        <img src="https://lets-go.local/wp-content/uploads/2022/02/Vector-1.png" alt="">
    </div>
    <div class="full-width main-background">
        <div class="grid-x">
            <div class="small-12 medium-6 cell">
                <div class="grid-x grid-container">
                    <div class="small-12 medium-offset-3 medium-6 cell add-padding mt-80">
                        <img src="https://lets-go.local/wp-content/uploads/2022/02/Asset-1.png" alt="">
                    </div>
                    <div class="small-12">
                        <h1>Some text and stuff about a brandscript of lets go asking you to do things.</h1>
                        <div class="">
                            <button class="btn btn-v1">Register Now</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="small-12 medium-6 cell">
                <div class="full-background" style="background: url(https://lets-go.local/wp-content/uploads/2022/02/Asset-2.png);  background-position: center center;
                background-repeat: no-repeat;
              background-attachment: scroll;
              background-size: cover;">
                    <div class="content-middle">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xK__KVORrD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="https://lets-go.local/wp-content/uploads/2022/02/Vector.png" alt="">


<?php get_footer();
