<?php
require_once("BDD.php");

class Model 
	{
	protected $connect;
	protected $table;	
			public function __construct()
			{
				$maBDD=new BDD();
			$this->connect=$maBDD->connect();
			
			}
		function connexion()
		{
			return $this->connect;
		}
		
		function __get($attr){
			if(isset($this->$attr))
			{
				return $this->$attr;
			}
		}
		function __set($attr,$value){
			if(isset($this->$attr))
			{
				$this->$attr=$value;
				
			}
			else{
				echo 'Erreur d attribut' ;
			}
		}
		function  add(){}
		
		function remove($id){
			$req = 'Delete from '.$table.' WHERE id='.$id;
			$statement 	= $this->connect->query($req);
						return ($statement->rowCount()>=1) ;
						
		}
		function  modify()
		{}
		function visualisation()
		{
			$req="SELECT * FROM ".$this->table;
			$statement 	= $this->connect->query($req);
			if ($statement->rowCount()>=1) {
					while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						$ligne[] = $row;
					}
			}
			else
					$ligne = false;
			return $ligne;
		}
		
		
	}