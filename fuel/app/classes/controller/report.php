<?php
class Controller_Report extends Controller_Template
{
	//action for creation a sensor
	public function action_index()
	{
		$report = new Model_Report();
		$value = intval($_GET['value']);
		$report->value = $value;
		$id = intval($_GET['id']);
		$report->sensor_id = $id;
		$report->save();

		Session::set_flash('success', 'Sensor reported successfully!');

		Response::redirect('/sensors');
	}
}