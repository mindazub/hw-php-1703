<?php

require('autoload.php');

class myClass{

	public function __construct() 
	{
		
		echo 'Contstruct method is called.';
	}

	public function someOtherMethod()
	{
		echo "The name of the TEST method from MyClass is" . __FUNCTION__ . "\n"; 
	}

	public function __destruct()
	{
		echo 'Destruct method is called.';
	}
}