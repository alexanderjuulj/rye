<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0
 */

get_header(); ?>
<div id="pageContent">  
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                    if (have_posts()) : while (have_posts()) : the_post();
                        the_content();

                        $wplinkdefaults = array(
                        'before'           => '<p class="pages">' . __( 'Pages:', 'rye' ),
                        'after'            => '</p>',
                        'link_before'      => '<span>',
                        'link_after'       => '</span>',
                        'next_or_number'   => 'number',
                        'separator'        => ' ',
                        'nextpagelink'     => __( 'Previous page', 'rye'),
                        'previouspagelink' => __( 'Next page', 'rye' ),
                        'pagelink'         => '%',
                        'echo'             => 1
                        );
                        wp_link_pages( $wplinkdefaults );
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>