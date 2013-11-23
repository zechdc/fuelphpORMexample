<?php

namespace Fuel\Migrations;

class Create_guests
{
	public function up()
	{
		\DBUtil::create_table('guests', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'contact_id' => array('constraint' => 11, 'type' => 'int'),
			'event_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('guests');
	}
}