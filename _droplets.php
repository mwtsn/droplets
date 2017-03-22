<?php
/**
 * Droplets
 *
 * MU Plugin 'Drop-ins' by Make Do.
 *
 * Move this file into the root of mu-plugins, then simply comment out the droplets
 * that you do not wish to use.
 *
 * @since	0.1.0
 *
 * @package mkdo\droplets
 */

// URL based parameters.
$url = ( isset( $_SERVER['HTTPS'] ) ? 'https' : 'http' ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$tld = explode( '.', wp_parse_url( $url, PHP_URL_HOST ) );
$tld = end( $tld );

// Setup constants.
define( 'MKDO_DROPLETS_PERMITTED_USERNAME', 'makedo' );
define( 'MKDO_DROPLETS_TLD', $tld );

// Include droplets.
require_once 'droplets/body-classes.php';
require_once 'droplets/credit.php';
require_once 'droplets/debug.php';
require_once 'droplets/emoji.php';
require_once 'droplets/file-edit.php';
require_once 'droplets/file-install.php';
require_once 'droplets/hosting-wp-engine.php';
require_once 'droplets/iframe.php';
require_once 'droplets/post-content-clean.php';
require_once 'droplets/post-formats.php';
require_once 'droplets/responsive-embeds.php';
require_once 'droplets/tinymce.php';