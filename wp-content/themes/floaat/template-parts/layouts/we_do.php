<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.02.2020
 * Time: 16:31
 */ ?>
<?php $template_url = get_bloginfo('template_url'); ?>
<section class="we_do panel" id="we_do">
    <div class="page__container">
        <?php get_template_part('template-parts/simple-header'); ?>
        <div class="we_do__title"><p><?php echo get_sub_field('title') ?></p></div>
        <div class="we_do__slider-section">

            <?php $query = get_posts(array(
                'post_type' => 'we_do',
                'numberposts' => 6
            ));

            if (!empty($query)) : ?>
                <div class="we_do__slider-section__tabs">
                    <ul class="line">
                        <?php
                        foreach ($query as $i => $post) :
                            ?>
                            <li class="tab hover-js white <?php if (++$i === 1) {
                                echo "active-tab";
                            } ?>"
                                data-num="<?php echo --$i; ?>">
                                <img class="default"
                                     src="<?php echo get_field('icon_tab')['url']; ?>"
                                     alt="<?php echo get_field('icon_tab')['alt']; ?>">
                                <img class="hover"
                                     src="<?php echo get_field('icon_tab_hover')['url']; ?>"
                                     alt="<?php echo get_field('icon_tab_hover')['alt']; ?>">
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>


                <div class="we_do__slider-section__body">
                    <div id="slider1">
                        <?php
                        foreach ($query as $i => $post) :
                            ?>
                            <div class="display-slide">
                                <img src="<?php the_post_thumbnail_url(); ?>"
                                     alt="gear">
                                <ul class="bg-parallax <?php if (++$i === 1) {
                                    echo "bg-0";
                                } ?>">
                                    <li class="bg-parallax__item item1">
                                        <img src="<?php echo $template_url ?>/dist/images/bg-item1.png"
                                             alt=""></li>
                                    <li class="bg-parallax__item item2">
                                        <img src="<?php echo $template_url ?>/dist/images/bg-item2.png"
                                             alt=""></li>
                                    <li class="bg-parallax__item item3">
                                        <img src="<?php echo $template_url ?>/dist/images/bg-item2.png"
                                             alt=""></li>
                                </ul>
                                <div class="text">
                                    <h4 class="title"><?php the_title() ?></h4>
                                    <a href="" class="sub-title hover-js white">learn
                                        more</a>
                                </div>
                            </div>

                        <?php endforeach;
                        wp_reset_postdata() ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
