<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css"> 
      .navbar{ margin-bottom: 0; }
    </style>
  </head>
  <body>

  <?php
    include 'include/conexao.php';
    include 'include/navbar.php';
    include 'include/cabecalho.html';
  ?>

  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <h2>Digite o email cadastrado na loja</h2>
            <form method="post" action="enviaremail.php" name="logon">
                <div class="form-group">
                    <input name="txtEmail" type="email" class="form-control" required id="email">
                </div>

                <button type="submit" class="btn btn-lg btn-default">
                    <span class="glyphicon glyphicon-envelope"> Enviar </span>
                </button>
            </form>

            <a href="formusuario.php">
                <button type="submit" class="btn btn-lg btn-link">
                    Ainda não sou cadastrado
                </button>
            </a>
          </div>
      </div>
  </div>


    <?php include 'include/rodape.html'; ?>

</body>
</html>