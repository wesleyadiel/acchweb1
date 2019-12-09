<?php
include_once("../conexao/conexao.php");
$sql =
"SELECT * FROM news3";
$result = mysqli_query($connection, $sql);

$connection->set_charset('utf8')

    ?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/news3.css">
<link rel="stylesheet" type="text/css" href="../css/menu.css">
<title>Projeto 2</title>
</head>

<body>
	<div class="header">
		<div id="logo"><img src="../img/logo.png" width="100" height="100" class="swing"></div>
		</div>
<nav id="menu">
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="esporte.php">Esportes</a></li>
		<li><a href="educacao.php">Educação</a></li>
		<li><a href="saude.php">Saúde</a></li>
		<li><a href="contato.php">Contato</a></li>
	</ul>
</nav>
<div class="content">
<h1> Homem usa drone para jogar explosivos sobre a casa da ex-namorada </h1>
<h4> Jason Muzzicato foi preso pelo FBI após um mandado em sua oficina e em sua casa </h4>


<figure class="figureprincipal">
<img src="../img/news3.jpg" width="400" height="300" class="swing"></figure>

<p class="p1">Promotores acusaram um mecânico de usar um drone para jogar bombas sobre a casa de sua ex-namorada em Washington Township, no estado da Pensilvânia (EUA).</p>

<p class="p2">Jason Muzzicato foi preso pelo FBI após um mandado em sua oficina e em sua casa no dia 9 de junho. Ao averiguar os locais, eles encontraram 10 revólveres, incluindo múltiplas pistolas semiautomáticas e fuzis AR-15, além de sete aparatos explosivos feitos à mão, segundo o Lenigh Valley Live. Ele não podia ter armas devido a uma medida protetiva por violência doméstica de 2017.</p>

<p class="p3">Muzzicato foi acusado neste mês por crimes relacionados à posse de armas de fogo e explosivos, além de pilotar um drone DJI Phantom 3 que não estava registrado na FAA (Administração Federal de Aviação dos EUA).</p>

<p class="p4">Especificações Drone</p>
<div class="p5">
<?php while($dado = $result->fetch_array()) { ?>
<table>
<tr>
	<td>Weight (Battery & Propellers Included)</td>
	<td><?php echo $dado['weight']; ?></td>
</tr>
<tr>
	<td>Diagonal Size (Propellers Excluded)</td>
	<td><?php echo $dado['diagonal_size']; ?></td>
</tr>
<tr>
	<td>Max Ascent Speed</td>
	<td><?php echo $dado['max_ascent']; ?></td>
</tr>
<tr>
	<td>Max Descent Speed</td>
	<td><?php echo $dado['max_descent']; ?></td>
</tr>
<tr>
	<td>Max Speed</td>
	<td><?php echo $dado['max_speed']; ?></td>
</tr>
<tr>
	<td>Max Tilt Angle</td>
	<td><?php echo $dado['max_tilt']; ?></td>
</tr>
<tr>
	<td>Max Angular Speed</td>
	<td><?php echo $dado['max_angular']; ?></td>
</tr>
<tr>
	<td>Max Service Ceiling Above Sea Level</td>
	<td><?php echo $dado['max_service']; ?></td>
</tr>
<tr>
	<td>Max Flight Time</td>
	<td><?php echo $dado['max_flight']; ?></td>
</tr>
<tr>
	<td>Operating Temperature Range</td>
	<td><?php echo $dado['temper']; ?></td>
</tr>
<tr>
	<td>Satellite Positioning Systems</td>
	<td><?php echo $dado['satellite']; ?></td>
</tr>
</table>
<?php } ?>

</div>


 <figure class="figure3"><img src="../img/img2news3.jpg"  width="400" height="300" class="zoom"></figure>

<p class="p6">De acordo com o jornal Morning Call, da Pensilvânia, o promotor assistente John Gallagher disse que foi registrado na segunda-feira numa corte federal que Muzzicato usou um drone para soltar um explosivo na propriedade de sua ex-namorada e que ele deveria ficar detido.</p>

<p class="p7">“Não precisa imaginar muito o enorme estrago que pode resultar da combinação de armas ilegais, explosivos e drones”, disse o promotor William McSwain em um comunicado à imprensa sobre o caso.</p>

<p class="p8">Muzzicato não foi acusado formalmente por detonar explosivos. O advogado de defesa John Waldron disse que Muzzicato não usou drones para jogar bombas em terceiros. “Não temos evidências conclusivas, e quando meu cliente foi interrogado pelo FBI, ele negou isso”, disse Waldron, segundo o Morning Call.</p>

<p class="p9">Waldron ao FBI que os investigadores estão analisando os dispositivos de Muzzicato usados para fazer o drone voar. A ideia é checar onde e quando o drone voou.</p>

</div>
</body>
</html>