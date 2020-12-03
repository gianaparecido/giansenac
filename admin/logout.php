<?php
// INICIA A SESSÃO
session_start();
// DESTRÓI A SESSÃO LIMPANDO TODOS OS DADOS
session_destroy();
// APÓS A AÇÃO A PÁGINA SERÁ REDIRECIONADA
$destino    =   "../index.php";
header("Location: $destino"); exit;
?>