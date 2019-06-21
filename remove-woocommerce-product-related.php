<?php
/**
 * Plugin Name: Remove WooCommerce Product Related
 * Plugin URI: https://github.com/marcos-alexandre82/remove-woocommerce-product-related
 * Description: Removes, globally, related products in WooCommerce.
 * Author: Marcos Alexandre
 * Author URI: https://marcosalexandre.dev/ 
 * Version: 1.0.0
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: remove-woocommerce-product-related
 * Domain Path: /languages
 * WC tested up to: 5.2.2
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    /**
     * Remove related products output
     */
    add_filter('woocommerce_product_related_posts_query', '__return_empty_array', 100);
}
