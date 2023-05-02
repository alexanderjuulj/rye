<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-6 col-xl-4'); ?>>
    <div id="post-<?php the_ID(); ?>" <?php post_class( 'card mb-2' ); ?>>
        <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'card-img-top', ) ); ?>
        <div class="card-body">
            <?php the_title( '<h5 class="card-title">', '</h5>' ); ?>
            <p class="card-text"><?php echo strip_tags( get_the_excerpt() ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                <?php esc_html_e( 'See more', 'rye' ); ?>
            </a>
        </div>
    </div>
</div>   