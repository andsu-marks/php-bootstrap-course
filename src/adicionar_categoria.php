<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Categoria</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

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
    <h4>Adicionar Categoria</h4>

    <form action="_inserir_categoria.php" method="post" style="margin-top: 20px;">
      <div class="form-group">
        <label>Categoria</label>
        <input type="text" class="form-control" name="categoria" placeholder="Adicione uma nova gategoria" required>
      </div>

      <div style="text-align: right;">
        <a href="./menu.php" class="btn btn-sm btn-primary" id="button">Voltar</a>
        <button type="submit" class="btn btn-sm" id="botao">Adicionar Categoria</button>
      </div>
    </form>
  </div>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>
</html>