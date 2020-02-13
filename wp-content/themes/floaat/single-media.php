<?php
/**
 * The template for displaying single-media posts.
 *
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <section id="main" class="site-main simple_space" role="main">
            <div class="page__container">
                <div class="page__row">
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