<?php
/**
 * Page template file
 *
 * @package Floaat
 */

get_header(); ?>

<div id="primary" class="content-area">
    <section id="main" class="site-main" role="main">
        <div class="page__container">
            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </section><!-- #main -->
</div><!-- #primary -->

<?php
if (is_active_sidebar('sidebar-1')) {
    ?>
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
<?php }
get_footer();
?>
