<?php
include_once("conexao.php");

$sql =
"SELECT * FROM contato";
if($result = mysqli_query($connection, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Sobrenome</th>";
echo "<th>Telefone</th>";
echo "<th>Obs</th>";
echo "<th>E-mail</th>";
echo "<th>Data</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['sobrenome'] . "</td>";
echo "<td>" . $row['telefone'] . "</td>";
echo "<td>" . $row['observacao'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['date'] .  "</td>";
echo "</tr>";
}
echo "</table>";
// Free result set
mysqli_free_result($result);
} 
else{
    echo "No records matching your query were found.";
    }
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
    // Close connection
    mysqli_close($connection);
    ?>