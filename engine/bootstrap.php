<?php
require_once (__DIR__.'/../vendor/autoload.php');

use engine\cms;
use engine\di\di;


try{
$di = new di();
$di-> set ('Test', 'val1');
$di-> set ('Test2', 'val2');


$cms = new cms($di);

$cms->run();

}
catch (\ErrorException $e){
	echo $e->getmessage();
}

?>