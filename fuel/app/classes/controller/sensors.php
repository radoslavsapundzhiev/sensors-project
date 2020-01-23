<?php
class Controller_Sensors extends Controller_Template
{
	public function action_index()
	{
		$sensors = Model_Sensor::find('all');

		$data = array('sensors' => $sensors);
		$this->template->title = 'List of Sensors';
		$this->template->content = View::forge('sensors/index', $data, false);
	}

	public function action_add()
	{
		if(Input::post('send')){
			$sensor = new Model_Sensor();
			$sensor->name = Input::post('name');
			$sensor->unit = Input::post('unit');

			$sensor->save();

			Session::set_flash('success', 'Sensor created successfully!');

			Response::redirect('/sensors');
		}

		$data = array();
		$this->template->title = 'Create Sensor';
		$this->template->content = View::forge('sensors/add', $data);
	}

	public function action_view($id)
	{
		$sensor = Model_Sensor::find('first', array(
			'where' => array(
				'id' => $id
			)
		));

		$data = array('sensor' => $sensor);
		$this->template->title = $sensor->name;
		$this->template->content = View::forge('sensors/view', $data, false);
	}
}