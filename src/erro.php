<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<style>
    .navbar{
        margin-bottom: 0;
    }
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
			<div class="col-sm-4 col-sm-offset-4 text-center">
				<h2>Usuário ou senha incorretos</h2>
				<a href="formLogon.php" class="btn btn-block btn-default" role="button">
					Tentar Novamente
				</a>
				<a href="formusuario.php">
					<button type="button" class="btn btn-lg btn-link">
						Cadastre-se
					</button>
				</a>
			</div>
		</div>
	</div>
	
	<?php include 'include/rodape.html' ?>
</body>
</html>