<?php
  include './conexao.php';

  $id = $_POST['id'];
  $categoria = $_POST['categoria'];

  $sql = "UPDATE categoria SET categoria = '$categoria' WHERE id_categoria = $id";
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
        <a href="./listar_categorias.php" role="button" class="btn btn-sm btn-warning">Voltar</a>
      </center>
    </div>
</div>
