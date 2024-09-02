<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Listagem de Categorias</title>

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
  <div class="container" style="margin-top: 40px; width: 500px;">
    
    <h3>Lista de Categorias</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome Categoria</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
          <?php
            include './conexao.php';

            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
              $id_categoria = $array['id_categoria'];
              $categoria = $array['categoria'];
          ?>
        <tr>
          <td><?php echo $categoria ?></td>
          <td>
            <a class="btn btn-warning btn-sm" href="./editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" href="./deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-trash-alt"></i>&nbsp;Excluir</a>
          </td>
        </tr>

        <?php } ?>
    </table>
    <div style="text-align: right">
      <a href="./index.php" class="btn btn-sm btn-primary" id="button">Voltar</a>
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