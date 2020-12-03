<?php
// A SESSÃO PRECISA SER INICIADA EM CADA PÁGINA DIFERENTE
// SE A SESSÃO NÃO EXISTIR, INICIA-SE UMA
if(!isset($_SESSION)) session_start();

// DETERMINAR O NIVEL DE ACESSO
$nivel_acesso   = 'sup';

//VERIFICAR SE NÃO HÁ VARIÁVEIS DA SESSÃO QUE IDENTIFICA O USUÁRIO
if(!isset($_SESSION['login_usuario']) OR ($_SESSION['nivel_usuario']!=$nivel_acesso)){
    // REDIRECIONANDO O VISITANTE DE VOLTA PARA O LOGIN
    header("Location: invasor_user.php"); exit;
};
?>