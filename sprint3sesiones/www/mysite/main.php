<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
	<body>
		<h1>PELICULAS</h1>
		<div class="Logout">
			<a href='logout.php'>Logout</a>
		</div>

		<style>
		table, tr, th, td, .Logout, h1{
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

		th, .Logout {
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

		td.desliza{
		transition: background-color 0.8s linear 0.5s;
		}

		td.desliza:hover{
		padding:2px;
		background: #b9c9fe;
		border-top: 4px solid #aabcfe;
		border-bottom: 4px solid #aabcfe;
		letter-spacing: 1px;
		}

		td.desliza:hover{
		animation-duration:3s;
		animation-name: slide;
		animation-fill-mode: forwards;
		}
		@keyframes slide{
			from{
			margin-left:100%;
			width:300%;
			}
			to{
			margin-left: 0%;
			width: 100%;
			font-size: 25px;
			}
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

		img.imagen{
		width: 110px; 
		height: 150px;
		transition: width 0.5s, height 0.5s;
		transition-timing-function:ease-in-out;
		transition-delay: 0.3s;
		}
		
		img.imagen:hover{
		width:310px;
		height:450px;
		}
		
		.Logout {
		float:right;
		width:6%;
		height: 3%;
		border-style: solid;
		text-align: center;
		margin-right: 5%;
		border-left: 4px solid #333c87;
		border-right: 4px solid #333c87;
		margin-top:-4%;
		}

		a.enlace {
		display: inline-block;
		position: relative;
		color: #333;
		background-color: none;
		border: none;
		border-color: none;
		text-decoration: none;
		width: 30px;
		height: 15px;
		transition: width 0.5s, height: 0.5s;
		}

		a.enlace:hover{
		color: #fff;
		background-color: #000;
		animation-name: enlace;
		animation-duration: 4s;
		animation-iteration-count:infinite;
		border: solid 5px;
		border-color: #fff;
		}

		@keyframes enlace{
		0%{ top: 2px; bottom: 6px;}
		50%{top:6px; bottom: 6px;}
		100%{top: 6px bottom: 2px;}

		}


		h1{
		font-size: 55px;
		color: #000;
		text-shadow:-2px -2px 2px #0000DF, 2px -2px 2px #0000DF, -2px 2px 2px #0000DF, 2px 2px 2px #0000DF;
		animation-name: peliculas;
		animation-duration: 4s;
		animation-iteration-count:infinite;
		width: 350px;
		margin-left: 35%;
		top: 6%;
		position: relative;
		letter-spacing: 4px;
		}

		@keyframes peliculas{
		0%{color: #3b83bd; left: 0.25%; right: 0.75%;}
		25%{color: #417dc1; left: 0.75% right: 0.75%;}
		50%{color: #0096d2; left: 0.75%; right: 0.75%;}
		75%{color: #4682b4; left: 0.25%; right: 0.75%;}
		100%{color: #8892c6; left: 0.25%; right: 0.75%;}}
		</style>
		<div class= "contenedor">
			<div class= "hijo">
		<?php
		$query = 'SELECT * FROM tPeliculas';
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
		echo "<td><a class='enlace' href='/detail.php?pelicula_id=".$row[0]."'> $row[0] </a></td>";
		echo '<br>';
		echo "<td class= 'desliza'>$row[1]</td>";
		echo '<br>';
		echo "<td>$row[2]</td>";
		echo '<br>';
		echo "<td>$row[3]</td>";
		echo '<br>';
		echo "<td><img class='imagen' src='".$row[4]."'></td>";
		echo '<br>';
		echo "</tr>";
		echo "</table>";
		}

		?>
			</div>
		</div>
	</body>
</html>
