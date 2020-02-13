<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package Floaat
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <div id="main" class="page__container" role="main">

            <div class="page__padding">
                <div class="page__row">
                    <div class="page__content <?php echo (is_active_sidebar('sidebar-1')) ? 'has_sidebar' : '' ?>">
                        <?php
                        if (have_posts()) :
                            ?>

                            <header class="page-header">
                                <?php /* translators: %s: search term */ ?>
                                <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'floaat'), '<span>' . get_search_query() . '</span>'); ?></h1>
                            </header><!-- .page-header -->

                            <?php
                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                get_template_part('template-parts/content');

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                    </div>
                    <?php
                    if (is_active_sidebar('sidebar-1')) {
                        ?>
                        <div class="sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
