<?php
namespace engine\di;

class di{
	private $container = [];

	public function set($key, $value)
	{
		$this->container[$key]=($value);

	}
	public function get($key)
	{
		return($this->has($key));
	}
	public function has($key)
	{
		return isset($this->container[$key])? $this->container[$key]:null;
	}
}


?>