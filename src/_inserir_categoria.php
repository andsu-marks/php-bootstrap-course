<?php
  include './conexao.php';

  $categoria = $_POST['categoria'];

  $sql = "INSERT INTO categoria (categoria) values ('$categoria')";
  echo $inserir = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px;">
  <center>
    <h4>Categoria Adicionada com Sucesso</h4>
    <div style="padding-top: 20ppx;">
      <center>
        <a href="./adicionar_categoria.php" role="button" class="btn btn-sm btn-primary"> Cadastrar Nova Categoria</a>
      </center>
    </div>
</div>