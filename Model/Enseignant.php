<?php
require_once("BDD.php");
include('Model.php');
class Enseignant extends Model
	{

		protected $id;
		protected $nom;
		protected $email;
		protected $login;
		protected $password;
		protected $tel;
		protected $id_Formation;
		protected $table='enseignant';
		protected $connect;
		public function __construct()
			{
				parent::__construct();
				/*$maBDD=new BDD();
			$this->connect=$maBDD->connect();*/
			}
		
		function verifLogin($login,$password)
		{
			$req="SELECT * FROM enseignant where login='".$login."' and password='".$password."'";
			$statement 	= $this->connexion()->query($req);
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