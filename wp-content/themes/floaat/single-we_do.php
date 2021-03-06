<?php
/**
 * Single page We do
 */
get_header();

while (have_posts()) : the_post(); ?>
    <div id="primary" class="content-area">
        <section id="main" class="site-main simple_space" role="main">
            <div class="page__container">
                <div class="page__padding">
                    <div class="page__row">
                        <div class="single__content">
                            <img src="<?php the_post_thumbnail_url(); ?>"
                                 alt="gear">
                            <div class="description">
                                <h1><?php the_title() ?></h1>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile;
get_footer();