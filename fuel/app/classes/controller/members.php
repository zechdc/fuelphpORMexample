<?php

class Controller_Members extends Controller_Template
{
	public function action_view()
	{
		$data["subnav"] = array('view'=> 'active' );
		$this->template->title = 'Members &raquo; View';
		$this->template->content = View::forge('members/view', $data);
	}

	public function action_view_profile()
	{
		$contact_data = Model_Contact::query()
			->related('contact_profile')
			->get_one();

		$contact_data->first_name = 'Bill';
		$contact_data->contact_profile->display_name = 'AwesomeBill';
		$contact_data->save();

		Debug::dump($contact_data);
		$data['contact_data'] = $contact_data;
		$data["subnav"] = array('view_profile'=> 'active' );
		$this->template->title = 'Members &raquo; View profile';
		$this->template->content = View::forge('members/view_profile', $data);
	}

}
