<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0
 */

?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xxl-3 text-center text-lg-left mb-5 mb-lg-0">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-12 col-xxl-3 text-center text-lg-left mb-5 mb-lg-0">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="col-12 col-xxl-3 text-center text-lg-left mb-5 mb-lg-0">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <div class="col-12 col-xxl-3 text-center text-lg-left mb-5 mb-lg-0">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
            </div>    
        </div>
    </footer>
    <?php wp_footer();?>
    </body>
</html>

