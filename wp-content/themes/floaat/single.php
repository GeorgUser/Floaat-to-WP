<?php
/**
 * Single page
 */
get_header();
global $post; // TODO question
?>

    <div id="primary" class="content-area">
        <section id="main" class="site-main simple_space" role="main">
            <div class="page__container">
                <div class="page__row">
                    <div class="page__padding">
                        <div class="single__content">

                            <?php if(the_post_thumbnail_url()): ?>
                                <img src="<?php the_post_thumbnail_url(); ?>"
                                 alt="gear">
                            <?php endif; ?>
                            <div class="description">
                                <H1><?php the_title() ?></H1>
                                <?php echo $post->post_content; ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
