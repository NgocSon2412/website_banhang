<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly


if( !defined('YIT_CORE_PLUGIN')) {
    define( 'YIT_CORE_PLUGIN', true);
}

if( !defined('YIT_CORE_PLUGIN_PATH')) {
    define( 'YIT_CORE_PLUGIN_PATH', dirname(__FILE__));
}

if( !defined('YIT_CORE_PLUGIN_URL')) {
    define( 'YIT_CORE_PLUGIN_URL', untrailingslashit( plugins_url( '/', __FILE__ ) ));
}

if( ! defined( 'YIT_CORE_PLUGIN_TEMPLATE_PATH' ) ){
    define ( 'YIT_CORE_PLUGIN_TEMPLATE_PATH', YIT_CORE_PLUGIN_PATH .  '/templates' );
}


include_once( 'yit-functions.php' );
include_once( 'lib/yit-metabox.php' );
include_once( 'lib/yit-plugin-panel.php' );
include_once( 'lib/yit-plugin-panel-wc.php' );
include_once( 'lib/yit-plugin-subpanel.php' );
include_once( 'lib/yit-plugin-common.php' );
include_once( 'lib/yit-plugin-gradients.php');
include_once( 'lib/yit-video.php');
