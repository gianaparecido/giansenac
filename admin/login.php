<?php
include("../Connections/conn_produtos.php");

// INICIA A VERIFICAÇÃO
if($_POST){
    // USE DO BANCO DE DADOS
    mysqli_select_db($conn_produtos,$database_conn);

    // VERIFICAR O LOGIN E SENHA RECEBIDOS
    $login_usuario  =   $_POST['login_usuario'];
    $senha_usuario  =   $_POST['senha_usuario'];

    $verificaSQL    =   "SELECT * 
                         FROM  tbusuarios
                         WHERE login_usuario ='$login_usuario' AND senha_usuario ='$senha_usuario'";
    // CARREGA OS DADOS E VERIFICA AS LINHAS
    $lista_session      =   mysqli_query($conn_produtos, $verificaSQL);
    $row_session        =   $lista_session->fetch_assoc();
    $totalRows_session  =   mysqli_num_rows($lista_session);

    // SE A SESSÃO NÃO EXISTIR, INICIA-SE UMA
    if(!isset($_SESSION)) session_start();

    // CARREGAR INFORMAÇÕES EM UMA SESSÃO
    if($totalRows_session>0){
        $_SESSION['login_usuario']=$login_usuario;
        $_SESSION['nivel_usuario']=$row_session['nivel_usuario'];
        echo "<script>window.open('index.php','_self')</script>";
    }else{
        echo "<script>window.open('invasor.php','_self')</script>";
    };
};
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta http-equiv="Refresh" content="60;URL=../index.php">
<title>Login</title>
<meta charset="utf-8">
<!-- Link arquivos Bootstrap css -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/abdf34532a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/meuestilo.css" type="text/css">
</head>
<body class="fundofixo">
<main class="container">
<section>
<article>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h1 class="breadcrumb text-info text-center">
                <a href="../index.php">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
            Faça seu login</h1>
            <div class="thumbnail">
                <p class="text-info text-center" role="alert">
                    <i class="fas fa-user-circle fa-10x"></i>
                </p>
                <br>
                <div class="alert alert-info" role="alert">
                    <form action="login.php" name="form_login" id="form_login" method="post" enctype="multipart/form-data">
                        <label for="login_usuario">Login</label>
                        <p class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="login_usuario" id="login_usuario" class="form-control" autofocous required placeholder="Digite seu login" autocomplete="off">
                        </p>
                        <label for="senha_usuario">Senha</label>
                        <p class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                            </span>
                            <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" required placeholder="Digite sua senha">
                        </p>
                        <p class="text-right">
                            <input type="submit" value="Entrar" class="btn btn-primary">
                        </p>
                    </form>
                        <p class="text-center">
                            <small >Caso não faça uma escolha em <span id="count" class="timer">60</span> segundos será redirecionado automaticamente para página inicial</small>
                        </p>
                </div>
            </div>
        </div>
    </div>
</article>
</section>
</main>
<script type="text/javascript">
    var counter = 60;
    setInterval( function(){
        counter--;

        if( counter >=0){
            id = document.getElementById("count");
            id.innerHTML = counter;
        }
    }, 1000);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>