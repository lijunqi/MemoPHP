<?php

abstract class Kohana_Model {

	/**
	 * Create a new model instance.
	 *
	 *     $model = Model::factory($name);
	 *
	 * @param   string  $name   model name
	 * @return  Model
	 */
	public static function factory($name)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class;
	}

}

Class Model_A {
    public $data = 123;
}

$obj = new 'A';

echo 'data = '.$obj->data;

?>