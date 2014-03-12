<?php
require_once("BDD.php");
class Etudiant
	{

		protected $id;
		protected $nom;
		protected $prenom;
		protected $login;
		protected $password;
		protected $id_Formation;
		protected $table='etudiant';
		protected $connect;
		public function __construct()
		{
			$maBDD=new BDD();
			$this->connect=$maBDD->connect();
		}
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
		function verifLogin($login,$password)
		{
			$req="SELECT * FROM ".$this->table." where login='".$login."' and password='".$password."'";
			$statement 	= $this->connect->query($req);
			if ($statement->rowCount()>=1) {
					while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						$frais = $row;
					}
				}
				else
					$frais = false;
				
				return $frais;
		}
		
		
	}