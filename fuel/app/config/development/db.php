<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type'         => 'mysql',
		'connection'   => array(
		  'hostname'   => 'localhost',
		  'database'   => 'orm_example',
		  'username'   => 'root',
		  'password'   => 'root',
		  'persistent' => false,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),
);
