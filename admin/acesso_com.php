<?php
// A SESSÃO PRECISA SER INICIADA EM CADA PÁGINA DIFERENTE
// SE A SESSÃO NÃO EXISTIR, INICIA-SE UMA
if(!isset($_SESSION)) session_start();

//VERIFICAR SE NÃO HÁ VARIÁVEIS DA SESSÃO QUE IDENTIFICA O USUÁRIO
if(!isset($_SESSION['login_usuario'])){
    // SE NÃO EXISTIR, DESTRÓI A SESSÃO POR SEGURANÇA
    session_destroy();
    // REDIRECIONANDO O VISITANTE DE VOLTA PARA O LOGIN
    header("Location: login.php"); exit;
};
?>