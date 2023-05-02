<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
            <div class="col-12">
                <?php the_archive_title( '<h1>', '</h1>' ); ?> 
                <div class="row">
                    <?php 
                    // Check if there are any posts to display
                        if ( have_posts() ) : ?>
                        <?php
                        // The Loop
                        while ( have_posts() ) : the_post(); 
                            get_template_part('template-parts/post-loop-blog-card');     
                        endwhile; 
                        // pagination
                            previous_posts_link( '<button type="button" class="btn btn-outline-primary">' . __('Newer', 'rye') . '</button>' );
                            next_posts_link( '<button type="button" class="btn btn-outline-primary">' . __('Older', 'rye') . '</button>' );
                        else: ?>
                        <p>
                            <?php esc_html_e('Sorry, no posts matched your criteria', 'rye'); ?>!
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>