<?php
  include './conexao.php';
  include './script/password.php';

  $nome = $_POST['nomeusuario'];
  $mail = $_POST['mailusuario'];
  $senha = $_POST['senhausuario'];
  $status = 'Inativo';

  $sql = "INSERT INTO usuarios (nome, email, senha, nivel, status) values ('$nome', '$mail', sha1('$senha'), 0, '$status')";

  $inserir = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px;">
  <center>
    <h4>Usuário Adicionado com Sucesso, esperando aprovação</h4>
    <div style="padding-top: 20ppx;">
      <center>
        <a href="./cadastro_usuario_externo.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
      </center>
    </div>
</div>