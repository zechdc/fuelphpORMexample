<?php

namespace Fuel\Migrations;

class Create_contacts
{
	public function up()
	{
		\DBUtil::create_table('contacts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'first_name' => array('constraint' => 45, 'type' => 'varchar'),
			'last_name' => array('constraint' => 45, 'type' => 'varchar'),
			'address_line_1' => array('constraint' => 50, 'type' => 'varchar'),
			'email' => array('constraint' => 45, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contacts');
	}
}