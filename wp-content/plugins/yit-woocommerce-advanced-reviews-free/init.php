<?php
/*
Plugin Name: YITH WooCommerce Advanced Reviews
Plugin URI: http://yithemes.com/themes/plugins/yith-woocommerce-advanced-reviews/
Description: With this extension you will allow the user to write a review in an innovative and efficient way, giving the right space to whoever is satisfied by a purchase on your shop.
Author: Yithemes
Text Domain: ywar
Version: 1.0.6
Author URI: http://yithemes.com/
*/

//region    ****    Check if prerequisites are satisfied before enabling and using current plugin

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/* Check for new plugin version on wordpress.org */

if( ! function_exists( 'get_plugins' ) ){
	include_once ABSPATH . 'wp-admin/includes/plugin.php';	
}

$wp_org_plugin 	= get_plugins( '/yith-woocommerce-advanced-reviews' );
$has_wp_version = ! empty( $wp_org_plugin ) ? true : false;

function yith_ywar_old_version_admin_notice() {
	?>
	<div class="error" style="background: #fcf3ef;">
		<p><?php _e( '<strong>ATTENTION:</strong> this version of the <strong>YITH Woocommerce Advanced Reviews</strong> plugin will not be supported anymore. To benefit from the updates, 
					  please delete the current version of the plugin and download the new official version from <a href="https://wordpress.org/plugins/yith-woocommerce-advanced-reviews/" target="_blank">wordpress.org</a>', 'ywar' ); ?></p>
	</div>
<?php
}

add_action( 'admin_notices', 'yith_ywar_old_version_admin_notice', 30 );

if ( $has_wp_version ) {
	return;
}


if ( ! function_exists( 'WC' ) ) {
	function yith_ywar_install_woocommerce_admin_notice() {
		?>
		<div class="error">
			<p><?php _e( 'YITH WooCommerce Advanced Reviews is enabled but not effective. It requires Woocommerce in order to work.', 'ywar' ); ?></p>
		</div>
	<?php
	}

	add_action( 'admin_notices', 'yith_ywar_install_woocommerce_admin_notice' );

	return;
}

if ( defined( 'YITH_YWAR_PREMIUM' ) ) {
	function yith_ywar_install_free_admin_notice() {
		?>
		<div class="error">
			<p><?php _e( 'You can\'t activate the free version of YITH WooCommerce Advanced Reviews while you are using the premium one.', 'ywar' ); ?></p>
		</div>
	<?php
	}

	add_action( 'admin_notices', 'yith_ywar_install_free_admin_notice' );

	deactivate_plugins( plugin_basename( __FILE__ ) );

	return;
}

//  Stop activation if the premium version of the same plugin is still active
if ( defined( 'YITH_YWAR_VERSION' ) ) {
	return;
}
//endregion

//region    ****    Define constants
if ( ! defined( 'YITH_YWAR_FREE_INIT' ) ) {
	define( 'YITH_YWAR_FREE_INIT', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'YITH_YWAR_VERSION' ) ) {
	define( 'YITH_YWAR_VERSION', '1.0.6' );
}

if ( ! defined( 'YITH_YWAR_FILE' ) ) {
	define( 'YITH_YWAR_FILE', __FILE__ );
}

if ( ! defined( 'YITH_YWAR_DIR' ) ) {
	define( 'YITH_YWAR_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'YITH_YWAR_URL' ) ) {
	define( 'YITH_YWAR_URL', plugins_url( '/', __FILE__ ) );
}

if ( ! defined( 'YITH_YWAR_ASSETS_URL' ) ) {
	define( 'YITH_YWAR_ASSETS_URL', YITH_YWAR_URL . 'assets' );
}

if ( ! defined( 'YITH_YWAR_TEMPLATE_PATH' ) ) {
	define( 'YITH_YWAR_TEMPLATE_PATH', YITH_YWAR_DIR . 'templates' );
}

if ( ! defined( 'YITH_YWAR_TEMPLATES_DIR' ) ) {
	define( 'YITH_YWAR_TEMPLATES_DIR', YITH_YWAR_DIR . '/templates/' );
}

if ( ! defined( 'YITH_YWAR_ASSETS_IMAGES_URL' ) ) {
	define( 'YITH_YWAR_ASSETS_IMAGES_URL', YITH_YWAR_ASSETS_URL . '/images/' );
}
//endregion

/**
 * Load text domain and start plugin
 */
load_plugin_textdomain( 'ywar', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

/**
 * Init default plugin settings
 */
if ( !function_exists( 'yith_plugin_registration_hook' ) ) {
	require_once 'plugin-fw/yit-plugin-registration-hook.php';
}
register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );

require_once( YITH_YWAR_DIR . 'class.yith-woocommerce-advanced-reviews.php' );

global $YWAR_AdvancedReview;
$YWAR_AdvancedReview = new YITH_WooCommerce_Advanced_Reviews();