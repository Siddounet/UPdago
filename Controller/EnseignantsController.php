<?php
include('model/Devoir.php');
/*
 * Un controller spécifique à l'application, ici gestion des utilisateurs
 * chaque méthode publique correspond à une action et donc une URL donnée.
 * Par exemple la méthode "uneaction" correspond à l'URL :
 *    http://monsite.com/projet/?controller=utilisateurs&action=uneaction&...
 *
 * Le but d'une action est de "calculer", i.e.
 *   - de récupérer ou modifier des données des modèles
 *   - de trier/classer/filtrer/...
 *   - de positionner des variables pour la vue
 *   - de choisir le layout et la vue à exécuter
 */
class EnseignantsController extends Controller
{
	function __construct(){
		session_start();
	}
    public function main($params)
    {	
	
        //$this->setLayout('default');  // inutile si c'est "default"
        //$this->setView('main');       // inutile si c'est le même nom que la méthode
		
		$DevoirBDD=new Devoir();
		$listeDevoir=$DevoirBDD->visualisation();
		$this->setViewVar('listeDevoir',$listeDevoir);
    }


   

}

?>
