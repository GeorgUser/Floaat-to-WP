<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2020
 * Time: 1:13
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <section id="main" class="site-main simple_space" role="main">
            <div class="page__container">
                <div class="page__row">
                    <img src="<?php the_post_thumbnail_url(); ?>"
                         alt="gear">
                    <?php the_title() ?>
                    <?php the_content('Перейти к полной статье...'); ?>


                </div>
            </div>
        </section><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();