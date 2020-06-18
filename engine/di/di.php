<?php
namespace Engine\Di;

class Di{
	private $container = [];

	public function set($key, $value)
	{
		$this->container[$key]=($value);
	}
	public function get($key)
	{
		var_dump($this);
	}
	public function has($key)
	{
		return isset($this->container[$key]);
	}
}

$a = new di();

$a->set('key','val');
echo $a->get('key');

?>