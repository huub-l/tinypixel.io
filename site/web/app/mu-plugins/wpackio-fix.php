<?php
add_action( 'rest_api_init', function() {
	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
	add_filter( 'rest_pre_serve_request', function( $value ) {
		header( 'Access-Control-Allow-Origin: *' );
		header( 'Access-Control-Allow-Methods: GET' );
		header( 'Access-Control-Allow-Credentials: true' );
		header( 'Access-Control-Expose-Headers: Link', false );
		header( 'Access-Control-Allow-Headers: X-Requested-With' );
		return $value;
	} );
}, 15 );
add_action( 'customize_preview_init', function() {
	add_filter( 'wp_headers', function( $headers ) {
		$headers['Content-Security-Policy'] .= ' 192.168.1.144:3000';
		return $headers;
	} );
} );
