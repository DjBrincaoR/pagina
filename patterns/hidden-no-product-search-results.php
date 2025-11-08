<?php
/**
 * Title: No Product Search Results
 * Slug: assembler/hidden-no-product-search-results
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:woocommerce/product-collection-no-results {"fontSize":"small"} -->
<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'No results found. You can try %1$sclearing any filters%2$s or head to our %3$sstore\'s home.%4$s', 'assembler' ), '<a class="wc-link-clear-any-filters" href="' . esc_url( '#' ) . '">', '</a>', '<a class="wc-link-stores-home" href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results -->
