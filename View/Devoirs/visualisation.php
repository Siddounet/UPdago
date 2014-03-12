<?php
 $listeDevoir = $controller->getViewVar('listeDevoir');


?>


<div>
	<table>
		<TH> NOM</TH> 
		<TH> ECHEANCE </TH> 
		<TH> OUVERT </TH> 
	<?php
	foreach($listeDevoir as monDevoir)
	{
	?>
		<tr>
			<td><?php echo monDevoir['titre'] ?></td>
			<td><?php echo monDevoir['dateLimite'] ?></td>
			<td><?php echo monDevoir['ouvert'] ?></td>
		</tr>
			
	<?php
	}
	?>
	</table>
</div>