<?php
/**
 * Template Name: Privacy Policy Template
 *
 * The Confirmation Page of the Let's Go Theme
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
                        <a href="/frontpage">
                            <button class="btn btn-v1 register-button"><< Back to Homepage</button>
                        </a>
                    </div>
                </div>

                <div class="small-12 cell">
                    <h1 class="light-color-invert xl-title">Privacy Policy</h1>
                    <p class="no-spacing">Updated February 24, 2020</p>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 cell">
                <img class="waves" src="<?php the_field('waves'); ?>" alt="Wavy design">
            </div>
        </div>
    </div>

    <div class="blue-background serve-margin-pull full-width">
        <div class="grid-x grid-container">
            <div class="small-12 cell privacy-policy">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php get_footer();