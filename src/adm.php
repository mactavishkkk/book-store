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

        if(empty($_SESSION['STATUS']) || $_SESSION['STATUS'] != 1){
            header('location:index.php');
        };

        include 'include/conexao.php';	
        include 'include/navbar.php';
        include 'include/cabecalho.html';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<h2>Área administrativa</h2>
				<a href="formproduto.php">			
                    <button type="submit" class="btn btn-block btn-lg btn-primary">
                        Incluir Produto
                    </button>
				</a>

				<a href="lista.php">	
					<button type="submit" class="btn btn-block btn-lg btn-warning">
						Alterar / Excluir Produto
					</button>
				</a>

				<button type="submit" class="btn btn-block btn-lg btn-success">	
					Vendas
				</button>

				<a href="sair.php">	
					<button type="submit" class="btn btn-block btn-lg btn-danger">					
						Sair da área administrativa
					</button>
				</a>

			</div>
		</div>
	</div>

	<?php include 'include/rodape.html' ?>

</body>
</html>