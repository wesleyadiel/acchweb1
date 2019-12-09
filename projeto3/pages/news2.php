<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="../css/news2.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<title>Projeto 2</title>
</head>

<body>
	<div class="header">
		<div id="logo"><img src="../img/logo.png" width="100" height="100"></div>
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
<h1> Verizon vai inaugurar rede 5G em Nova Iorque neste mês </h1>
<h4> Operadora já oferece cobertura em 11 cidades, e espera atingir metade dos EUA em 2020 </h4>


<figure>
<img src="../img/news2.jpg" width="400" height="300" class="threed"></figure>

<p class="p1">A operadora norte-americana Verizon anunciou que irá inaugurar sua rede 5G em <strong>Nova Iorque em 26 de Setembro</strong>. Inicialmente, as áreas cobertas serão uptown, midtown e downtown Manhattan, além de algumas partes do Brooklyn, Bronx e Queens. </p>

<p class="p2">Com isso a rede 5G da empresa chegará a 11 cidades, embora em muitas delas a cobertura seja apenas parcial. Segundo a empresa, o objetivo é oferecer cobertura 5G a metade dos EUA até 2020. A tecnologia usada na rede é conhecida como <i>“millimeter wave”, que oferece grande capacidade de dados, mas tem curto alcance, exigindo mais torres para cobrir uma determinada área</i>.</p>

<p class="p3">São Paulo — Um dos principais eventos econômicos previstos para 2020, o leilão do 5G no Brasil já é palco de disputa tecnológica entre Estados Unidos e China. Sob alegação de espionagem, roubo de dados e risco real de ataques a estruturas críticas por meio dos equipamentos chineses, o presidente Donald Trump tem feito pessoalmente lobby para que a chinesa Huawei seja excluída das principais disputas pelo 5G no mundo.

<p class="p4">Mas apesar dessa pressão, não deve haver nenhum tipo de barreira ao uso de equipamentos da gigante chinesa pela Agência Nacional de Telecomunicações (Anatel), órgão regulador do setor, apurou o Broadcast, sistema de notícias em tempo real do Grupo Estado.

<p class="p5">A Huawei já tem mais de um terço da infraestrutura de redes de telefonia móvel no País, além de contratos com vários órgãos do governo federal. A companhia chinesa foi escolhida pela Anatel para realizar todos os testes do 5G no Brasil junto com as principais teles – Oi, Tim, Claro, Vivo e Algar – que devem disputar o leilão do próximo ano.

<figure>
<img src="../img/news2-2.jpg" width="400" height="300" class="grow"></figure>

<p class="p6">Trump levantou a questão na visita de Jair Bolsonaro à Casa Branca, em março deste ano. No fim de julho, foi o secretário de Comércio dos Estados Unidos, Wilbur Ross, que desembarcou no Brasil com supostas informações sobre a vunerabilidade dos equipamentos chineses. Recentemente demitido por Trump, o ex-conselheiro de Segurança Nacional dos EUA John Bolton se encontrou com autoridades brasileiras no começo de agosto. </p>

<h2> Operadoras e cidades Atendidas com 5G </h2>
<?php
include_once("../conexao/conexao.php");


$sql =
"SELECT * FROM news2";
if($result = mysqli_query($connection, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th>Cidade</th>";
echo "<th>Operadora</th>";
echo "<th>Tecnologia</th>";
echo "<th>Targeted</th>";
echo "<th>Dispositivos</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['cidade'] . "</td>";
echo "<td>" . $row['operadora'] . "</td>";
echo "<td>" . $row['tecnologia'] . "</td>";
echo "<td>" . $row['targeted'] . "</td>";
echo "<td>" . $row['device'] . "</td>";
echo "</tr>";
}
echo "</table>";
// Free result set
mysqli_free_result($result);
} 
else{
    echo "Não há dados no banco";
    }
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
    // Close connection
    mysqli_close($connection);
    ?>
</div>

</body>
</html>