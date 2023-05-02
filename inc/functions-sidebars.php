<?php 
/**
 * Register widget area.
 *
 * @since Rye 1.0.,
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
add_action( 'widgets_init', 'rye_widgets_init' );
function rye_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer column 1', 'rye' ),
        'id' => 'footer-1',
        'description' => __( 'Widgets in this area will be shown in the footers first column', 'rye' ),
        'before_widget' => '<div class="footer-widget footer-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer column 2', 'rye' ),
        'id' => 'footer-2',
        'description' => __( 'Widgets in this area will be shown in the footers second column', 'rye' ),
        'before_widget' => '<div class="footer-widget footer-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer column 3', 'rye' ),
        'id' => 'footer-3',
        'description' => __( 'Widgets in this area will be shown in the footers third column', 'rye' ),
        'before_widget' => '<div class="footer-widget footer-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer column 4', 'rye' ),
        'id' => 'footer-4',
        'description' => __( 'Widgets in this area will be shown in the footers fourth column', 'rye' ),
        'before_widget' => '<div class="footer-widget footer-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
}