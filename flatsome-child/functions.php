<?php
// Add custom Theme Functions here
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style( 'mystyle', get_theme_file_uri('/assets/css/mystyle.css'),array(), 'v1.0');
        //script
        wp_enqueue_script('my_script', get_theme_file_uri('/assets/js/myscripts.js'), array('jquery'), 'v1.0',true);
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );



function my_custom_translations( $strings ) {
    $text = array(
        'Quick View' => 'Xem nhanh'
    );
    $strings = str_ireplace( array_keys( $text ), $text, $strings );
    return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );


// create widget
function wpb_widgets_init() {

    register_sidebar( array(
        'name'          => 'List product category',
        'id'            => 'list_product_category',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="chw-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Primary Menu',
        'id'            => 'list_primary_menu',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="chw-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );
