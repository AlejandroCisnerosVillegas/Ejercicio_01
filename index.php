<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Generador Dinámico de Factoriales</title>
		<link rel="stylesheet" href="style.css">
		<link href="../../assets/img/logo.png" rel="icon">
		<link href="../../assets/img/logo-grande.png" rel="apple-touch-icon">
	</head>
	<body>
		<div class="container">
			<h1>Tabla Factorial</h1>
			<table>
				<thead>
					<tr>
						<th>NRO</th>
						<th>FACTORIAL</th>
						<th>CALCULAR COMO</th>
						<th>IMPRIME</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$varmin = 1;
						$varmax = 15;
						$varfactorial = 1;

						for ($varmin; $varmin <= $varmax; $varmin++) {
							$varfactorial = $varfactorial * $varmin;
					?>
					<tr>
						<td><?php echo $varmin ?></td>
						<td><?php echo $varfactorial ?></td>
						<td>
							<?php 
								for ($varcon = 1; $varcon <= $varmin; $varcon++) {
									echo $varcon . ($varcon == $varmin ? ' ' : ' * ');
								}
							?>
						</td>
						<td><?php echo "$varmin - $varfactorial" ?></td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>