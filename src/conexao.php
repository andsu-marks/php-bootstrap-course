<?php

$servername = "db";  // Nome do serviço MySQL no docker-compose.yml
$database = "php-bootstrap";
$username = "php";
$password = "root";

// Cria a conexão
$conexao = mysqli_connect($servername, $username, $password, $database);

// Verifica a conexão
// if (!$conexao) {
//     die("Falha na conexão: " . mysqli_connect_error());
// }

// Avisa que a conexão foi bem-sucedida (opcional, mas não necessário)
// echo "Conectado com sucesso"; // Remova ou comente esta linha
?>