<?php
if ( defined( 'ABSPATH' ) && ! defined( 'RWMB_VER' ) ) {
	register_activation_hook( __FILE__, 'rwmb_check_php_version' );

	/**
	 * Display notice for old PHP version.
	 */
	function rwmb_check_php_version() {
		if ( version_compare( phpversion(), '5.3', '<' ) ) {
			die( esc_html__( 'Meta Box requires PHP version 5.3+. Please contact your host to upgrade.', 'meta-box' ) );
		}
	}

	require_once dirname( __FILE__ ) . '/inc/loader.php';
	$rwmb_loader = new RWMB_Loader();
	$rwmb_loader->init();
}
