<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

  <style>
    #tamanho {
      width: 350px;
    }
  </style>
</head>
<body>
  <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
    <div style="padding: 10px">
      <center>
        <img src="./cadeado.png" width="125px" height="125px">
      </center>
    </div>

    <form>
      <div class="form-group">
        <label>Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
      </div>
    </form>
    <div style="text-align: right;">
      <button type="submit" class="btn btn-sm btn-success">Entrar</button>
    </div>
  </div>
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>