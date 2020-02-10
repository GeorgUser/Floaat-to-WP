<?php
/**
 * Template Name: Home Page Template
 *
 */

get_header(); ?>
<?php $template_url = get_bloginfo('template_url'); ?>
<div id="primary" class="content-area">
    <section id="main" class="site-main" role="main">

        <?php
        if (get_field('home_page')):
            // loop through the rows of data
            while (have_rows('home_page')) : the_row();
                switch (get_row_layout()) {
                    case 'hero_block':
                        get_template_part('template-parts/layouts/hero_block');
                        break;
                    case 'clients':
                        get_template_part('template-parts/layouts/clients');
                        break;
                    case 'we_do':
                        get_template_part('template-parts/layouts/we_do');
                        break;
                    case 'team':
                        get_template_part('template-parts/layouts/team');
                        break;

                }
            endwhile;
        endif;
        ?>
        <div class="two_side_container">
            <?php
            while ( have_posts() ) : the_post();

                the_content();

            endwhile; // End of the loop.
            ?>
            <br clear="all"/>
        </div>
    </section><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
