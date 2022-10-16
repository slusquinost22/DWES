<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
	<head>
		<style>
		body{
		font-family: 'helvetica neue', helvetica, arial, sans-serif;	
		}

		table, tr, th, td {
		text-align: center;
		}
		
		table {
		table-layout: auto;
		border-collapse: separate;
		font-size: 12px;
		margin: -10px;
		width: 600px;
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
		

		.hijo1 {
		position: absolute;
		float: left;
		top: 20px;
		left: 115px;
		margin: 1% 0 0 1px;
		}

		.hijo2{
		position: absolute;
		float: left;
		margin-left: 8%;
		margin-top: 25%;
		}
		
		.hijo3{
		position: absolute;
		float: left;
		margin-top: 7%;
		margin-left: 55%;
		}

		p {
		font-weight: bold;
		font-size: 15px;
		letter-spacing: 1px;
		}
			
		h1{
		font-size: 25px;
		text-decoration-line: underline;
		color:  #aabcfe;
		letter-spacing: 1px;
		font-weight: bold;
		}
			
		.cuadrotexto {
		background:  #e8edff;
        	border: solid 2px #aabcfe;
        	border-radius: 4px;
        	padding: 2%;
		}

		.boton {
		background: #b9c9fe;
		border-top: 4px solid #aabcfe;
		border-bottom: 4px solid #aabcfe;
		border-left: 4px solid #aabcfe;
		border-right: 4px solid #aabcfe;
		}

		img.imagen{width: 110px; height: 150px;}
		</style>
	</head>
	<body>
		<div class= "hijo1">

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
		echo "<th> ID </th>";
		echo "<th> Título </th>";
		echo "<th> Director </th>";
		echo "<th> Género </th>";
		echo "<th> Cartel </th>";
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
		echo "</table>";
		?>
		</div>
			<div class="hijo3">
				<h1>Comentarios: </h1>
			<?php
			$query2 = 'SELECT * FROM tComentarios WHERE pelicula_id='.$pelicula_id;
			$result2 = mysqli_query($db, $query2) or die('Query error');
			while ($row = mysqli_fetch_array($result2)) {
			echo '<br>';
			echo '<li>'.$row[1]., .$row[4].'</li>';
			echo '<br>';
			}
			mysqli_close($db);
			?>
			</div>
		
			<div class= "hijo2">
			<p>Deja un nuevo comentario:</p>
			<form action="/comment.php" method="post">
			<textarea class="cuadrotexto" rows="4" cols="50" name="new_comment"></textarea><br><br>
			<input type="hidden" name="pelicula_id" value="<?php echo $pelicula_id; ?>">
			<input class="boton" type="submit" value="Comentar">
			</form>
			</div>
	</body>
</html>
