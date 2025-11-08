<?php
/**
 * Title: Product Details
 * Slug: assembler/hidden-product-details
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:woocommerce/product-details -->
<div class="wp-block-woocommerce-product-details alignwide">
	<!-- wp:woocommerce/accordion-group {"style":{"spacing":{"blockGap":"0"}}} -->
	<div class="wp-block-woocommerce-accordion-group">
		<!-- wp:woocommerce/accordion-item {"style":{"border":{"bottom":{"width":"1px"}}}} -->
		<div class="wp-block-woocommerce-accordion-item" style="border-bottom-width:1px">
			<!-- wp:woocommerce/accordion-header {"icon":"chevron","style":{"spacing":{"padding":{"top":"12px","bottom":"12px"}}},"fontSize":"small"} -->
			<h3 class="wp-block-woocommerce-accordion-header has-small-font-size accordion-item__heading">
				<button class="accordion-item__toggle" style="padding-top:12px;padding-bottom:12px"><span><?php esc_html_e('Description', 'assembler');?></span><span class="accordion-item__toggle-icon has-icon-chevron" style="width:1.2em;height:1.2em"><svg width="1.2em" height="1.2em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.0041 10.5547L11.9996 16.0134L5.99512 10.5547L7.00413 9.44482L11.9996 13.9862L16.9951 9.44483L18.0041 10.5547Z" fill="currentColor"></path></svg></span></button>
			</h3>
			<!-- /wp:woocommerce/accordion-header -->

			<!-- wp:woocommerce/accordion-panel {"style":{"spacing":{"padding":{"top":"10px","bottom":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-woocommerce-accordion-panel">
				<div class="accordion-content__wrapper" style="padding-top:10px;padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:woocommerce/product-description /-->
				</div>
			</div>
			<!-- /wp:woocommerce/accordion-panel -->
		</div>
		<!-- /wp:woocommerce/accordion-item -->

		<!-- wp:woocommerce/accordion-item {"style":{"border":{"bottom":{"width":"1px"}}}} -->
		<div class="wp-block-woocommerce-accordion-item" style="border-bottom-width:1px">
			<!-- wp:woocommerce/accordion-header {"icon":"chevron","style":{"spacing":{"padding":{"top":"12px","bottom":"12px"}}},"fontSize":"small"} -->
			<h3 class="wp-block-woocommerce-accordion-header has-small-font-size accordion-item__heading">
				<button class="accordion-item__toggle" style="padding-top:12px;padding-bottom:12px"><span><?php esc_html_e('Additional Information', 'assembler');?></span><span class="accordion-item__toggle-icon has-icon-chevron" style="width:1.2em;height:1.2em"><svg width="1.2em" height="1.2em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.0041 10.5547L11.9996 16.0134L5.99512 10.5547L7.00413 9.44482L11.9996 13.9862L16.9951 9.44483L18.0041 10.5547Z" fill="currentColor"></path></svg></span></button>
			</h3>
			<!-- /wp:woocommerce/accordion-header -->

			<!-- wp:woocommerce/accordion-panel {"style":{"spacing":{"padding":{"top":"10px","bottom":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-woocommerce-accordion-panel">
				<div class="accordion-content__wrapper" style="padding-top:10px;padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:woocommerce/product-specifications /-->
				</div>
			</div>
			<!-- /wp:woocommerce/accordion-panel -->
		</div>
		<!-- /wp:woocommerce/accordion-item -->
	</div>
	<!-- /wp:woocommerce/accordion-group -->
</div>
<!-- /wp:woocommerce/product-details -->
