<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.mask.js"></script>
    <style>
        .navbar{
            margin-bottom: 0;
        }		
    </style>

    <script>
        $(document).ready(function(){
            $("#cep").mask("00000-000");
			$("#celular").mask("(00) 00000-0000");
        });
    </script>
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
				<h2>Cadastre-se</h2>
				
				<form method="post" action="inserirusuario.php" name="logon">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input name="txtnome" type="text" class="form-control" required id="nome" placeholder="Nome Completo">
					</div>
					
				<div class="form-group">
						<label for="email">E-mail</label>
						<input name="txtemail" type="email" class="form-control" required id="email" placeholder="exemplo@gmail.com">
				</div>
				
				<div class="form-group">
						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha" placeholder="Letras e números de 3 a 10 digitos">
				</div>
					
				<div class="form-group">
						<label for="endereco">Endereco</label>
						<textarea name="txtendereco" rows="5" class="form-control" required id="endereco" placeholder="Rua - A 123 Exemplo"></textarea>
				</div>
					
				<div class="form-group">
						<label for="cidade">Cidade</label>
						<input name="txtcidade" type="text" class="form-control" required id="cidade" placeholder="Cidade">
				</div>
					
				<div class="form-group">
						<label for="cep">CEP</label>
						<input name="txtcep" type="text" class="form-control" required id="cep" placeholder="00000-000">
				</div>
				
				<button type="submit" class="btn btn-lg btn-default">	
					<span class="glyphicon glyphicon-pencil"> Cadastrar</span>
				</button>
				
				</form>
			</div>
		</div>
	</div>

    <?php include 'include/rodape.html' ?>	
</body>
</html>