<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Produto</h5>
            <p class="card-text">Opção para Adicionar Produtos em Nosso Estoque</p>
            <a href="./adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Produtos</h5>
            <p class="card-text">Visualizar, Editar e Excluir os Produtos</p>
            <a href="./listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">Opção para Adicionar Categoria de Produtos</p>
            <a href="./adicionar_categoria.php" class="btn btn-primary">Cadastrar Categorias</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Fornecedor</h5>
            <p class="card-text">Opção para Adicionar Fornecedores</p>
            <a href="./adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar Usuários</h5>
            <p class="card-text">Aprovar usuários cadastrados</p>
            <a href="./aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>