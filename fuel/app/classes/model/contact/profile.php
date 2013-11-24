<?php

class Model_Contact_Profile extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'contact_id',
		'display_name',
		'about_me',
		'website_link',
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
	protected static $_table_name = 'contact_profiles';

	protected static $_belongs_to = array('contact');

}
