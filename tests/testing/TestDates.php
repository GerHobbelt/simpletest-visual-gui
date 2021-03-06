<?php

// include first implementation - it is ususally written during development stage
$path = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'development'.DIRECTORY_SEPARATOR.basename(__FILE__);
require($path);

/**
* Auxiliary modificator class.
* Usually running unit test in different environment means changing few (if any) variables, like server IP or Credit card number.
* Use this class to set such a variable/fixtures.
* This class (with trailing "Set") SomeUnitTestSet is automatically searched by TestGui::runSelectedTests().
*/
/*
class TestDatesSet{

	/**
	* Modificator method.
	* Please note, that modified propewrties must have public visibility.
	* /
	public static function set($testClass){
		// $testClass->creditCard = '12345678906666666666666666';
		// $testClass->host = '10.20.30.40';
		return $testClass;
	}

}
*/
