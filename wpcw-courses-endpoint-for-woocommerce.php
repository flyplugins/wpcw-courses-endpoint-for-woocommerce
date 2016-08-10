<?php 
/**
Plugin Name: My Courses Endpoint for Woocommerce
Plugin URI: http://www.flyplugins.com
Description: This plugin allows you to add a "My Courses" endpoint to your My Account page
Version: 1.0
Author URI: http://www.flyplugins.com
**/

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) && 
		in_array('wp-courseware/wp-courseware.php', apply_filters('active_plugins', get_option('active_plugins')))) {
	class WPCW_My_Courses_Endpoint {

		/**
		 * Custom endpoint name.
		 *
		 * @var string
		 */
		public static $endpoint = '../my-courses';

		/**
		 * Plugin actions.
		 */
		function __construct() {
			// Change the My Accout page title.
			add_filter( 'the_title', array( $this, 'endpoint_title' ) );

			// Insering your new tab/page into the My Account page.
			add_filter( 'woocommerce_account_menu_items', array( $this, 'new_menu_items' ) );
		}

		/**
		 * Set endpoint title.
		 *
		 * @param string $title
		 * @return string
		 */
		function endpoint_title( $title ) {
			global $wp_query;

			$is_endpoint = isset( $wp_query->query_vars[ self::$endpoint ] );

			if ( $is_endpoint && ! is_admin() && is_main_query() && in_the_loop() && is_account_page() ) {
				// New page title.
				$title = __( 'My Courses' , 'woocommerce' );

				remove_filter( 'the_title', array( $this, 'endpoint_title' ) );
			}

			return $title;
		}

		/**
		 * Insert the new endpoint into the My Account menu.
		 *
		 * @param array $items
		 * @return array
		 */
		function new_menu_items( $items ) {
			// Remove the logout menu item.
			$logout = $items['customer-logout'];
			unset( $items['customer-logout'] );

			// Insert your custom endpoint.
			$items[ self::$endpoint ] = __( 'My Courses' , 'woocommerce' );

			// Insert back the logout item.
			$items['customer-logout'] = $logout;

			return $items;
		}

	}

	new WPCW_My_Courses_Endpoint();

} elseif (defined('WOOCOMMERCE_VERSION') && version_compare(WOOCOMMERCE_VERSION, '2.1', '<')) {

	wc_add_notice(sprintf(__("This plugin requires WooCommerce 2.1 or higher!", "woocommerce" ), 'error'));

} else {
    /**
     * Check if WooCommerce ane WP Courseware is up and running
     *
     * @return null
     */
    function wpcw_courses_endpoint_for_woocommerce_dependencies()
    {
        if (!is_plugin_active('woocommerce/woocommerce.php')) {
            ob_start();
            ?><div class="error">
                <p><strong><?php _e('WARNING', 'woocommerce'); ?></strong>: <?php _e('WooCommerce is installed but not activated, therefore, My Courses Endpoint for Woocommerce will not work!', 'woocommerce'); ?></p>
            </div><?php
            echo ob_get_clean();
        }

        if (!is_plugin_active('wp-courseware/wp-courseware.php')) {
            ob_start();
            ?><div class="error">
                <p><strong><?php _e('WARNING', 'woocommerce'); ?></strong>: <?php _e('WP Courseware is installed but not activated, therefore, My Courses Endpoint for Woocommerce will not work!', 'woocommerce'); ?></p>
            </div><?php
            echo ob_get_clean();
        }
    }
    add_action('admin_notices', 'wpcw_courses_endpoint_for_woocommerce_dependencies');
}

