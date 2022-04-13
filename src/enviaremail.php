<?php 
    include "include/conexao.php";

    $recebe_email = $_POST['txtEmail'];
    $consulta_email = $cn->query("select nm_usuario, ds_email, ds_senha from tbl_usuario where ds_email = '$recebe_email'");

    if($consulta_email->rowCount() == 0){
        header("location:erro3.php");
    } else {
        echo "(PHPMailer...)";
    }

?>