<?php

class Model_Contact extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'first_name',
		'last_name',
		'address_line_1',
		'email',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'contacts';

}
