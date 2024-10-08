<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Aprovar Usuário</title>

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
  <div class="container" style="margin-top: 40px; ">
    
    <h3>Lista de Usuários</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome Usuário</th>
          <th scope="col">Email</th>
          <th scope="col">Nível</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
          <?php
            include './conexao.php';

            $sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
              $id = $array['id'];
              $nome = $array['nome'];
              $email = $array['email'];
              $nivel = $array['nivel'];

          ?>
        <tr>
          <td><?php echo $nome ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $nivel ?></td>
          <td>
            <a class="btn btn-success btn-sm" style="color: #fff" href="./_aprovar_usuario.php?id=<?php echo $id ?>&nivel=1" role="button"><i class="fa fa-smile-beam"></i>&nbsp;Administrador</a>
            <a class="btn btn-warning btn-sm" style="color: #fff" href="./_aprovar_usuario.php?id=<?php echo $id ?>&nivel=2" role="button"><i class="fa fa-smile-beam"></i>&nbsp;Funcionario</a>
            <a class="btn btn-dark btn-sm" style="color: #fff" href="./_aprovar_usuario.php?id=<?php echo $id ?>&nivel=3" role="button"><i class="fa fa-smile-beam"></i>&nbsp;Conferente</a>

            <a class="btn btn-danger btn-sm" href="./_deletar_usuario.php?id=<?php echo $id ?>&nvel=<?php echo $nivel?>" role="button"><i class="fa-solid fa-trash-alt"></i>&nbsp;Excluir</a>
          </td>
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