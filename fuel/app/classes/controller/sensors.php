<?php
class Controller_Sensors extends Controller_Template
{
	//action for listing all sensors
	public function action_index()
	{
		$sensors = Model_Sensor::find('all');

		$data = array('sensors' => $sensors);
		$this->template->title = 'List of Sensors';
		$this->template->content = View::forge('sensors/index', $data, false);
	}

	//action for creation a sensor
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

	//action for showing details of sensor
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

	//action for edit sensor
	public function action_edit($id)
	{
		if(Input::post('send')){
			$sensor = Model_Sensor::find(Input::post('sensor_id'));
			$sensor->name = Input::post('name');
			$sensor->unit = Input::post('unit');

			$sensor->save();

			Session::set_flash('success', 'Sensor modified successfully!');

			Response::redirect('/sensors');
		}

		$sensor = Model_Sensor::find('first', array(
			'where' => array(
				'id' => $id
			)
		));

		$data = array('sensor' => $sensor);
		$this->template->title = 'Edit Sensor';
		$this->template->content = View::forge('sensors/edit', $data, false);
	}

	//action for delete sensor
	public function action_delete($id)
	{
		$sensor = Model_Sensor::find($id);
		$sensor->delete();

		Session::set_flash('success', 'Sensor deleted successfully!');

		Response::redirect('/sensors');
	}

	//action for showing history of reports for sensor
	public function action_history($id)
	{
		$sensor = Model_Sensor::find('first', array(
			'where' => array(
				'id' => $id
			)
		));

		$reports = Model_Report::find('all', array(
			'where' => array(
				array('sensor_id', $id),
			),
			'order_by' => array('timestamp' => 'desc')
		));

		$data = array('sensor' => $sensor, 'reports' => $reports);
		$this->template->title = $sensor->name;
		$this->template->content = View::forge('sensors/history', $data, false);
	}
}