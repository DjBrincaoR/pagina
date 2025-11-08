<?php
/**
 * Title: Related Products
 * Slug: assembler/hidden-related-products
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"metadata":{"name":"Related products collection"},"align":"full","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"fontSize":"medium"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-medium-font-size" style="padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Related products', 'assembler');?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill","fixedWidth":"20px"},"collection":"woocommerce/product-collection/related","queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the product being viewed."},"align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"style":{"dimensions":{"aspectRatio":"3/4"}}} -->
				<!-- wp:woocommerce/product-sale-badge {"align":"left","style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"}}}} /-->
			<!-- /wp:woocommerce/product-image -->

			<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"1.25rem"}},"typography":{"lineHeight":"1.2"}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"medium","style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"0.625rem","bottom":"var:preset|spacing|30"}}}} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
