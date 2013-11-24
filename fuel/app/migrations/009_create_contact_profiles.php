<?php

namespace Fuel\Migrations;

class Create_contact_profiles
{
	public function up()
	{
		\DBUtil::create_table('contact_profiles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'contact_id' => array('constraint' => 11, 'type' => 'int'),
			'display_name' => array('constraint' => 45, 'type' => 'varchar'),
			'about_me' => array('type' => 'longtext'),
			'website_link' => array('constraint' => 60, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contact_profiles');
	}
}