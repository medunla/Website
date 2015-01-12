<?php

class Human{
	public $Name;

	function Eat(){
		echo "Eat";
	}
	function __construct(){
		$this->Name = "Human";
	}
}

class Medunla extends Human{

	function Eat(){
		echo "Medunla Eat wahaha!!!";
	}
	function Sleep(){
		echo "Medunla Sleep wahaha!!!";
	}
}

?>