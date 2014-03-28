<?php
/*
Plugin Name: Pingback DDoS Prevention
Description: Stop attackers from using this site for DDoS attacks.
Version: 1.0
Author: Atomicdust
Author URI: http://www.atomicdust.com/
*/

add_filter( 'xmlrpc_methods', function( $methods ) 
{
	unset( $methods['pingback.ping'] );
	return $methods;
} ); 
?>