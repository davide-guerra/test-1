<?php
/**
 * Loop Price
 *
 * This is an overridden template for the Test 1 theme.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<!-- Display the brand name -->
<?php if ( $brand_name = $product->get_attribute( 'brand' ) ) : ?>
<div class="brand-name"><?php echo $brand_name; ?></div>
<?php endif; ?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif; ?>