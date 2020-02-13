<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.02.2020
 * Time: 16:26
 */ $template_url = get_bloginfo('template_url'); ?>
<section id="clients" class="clients panel">
    <div class="page__container">
        <?php get_template_part('template-parts/simple-header'); ?>
        <div class="page__row">
            <div class="clients__text__col">
                <div class="clients__text">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <p class="desc"><?php the_sub_field('description'); ?></p>
                    <?php
                    if( !empty( get_sub_field('link_toggle') ) ):

                    if( $link = get_sub_field('link')):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="view hover-js white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="clients__gallery__col">
                <div class="clients__gallery">

                    <?php if (have_rows('repeater_gallery')): ?>


                        <?php while (have_rows('repeater_gallery')): the_row();

                            // vars
                            $name = get_sub_field('name');
                            $image = get_sub_field('image');
                            $link = get_sub_field('link');
                            $background_image = get_sub_field('background_image');
                            $additional_text = get_sub_field('additional_text');
                            $description = get_sub_field('description');

                            ?>
                            <div class="clients__gallery__table">
                                <div class="img-display hover-js white">
                                    <img src="<?php echo $image['url'] ?>"
                                         alt="<?php echo $image['alt'] ?>">
                                    <div class="hover">
                                        <img src="<?php echo $background_image['url'] ?>"
                                             alt="<?php echo $background_image['alt'] ?>">
                                        <div class="text">
                                            <h5><?php echo $description ?></h5>
                                            <p><?php echo $additional_text ?></p>
                                            <?php
                                            if ($link):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="button" href="<?php echo esc_url($link_url); ?>"
                                                   target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                                    <span></span></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $name ?></p>
                            </div>
                        <?php endwhile; ?>


                    <?php endif; ?>
                    <ul class="bg-parallax">
                        <li class="bg-parallax__item item1">
                            <img src="<?php echo $template_url ?>/dist/images/bg2-item3.png"
                                 alt=""></li>
                        <li class="bg-parallax__item item2">
                            <img src="<?php echo $template_url ?>/dist/images/bg2-item1.png"
                                 alt=""></li>
                        <li class="bg-parallax__item item3">
                            <img src="<?php echo $template_url ?>/dist/images/bg2-item2.png"
                                 alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
