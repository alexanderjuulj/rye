<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until the main content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
                    <?php echo bloginfo('name'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ryeNavbar" aria-controls="ryeNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="ryeNavbar">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav justify-content-end">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    <?php else : ?>
                        <?php if( current_user_can('editor') || current_user_can('administrator') ) : ?>
                            <ul class="navbar-nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="<?php echo home_url( '/wp-admin/nav-menus.php' ); ?>">
                                        <?php esc_html_e('Select a menu', 'rye'); ?>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>