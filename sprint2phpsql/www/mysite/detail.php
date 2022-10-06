<?php
	$ db = mysqli_connect( 'localhost' , 'root' , '1234' , 'mysitedb' ) or die ( 'Fail' );
?>
< html >
	< cuerpo >
		< h1 > Conexión establecida </ h1 >
		< estilo >
		mesa ,  tr ,  th ,  td {
		alineación de texto : centro;
		familia de fuentes :  'helvetica neue' , helvetica , arial , sans-serif;
			}

		mesa {
		disposición de la tabla : automático;
		colapso de borde : separado;
		tamaño de fuente :  12 px ;
		margen :  -10 px ;
		ancho :  550 píxeles ;
		}

		el {
		fondo :  # b9c9fe ;
		borde superior :  4 px sólido # aabcfe ;
		borde inferior :  4 px sólido # aabcfe ;
		espaciado entre letras :  2 px ;
		relleno :  8 px ;	
		}

		td {
		relleno :  2 px ;
		fondo :  # e8edff ;
		borde inferior :  1 px sólido # fff ;
		color :  # 669 ;
		borde superior :  1 px sólido # aabcfe ;
		espaciado entre letras :  1 px ;
		}
		
		. contenedor {
		posición : relativa;
		}

		. hijo {
		posición : absoluta;
		arriba :  20 % ;
		izquierda :  30 % ;
		margen :  1 %  0  0  1 px ;
		}

		imagen _ imagen { ancho :  110 px ; altura :  150 píxeles ;}

		</ estilo >
		< div  clase = " contenedor " >
			< div  clase = " hijo " >
		<?php
		$ consulta = 'SELECT c.comentario, p.* FROM tComentarios c, tPeliculas p WHERE c.pelicula_id=p.id;' ;
		$ resultado = mysqli_query ( $ db , $ consulta ) or die ( 'Error de consulta' );
		while ( $ fila = mysqli_fetch_array ( $ resultado )) {
		echo " <tabla> ";
		eco " <tr> ";
		echo " <th> 'ID' </th> ";
		echo " <th> 'Título' </th> ";
		echo " <th> 'Director' </th> ";
		echo " <th> 'Género' </th> ";
		echo " <th> 'Cártel' </th> ";
		eco " </tr> ";
		eco " <tr> ";
		echo " <td><a href='/detail.php?id=<id>'> $ fila [ 0 ] </a></td> ";
		eco  '<br>' ;
		echo " <td> $ fila [ 1 ] </td> ";
		eco  '<br>' ;
		echo " <td> $ fila [ 2 ] </td> ";
		eco  '<br>' ;
		echo " <td> $ fila [ 3 ] </td> ";
		eco  '<br>' ;
		echo " <td><img class='imagen' src=' ". $ fila [ 4 ]." '></td> ";
		eco  '<br>' ;
    echo "<td> $row ['comentario']</td>";
    echo '<br>';
		eco " </tr> ";
		echo " </tabla> ";
		}
		?>
			</ div >
		</ div >
	</ cuerpo >
</ html >
