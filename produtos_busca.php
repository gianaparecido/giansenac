<?php 
// CONEXÃO
include("Connections/conn_produtos.php");

// CONSULTA PARA OS DADOS
$tabela           ="vw_tbprodutos";
$campo_filtro     ="descri_produto";
$filtro_select    =$_GET['buscar'];
$ordenar_por      ="descri_produto ASC";
$consulta         ="SELECT * FROM ".$tabela." WHERE ".$campo_filtro." LIKE('%".$filtro_select."%') ORDER BY ".$ordenar_por."";
$lista            =$conn_produtos->query($consulta);
$row              =$lista->fetch_assoc();
$totalRows        =($lista)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Produtos</title>
    <!-- Link arquivos Bootstrap css 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meuestilo.css" rel="stylesheet">-->
</head>
<body class="fundofixo container">
<?php include('menu_publico.php'); ?>
<?php include('carroussel.php'); ?>
<?php if ($totalRows == 0) { ?>
<h2 class="breadcrumb alert-danger">
<a href="javascript:window.history.go(-1)" class="btn btn-danger">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
Você pesquisou:
<strong><i><?php echo $_GET['buscar']; ?></i></strong><br><br>
<div class="text-center"> Em breve os mais deliciosos produtos ao seu dispor!</div>
</h2>
<?php }; ?>
<?php if ($totalRows > 0) { ?>
<h2 class="breadcrumb alert-danger">
<a href="javascript:window.history.go(-1)" class="btn btn-danger">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a> 
Você pesquisou:
<strong><i><?php echo $_GET['buscar']; ?></i></strong>
</h2>

<div class="row">
<!-- INICIO DA ESTRUTURA DE REPETIÇÃO -->
<?php do {?>
    <div class="col-sm-4 col-md-3"><!-- INICIO DA ESTRUTURA -->
        <div class="thumbnail">
            <a href="produto_detalhe.php?id_produto=<?php echo $row['id_produto'];?>">
                <img src="imagens/<?php echo $row['imagem_produto']?>" alt="" class="img-responsive img-rounded" style="height:14em;">
            </a>

            <div class="caption text-right">
                <h3 class="text-danger">
                    <strong><?php echo $row['descri_produto'];?></strong>
                </h3>
                <p class="text-success"><?php echo $row['rotulo_tipo']?></p>
                <p class="text-warning text-left"><?php echo mb_strimwidth($row['resumo_produto'],0,42,'...');?></p>
                <p class="text-warning">
                    <button class="btn btn-default disabled" role="button"><?php echo number_format($row['valor_produto'],2,',','.');?></button>
                    <a href="produto_detalhe.php?id_produto=<?php echo $row['id_produto'];?>" class="btn btn-default" role="button">
                        <span class="hidden-xs text-info" >Saiba mais...</span>
                        <span class="glyphicon glyphicon-eye-open text-info"></span>
                    </a>
                </p>
            </div>
        </div>
</div> <!-- FIM DA ESTRUTURA  -->
<?php } while ($row=$lista->fetch_assoc()); ?>
<!-- FIM DA ESTRUTURA DE REPETIÇÃO -->
<?php }; ?>
</div>
<footer>
<?php include('rodape.php');?>
</footer>
<!-- Link arquivos Bootstrap js 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>-->
</body>
<?php mysqli_free_result($lista); ?>