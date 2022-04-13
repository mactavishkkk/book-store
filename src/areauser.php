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

        if(empty($_SESSION['ID'])) {
        header("location:formlogon.php");
        }
        
        include 'include/conexao.php';	
        include 'include/navbar.php';
        include 'include/cabecalho.html';

        $cd_usuario = $_SESSION['ID'];

        $consultaVenda = $cn -> query("select * from vw_venda where cd_cliente = '$cd_usuario' group by no_ticket");
	?>

<div class="container-fluid">

    <div class="row" style="margin-top: 15px;">
        <h1 class="text-center">Minhas Compras</h1>
    </div>

	<div class="row" style="margin-top: 15px;">
		<div class="col-sm-1 col-sm-offset-1"> <h4>Data</h4> </div>
		<div class="col-sm-2"> <h4>Ticket</h4> </div>
	</div>
    
    <?php while ($exibeVenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="row" style="margin-top: 15px;">
		<div class="col-sm-1 col-sm-offset-1"> <?php echo date('d/m/Y', strtotime($exibeVenda['dt_venda']));?> </div>
		<div class="col-sm-2"><a href="ticket.php?ticket=<?php echo $exibeVenda['no_ticket'];?>"><?php echo $exibeVenda['no_ticket'];?></a></div>
	</div>
    <?php } ?>
</div>

	<?php include 'include/rodape.html'; ?>
</body>
</html>