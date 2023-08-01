<?php
/**
 * Woocommerce Hooks Customization
 *
 * @package Asgard
 */

namespace ASGARD_THEME\Inc;

use ASGARD_THEME\Inc\Traits\Singleton;

class Asgard_Woocommerce {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// actions and filters
		add_action( 'woocommerce_add_to_cart_fragments', [ $this, 'asgard_woocommerce_header_add_to_cart_fragment' ] );
		add_action( 'pre_get_posts', [ $this, 'exclude_specific_query_from_homepage' ] );
		add_filter( 'woocommerce_product_add_to_cart_text', [ $this, 'asgard_woocommerce_product_add_to_cart_text' ] );
		add_filter( 'woocommerce_blocks_product_grid_item_html', [
			$this,
			'asgard_custom_render_product_block'
		], 10, 3 );
		add_filter( 'woocommerce_product_get_image', [
			$this,
			'asgard_add_class_product_thumbnail'
		], 10, 6 );
		add_filter( 'woocommerce_variable_price_html', [ $this, 'asgard_custom_variation_price' ], 10, 2 );
	}

	public function asgard_woocommerce_header_add_to_cart_fragment() {
		global $woocommerce;
		ob_start();
		?>
        <div class="mini-cart m-0 text-start">
            <div data-hover="dropdown" class="basket fs-14 p-0 d-flex align-items-center justify-content-end">
                <a href="https://api.whatsapp.com/send?phone=18779251112&text=Hi,%20Arrowmeds,%20Team" target="_blank"
                   class="whatsapp-icon d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none me-3">
                    <svg height="25" width="25" fill="#42D741">
                        <use href="#icon-whatsapp"></use>
                    </svg>
                </a>
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
                   class="m-0 d-flex text-decoration-none align-items-center">
                    <button type="button"
                            class="btn btn-primary bg-primary position-relative p-0 rounded-circle cart-icon-button">
                        <svg class="" width="28px" height="28px">
                            <use href="#icon-bag"></use>
                        </svg>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light rounded-circle d-none d-sm-block d-md-none d-lg-none">
                            <?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?> <span
                                    class="visually-hidden">New alerts</span>
                        </span>
                    </button>
                    <div class="cart-text ms-2">
                        <span class="price hidden-xs text-uppercase d-block fs-14 text-black lh-1 d-none d-sm-none d-md-none d-lg-block"><?php esc_attr_e( 'Shopping Cart', 'asgard' ); ?></span>
                        <span class="cart_count hidden-xs fs-12 text-black text-body-tertiary d-none d-sm-none d-md-block d-lg-block"><?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?> <?php esc_attr_e( 'Items', 'asgard' ); ?>/ <?php echo wp_specialchars_decode( WC()->cart->get_cart_subtotal() ); ?></span>
                    </div>
                </a>
            </div>

            <div>
                <div class="top-cart-content position-absolute shadow bg-white rounded end-0 top-100 border border-success border-opacity-10">
					<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : $i = 0; ?>
                        <ul class="mini-products-list px-3 list-unstyled pt-3 mb-0 position-relative ms-0"
                            id="cart-sidebar">
							<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : ?>
								<?php
								$_product              = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
								$product_id            = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

								if ( $_product && $_product->exists() && $cart_item['quantity'] > 0
								     && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key )
								) :

									$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
									$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
									$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
									$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
									$cnt               = sizeof( WC()->cart->get_cart() );
									$rowstatus         = $cnt % 2 ? 'odd' : 'even';
									?>
                                    <li class="item<?php if ( $cnt - 1 == $i ) { ?>last<?php } ?> d-inline-block mb-3 border-bottom border-light-subtle pb-3 w-100">
                                        <div class="item-inner d-flex">
                                            <a class="product-image flex-shrink-0"
                                               href="<?php echo esc_url( $product_permalink ); ?>"
                                               title="<?php echo esc_html( $product_name ); ?>"> <?php echo str_replace( array(
													'http:',
													'https:'
												), '', wp_specialchars_decode( $thumbnail ) ); ?> </a>


                                            <div class="product-details flex-grow-1 ms-3 position-relative">
                                                <div class="access d-flex justify-content-end position-absolute top-0 end-0 ">
                                                    <a class="btn-edit"
                                                       title="<?php esc_attr_e( 'Edit item', 'asgard' ); ?>"
                                                       href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                                                        <svg class="icon-pencil" width="12" height="12">
                                                            <use href="#icon-pencil"></use>
                                                        </svg>
                                                        <span
                                                                class="hidden d-none"><?php esc_attr_e( 'Edit item', 'asgard' ); ?></span></a>
                                                    <a href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>"
                                                       title="<?php esc_attr_e( 'Remove This Item', 'asgard' ); ?>"
                                                       onClick=""
                                                       class="btn-remove1 ms-3">
                                                        <svg class="icon-close" width="12" height="12">
                                                            <use href="#icon-close"></use>
                                                        </svg>
                                                    </a>

                                                </div>
                                                <strong><?php echo esc_html( $cart_item['quantity'] ); ?>
                                                </strong> x <span
                                                        class="price"><?php echo wp_specialchars_decode( $product_price ); ?></span>
                                                <p class="product-name mb-0"><a
                                                            class="text-decoration-none fs-12 link-primary "
                                                            href="<?php echo esc_url( $product_permalink ); ?>"
                                                            title="<?php echo esc_html( $product_name ); ?>"><?php echo esc_html( $product_name ); ?></a>
                                                </p>
                                            </div>
											<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>

                                        </div>

                                    </li>
								<?php endif; ?>
								<?php $i ++; endforeach; ?>
                        </ul>
                        <!--actions-->

                        <div class="actions d-flex justify-content-center mb-3">
                            <button class="btn-checkout btn btn-dark order-2 mx-1 text-uppercase fs-12"
                                    title="<?php esc_attr_e( 'Checkout', 'asgard' ); ?>"
                                    type="button"
                                    onClick="window.location.assign('<?php echo esc_js( wc_get_checkout_url() ); ?>')">
                                <svg width="14" height="14" fill="#fff" class="me-1">
                                    <use href="#icon-check"></use>
                                </svg>
                                <span><?php esc_attr_e( 'Checkout', 'asgard' ); ?></span></button>


                            <a class="view-cart btn btn-success order-1 mx-1 text-decoration-none text-uppercase fs-12"
                               type="button"
                               onClick="window.location.assign('<?php echo esc_js( wc_get_cart_url() ); ?>')">
                                <svg width="14" height="14" fill="#fff" class="me-1">
                                    <use href="#icon-cart"></use>
                                </svg>
                                <span><?php esc_attr_e( 'View Cart', 'asgard' ); ?></span> </a>
                        </div>

					<?php else: ?>
                        <p class="a-center noitem p-2 text-center">
                            <svg class="d-block mx-auto m-3" width="28" height="28" fill="#ccc">
                                <use href="#icon-cart"></use>
                            </svg>
							<?php esc_attr_e( 'Sorry, nothing in cart.', 'asgard' ); ?>
                        </p>
					<?php endif; ?>
                </div>
            </div>
        </div>
		<?php
		$fragments['.mini-cart'] = ob_get_clean();

		return $fragments;
	}

	public function exclude_specific_query_from_homepage( $query ) {
		global $wpdb;
		if ( is_home() && $query->is_main_query() ) {
			$excluded_option_name  = '_transient_timeout_wc_shipping_method_count_legacy';
			$excluded_option_query = "SELECT option_value FROM {$wpdb->prefix}options WHERE option_name = '{$excluded_option_name}' LIMIT 1";

			$query_vars       = $query->query_vars;
			$excluded_queries = isset( $query_vars['excluded_queries'] ) ? $query_vars['excluded_queries'] : array();

			// Add the excluded query to the list
			$excluded_queries[] = $excluded_option_query;

			// Store the list of excluded queries in the query vars
			$query->set( 'excluded_queries', $excluded_queries );
		}
	}

	public function asgard_woocommerce_product_add_to_cart_text() {
		return __( 'View Detail', 'woocommerce' );
	}

	public function asgard_custom_render_product_block( $html, $data, $post ) {

		return '<li class="wc-block-grid__product">
                <div class="border border-primary-subtle rounded-4">
				<a href="' . $data->permalink . '" class="wc-block-grid__product-link">
					' . $data->image . '
					<span class="fs-14 text-decoration-none text-black">' . $data->title . '</span>
				</a>
				' . $data->price . '
				<a href="' . $data->permalink . '" class="btn btn-primary rounded-pill mb-3" aria-label="view detail button">View detail</a>
				</div>
			</li>';
	}

	public function asgard_add_class_product_thumbnail( $image, $product, $size, $attr, $placeholder, $image_id ) {
		// Add your custom class here
		$custom_class = 'rounded-top-4';

		// Append the custom class to the existing classes
		if ( strpos( $image, 'class="' ) !== false ) {
			$image = str_replace( 'class="', 'class="' . $custom_class . ' ', $image );
		} else {
			$image = str_replace( '<img', '<img class="' . $custom_class . '"', $image );
		}

		return $image;
	}

	public function asgard_custom_variation_price( $price, $product ) {
		/**
		 * Only display price per piece for WooCommerce variable products
		 */
		$product_variations = $product->get_available_variations();
		$min_price = [];

		foreach ($product_variations as $key => $product_variation) {
			$attribute = array_values($product_variation['attributes']);
			$tablets = explode(' ', $attribute[0]);
			$min_price_value = floatval($tablets[0]); // Convert the string to a float
			if ($min_price_value > 0) {
				$min_price[] = $min_price_value;
			}
		}

		if (empty($min_price)) {
			// Handle the case when all values in $min_price are zero or empty
			// For example, set a default price or display an error message.
			return 'No valid variation prices found.';
		}

		$prices = array($product->get_variation_price('max', true), $product->get_variation_price('min', true));
		$price = max($prices);
		$unit_price = $price / max($min_price);
		$final_unit = round(number_format($unit_price, 2), 2);

		return 'Just $' . $final_unit . ' /Piece';
	}
}