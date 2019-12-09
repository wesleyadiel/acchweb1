<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<html>
    <head>
	   <title>Educação</title>
	   <link rel="stylesheet" type="text/css" href="../css/educacao.css">
	   <link rel="stylesheet" type="text/css" href="../css/menu.css">
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
            <div class="titulo">
                <h1>Educação Espartana</h1>
                <div class="figureprincipal">
                    <figure><img src="../img/educacao1.jpg" width="500" height="300"> </figure>
                </div>
            </div>
            <p>
                Esparta foi uma cidade estado grega que tinha como principal característica um estado oligárquico e militarista. Tinha como um de seus principais objetivos fazer de seus cidadãos modelos de soldados, fortes, corajosos, bem treinados e obediente
            </p>
            <p>
                Dessa maneira, toda a educação espartana estava voltada para o caráter militarista, tendo a criança desde pequena, que se preparar para se tornar um soldado futuramente.
            </p>    
            <p>
                Esse processo de formação militar começava quando ainda criança, quando um grupo de anciãos observava as crianças, que não poderiam ter problemas físicos e de saúde. Caso a criança fosse completamente saudável ela ficaria sob a guarda da sua mãe até os sete anos de idade; após, quem se tornaria responsável pela criança era o próprio Estado.
            </p>
            <p>
                Assim, ao sete anos, a criança “entrava” para o exército onde permaneceria até seus doze anos de idade, quando receberia alguns ensinamentos para que conhecessem a dinâmica do estado Espartano e principalmente as tradições de seu povo, e após esses ensinamentos entrariam de fato em um treinamento militar.
            </p>
            <figure class="figure">
                <img src="../img/educacao2.jpg" width="400" height="290"></figure>
            </figure>
            <p>
                Aprendiam a combater com eficácia, eram testados fisicamente, resistência física e psicológica, sobrevivência em condições extremas e diversas, e principalmente aprendiam a obedecer seus superiores. Se por algum acaso esses jovens soldados não conseguissem completar essas missões pela qual eram submetidos, ocorriam punições. 
            </p>
            <p>
                O teste final na vida do soldado espartano era realizado aos seus 17 anos. Esse teste era conhecido como Kriptia e funcionava como um jogo, onde os soldados escondiam de dia em campo para ao anoitecer, saírem a caça do maior numero de escravos (hilotas) possíveis. 
            </p>
            <p>
                Passando por esses processos de seleções o jovem espartano já poderia integrar oficialmente os exércitos e teria direito também a um lote de terras.
            </p>
            <p>
                Aos trinta anos de idade o soldado poderia ganhar a condição de cidadão e isso o dava o direito de participar de todas as decisões e leis que seriam colocadas na mesa pela Apela (uma especie de assembleia que tinha como função vetar leis, além de indicar indivíduos para compor a classe diretora de Esparta, conhecida como Gerúsia).
            </p>
            <p>
                Aos sessenta anos o individuo poderia sair do exercito podendo integrar a Gerúsia, o órgão formado por anciãos que eram responsáveis pela criações de leis em Esparta.
            </p>
            <p>
                Dessa maneira, podemos perceber que a vida da sociedade espartana girava em volta do caráter militar da cidade, onde a criança já começava a prestar serviços militares ao estado espartano só sendo liberada aos sessenta anos.
            </p>
            <p>Esta é uma lista de espartanos na antiguidade clássica, incluindo reis, tiranos, generais, almirantes, legisladores e demagogos:
            </p>

            <?php
include_once("../conexao/conexao.php");
$sql =
"SELECT * FROM educacao";
if($result = mysqli_query($connection, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Ano</td>";
echo "<td>Tipo</td>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['ano'] . "</td>";
echo "<td>" . $row['tipo'] . "</td>";
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
    </div>
    </body>
</html>