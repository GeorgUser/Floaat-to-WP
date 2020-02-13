<?php
/**
 * Theme functions and definitions.
 *
 * @package Floaat
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Load modules
require_once locate_template( '/enqueue-scripts.php' );


// Disable the theme / plugin text editor in Admin
define( 'DISALLOW_FILE_EDIT', false );


// ACF Options Pages
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => true
    ));
}
// register post-thumbnails
function floaat_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'floaat_post_thumbnails' );

/* Widget initialisation */

function floaat_widgets() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'floaat' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets.', 'floaat' ),
        )
    );
}
add_action( 'widgets_init', 'floaat_widgets' );

/* Menu initialisation */

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary'     => __( 'Primary Menu', 'floaat' ),
        )
    );
}
add_action( 'after_setup_theme', 'register_theme_menus' );

// Custom Log In

function my_login_logo() { ?>
    <style type="text/css">
        #login form input {
            border: 2px solid #561838!important;
        }
        #login form button span::before {
            color: #561838!important;
        }
        #login form .button-large {
            background-color: #561838!important;
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/gear_big.png);
            height:120px;
            width:120px;
            background-size: 120px 120px;
            background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );