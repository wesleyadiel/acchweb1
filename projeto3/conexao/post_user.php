<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$observacao = $_POST['observacao'];
$email = $_POST['email'];
$data = date('d/m/y');
$sql_insert =
"INSERT INTO contato (nome,sobrenome,telefone,observacao,email,date) VALUES ('$nome', '$sobrenome','$telefone', '$observacao', '$email','$data')";
$result_query = mysqli_query($connection, $sql_insert);

echo "Seu contato foi realizado com sucesso!<br>Agradecemos a atenção.";

?>