<?php
/**
 * The template for displaying the 404 template in the Let's Go theme.
 *
 * Template Name: 404 Page
 * @package WordPress
 * @subpackage Let's Go
 * @since 1.0.0
 */

get_header(); ?>


    <div class="full-width full-background main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x ">
                <div class="small-12 medium-6 cell margin-top">
                    <h1 class="light-color-invert xl-title">404 Error.</h1>
                    <h3 class="no-spacing">Let's Go find the page you were looking for.</h3>
                    <a href="/frontpage">
                        <button class="btn btn-v1 register-button"><< Back to Opportunities</button>
                    </a>
                </div>

                <div class="small-12 medium-6 cell">
                    <div class="margin-bottom">
                        <img src="https://letsgoserve.com/wp-content/uploads/2021/02/404-Error.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();