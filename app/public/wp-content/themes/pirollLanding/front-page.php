<?php get_header(); ?>
    <header id="home">
        <article class="container">
            <div>
                <h1><?php the_field('main_title'); ?></h1>
                <p><?php the_field('text_under_the_main_title'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn"><?php echo('contact us'); ?></a>
            </div>
        </article>
    </header>

    <!-- about -->
    <section id="about" class="about container py">
        <h2><?php the_field('title_in_the_about_us_section'); ?></h2>
        <p><?php the_field('text_in_the_about_us_section'); ?></p>
        <img src="<?php the_field('picture_of_signature_in_about_us_section'); ?>" alt="">
    </section>

    <!-- skill -->
    <section class="skill">
        <article class="py">
            <h2><?php the_field('title_in_the_skills_section'); ?></h2>
            <ul>
                <li>
                    <p><?php the_field('first_paragraf_in_the_skills_section'); ?></p>
                    <div class="progress">
                        <div class="progress-bar" data-percent="75"></div>
                    </div>
                </li>

                <li>
                    <p><?php the_field('second_paragraf_in_the_skills_section'); ?></p>
                    <div class="progress">
                        <div class="progress-bar" data-percent="90"></div>
                    </div>
                </li>

                <li>
                    <p><?php the_field('third_paragraf_in_the_skills_section'); ?></p>
                    <div class="progress">
                        <div class="progress-bar" data-percent="35"></div>
                    </div>
                </li>
            </ul>
        </article>
        <article>
            <img src="<?php the_field('right_picture_in_the_skills_section'); ?>" alt="">
        </article>
    </section>

    <!-- statistics -->
    <section class="statistics">
        <article class="container">
            <div>
                <img src="<?php the_field('first_icon_in_the_statistics_section'); ?>" alt="">
                <ul>
                    <li class="limitNum"><?php the_field('first_number_in_the_statistics_section'); ?></li>
                    <li><?php the_field('first_text_in_the_statistics_section'); ?></li>
                </ul>
            </div>

            <div>
                <img src="<?php the_field('second_icon_in_the_statistics_section'); ?>" alt="">
                <ul>
                    <li class="limitNum"><?php the_field('second_number_in_the_statistics_section'); ?></li>
                    <li><?php the_field('second_text_in_the_statistics_section'); ?></li>
                </ul>
            </div>

            <div>
                <img src="<?php the_field('third_icon_in_the_statistics_section'); ?>" alt="">
                <ul>
                    <li class="limitNum"><?php the_field('third_number_in_the_statistics_section'); ?></li>
                    <li><?php the_field('third_text_in_the_statistics_section'); ?></li>
                </ul>
            </div>

            <div>
                <img src="<?php the_field('fourth_icon_in_the_statistics_section'); ?>" alt="">
                <ul>
                    <li class="limitNum"><?php the_field('fourth_number_in_the_statistics_section'); ?></li>
                    <li><?php the_field('fourth_text_in_the_statistics_section'); ?></li>
                </ul>
            </div>
        </article>
    </section>

    <!-- works -->
    <section id="work" class="works">
        <article class="works-gallery">
            <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'works'
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div><?php the_post_thumbnail(); ?><span></span></div>
            
            <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
            
        </article>

        <div class="preview">
            <div class="items"></div>
        </div>

        <article class="works-btn">
            <a href="<?php the_permalink(); ?>"><?php echo('load more work'); ?></a>
        </article>

    </section>

    <!-- work process -->
    <section id="process" class="process py">
        <hgroup class="container">
          <h2><?php the_field('main_title_in_the_work_process_section'); ?></h2>
            <p><?php the_field('text_in_the_work_process_section'); ?></p>
        </hgroup>
        <article class="video container">
          
            <?php the_field('video'); ?>
<!--
            <video class="video-player" src="../wp-content/uploads/2021/11/work-process.mp4" poster="../wp-content/uploads/2021/11/video-poster.jpg">
            </video>
            <div id="video-control" class="video-control">
                <button class="video-play"><i class="fas fa-play"></i></button>
                <button class="video-pause"><i class="fas fa-pause"></i></button>
            </div>
-->

        </article>
    </section>

    <!-- services -->
    <section id="services" class="services py">
        <article class="container">
            <div>
                <img src="<?php the_field('first_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('first_title_under_the_picture'); ?></h5>
                <p><?php the_field('first_text_under_the_picture'); ?></p>
            </div>

            <div>
                <img src="<?php the_field('second_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('second_title_under_the_picture'); ?></h5>
                <p><?php the_field('second_text_under_the_picture'); ?></p>
            </div>

            <div>
                <img src="<?php the_field('third_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('third_title_under_the_picture'); ?></h5>

                <p><?php the_field('third_text_under_the_picture'); ?></p>

            </div>

            <div>
                <img src="<?php the_field('fourth_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('fourth_title_under_the_picture'); ?></h5>
                <p><?php the_field('fourth_text_under_the_picture'); ?></p>
            </div>

            <div>
                <img src="<?php the_field('fifth_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('fifth_title_under_the_picture'); ?></h5>
                <p><?php the_field('fifth_text_under_the_picture'); ?></p>
            </div>

            <div>
                <img src="<?php the_field('sixth_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('sixth_title_under_the_picture'); ?></h5>
                <p><?php the_field('sixth_text_under_the_picture'); ?></p>
            </div>

            <div>
                <img src="<?php the_field('seventh_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('seventh_title_under_the_picture'); ?></h5>
                <p><?php the_field('seventh_text_under_the_picture'); ?></p>
            </div>

            <div>
                <img src="<?php the_field('eight_picture_in_the_services_section'); ?>" alt="">
                <h5><?php the_field('eight_title_under_the_picture'); ?></h5>
                <p><?php the_field('eight_text_under_the_picture'); ?></p>
            </div>
        </article>
    </section>

    <!-- testimonial -->
    <section id="testimonial" class="testimonial py">
        <article class="container">
            <!-- Set up your HTML -->
            <div id="owl-testimonial" class="owl-carousel owl-theme">
                <div class="item">
                    <p><?php the_field('first_text_in_the_testemonials_section'); ?></p>
                    <h5><?php the_field('first_name_in_the_testemonials_section'); ?></h5>
                </div>

                <div class="item">
                    <p><?php the_field('second_text_in_the_testemonials_section'); ?></p>
                    <h5><?php the_field('second_name_in_the_testemonials_section'); ?></h5>
                </div>

                <div class="item">
                    <p><?php the_field('third_text_in_the_testemonials_section'); ?></p>
                    <h5><?php the_field('third_name_in_the_testemonials_section'); ?></h5>
                </div>
            </div>
        </article>
    </section>

    <!-- partners -->
    <section class="partners container py">
        <article><img src="<?php the_field('first_picture_in_the_partners_section'); ?>" alt=""></article>
        <article><img src="<?php the_field('second_picture_in_the_partners_section'); ?>" alt=""></article>
        <article><img src="<?php the_field('third_picture_in_the_partners_section'); ?>" alt=""></article>
        <article><img src="<?php the_field('fourth_picture_in_the_partners_section'); ?>" alt=""></article>
        <article><img src="<?php the_field('fifth_picture_in_the_partners_section'); ?>" alt=""></article>
    </section>

    <!-- contact -->
    <section id="contact" class="contact py">
        <hgroup class="container">
            <h2><?php the_field('title_in_the_contact_section'); ?></h2>
            <p><?php the_field('text_under_the_title_in_the_contact_section'); ?></p>
        </hgroup>
        <article class="container">
            <form>
               <article class="container">
            
               <?php the_field('form'); ?>

        </article>
            </form>
        </article>
    </section>
   <?php get_footer(); ?>