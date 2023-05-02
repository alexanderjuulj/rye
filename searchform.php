<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */
?>
<form class="rye-searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input class="form-control" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter your search keywords', 'placeholder', 'rye' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'rye' ) ?>" />
        <button class="btn btn-outline-secondary" title="Search" type="submit"><?php _e( 'Search', 'rye' ); ?></button>
    </div>
</form>


