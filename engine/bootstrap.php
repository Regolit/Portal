<?php
use Engine\Cms;
use Engine\Di\Di;
try{
$di = new \Engine\di\di();

$cms = new Cms($di);
}
catch (\ErrorException $e){
	echo $e->getmessage();
}

?>