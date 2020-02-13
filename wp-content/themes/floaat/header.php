<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Floaat
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $template_url = get_bloginfo('template_url'); ?>
<div data-atr="open" class="cursor cursor--small"></div>

<header class="banner">
    <div class="container">
        <?php
        if (!is_front_page()) {
            get_template_part('template-parts/simple-header');
        }
        ?>
    </div><!-- .container -->
</header><!-- .banner -->

<div id="page-preloader" class="loader">
    <div class="preloader">
        <div id="image_display" class="image"><img
                    src='<?php echo $template_url ?>/dist/images/star.png' alt='star'></div>
        <span id="percent_display">00</span>
        <p>loading...</p>
    </div>
</div>

<div class="overlay-menu" id="menu_body">
    <div class="close-menu hover-js white" id="close_menu"></div>
    <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class'=>'menu', 'menu_id'=>'menu', 'container'=>false, 'depth'=> 1, 'item_spacing'=>'discard', 'link_after'=>'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px" viewBox="0 0 152.9 43.4" style="enable-background:new 0 0 152.9 43.4;" xml:space="preserve">
      <path d="M151.9,13.6c0,0,3.3-9.5-85-8.3c-97,1.3-58.3,29-58.3,29s9.7,8.1,69.7,8.1c68.3,0,69.3-23.1,69.3-23.1 s1.7-10.5-14.7-18.4"/>
    </svg>') ); ?>
    <ul class="bg-parallax">
        <li class="bg-parallax__item item1"><img
                    src="<?php echo $template_url ?>/dist/images/bg3-item2.png" alt=""></li>
        <li class="bg-parallax__item item2"><img
                    src="<?php echo $template_url ?>/dist/images/bg3-item1.png" alt=""></li>
        <li class="bg-parallax__item item3"><img
                    src="<?php echo $template_url ?>/dist/images/bg-item3.png" alt=""></li>
        <li class="bg-parallax__item item4"><img
                    src="<?php echo $template_url ?>/dist/images/bg2-item2.png" alt=""></li>
        <li class="bg-parallax__item item5"><img
                    src="<?php echo $template_url ?>/dist/images/bg-item5.png" alt=""></li>
        <li class="bg-parallax__item item6"><img
                    src="<?php echo $template_url ?>/dist/images/bg-item6.png" alt=""></li>
        <li class="bg-parallax__item item7"><img
                    src="<?php echo $template_url ?>/dist/images/bg3-item2.png" alt=""></li>
        <li class="bg-parallax__item item8"><img
                    src="<?php echo $template_url ?>/dist/images/bg2-item1.png" alt=""></li>
    </ul>
</div>

<div id="content" class="<?php echo (is_front_page())? 'site-content' : 'site-content-custom' ?>">
