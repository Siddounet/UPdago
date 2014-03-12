<?php
 $listeDevoir = $controller->getViewVar('listeDevoir');


?>


<div>
	<table>
		<TH> NOM</TH> 
		<TH> ECHEANCE </TH> 
		<TH> OUVERT </TH> 
		<TH> LIVRABLES </TH>
		<TH> GROUPES </TH>
		<TH>  </TH>
	<?php
	foreach($listeDevoir as $monDevoir)
	{
	?>
		<tr>
			<td><?php echo $monDevoir['titre'] ;?></td>
			<td ondblclick="alert('toto');"><?php echo $monDevoir['dateLimite'] ;?></td>
			
			<td><?php if($monDevoir['ouvert']==0)
						{
						?>
						<img src='Images/fermer.png'/>
						<?php
						}
						else if($monDevoir['ouvert']==1)
						{
				?>
						<img src='Images/ouvert.png'/>
				<?php		
						}
			
			
			?>
			
			</td>
			<td><a href='#'>afficher</a></td>
			<td><a href='#'>afficher</a></td>
			<td><a href='#'>Sauvergarder</a></td>
		</tr>
			
	<?php
	}
	?>
	</table>
</div>