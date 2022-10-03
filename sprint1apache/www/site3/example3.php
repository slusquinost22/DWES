<html>
	<body>
		<h1>Jubilaci&oacute;n</h1>
		<?php
			//function edad_en_10_anos ($edad) {
			//	return $edad + 10;
			//}

			if ( $_GET["edad"] + 10 > 65) {
				echo "En 10 a&ntilde;os tendr&aacute; edad de jubilaci&oacute;n";
			} 	else {
				echo "¡Disfruta de tu tiempo!";
			}

		?>
	</body>
</html>

