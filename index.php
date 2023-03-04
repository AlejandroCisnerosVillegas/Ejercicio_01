<html>
<link rel="stylesheet" href="style.css">
<div align="center" style="padding-top:10%;">
<table border="2">
		<tr id="tr1">
			<td>NRO</td>
			<td>FACTORIAL</td>
			<td>CALCULAR COMO</td>
			<td>IMPRIME</td>				
		</tr>

		<?php 
			$varmin=1;
			$varmax=15;
			$varfactorial=1;

for($varmin;$varmin<=$varmax;$varmin++)
{
	$varfactorial=$varfactorial * $varmin;
	
		?>
 
		<tr>
			<td><?php echo $varmin ?></td>
			<td><?php echo $varfactorial ?></td>
			<td>
			<?php for ($varcon=1;$varcon<=$varmin;$varcon++)
			{
				if($varcon == $varmin)
				{
					echo "$varcon ";
				}
				else
				{
					echo "$varcon * ";
				}
			}

			 ?>
			</td>
			<td><?php echo "$varmin - $varfactorial" ?></td>
		</tr>
	<?php 
}
?>
	</table>
	</div>
</html>