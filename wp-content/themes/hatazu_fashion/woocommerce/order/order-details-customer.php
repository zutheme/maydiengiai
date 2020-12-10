<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<div class="row mt-3 no-gutters mx-n2">
	<div class="col-sm-6 col-12 px-2">
		<div class="card address-card">
			<div class="address-card__body">
	<?php if ( $show_shipping ) : ?>
	<?php endif; ?>
	<div class="address-card__badge address-card__badge--muted"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></div>
	<div class="address-card__name"><?php echo $order->get_formatted_billing_full_name(); ?></div>
	<div class="address-card__row"><?php echo  $order->get_formatted_billing_address(); ?>
	</div>
	<div class="address-card__row">
		<div class="address-card__row-title">Phone Number</div>
		<div class="address-card__row-content"><?php if ( $order->get_billing_phone() ) : ?>
			<?php echo esc_html( $order->get_billing_phone() ); ?>
		<?php endif; ?></div>
	</div>
	<div class="address-card__row">
		<div class="address-card__row-title">Email Address</div>
		<div class="address-card__row-content"><?php if ( $order->get_billing_email() ) : ?>
			<?php echo esc_html( $order->get_billing_email() ); ?>
		<?php endif; ?></div>
	</div>
</div>
		</div>
	</div><!-- /.col-1 -->
	<?php if ( $show_shipping ) : ?>
	<div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
		<div class="card address-card">
			<div class="address-card__body">
			<h2 class="woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
			<address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
			</address>
			</div><!-- /.col-2 -->
		</div>
	</div>
	

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</div>
