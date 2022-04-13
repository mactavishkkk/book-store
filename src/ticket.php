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
        
        if (empty($_SESSION['ID'])) {
            header('location:formlogon.php');
        }
        
        include 'include/conexao.php';	
        include 'include/navbar.php';
        include 'include/cabecalho.html';
        
        //jogando na variavel $ticket_compra o ticket recebido pelo parametro
        $ticket_compra = $_GET['ticket'];
        
        //Criando select pelo ticket recebido que foi armazenado na variavel $ticket_compra
        $consultaVenda = $cn->query("SELECT * FROM vw_venda WHERE no_ticket='$ticket_compra'");
	
	?>
	
<div class="container-fluid">
	<div class="row" style="margin-top: 15px;">
		<h1 class="text-center">Compra: <?php echo $ticket_compra ?></h1>
	</div>
	
	<div class="row" style="margin-top: 15px;">
		<div class="col-sm-1 col-sm-offset-1"><h4>Data</h4> </div>
		<div class="col-sm-2"><h4>Ticket </h4></div>
		<div class="col-sm-5"><h4>Produto</h4></div>
		<div class="col-sm-1"><h4>Quantidade</h4></div>
		<div class="col-sm-2"><h4>Preço</h4></div>		
	</div>
	
	
	<?php
        $total=0; // criando variavel chamado total     
        while ($exibeVenda=$consultaVenda->fetch(PDO::FETCH_ASSOC)) {		
            $total += $exibeVenda['vl_total_item'];
	?>
	
	<div class="row" style="margin-top: 15px;">		
		<div class="col-sm-1 col-sm-offset-1"><?php echo date('d/m/Y',strtotime($exibeVenda['dt_venda']));?></div>
		<div class="col-sm-2"><?php echo $exibeVenda['no_ticket'];?></div>
		<div class="col-sm-5"><?php echo $exibeVenda['nm_livro'];?></div>
		<div class="col-sm-1"><?php echo $exibeVenda['qt_livro'];?></div>
		<div class="col-sm-2"><?php echo number_format($exibeVenda['vl_total_item'],2,',','.');?></div>				
	</div>	
	<?php } ?>

	<div class="row" style="margin-top: 15px;">
		<h2 class="text-center">Total desta compra: R$ <?php echo number_format($total,2,',','.');?></h2>
	</div>
</div>
	
	<?php include 'include/rodape.html'; ?>
	
</body>
</html>