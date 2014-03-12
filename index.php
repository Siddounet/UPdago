<?php
    /*
     * Le but est ici de choisir le controller et la méthode à appeler dedans.
     * Cela se fait en étudiant l'URL qui comporte (facultativement) les
     * variables suivantes :
     *   - controller
     *   - action
     * soit par exemple l'URL suivante :
     *     http://monsite.com/projet/index.php?controller=utilisateur&action=authentification
     * Bref il s'agit de transformer l'URL en un appel de méthode
     */
    include_once("Controller/load.php");

    $controller = "accueil";
    $action = "main";

    if (isset($_GET['controller']))
        $controller = $_GET['controller'];
    if (isset($_GET['action']))
        $action = $_GET['action'];

    $controller = alloueController($controller, $message);
    if (!$controller)
        exit($message);
    executeController($controller, $action);


    include($controller->getLayoutFile());
?>