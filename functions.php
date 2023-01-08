<?php
/*
 * This is the child theme for Design Mode theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */
*/
function myfirsttheme_setup() {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
}

<!--[if IE]>
<link rel='stylesheet' id='mailchimpSF_ie_css-css' href='https://adriennehaydenfinalproject.dk/wp21A/wp-content/plugins/mailchimp/css/ie.css?ver=6.1.1' media='all' />
<![endif]-->

