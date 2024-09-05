<?php
  include './conexao.php';

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $nivel = $_POST['nivel'];
  $status = $_POST['status'];

  $sql = "UPDATE `usuarios` SET `nome` = '$nome', `email` = '$email', `nivel` = $nivel, `status` = '$status' WHERE id = $id";
  $atualizar = mysqli_query($conexao, $sql)
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous"
>

<div class="container" style="width: 500px; margin-top: 20px;">
  <center>
    <h4>Atualizado com Sucesso</h4>
    <div style="padding-top: 20ppx;">
      <center>
        <a href="./listar_usuarios_ativos.php" role="button" class="btn btn-sm btn-warning">Voltar</a>
      </center>
    </div>
</div>
