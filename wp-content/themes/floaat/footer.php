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

<footer id="footer-container footer" class="site-footer footer" role="contentinfo">
    <?php
    if ($link = get_field('big_link', 'option')):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="footer__contact hover-js white">
            <div class="footer__contact__hover"></div>
            <a class="text_btn" href="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a><span></span>
        </div>
    <?php endif; ?>
    <div class="page__container">
        <div class="footer__bottom">
            <div class="footer__bottom__credits">
                <p><?php the_field('copywriter', 'option'); ?></p>
                <p>Phone: <?php the_field('phone', 'option'); ?></p>
            </div>
            <a href="https://nextpage.com.ua/"
               target="_blank">
                <div class="footer__bottom__next_page hover-js white">
                    <p><?php the_field('made_by', 'option'); ?></p>
                    <p><?php the_field('e-mail', 'option'); ?></p>
                </div>
            </a>
        </div>
    </div>
</footer><!-- #colophon -->
</div>
<?php wp_footer(); ?>
</body>
</html>
