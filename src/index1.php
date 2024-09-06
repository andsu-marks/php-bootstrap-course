<?php
  session_start();
  include './conexao.php';

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = "SELECT email, senha FROM usuarios WHERE email = '$usuario' and status = 'Ativo'";
  $buscar = mysqli_query($conexao, $sql);

  if (!$buscar) {
    die("Erro na consulta SQL: " . mysqli_error($conexao));
  }

  $total = mysqli_num_rows($buscar);

  while ($array = mysqli_fetch_array($buscar)) {
    $senhadobanco = $array['senha'];
    $senhadecodificada = sha1($senha);

    if ($total> 0) {
      if($senhadecodificada == $senhadobanco) {
        $_SESSION['usuario'] = $usuario;

        header('Location: menu.php');
      }else{
        header('Location: erro.php');
      }
    }else{
      header('Location: erro.php');
    }
  }
?>