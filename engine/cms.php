<?php 
namespace engine;

class cms{

private $di;

public function __construct($di)
	{

		$this->di=$di;

	}

public function run()
	{
		print_r($this->di);
	}
}


?>