<?php

class Model_Guest extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'contact_id',
		'event_id',
	);

	protected static $_table_name = 'guests';

}
