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
            <h2>our team</h2>
        </div>
        <div class="team__slider" id="slider2">
            <div class="team__slider__item">
                <div class="overlay hover-js white">
                    <img src="<?php echo $template_url?>/dist/images/photo1.jpg"
                         alt="photo">
                    <div class="hover">
                        <p class="name">Thomas French</p>
                        <p class="profession">Video
                            Maker</p>
                    </div>
                </div>
            </div>
            <div class="team__slider__item">
                <div class="overlay hover-js white">
                    <img src="<?php echo $template_url?>/dist/images/photo2.jpg"
                         alt="photo">
                    <div class="hover">
                        <p class="name">Thomas French</p>
                        <p class="profession">Video
                            Maker</p>
                    </div>
                </div>
            </div>
            <div class="team__slider__item">
                <div class="overlay hover-js white">
                    <img src="<?php echo $template_url?>/dist/images/photo3.jpg"
                         alt="photo">
                    <div class="hover">
                        <p class="name">Thomas French</p>
                        <p class="profession">Video
                            Maker</p>
                    </div>
                </div>
            </div>
            <div class="team__slider__item">
                <div class="overlay hover-js white">
                    <img src="<?php echo $template_url?>/dist/images/photo4.jpg"
                         alt="photo">
                    <div class="hover">
                        <p class="name">Thomas French</p>
                        <p class="profession">Video
                            Maker</p>
                    </div>
                </div>
            </div>
            <div class="team__slider__item">
                <div class="overlay hover-js white">
                    <img src="<?php echo $template_url?>/dist/images/photo2.jpg"
                         alt="photo">
                    <div class="hover">
                        <p class="name">Thomas French</p>
                        <p class="profession">Video
                            Maker</p>
                    </div>
                </div>
            </div>
        </div>
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
