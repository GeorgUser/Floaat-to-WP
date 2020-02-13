<?php
/**
 * The template for displaying single-media posts.
 *
 */

get_header();
while (have_posts()) : the_post(); ?>
    <div id="primary" class="content-area">
        <section id="main" class="site-main simple_space" role="main">
            <div class="page__container">
                <div class="page__padding">
                    <div class="page__row">
                        <div class="page__content <?php echo (is_active_sidebar('sidebar-1')) ? 'has_sidebar' : '' ?>">
                            <?php if (is_active_sidebar('sidebar-1')) { ?>
                                <div class="sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile;
get_footer();