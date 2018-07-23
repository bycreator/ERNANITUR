<?php

/**
* @description debug mode - enable in development
*/
define( 'DEBUG' , 'on' );

/**
* @description resources to auto initialization
* @note call INIT only to required core
*/
define( 'INIT', [
	'vendor/autoload.php',
	'bin/addroute.php'
]);

/**
* @description system path infos - everything
* /about core tree is on here
*/
define( 'SYS', [
	'/ernanitur/'
]);


/**
* @description loads required files over INIT
*/
require_once( INIT[0] );
require_once( INIT[1] );