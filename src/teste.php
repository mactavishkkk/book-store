<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Produtos</title>
</head>
<body>
    <?php
        include 'include/conexao.php';
        $consulta = $cn->query('select * from vw_livro');
        
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
        
        echo $exibe['nm_livro'].'<br>';
        echo $exibe['vl_preco'].'<br>';
        echo $exibe['ds_categoria'];
        echo '<hr>';
        }
    ?>
</body>
</html>