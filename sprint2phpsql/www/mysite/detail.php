<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
	<body>
		<style>
		table, tr, th, td{
		text-align: center;
		font-family: 'helvetica neue', helvetica, arial, sans-serif;
			}

		table {
		table-layout: auto;
		border-collapse: separate;
		font-size: 12px;
		margin: -10px;
		width: 550px;
		}

		th {
		background: #b9c9fe;
		border-top: 4px solid #aabcfe;
		border-bottom: 4px solid #aabcfe;
		letter-spacing: 2px;
		padding: 8px;	
		}

		td {
		padding: 2px;
		background: #e8edff;
		border-bottom: 1px solid #fff;
		color: #669;
		border-top: 1px solid #aabcfe;
		letter-spacing: 1px;
		}
		
		.contenedor {
		position: relative;
		}

		.hijo {
		position: absolute;
		top: 20%;
		left: 30%;
		margin: 1% 0 0 1px;
		}

		img.imagen{width: 110px; height: 150px;}

		</style>
		<div class= "contenedor">
			<div class= "hijo">

		<?php
		if (!isset($_GET['pelicula_id'])) {
			die('No se ha especificado una pelicula');
		}
		$pelicula_id = $_GET['pelicula_id'];
		$query = 'SELECT * FROM tPeliculas WHERE id='.$pelicula_id;
		$result = mysqli_query($db, $query) or die('Query error');
		$only_row = mysqli_fetch_array($result);
		
		echo "<table>";
		echo "<tr>";
		echo "<th> 'ID' </th>";
		echo "<th> 'Título' </th>";
		echo "<th> 'Director' </th>";
		echo "<th> 'Género' </th>";
		echo "<th> 'Cartel' </th>";
		echo "<th> 'Comentatio' </th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$only_row[0]</td>";
		echo '<br>';
		echo "<td>$only_row[1]</td>";
		echo '<br>';
		echo "<td>$only_row[2]</td>";
		echo '<br>';
		echo "<td>$only_row[3]</td>";
		echo '<br>';
		echo "<td><img class='imagen' src='$only_row[4]'></td>";
		echo "</tr>";
		
		

		?>
		<h3>Comentarios:</h3>
		<ul>
			<?php
			$query2 = 'SELECT * FROM tComentarios WHERE pelicula_id='.$pelicula_id;
			$result2 = mysqli_query($db, $query2) or die('Query error');
			while ($row = mysqli_fetch_array($result2)) {
			echo '<br>';
			echo "<td>$row['comentario']</td>";
			echo '<br>';
			echo "</table>";
			}
			mysqli_close($db);
			
			?>
		</ul>
			</div>
		</div>

	</body>
</html>
