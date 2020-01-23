<?php
class Controller_Report extends Controller_Template
{
	//action for creation a sensor
	public function action_index()
	{
		$report = new Model_Report();
		$id = intval($_GET['id']);

		$sensor = Model_Sensor::find('first', array(
			'where' => array(
				'id' => $id
			)
		));

		if(!$sensor){
			Session::set_flash('error', 'No such sensor!');

			Response::redirect('/sensors');
		}else{

			$report->sensor_id = $id;
			$value = intval($_GET['value']);
			$report->value = $value;
			
			$report->save();

			Session::set_flash('success', 'Sensor reported successfully!');

			Response::redirect('/sensors');
		}

		
	}
}