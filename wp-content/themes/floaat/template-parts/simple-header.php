<div id="header" class="header">
    <div class="header__logo">
        <a class="brand white hover-js" href="<?php esc_url( home_url( '/' ) ); ?>"><h1 class="h1"><?php bloginfo( 'name' ); ?></h1></a>
    </div>
    <nav class="header__menu <?php if(get_row_layout() === 'clients' || 'team'){echo 'header__menu--black';} ?>">
        <a class="red hover-js" href="#team"
           data-atr="contact">contact us</a>
        <div class="header__menu__icon red hover-js open-menu"
             data-atr="open">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
</div>