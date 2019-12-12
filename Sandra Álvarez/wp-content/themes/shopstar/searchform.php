<?php
/**
 * The template for displaying search forms
 * Search for- donde esta Buscar
 * Search - donde esta role="Buscar"
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="Buscar" class="search-field" placeholder="<?php echo esc_attr( pll__( get_theme_mod( 'shopstar-search-placeholder-text', customizer_library_get_default( 'shopstar-search-placeholder-text' ) ) ) ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Buscar:', 'label', 'shopstar' ); ?>" />
	</label>		
	<button type="submit" class="search-submit">
		<i class="otb-fa otb-fa-search"></i>
	</button>
</form>

<div class="clearboth"></div>