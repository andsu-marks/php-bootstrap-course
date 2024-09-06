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
  <title>Menu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top: 100px;">
    <div class="row">

      <?php
        if(($nivelacesso == 1) || ($nivelacesso == 2)) {
      ?>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Produto</h5>
            <p class="card-text">Opção para Adicionar Produtos em Nosso Estoque</p>
            <a href="./adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
          </div>
        </div>
      </div>

      <?php } ?>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Produtos</h5>
            <p class="card-text">Visualizar, Editar e Excluir os Produtos</p>
            <a href="./listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>

      <?php
        if(($nivelacesso == 1) || ($nivelacesso == 2)) {
      ?>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">Opção para Adicionar Categoria de Produtos</p>
            <a href="./adicionar_categoria.php" class="btn btn-primary">Cadastrar Categorias</a>
          </div>
        </div>
      </div>

      <?php
        }
        
        if(($nivelacesso == 1) || ($nivelacesso == 2)) {

      ?>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Fornecedor</h5>
            <p class="card-text">Opção para Adicionar Fornecedores</p>
            <a href="./adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
          </div>
        </div>
      </div>

      <?php
        }

        if(($nivelacesso == 1)) {
      ?>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar Usuários</h5>
            <p class="card-text">Aprovar usuários cadastrados</p>
            <a href="./aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
          </div>
        </div>
      </div>

      <?php
        }

        if(($nivelacesso == 1)) {
      ?>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Usuários Ativos</h5>
            <p class="card-text">Listar Usuários Ativos</p>
            <a href="./listar_usuarios_ativos.php" class="btn btn-primary">Usuários Ativos</a>
          </div>
        </div>
      </div>

      <?php
        }

        if(($nivelacesso == 1)) {
      ?>

      <div class="col-sm-6" style="margin-top: 20px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cadastrar Usuários</h5>
            <p class="card-text">Cadastrar Novo Usuário</p>
            <a href="./cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuário</a>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>  

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>