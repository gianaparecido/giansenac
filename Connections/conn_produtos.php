<?php
    // DEFININDO VARIÁVEIS PARA CONEXÃO
    $hotsname_conn = "localhost";
    $database_conn = "iwane047_ti09";
    $username_conn = "iwane047_ti09";
    $password_conn = "senacti09";
    $charset_conn = "utf8";

    // DEFININDO PARÂMETROS DA CONEXÃO
    $conn_produtos = new mysqli($hotsname_conn, $username_conn, $password_conn, $database_conn);


    // DEFININDO O CONJUNTO DE CARACTERES DA CONEXÃO
    mysqli_set_charset($conn_produtos,$charset_conn);  
    
    if($conn_produtos->connect_error){
        echo "Error: ".$conn_produtos->connect_error;
    };
?>

