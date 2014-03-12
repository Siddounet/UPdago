<?php
    /*
     * Il s'agit de l'analyse interne du controller et de l'action.
     * On récupère le nom du controller et le nom de l'action (via l'URL).
     * Puis il s'agit de les transformer en nom de classe et en nom de méthode.
     *
     * nom de la classe :
     *   - nom du controller
     *   - on met en majuscule la première lettre
     *   - on ajoute le mot "Controller"
     * nom de la méthode :
     *   - directement le nom de l'action récupéré
     * note : le nom du fichier contenant la classe est le nom de la classe
     * note : pour le passage des paramètres, cf. la fonction "executeController"
     */

    function existeController($name)
    {
        $filename = 'Controller/' . ucfirst($name) . 'Controller.php';
        return file_exists($filename);
    }

    
    function alloueController($name, &$message = "")
    {
        if (! existeController($name))
        {
            $message = 'Controller '. $name . ' n\'existe pas';
            return false;
        }
        else
        {
            $classname = ucfirst($name) . 'Controller';
            return new $classname;
        }
    }

    /*
     * et appel de la bonne action (méthode)
     * gestion des paramètres brutale :
     *    - ils sont numérotés de 0 à n-1
     *    - ils sont extraits directement de $_GET un peu salement et sans réelle vérification (qu'il faudrait faire bien entendu)
     *    - ils sont passés sous forme d'un tableau à l'action (ce qui n'est pas très élégant)
     * note : il faudrait aussi vérifier que la méthode existe
     */
    function executeController(&$controller, $action)
    {
        // a priori la vue à le même nom que l'action
        $controller->setView($action);

        $params = array();
        foreach ($_GET as $key => $val)
        {
            if (($key !== 'controller') && ($key !== 'action'))
                $params[] = $val;
        }

        $controller->$action($params);
    }
?>