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

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background"
             style="background: url(http://lets-go.local/wp-content/uploads/2021/02/Background-Cropped-min.png);  background-position: bottom left;">
            <div class="small-12 medium-8 large-offset-1 large-6 padding-top cell">
                <h1>Let's Go</h1>
                <h3 class = "dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3>
            </div>

            <div class="small-10 small-offset-1 medium-4 medium-offset-0 header-margin">
                <img src="http://lets-go.local/wp-content/uploads/2021/02/Buildings-model-isometric-vector-material-02-copy.png" alt="">
            </div>
        </div>
    </div>


<?php get_footer();
