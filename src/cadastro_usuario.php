<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuário</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
  <div class="container" style="width: 400px; margin-top: 40px">
    <h4>Cadastro de Usuário</h4>

    <form action="_insert_usuario.php" method="post">
      <div class="form-group">
        <label>Nome do Usuário</label>
        <input type="text" name="nomeusuario" class="form-control" placeholder="Nome Completo" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>E-mail</label>
        <input type="text" name="mailusuario" class="form-control" placeholder="Seu E-mail" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Senha do Usuário</label>
        <input type="password" name="senhausuario" id="txtsenha" class="form-control" placeholder="Senha" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Repetir Usuário</label>
        <input type="password" name="senhausuario2" class="form-control" placeholder="Repetir Senha" autocomplete="off" required
        oninput="validasenha(this)">
        <small>Precisa ser igual a senha digitada acima</small>
      </div>

      <div class="form-group">
        <label>Nível de Acesso</label>
        <select name="nivelusuario" class="form-control">
            <option value="1">Administrador</option>
            <option value="2">Funcionario</option>
            <option value="3">Conferente</option>
        </select>
      </div>

      <div style="text-align: right;">
        <a href="./menu.php" class="btn btn-sm btn-primary" id="button">Voltar</a>
        <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
      </div>
    </form>
  </div>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    function validasenha (input) {
      if (input.value != document.getElementById('txtsenha').value) {
        input.setCustomValidity('Repita a senha corretamente');
      } else {
        input.setCustomValidity('');
      }
    }
  </script>
</body>
</html>