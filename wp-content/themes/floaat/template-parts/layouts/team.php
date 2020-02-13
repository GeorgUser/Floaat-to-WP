<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.02.2020
 * Time: 16:35
 */ ?>
<?php $template_url = get_bloginfo('template_url');?>
<section id="team" class="team panel">
    <div class="page__container">
        <?php get_template_part('template-parts/simple-header'); ?>
        <div class="team__title">
            <h2><?php the_sub_field('title') ?></h2>
        </div>

        <?php if( have_rows('slider') ): ?>

        <div class="team__slider" id="slider2">

                <?php
                while( have_rows('slider') ): the_row();

                    $photo = get_sub_field('photo');
                    $name = get_sub_field('name');
                    $position = get_sub_field('position');
                    ?>


                    <div class="team__slider__item">
                        <div class="overlay hover-js white">
                            <img src="<?php echo $photo['url'] ?>" alt="<?php echo $photo['alt'] ?>">
                            <div class="hover">
                                <p class="name"><?php echo $name ?></p>
                                <p class="profession"><?php echo $position ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <ul class="bg-parallax">
            <li class="bg-parallax__item item1"><img
                    src="<?php echo $template_url?>/dist/images/bg3-item1.png" alt=""></li>
            <li class="bg-parallax__item item2"><img
                    src="<?php echo $template_url?>/dist/images/bg2-item1.png" alt=""></li>
            <li class="bg-parallax__item item3"><img
                    src="<?php echo $template_url?>/dist/images/bg3-item2.png" alt=""></li>
        </ul>
    </div>
</section>
