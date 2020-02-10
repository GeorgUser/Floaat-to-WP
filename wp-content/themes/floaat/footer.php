<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Floaat
 */

?>
<?php $template_url = get_bloginfo('template_url');?>
<footer id="footer-container footer" class="site-footer footer" role="contentinfo">
        <div class="footer__contact hover-js white">
            <div class="footer__contact__hover"></div>
            <p class="text_btn">Contact us</p><span></span>
        </div>
        <div class="page__container">
            <div class="footer__bottom">
                <div class="footer__bottom__credits"><p>Floaat
                        &copy 2019</p></div>
                <a href="https://nextpage.com.ua/"
                   target="_blank">
                    <div class="footer__bottom__next_page hover-js white">
                        <p>Made by Nextpage</p>
                    </div>
                </a>
            </div>
        </div>
</footer><!-- #colophon -->
</div>
<?php wp_footer(); ?>
</body>
</html>
