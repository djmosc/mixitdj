<?php
/**
 * The template for displaying search forms in mixitdj
 *
 * @package mixitdj
 * @since mixitdj 1.0
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="text" class="field" name="s" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" /><button type="submit" class="submit" ><i class="icon-search" ></i></button>
</form>