<?php $template_url = get_bloginfo('template_url'); ?>

<section id="hero_block"
         class="hero_block shadow hover-js panel">
    <div class="page__container">
        <?php get_template_part('template-parts/simple-header'); ?>
        <div class="hero_block__title" id="inner">
            <p><?php echo get_sub_field('sub_title'); ?></p>
            <p class="h1 title"><?php echo get_sub_field('title'); ?></p>

            <?php
            $image = get_sub_field('image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

        </div>
        <ul class="bg-parallax">
            <li class="bg-parallax__item item1"><img
                        src="<?php echo $template_url?>/dist/images/bg-item1.png" alt=""></li>
            <li class="bg-parallax__item item2"><img
                        src="<?php echo $template_url?>/dist/images/bg-item2.png" alt=""></li>
            <li class="bg-parallax__item item3"><img
                        src="<?php echo $template_url?>/dist/images/bg-item3.png" alt=""></li>
            <li class="bg-parallax__item item4"><img
                        src="<?php echo $template_url?>/dist/images/bg-item4.png" alt=""></li>
            <li class="bg-parallax__item item5"><img
                        src="<?php echo $template_url?>/dist/images/bg-item5.png" alt=""></li>
            <li class="bg-parallax__item item6"><img
                        src="<?php echo $template_url?>/dist/images/bg-item6.png" alt=""></li>
            <li class="bg-parallax__item item7"><img
                        src="<?php echo $template_url?>/dist/images/headphone.png" alt=""></li>
            <li class="bg-parallax__item item8"><img
                        src="<?php echo $template_url?>/dist/images/camera.png" alt=""></li>
            <li class="bg-parallax__item item9"><img
                        src="<?php echo $template_url?>/dist/images/basica.png" alt=""></li>
        </ul>
        <?php
        if( !empty( get_sub_field('counter') ) ): ?>
        <div class="hero_block__counter_body">
            <p class="text">our content has reached</p>
            <p class="counter" id="counter"></p>
            <p class="viewers">viewers</p>
        </div>
        <?php endif; ?>
    </div>
</section>