<!doctype html>
<html>
<head> 
<title>Área Admistrativa</title>
<meta charset="utf-8">
<!-- Link para arquivos Bootstrap CSS -->

<!-- 
    CÓDIGO DESABILITADO PARA NÃO TER CONFLITO
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-wdith, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css"> 
-->
</head>
<body>
<nav class="nav navbar-inverse">
<div class="container-fluid">
<!-- Agrupamento para exibição MOBILE -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar" aria-expanded="false">
            <span class="sr-only">Toogle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">
            <img src="../imagens/logochurrascopequeno.png" alt="">
        </a>
    </div>
    <!-- nav direita -->
    <div class="collapse navbar-collapse" id="defaultNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li>
                 <button type="button" class="btn btn-default navbar-btn disabled">
                    <span class="glyphicon glyphicon-user"> <?php echo ($_SESSION['login_usuario']);?></span> 
                </button>
            </li>
            <li><a href="index.php">ADMIN</a></li>
            <li><a href="produtos_lista.php">PRODUTOS</a></li>
            <li><a href="tipos_lista.php">TIPOS</a></li>
            <li><a href="usuarios_lista.php">USUÁRIOS</a></li>
            <li class="active">
                <a href="index.php">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <span class="glyphicon glyphicon-log-out"></span>
                </a>
            </li>
        </ul>
    </div>  <!-- fechamento nav direita -->
</div>  <!-- fechamento container-fluid -->
</nav>


<!-- 
CÓDIGO DESABILITADO PARA NÃO TER CONFLITO
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
-->
</body>
</html>