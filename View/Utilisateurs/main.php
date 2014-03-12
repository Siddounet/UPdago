<?php
    /*
     * Code d'une vue qui s'exécute au sein d'un layout
     * On a accès au controller mais uniquement pour récupérer
     * les variables que celui-ci à positionner à notre intention.
     *   - variable controller : $controller
     *   - seule méthode utilisable : getViewVar
     */
    $titre = $controller->getViewVar('titre');
    $personne = $controller->getViewVar('donnees');

    echo '<h1>' . $titre . '</h1>';
?>

<table>
    <tr>
        <td>nom</td>
        <td><?php echo $personne['nom'];?></td>
    </tr>
    <tr>
        <td>prénom</td>
        <td><?php echo $personne['prenom'];?></td>
    </tr>
</table>