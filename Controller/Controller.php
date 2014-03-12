<?php
include('Model/Enseignant.php');
include('Model/Etudiant.php');

/*
 * class mère de tous les controllers
 * elle possède :
 *   - les données pour l'affichage (layout, vue)
 *       . les accesseurs
 *       . la création des chemins d'accès
 *   - le tableau "viewVars" contenant toutes les variables utilisables par une vue
 *       . les accesseurs à ce tableau
     - gestion des models : TODO
 *   - le constructeur
 *   - ce que vous pourriez ajouter à condition que ce soit commun à tous les controllers
 */
class Controller 
{
    /*
     * Quels fichiers php exécuter pour l'affichage
     */
    private $layout = "main";       // mise en page globale : Doctype, header, ...
    private $view = "";                // code spécifique à la vue.

    protected function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function setView($view)
    {
        $this->view = $view;
    }

    public function getLayoutFile()
    {
        return 'Layout/' . $this->layout . '.php';
    }

    public function getViewFile()
    {
        return 'View/'. str_replace('Controller', '', get_class($this))  . '/' . $this->view . '.php';
    }

    /*
     * gestion des données passées à la vue
     */
    private $viewVars = array();

    public function setViewVar($name, $value)
    {
        $this->viewVars[$name] = $value;
    }

    public function getViewVar($name)
    {
        return $this->viewVars[$name];
    }

    /*
     * gestion des modèles manipulés par le controller
     */
     // TODO
 
    /*
     * constructeur
     */
    public function __construct()
    {
    }
	public function login()
	{	
		
		if(isset($_POST["username"]) && isset($_POST["password"]))
		{
			$monEnseignant= new Enseignant();
			$var=$monEnseignant->verifLogin($_POST["username"],$_POST["password"]);
			if(is_array($var) )
			{
				$_SESSION["login"]=$_POST["username"];
				$_SESSION["type"]='0';//1 pour enseignant
			}
			else
			{
				$monEtudiant= new Etudiant();
				$var=$monEtudiant->verifLogin($_POST["username"],$_POST["password"]);
				if(is_array($var) )
				{
					$_SESSION["login"]=$_POST["username"];
					$_SESSION["type"]='1';//1 pour enseignant
				}
			}
			
		}
		
		header('location:index.php?controller='.$_GET["controller"].'&action=main');	
	}
	public function logout(){
		if(isset($_GET['deco']))
			{
				if($_GET['deco']==true){
						$_SESSION=array();
						session_destroy(); 
						
						
					}
			}
		header('location:index.php?controller='.$_GET["controller"].'&action=main');	
	}

    /*
     * votre propre code
     */
}

?>