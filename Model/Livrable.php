<?php
require_once("BDD.php");
class Livrable
	{

		protected $id;
		protected $nom;
		protected $dateFin;
		protected $urlFichier;
		protected $id_Format;
		protected $id_Devoir;
		protected $table='livrable';
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