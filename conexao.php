<?php //session_start();

    $servidor = "co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $usuario = "vjpe1cftcj8n9i0e";
    $senha = "jcdrd8wzsciyhxhb";
    $db_name = "wz3jz3o58mcws7dw";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');

    date_default_timezone_set("America/Manaus");

    $host_ip = $_SERVER['HTTP_HOST'];

    $url = "http://".$host_ip."/";

    $url_admin = "http://".$host_ip."/admin";
    
    $url_cliente = "http://".$host_ip."/cliente";
?>