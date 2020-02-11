<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

    <main id="site-content" role="main" class="bg_by_sub_page">

        <div class="page__container__all">

            <h1 class="entry-title"><?php _e( 'Page Not Found', 'floaat' ); ?></h1>

            <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

            <?php
            get_search_form(
                array(
                    'label' => __( '404 not found', 'floaat' ),
                )
            );
            ?>

        </div><!-- .section-inner -->

    </main><!-- #site-content -->

<?php
get_footer();
