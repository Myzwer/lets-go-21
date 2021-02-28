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
        <div class="grid-x grid-padding-x blue-background padding-top ">
            <div class="small-12 medium-8 large-offset-1 large-7 cell ">
                <img class="padding-bottom" src="<?php the_field('logo_image'); ?>"
                     alt="Let's Go Logo">
                <h3 class="dark-color-invert"><?php the_field('subtext'); ?></h3>
            </div>

            <div class="small-10 small-offset-1 medium-4 medium-offset-0 large-3 padding-bottom">
                <img src="<?php the_field('flavor_image'); ?>"
                     alt="Car driving through isometric city">
            </div>
        </div>
    </div>

    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 low-z-index cell">
                <img class="waves" src="<?php the_field('section_background_image'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <h2 class="center"><?php the_field('about_title'); ?></h2>
            </div>

            <div class="small-12 medium-4 cell">
                <div class="glyphs center">
                    <img src="<?php the_field('section_1_image'); ?>"
                         alt="Isometric People Serving">
                </div>
                <h3 class="center padding-top-small"><?php the_field('section_1_title'); ?></h3>
                <p class="no-padding lr-padding margin-bottom"><?php the_field('section_1_body'); ?> </p>
            </div>

            <div class="small-12 medium-4 cell middle-glyph-push">
                <div class="glyphs center">
                    <img src="<?php the_field('section_2_image'); ?>"
                         alt="Isometric Cityscape">
                </div>
                <h3 class="center padding-top-small"><?php the_field('section_2_title'); ?></h3>
                <p class="no-padding lr-padding margin-bottom"><?php the_field('section_2_body'); ?> </p>
            </div>

            <div class="small-12 medium-4 cell">
                <div class="glyphs center">
                    <img src="<?php the_field('section_3_image'); ?>"
                         alt="Isometric People moving boxes">
                </div>
                <h3 class="center padding-top-small"><?php the_field('section_3_title'); ?></h3>
                <p class="no-padding lr-padding margin-bottom"><?php the_field('section_3_body'); ?></p>
            </div>
        </div>
    </div>


    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 cell">
                <img class="waves" src="<?php the_field('footer_image'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="blue-background serve-margin-pull full-width">
        <div class="grid-x grid-container">
            <div class="small-12 cell">
                <h2 class="center dark-color-invert padding-bottom small-font-mobile"><?php the_field('serving_ops_title'); ?></h2>
                <div class="orange-background rounded-corners margin-bottom">
                    <h3 class="center dark-color-invert padding-top"><?php the_field('alert_box_header'); ?></h3>
                    <p class="dark-color-invert no-spacing lr-padding padding-bottom"><?php the_field('alert_box_copy'); ?></p>
                </div>
            </div>
        </div>


        <!-- Start of Cards-->
        <div class="grid-x card-outer"><!-- Card Container Start-->
            <div class="small-12 cell"><!-- Card Container Start, basically leave this alone -->
                <div class="grid-x grid-margin-x"><!-- Cards Outer -->


                    <!-- ************ ROW 1 ************* -->
                    <?php if (have_rows('event_1')): ?>
                        <?php while (have_rows('event_1')): the_row(); ?>
                            <div class="small-12 cell card-margin-bottom "><!-- FEATURED Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 1 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 cell gradient-corners relative"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 cell card-contents content-corners relative">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br> Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <!-- ************ ROW 2 ************* -->
            <?php if (have_rows('event_2')): ?>
                <?php while (have_rows('event_2')): the_row(); ?>
                    <div class="small-12 large-8 cell"><!-- This sets the length of the first stack of cards -->
                        <div class="grid-x">
                            <div class="small-12 cell"><!-- Card 2 LONG Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-4 cell card-margin-bottom-desktop gradient-corners relative"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-8 cell card-margin-bottom card-contents relative content-corners">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 1 Inner End -->
                            </div><!-- Card 1 Outer End -->
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('event_3')): ?>
                            <?php while (have_rows('event_3')):
                            the_row(); ?>
                            <div class="small-12 cell"><!-- Card 2 LONG Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-4 cell card-margin-bottom-desktop relative gradient-corners"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-8 cell card-margin-bottom card-contents relative content-corners">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 2 Inner End -->
                            </div><!-- Card 2 Outer End -->

                        </div><!-- Card Stack end -->
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>

                    <?php if (have_rows('event_4')): ?>
                        <?php while (have_rows('event_4')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell relative top-corners corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents relative bottom-corners corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <!-- ************ ROW 3 ************* -->
                    <?php if (have_rows('event_5')): ?>
                        <?php while (have_rows('event_5')): the_row(); ?>
                            <div class="small-12 large-6 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 cell gradient-corners relative"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 cell card-contents relative content-corners">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('event_6')): ?>
                        <?php while (have_rows('event_6')): the_row(); ?>

                            <div class="small-12 large-6 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 cell gradient-corners relative"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 cell card-contents relative content-corners">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor<br> Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- ************ ROW 4 ************* -->
                    <?php if (have_rows('event_7')): ?>
                        <?php while (have_rows('event_7')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell top-corners relative corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center tall-image">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents bottom-corners relative corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('event_8')): ?>
                        <?php while (have_rows('event_8')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell top-corners relative corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center tall-image">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents bottom-corners relative corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('event_9')): ?>
                        <?php while (have_rows('event_9')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell top-corners relative corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents relative bottom-corners corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- ************ ROW 5 ************* -->
                    <?php if (have_rows('event_10')): ?>
                        <?php while (have_rows('event_10')): the_row(); ?>
                            <div class="small-12 large-5 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell top-corners relative corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center ">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents relative bottom-corners corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('event_12')): ?>
                <?php while (have_rows('event_12')):
                the_row(); ?>
                    <div class="small-12 large-7 cell"><!-- This sets the length of the first stack of cards -->
                        <div class="grid-x">
                            <div class="small-12 cell"><!-- Card 1 LONG Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 1 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-4 cell card-margin-bottom-desktop gradient-corners relative"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-8 cell card-margin-bottom card-contents relative content-corners">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 1 Inner End -->
                            </div><!-- Card 1 Outer End -->
                            <?php endwhile; ?>
                            <?php endif; ?>


                            <?php if (have_rows('event_16')): ?>
                                <?php while (have_rows('event_16')): the_row(); ?>
                                    <div class="small-12 cell"><!-- Card 2 LONG Outer -->
                                        <div class="grid-x lock-tall-half"><!-- Card 2 Inner / Height Locks -->

                                            <!-- Left / Top -->
                                            <div class="small-12 medium-4 large-4 cell card-margin-bottom-desktop gradient-corners relative"
                                                 style="background: <?php the_sub_field('event_gradient'); ?>;">
                                                <div class="card-center">
                                                    <img src="<?php the_sub_field('event_image'); ?>"
                                                         alt="Event Graphic">
                                                </div>
                                            </div>

                                            <!-- Right / Bottom -->
                                            <div class="small-12 medium-8 large-8 cell card-margin-bottom card-contents relative content-corners">
                                                <div class="card-content-center">
                                                    <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                                    <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                                    <div class="grid-x icon-box">
                                                        <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                            <div class="center">
                                                                <img class="center"
                                                                     src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                            </div>
                                                            <p class="center no-spacing">Outdoor <br>Event</p>
                                                        </div>
                                                        <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                            <div class="center">
                                                                <img class="center"
                                                                     src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                            </div>
                                                            <p class="center no-spacing">Family <br>Friendly</p>
                                                        </div>
                                                        <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                            <div class="center">
                                                                <img class="center"
                                                                     src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                            </div>
                                                            <p class="center no-spacing">Mask <br>Required</p>
                                                        </div>
                                                    </div>

                                                    <div class="center margin-bottom">
                                                        <a href="<?php the_sub_field('registration_link'); ?>">
                                                            <button class="btn btn-v1 register-button">Register</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Card 2 Inner End -->
                                    </div><!-- Card 2 Outer End -->
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div><!-- Card Stack end -->
                    </div>

                    <!-- ************ ROW 6 ************* -->
                    <?php if (have_rows('event_13')): ?>
                        <?php while (have_rows('event_13')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell relative top-corners corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents relative bottom-corners corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('event_14')): ?>
                        <?php while (have_rows('event_14')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell relative top-corners corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center tall-image">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents relative bottom-corners corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('event_11')): ?>
                        <?php while (have_rows('event_11')): the_row(); ?>
                            <div class="small-12 large-4 cell card-margin-bottom"><!-- Card 3 TALL Outer -->
                                <div class="grid-x lock-tall"><!-- Card 2 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 large-12 cell top-corners relative corner-override"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 large-12 cell card-contents relative bottom-corners corner-override-2">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                            <div class="grid-x icon-box">
                                                <div class="small-4 cell <?php the_sub_field('outdoor_event'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Outdoor <br>Event</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('family_friendly'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Family <br>Friendly</p>
                                                </div>
                                                <div class="small-4 cell <?php the_sub_field('mask_required'); ?>">
                                                    <div class="center">
                                                        <img class="center"
                                                             src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                                                    </div>
                                                    <p class="center no-spacing">Mask <br>Required</p>
                                                </div>
                                            </div>

                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Register</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <!-- ************ ROW 7 ************* -->
                    <?php if (have_rows('event_15')): ?>
                        <?php while (have_rows('event_15')): the_row(); ?>
                            <div class="small-12 cell card-margin-bottom "><!-- FEATURED Outer -->
                                <div class="grid-x lock-tall-half"><!-- Card 1 Inner / Height Locks -->

                                    <!-- Left / Top -->
                                    <div class="small-12 medium-4 cell gradient-corners relative"
                                         style="background: <?php the_sub_field('event_gradient'); ?>;">
                                        <div class="card-center">
                                            <img src="<?php the_sub_field('event_image'); ?>" alt="Event Graphic">
                                        </div>
                                    </div>

                                    <!-- Right / Bottom -->
                                    <div class="small-12 medium-8 cell card-contents content-corners relative">
                                        <div class="card-content-center">
                                            <h2 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h2>
                                            <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>


                                            <div class="center margin-bottom">
                                                <a href="<?php the_sub_field('registration_link'); ?>">
                                                    <button class="btn btn-v1 register-button">Let's Go!</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 3 Inner End -->
                            </div><!-- Card 3 Outer End -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div><!-- Card 1 Outer End -->

            </div><!-- Card Container End -->
        </div><!-- Card Container End -->

    </div>


<?php get_footer();
