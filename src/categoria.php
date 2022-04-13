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

    session_start();

    include 'include/navbar.php';
    include 'include/cabecalho.html';
    include 'include/conexao.php';

    $cat = $_GET['cat'];

    $consulta = $cn->query("select cd_livro, nm_livro, vl_preco, ds_capa, qt_estoque from vw_livro where ds_categoria = '$cat'");
    
  ?>

    <div class="container-fluid">
      <div class="row">
      <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="col-sm-3">
          <img src="img/<?php echo $exibe['ds_capa'] ?>" class="img-responsive" style="width: 100%">
          <div><h4><b><?php echo mb_strimwidth($exibe['nm_livro'], 0, 25, '...'); ?></b></h4></div>
          <div><h5>R$<?php echo number_format($exibe['vl_preco'], 2, ',', '.'); ?></h5></div>

          <div class="text-center">
            <a href="detalhes.php?cd= <?php echo $exibe['cd_livro']; ?>">
              <button class="btn btn-lg btn-block btn-default">
                  <span class="glyphicon glyphicon-info-sign"> Detalhes</span>
              </button>
            </a>
          </div>

          <div class="text-center" style="margin-top: 5px; margin-bottom: 5px;">
            <?php if($exibe['qt_estoque'] > 0) { ?>

            <a href="carrinho.php?cd= <?php echo $exibe['cd_livro']; ?>">
              <button class="btn btn-lg btn-block btn-success">
                  <span class="glyphicon glyphicon-usd">Comprar</span>
              </button>
            </a>

            <?php } else { ?>

              <button class="btn btn-lg btn-block btn-danger" disabled>
                <span class="glyphicon glyphicon-remove-circle"> Indisponível </span>
            </button>

            <?php } ?>

          </div>
        </div>
      <?php } ?>
      </div>
    </div>

    
    
    <?php include 'include/rodape.html' ?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>