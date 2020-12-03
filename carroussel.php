<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Chuleta Quente</title>
    <!-- Link arquivos Bootstrap css 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meuestilo.css" rel="stylesheet">-->
</head>
<body>
<main>
<div id="banners" class="carousel slide" data-ride="carousel"><!-- INICIO CARROUSSEL -->
    <ol class="carousel-indicators"><!-- INDICADOR DOS ITENS -->
        <li data-target="#banners" data-slide-to="0" class="active"></li>
        <li data-target="#banners" data-slide-to="1"></li>
        <li data-target="#banners" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="button">
        <div class="item">
            <img src="imagens/banner_1.jpg" alt="" class="center-block">
        </div>
        <div class="item">
            <img src="imagens/banner_2.jpg" alt="" class="center-block">
        </div>
        <div class="item active">
            <img src="imagens/banner_3.jpg" alt="" class="center-block">
        </div>
        <!-- BOTÕES DE NAVEGAÇÃO -->
        <a href="#banners" class="left carousel-control" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a href="#banners" class="right carousel-control" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Previous</span>
        </a>
    </div>
</div>
</main>
<!-- Link arquivos Bootstrap js 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
</body>