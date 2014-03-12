<?php
    $titre = $controller->getViewVar('titre');
    $params = $controller->getViewVar('parametres');

    echo '<h1>' . $titre . '</h1>';

    echo '<p> nombre de paramètres : ' . count($params) . '</p>';

    echo '<p>';
    for ($i = 0; $i < count($params); $i ++)
    {
        echo $i . ' : ' . $params[$i] . '<br />';
    }
    echo '</p>';
?>
