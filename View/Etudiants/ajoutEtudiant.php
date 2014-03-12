<html>
	<head>
		<title>Ajouter un enseignant</title>
	</head>
	<body> 
		<form>

		</form>
	</body>
</html>

<?php
	public function logout()
	{
		if(isset($_GET['deco']))
		{
			if($_GET['deco']==true)
			{
				$_SESSION=array();
				session_destroy(); 
			}
		}
		header('location:index.php?controller='.$_GET["controller"].'&action=main');	
	}
?>
