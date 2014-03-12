<?php
require_once("BDD.php");
class Devoir
	{

		protected $id;
		protected $titre;
		protected $dateLimite;
		protected $id_Matiere;
		protected $id_Enseignant;
		protected $table='devoir';
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
		
		
		
	}