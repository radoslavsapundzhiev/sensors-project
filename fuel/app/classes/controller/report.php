<?php
class Controller_Report extends Controller_Rest
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

			return $this->response(array('error' => "Sensor does not exist"));

		}else{

			$report->sensor_id = $id;
			$value = intval($_GET['value']);
			$report->value = $value;
			
			$report->save();

			return $this->response(array('success' => "Report has been sent successfully"));

		}

		
	}
}