<?php

class Model_Contact_Phone extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'contact_id',
		'phone_id',
	);

	protected static $_table_name = 'contact_phones';

}
