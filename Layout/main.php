<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />  
 <link rel="stylesheet" type="text/css" href="./main.css">	
    <title>test</title>
 
  </head>
   <body>
   <?php 
	
	
   ?>
		
		<div id='bandeau'>
		<?php
		if(!isset($_SESSION["login"]))
					{
					?>
			<form action='index.php?controller=<?php echo $_GET["controller"]?>&action=login' method='POST'>
				<label for="form_user">Nom d'utilisateur : </label><input type="text" name="username" id="form_user" />
				<label for="form_user">Mot de passe: </label><input type="password" name="password" id="form_pass" />
				<input type='hidden' name='controller' value=<?php echo $_GET["controller"]?>></input>
				<input type='hidden' name='action' value=<?php echo $_GET["action"]?>></input>
				<button type="submit" id="submit">Connexion</button>
			</form>
			<?php
			}
			else
			{
			?>
			<form>
				<label for="form_user"><?php echo $_SESSION["login"] ?></label>
				<button><a href="index.php?deco=true&controller=<?php echo $_GET["controller"]?>&action=logout">se déconnecter</a></button>
			</form>
			<?php
			}
			?>
		</div>
		<div id='menu'>
			<ul>
				<?php
					if(isset($_SESSION["type"]) && $_SESSION["type"]==1)
					{
					
				?>
				<li><a href='#'>test</a></li>
				<li><a href='#'>ouah</a></li>
				<?php
					}
					else if(isset($_SESSION["type"]) && $_SESSION["type"]==0)
					{
					
				?>
				<li><a href='#'>oooo</a></li>
				<li><a href='#'>cb</a></li>
				<?php
					}
				?>
			</ul>
		</div>
		<div id='page'>
		     <?php include($controller->getViewFile()); ?>
		</div>
   </body>
   
</html>