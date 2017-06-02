<?php 

/**
* 
*/


class App
{
	
	public function __construct()
	{
		$this->parseUrl();
	}


	protected function parseUrl()
	{
		if (isset($_GET["url"])) {
			echo $_GET["url"];	
		}else{
			echo $_SERVER['REQUEST_URI'];
		}
		
	}

}