<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <section id="main" class="site-main simple_space" role="main">
            <div class="page__container">
                <div class="page__row">
                    <?php if(is_active_sidebar( 'sidebar-1' )){?>
                    <div class="content_sidebar_active">
                        <?php } ?>
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() );

                            the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <?php if(is_active_sidebar( 'sidebar-1' )){?>
                        <div class="sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
