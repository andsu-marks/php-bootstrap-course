<?php

$servername = "db";  // Nome do serviço MySQL no docker-compose.yml
$database = "php-bootstrap";
$username = "php";
$password = "root";

$conexao = mysqli_connect($servername, $username, $password, $database);

?>