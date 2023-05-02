<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

get_header();
global $query_string;

$big = 999999;

$query_args = explode("&", $query_string);
$search_query = array( 's' => 'keyword' );

foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$the_query = new WP_Query($search_query);
if ( $the_query->have_posts() ) : 
?>
<!-- the loop -->
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>

<div id="pageContent">  
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php esc_html_e( 'Search Results', 'rye'); ?></h1>
                <p class="lead"><?php esc_html_e( 'We found a total of ', 'rye'); ?> <strong><?php echo $total_results; ?></strong> <?php esc_html_e( 'search results', 'rye'); ?>.</p>
            </div>
        </div>
        <div class="row d-flex align-items-stretch">
            <?php 
            while ( $the_query->have_posts() ) : $the_query->the_post();
             get_template_part('template-parts/post-loop-blog-card');     
            endwhile; ?>

            <?php 
                echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
            ?>
        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php else : ?>

    <div id="pageContent">  
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><?php esc_html_e( 'Search Results', 'rye'); ?></h1>
                    <p class="lead"><?php esc_html_e( 'Sorry, but nothing matched your search criteria', 'rye'); ?>.</p>
                    <p class="lead"><?php esc_html_e( 'Would you like to try again?', 'rye' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div> 
    </div> 

<?php endif; ?>

<?php get_footer(); ?>