<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
get_header();
$template_url = get_bloginfo('template_url'); ?>


    <main id="site-content" role="main" class="content-404 content-area">

        <div class="page__container">

            <div class="page__padding">
                <h1 class="entry-title"><?php _e( 'Page Not Found', 'floaat' ); ?></h1>

                <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'floaat' ); ?></p></div>

                <?php
                get_search_form(
                    array(
                        'label' => __( '404 not found', 'floaat' ),
                    )
                );
                ?>
                <ul class="bg-parallax">
                    <li class="bg-parallax__item item1"><img
                                src="<?php echo $template_url ?>/dist/images/bg3-item2.png" alt=""></li>
                    <li class="bg-parallax__item item2"><img
                                src="<?php echo $template_url ?>/dist/images/bg3-item1.png" alt=""></li>
                    <li class="bg-parallax__item item3"><img
                                src="<?php echo $template_url ?>/dist/images/bg-item3.png" alt=""></li>
                    <li class="bg-parallax__item item4"><img
                                src="<?php echo $template_url ?>/dist/images/bg2-item2.png" alt=""></li>
                    <li class="bg-parallax__item item6"><img
                                src="<?php echo $template_url ?>/dist/images/bg-item6.png" alt=""></li>
                    <li class="bg-parallax__item item8"><img
                                src="<?php echo $template_url ?>/dist/images/bg2-item1.png" alt=""></li>
                </ul>
            </div>

        </div><!-- .section-inner -->

    </main><!-- #site-content -->

<?php
get_footer();
