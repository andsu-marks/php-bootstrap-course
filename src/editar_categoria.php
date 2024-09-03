<?php
  include './conexao.php';

  echo $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formulário de Atualização</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous"
  >

  <style type="text/css">

    #tamanhoContainer {
      width: 500px;
    }

    #botao {
      background-color: #FF1168;
      color: #ffffff;
    }

  </style>
</head>
<body>
  <div class="container" id="tamanhoContainer" style="margin-top: 40px">
  <h4>Atualizar Categoria</h4>
    <form action="./_atualizar_categoria.php" method="post" style="margin-top: 20px;">
      <?php
        $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
        $buscar = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($buscar)) {
          $id_categoria = $array['id_categoria'];
          $categoria = $array['categoria'];
      ?>

      <div class="form-group">
        <label>Nome Categoria</label>
        <input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?>">
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
      </div>

      <div style="text-align: right;">
        <button type="submit" class="btn btn-sm" id="botao">Atualizar</button>
      </div>
      <?php } ?>
    </form>
  </div>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"
  >
  </script>
</body>
</html>