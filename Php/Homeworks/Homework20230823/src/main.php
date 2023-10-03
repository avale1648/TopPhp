<?php

use FirstProject\App\Request\Request;
use FirstProject\App\Response\Response;
use FirstProject\App\Route\RouteUrl;

/*if($_SERVER['REQUEST_URI']=== '/'){
echo"Main page" . PHP_EOL . "";
}
elseif(
	substr(
		$_SERVER['REQUEST_URI'],
		0,
		strpos($_SERVER['REQUEST_URI'], '?')
	)=== '/string')
{
	require('string/index.php');
}

if ($_SERVER['REQUEST_URI']=== '/dz0628'){
	require('input_String/index.php');
}*/

class Main
{
	/**
		*   @var Request
		*/
	private $request;
	/**
		*   @var Route
		*/
		private $route;

	public function __construct()
	{
		$this->request = new Request($_REQUEST);
		$this->route = new Route();
	}

	public function index(){
		//echo "start<br>";

		if(is_dir(__DIR__ . '/' . $this->route->getFolder()))
		{
			$path = __DIR__ . '/' . $this->route->getFolder()
			. '/' . $this->route->getClass() . '.php';

					if(is_file($path)){
						require_once($path);
						$className = $this->route->getClass();
						$function = $this->route->getFunction();
						return (new $className)->{$function}($this->request);
		}
	}
}
}

$main = new Main();
echo $main->index()->getResponse();
