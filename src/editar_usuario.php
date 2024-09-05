<?php
  include './conexao.php';

  $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Atualizar Usuário</title>

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
  <h4>Atualizar Usuário</h4>
    <form action="./_atualizar_usuario.php" method="post" style="margin-top: 20px;">
      <?php
        $sql = "SELECT * FROM `usuarios` WHERE id = $id";
        $buscar = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($buscar)) {
          $id = $array['id'];
          $nome = $array['nome'];
          $email = $array['email'];
          $nivel = $array['nivel'];
          $status = $array['status'];
      ?>

      <div class="form-group">
        <label>nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
      </div>

      <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
      </div>

      <div class="form-group">
        <label>Nível</label>
        <select class="form-control" name="nivel" value="<?php echo $nivel ?>">
          <option value="1">Administrador</option>
          <option value="2">Funcionario</option>
          <option value="3">Conferente</option>
        </select>
      </div>

      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status" value="<?php echo $status ?>">
          <option>Ativo</option>
          <option>Inativo</option>
        </select>      </div>

      <div style="text-align: right;">
        <a href="./listar_usuarios_ativos.php" class="btn btn-sm btn-primary" id="button">Voltar</a>
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