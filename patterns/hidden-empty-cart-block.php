<?php
/**
 * Title: Empty Card Block
 * Slug: assembler/hidden-empty-cart-block
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:woocommerce/empty-cart-block -->
<div class="wp-block-woocommerce-empty-cart-block">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
		<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e('Your shopping bag is empty', 'assembler');?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"fontSize":"small"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="/shop"><?php esc_html_e('Return to shop', 'assembler');?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
			echo sprintf( esc_html__( 'Have an account? %1$sLog in%2$s to check out faster.', 'assembler' ), '<a href="' . esc_url( '/my-account' ) . '">', '</a>' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:woocommerce/empty-cart-block -->
