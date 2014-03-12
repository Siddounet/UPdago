<?php
/*
 * Le layout est donc la page web qui s'exécute et est envoyée à l'internaute
 * Il a accès au controller uniquement pour récupérer le nom de la vue (cf. <div id="content">)
 * et quelque variables.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Présentation par défaut</title>
</head>
<body>
    <div id="header">
        Bienvenue chez moi
        <hr />
    </div>

    <div id="content">
        <?php include($controller->getViewFile()); ?>
    </div>

    <div id="footer">
        <hr />
        fin de la page
    </div>
</body>
</html>
