<?php
/**
 * WooCommerce - Checkout mobile order review.
 *
 * @package Astra Addon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="ast-mobile-order-review-wrap">
	<div id="ast-order-review-toggle">
		<div class="ast-order-review-toggle-button-wrap">
			<span class="ast-order-review-toggle-text"><?php echo esc_attr( order_review_toggle_texts() ); ?></span>
            <?php echo Astra_Builder_UI_Controller::fetch_svg_icon( 'angle-down', false );  // phpcs:ignore  ?>
		</div>
		<div class="ast-order-review-total">
			<?php echo esc_attr( wp_strip_all_tags( WC()->cart->get_total() ) ); ?>
		</div>
	</div>
	<div id="ast-order-review-content">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>
</div>
