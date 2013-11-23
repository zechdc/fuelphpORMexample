<?php

namespace Fuel\Migrations;

class Create_phones
{
	public function up()
	{
		\DBUtil::create_table('phones', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'phone_type_id' => array('constraint' => 11, 'type' => 'int'),
			'number' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('phones');
	}
}