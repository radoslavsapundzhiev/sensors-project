<?php
class Model_Report extends Orm\Model{
	protected static $_properties = array(
		'id',
		'value',
		'timestamp',
		'sensor_id'
	);
}