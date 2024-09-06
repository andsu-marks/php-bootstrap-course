<?php
  session_start();

  
  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit(); // Certifique-se de que o script pare aqui
  }
  
  $usuario = $_SESSION['usuario'];
  include './conexao.php';

  $sql = "SELECT nivel FROM usuarios WHERE email = '$usuario' and status = 'Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivelacesso = $array['nivel'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Listagem de Produtos</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous"
  >

  <style type="text/css">
    body {
    font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body>
  <div class="container" style="margin-top: 40px;">
    
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nro Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>

          <?php
            if(($nivelacesso == 1) || ($nivelacesso == 2)) {
          ?>

          <th scope="col">Ação</th>

          <?php } ?>

        </tr>
      </thead>
          <?php
            include './conexao.php';

            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
              $id_estoque = $array['id_estoque'];
              $nroproduto = $array['nroproduto'];
              $nomeproduto = $array['nomeproduto'];
              $categoria = $array['categoria'];
              $quantidade = $array['quantidade'];
              $fornecedor = $array['fornecedor'];
          ?>
        <tr>
          <td><?php echo $nroproduto ?></td>
          <td><?php echo $nomeproduto ?></td>
          <td><?php echo $categoria ?></td>
          <td><?php echo $quantidade ?></td>
          <td><?php echo $fornecedor ?></td>

          <?php
            if(($nivelacesso == 1) || ($nivelacesso == 2)) {
          ?>

          <td>
            <a class="btn btn-warning btn-sm" href="./editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" href="./deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash-alt"></i>&nbsp;Excluir</a>
          </td>

          <?php } ?>

        </tr>

        <?php } ?>
    </table>
    <div style="text-align: right">
      <a href="./menu.php" class="btn btn-sm btn-primary" id="button">Voltar</a>
    </div>
  </div>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"
  >
  </script>
</body>
</html>