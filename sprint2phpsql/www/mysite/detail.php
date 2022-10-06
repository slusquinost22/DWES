<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
	<body>
		<h1>Conexión establecida</h1>
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
		$query = 'SELECT c.comentario, p.* FROM tComentarios c, tPeliculas p WHERE c.pelicula_id=p.id;';
		$result = mysqli_query($db, $query) or die ('Query error');
		while ($row = mysqli_fetch_array($result)) {
		echo "<table>";
		echo "<tr>";
		echo "<th> 'ID' </th>";
		echo "<th> 'Título' </th>";
		echo "<th> 'Director' </th>";
		echo "<th> 'Género' </th>";
		echo "<th> 'Cartel' </th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><a href='/detail.php?id=<id>'>$row[0]</a></td>";
		echo '<br>';
		echo "<td>$row[1]</td>";
		echo '<br>';
		echo "<td>$row[2]</td>";
		echo '<br>';
		echo "<td>$row[3]</td>";
		echo '<br>';
		echo "<td><img class='imagen' src='".$row[4]."'></td>";
		echo '<br>';
		echo "<td>$row['c.comentario']</td>;
		echo '<br>';
		echo "</tr>";
		echo "</table>";
		}
		?>
			</div>
		</div>
	</body>
</html>
