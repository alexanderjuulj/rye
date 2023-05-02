<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

get_header(); ?>
<div id="pageContent">  
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                if (have_posts()) : while (have_posts()) : the_post();
                    the_title( '<h1>', '</h1>' );
                    echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-fluid', ) );
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
        <div class="row">
            <div class="col-12">
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>