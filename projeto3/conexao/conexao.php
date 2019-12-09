<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "projeto3";

$connection = mysqli_connect($server, $user, $password, $db);

mysqli_set_charset($connection,"utf8");

?>