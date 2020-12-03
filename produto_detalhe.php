<?php 
// CONEXÃO
include("Connections/conn_produtos.php");

// CONSULTA PARA OS DADOS
$tabela   ="vw_tbprodutos";
$campo_filtro     ="id_produto";
$filtro_select    =$_GET['id_produto'];
$ordenar_por   ="descri_produto ASC";
$consulta      ="SELECT * FROM ".$tabela." WHERE ".$campo_filtro."='".$filtro_select."' ORDER BY ".$ordenar_por."";
$lista         =$conn_produtos->query($consulta);
$row           =$lista->fetch_assoc();
$totalRows     =($lista)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
<title>Produtos</title>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meuestilo.css" rel="stylesheet">-->
</head>
<body class="container fundofixo">
<?php include('menu_publico.php'); ?>
<h2 class="breadcrumb alert-danger">
    <a href="javascript:window.history.go(-1)" class="btn btn-danger">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <strong><?php echo $row['descri_produto'];?></strong>
</h2>
<div class="row">
<!-- INICIO DA ESTRUTURA DE REPETIÇÃO -->
<?php do {?>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3"><!-- INICIO DA ESTRUTURA -->
        <div class="thumbnail">
                <img src="imagens/<?php echo $row['imagem_produto']?>" alt="" class="img-responsive img-rounded">
            <div class="caption text-right">
                <p class="text-success"><?php echo $row['rotulo_tipo']?></p>
                <p class="text-warning text-left"><?php echo $row['resumo_produto'];?></p>
                <p class="text-warning">
                    <button class="btn btn-default disabled" role="button"><?php echo number_format($row['valor_produto'],2,',','.');?></button>
                </p>
            </div>
        </div>
</div> <!-- FIM DA ESTRUTURA  -->
<?php } while ($row=$lista->fetch_assoc()); ?>
<!-- FIM DA ESTRUTURA DE REPETIÇÃO -->
</div>
<!-- Link arquivos Bootstrap js 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>-->
</body>
<?php mysqli_free_result($lista); ?>