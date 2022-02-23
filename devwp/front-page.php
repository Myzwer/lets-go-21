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
                <img class="mobile-padding" src="https://lets-go.local/wp-content/uploads/2022/02/Asset-5.png" alt="">
            </div>
            <div class="small-12 medium-offset-1 medium-5 z-3 relative">
                <div class="content-middle w-full">
                    <h1 class="lr-padding">Some text and stuff about a brandscript of lets go asking you to do
                        things.</h1>
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
                        <img class="w-half padding-bottom"
                             src="https://lets-go.local/wp-content/uploads/2022/02/Icon-1.png" alt="">
                    </div>
                    <h3 class="dark-color-invert">Look Up</h3>
                    <p class="no-spacing dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Culpa ex illum ipsam ipsum labore, nihil nisi numquam officiis quaerat, rerum sequi soluta sunt?
                        Aliquam at dolore harum ut, veniam vitae.</p>
                </div>

                <div class="small-12 medium-4 cell middle-icon-push padding-bottom">
                    <div class="center">
                        <img class="w-half padding-bottom"
                             src="https://lets-go.local/wp-content/uploads/2022/02/Icon-1.png" alt="">
                    </div>
                    <h3 class="dark-color-invert">Look Up</h3>
                    <p class="no-spacing dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Culpa ex illum ipsam ipsum labore, nihil nisi numquam officiis quaerat, rerum sequi soluta sunt?
                        Aliquam at dolore harum ut, veniam vitae.</p>
                </div>

                <div class="small-12 medium-4 cell padding-bottom">
                    <div class="center">
                        <img class="w-half padding-bottom"
                             src="https://lets-go.local/wp-content/uploads/2022/02/Icon-1.png" alt="">
                    </div>
                    <h3 class="dark-color-invert">Look Up</h3>
                    <p class="no-spacing dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Culpa ex illum ipsam ipsum labore, nihil nisi numquam officiis quaerat, rerum sequi soluta sunt?
                        Aliquam at dolore harum ut, veniam vitae.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width orange-background dark-color-invert">
        <img src="https://lets-go.local/wp-content/uploads/2022/02/About-Bottom-Wave.png" alt="">
    </div>
    <div class="full-width blue-background">
        <div class="grid-x grid-container">
            <div class="small-12 center cell">
                <div class="drop-effect add-padding">
                    <h2>Serving Opportunities</h2>
                </div>
                <div class="orange-background add-padding rounded-corners box-shadow margin-bottom">
                    <h3 class="dark-color-invert center uppercase">Please Note</h3>
                    <p class="dark-color-invert">Please do not bring any extra people to serve who have not registered
                        for the event. Although it sounds helpful, our serve organizations have specified the number of
                        people allowed and we want to honor this.</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br> Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor<br> Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                        <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                        <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                        <div class="grid-x icon-box">
                                            <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Outdoor <br>Event</p>
                                            </div>
                                            <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                <div class="center">
                                                    <img class="center"
                                                         src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                </div>
                                                <p class="center no-spacing">Family <br>Friendly</p>
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
                                                <h3 class="no-spacing lr-padding"><?php the_sub_field('event_title'); ?></h3>
                                                <p class="no-spacing lr-padding margin-bottom"><?php the_sub_field('event_text'); ?></p>
                                                <div class="grid-x icon-box">
                                                    <div class="small-6 cell <?php the_sub_field('outdoor_event'); ?>">
                                                        <div class="center">
                                                            <img class="center"
                                                                 src="https://img.icons8.com/ios/40/000000/partly-cloudy-day--v1.png"/>
                                                        </div>
                                                        <p class="center no-spacing">Outdoor <br>Event</p>
                                                    </div>
                                                    <div class="small-6 cell <?php the_sub_field('family_friendly'); ?>">
                                                        <div class="center">
                                                            <img class="center"
                                                                 src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                                                        </div>
                                                        <p class="center no-spacing">Family <br>Friendly</p>
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



            </div><!-- Card 1 Outer End -->

        </div><!-- Card Container End -->
    </div><!-- Card Container End -->


<?php get_footer();
