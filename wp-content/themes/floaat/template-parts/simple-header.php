<div id="header" class="header <?php if(!is_front_page()){echo 'header__menu--bg';} ?> ">
    <div class="header__logo">
        <a class="brand white hover-js" href="<?php esc_url( home_url( '/' ) ); ?>"><h1 class="h1"><?php bloginfo( 'name' ); ?></h1></a>
    </div>
    <nav class="header__menu <?php if(get_row_layout() !== 'hero_block' || 'we_do'){echo 'header__menu--black';}?>">
        <a class="red hover-js" href="#team"
           data-atr="contact"><?php _e('contact us', 'floaat') ?></a>
        <div class="header__menu__icon red hover-js open-menu"
             data-atr="open">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
</div>