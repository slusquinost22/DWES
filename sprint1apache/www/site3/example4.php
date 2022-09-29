<html>
	<body>
		<h1>Jubilaci&oacute;n</h1>
		<?php
		  function edad_en_7_anos ($edad) {
			return $edad + 7;
		  }

		function mensaje ($edad) {
		  if (edad_en_7_anos ($edad) < 65) {
			return "En 7 a&ntilde;os tendr&aacute;s edad de jubilaci&oacute;n";
			} else {
			return "¡Disfruta de tu tiempo!";
			}
		  }
		?>

		<table>
			<tr>
				<th>Edad</th>
				<th>Info</th>
			</tr>

		<?php
		$lista = array (20,32,47,59,63);
		foreach ($lista as $valor) {
			echo "<tr>";
			echo "<td>".$valor."</td>";
			echo "<td>".mensaje($valor)."</td>";
			echo "</tr>";
		}
		?>
		</table>
	</body>
</html>
