<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
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
				<h3>Nenhum livro encontrado!</h3>
			</div>
		</div>
	</div>
	
<?php include 'include/rodape.html' ?>
	
</body>
</html>