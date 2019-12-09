<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="../css/esporte.css">
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
<h1>Por que Lewis Hamilton caminha cada vez mais para ser o maior de todos os tempos na Fórmula 1</h1>
<h4>Inglês vem sendo o melhor não apenas em um ou outro aspecto, mas em todos os quesitos que formam um grande campeão; bater recorde de Michael Schumacher é questão de tempo</h4>

<p>Em 2018, durante o GP de Singapura, pela primeira vez disse durante uma transmissão que Lewis Hamilton estava caminhando para se tornar o maior piloto de todos os tempos na Fórmula 1. E a cada vitória, a cada título do inglês, como o hexacampeonato conquistado no último fim de semana, tenho mais certeza disso.
</p>

<div class="imgn">
    <div class="figure">
        <figure><img src="../img/esporte.jpg" width="500" height="300"> </figure>
    </div> </div>
<p>Se compararmos as características dele com as de qualquer outro piloto, como velocidade, agressividade, inteligência, domínio da corrida, trabalho em equipe, ele é o melhor em todas. Em algumas, ele divide com outros, como com o Ayrton Senna na velocidade e na superação, com o Michael Schumacher no cálculo, com o Nelson Piquet no entendimento da corrida em começo, meio e fim, mas ele supera todos no conjunto. Ele tem todas as qualidades desses campeões, mas é o melhor em todas.</p>
<p>O talento do Hamilton já era suficiente para ele chegar entre os maiores da história. No começo de carreira, o que ele teve de fazer foi dominar esse ímpeto de quem vem de uma origem humilde e se sobressai. Isso acontece com muitos que se destacam na arte - e o que ele faz é uma arte - mas se perdem na grandeza que se adquire perante o público.</p>
<p>Isso aconteceu nos primeiros anos de carreira, não no primeiro ou segundo, já que ele foi campeão pela primeira vez logo na segunda temporada, mas logo depois. E aí foi quando ele desfocou da Fórmula 1 e se dedicou à música, à arte, à convivência noturna, que todo jovem tem direito.</p>
<div class="imgn">
    <figure><img src="../img/esporte1.jpg" width="400" height="300"> </figure>
</div>
<p>O único que conseguiu efetivamente derrotá-lo dentro da mesma equipe foi Nico Rosberg. Eles dividiram corridas, e o alemão conseguiu minar um pouquinho a concentração dele. Mas o campeonato de 2016 foi perdido pelo Hamilton com uma raríssima quebra do motor Mercedes na Malásia. Hoje tem o Max Verstappen, mas são de gerações diferentes. De qualquer forma, o adversário que vier, o Hamilton vai traçar.</p>
<p>O piloto com o qual Hamilton se parece mais é Ayrton Senna. Principalmente na superação das dificuldades. Nos últimos dias, ouvi o Emerson Fittipaldi dizer que um dos aspectos mais marcantes do Hamilton é que ele consegue dar tudo dele mesmo quando o carro não está bom. Isso é muito difícil para um piloto. O próprio Alonso quando não tinha um carro bom, desistia e apenas queria terminar a corrida.</p><br>
   
<span class="tituloclass">Classificação de 2019</span><br>

<?php
include_once("../conexao/conexao.php");

$sql =
"SELECT * FROM esporte";
if($result = mysqli_query($connection, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table class='tg'>";
echo "<tr>";
echo "<th class='tg-7btt'>Pos</th>";
echo "<th class='tg-7btt'>Piloto</th>";
echo "<th class='tg-7btt'>Pontos</th>";
echo "<th class='tg-7btt'>Vitorias</th>";
echo "<th class='tg-7btt'>Pódios</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td class='tg-c3ow'>" . $row['posicao'] . "º</td>";
echo "<td class='tg-c3ow'>" . $row['piloto'] . "</td>";
echo "<td class='tg-c3ow'>" . $row['pontos'] . "</td>";
echo "<td class='tg-c3ow'>" . $row['vitorias'] . "</td>";
echo "<td class='tg-c3ow'>" . $row['podios'] . "</td>";
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
<br>
Fonte: <a href="https://globoesporte.globo.com/blogs/sinal-verde/post/2019/11/04/por-que-lewis-hamilton-caminha-cada-vez-mais-para-ser-o-maior-de-todos-os-tempos-na-formula-1.ghtml" target="_self">G1</a>
</div>
</div>
</body>
</html>