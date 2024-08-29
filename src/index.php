<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formulário de Cadastro</title>

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
  <h4>Formulário de Cadastro</h4>
    <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
      <div class="form-group">
        <label>Nro Produto</label>
        <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required>
      </div>

      <div class="form-group">
        <label>Nome Produto</label>
        <input type="text" class="form-control" name="nomeproduto"placeholder="Insira o nome do produto" required>
      </div>

      <div class="form-group">
        <label>Categoria</label>
        <select class="form-control" name="categoria" required>
          <option>Periférico</option>
          <option>Hardware</option>
          <option>Software</option>
          <option>Celulares</option>
        </select>
      </div>

      <div class="form-group">
        <label>Quantidade</label>
        <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required>
      </div>

      <div class="form-group">
        <label>Fornecedor</label>
        <select class="form-control" name="fornecedor" required>
          <option>Fornecedor A</option>
          <option>Fornecedor B</option>
          <option>Fornecedor C</option>
        </select>
      </div>
      <div style="text-align: right;">
        <button type="submit" class="btn btn-sm" id="botao">Cadastrar</button>
      </div>
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