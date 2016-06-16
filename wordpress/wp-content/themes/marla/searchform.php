<?php
/**
 * The template for displaying search forms in marla
 *
 * @package marla
 */
?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'marla' ); ?></label>
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'marla' ); ?>" />
		<input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'marla' ); ?>" />
	</form>
