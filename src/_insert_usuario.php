<?php
  include './conexao.php';
  include './script/password.php';

  $nomeusuario = $_POST['nomeusuario'];
  $mail = $_POST['mailusuario'];
  $senhausuario = $_POST['senhausuario'];
  $nivel = $_POST['nivelusuario'];

  $sql = "INSERT INTO usuarios (nome, email, senha, nivel) values ('$nomeusuario', '$mail', sha1('$senha'), $nivel)";

  $inserir = mysqli_query($conexao, $sql);
?>