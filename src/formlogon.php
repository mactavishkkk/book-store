<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login do Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
			<div class="col-sm-4 col-sm-offset-4">
				<h2>Logon de Usuário</h2>
			<form name="frmusuario" method="post" action="validarusuario.php">
					
					<div class="form-group">
						<label for="email">Email</label>
						<input name="txtemail" type="email" class="form-control" required id="email">
					</div>
				<div class="form-group">
						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha">
				</div>		
				<button type="submit" class="btn btn-lg btn-default">
					<span class="glyphicon glyphicon-ok"> Entrar</span>
				</button>
				</form>
				<a href="formusuario.php">
					<button type="button" class="btn btn-lg btn-link">
						Cadastre-se
					</button>
				</a>
				<a href="esquecisenha.php">
					<button type="button" class="btn btn-lg btn-link">
						Esqueci minha senha
					</button>
				</a>
			</div>
		</div>
	</div>
	
	<?php include 'include/rodape.html'; ?>
</body>
</html>