<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

get_header();
?>
<div id="pageContent">  
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <img class="d-block mx-auto mt-5 mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/rye.svg" width="128" height="128" alt="Rye">
                <h1><?php esc_html_e( 'There is nothing here', 'rye'); ?></h1>
                <p class="lead"><?php esc_html_e( 'Sorry, but we did not find what you were looking for', 'rye'); ?>.</p>
                <p class="lead"><?php esc_html_e( 'Would you like to try and search for it', 'rye' ); ?>?</p>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 
<?php get_footer(); ?>