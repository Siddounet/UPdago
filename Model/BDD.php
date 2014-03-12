<?php

class BDD{

	public function __construct(){
	
	}
	public function connect(){
		$bdd = new PDO('mysql:host=localhost;dbname=updago', 'root', '');
		return $bdd;
	}
}
?>