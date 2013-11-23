<?php

namespace Fuel\Migrations;

class Create_contact_phones
{
	public function up()
	{
		\DBUtil::create_table('contact_phones', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'contact_id' => array('constraint' => 11, 'type' => 'int'),
			'phone_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contact_phones');
	}
}