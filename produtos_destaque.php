<?php 
// CONEXÃO
include("Connections/conn_produtos.php");

// CONSULTA PARA OS DADOS
$tabela_destaque   ="vw_tbprodutos";
$campo_filtro     ="destaque_produto";
$filtro_select    ="Sim";
$ordenar_por   ="descri_produto ASC";
$consulta_destaque      ="SELECT * FROM ".$tabela_destaque." WHERE ".$campo_filtro."='".$filtro_select."' ORDER BY ".$ordenar_por."";
$lista_destaque         =$conn_produtos->query($consulta_destaque);
$row_destaque           =$lista_destaque->fetch_assoc();
$totalRows     =($lista_destaque)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meuestilo.css" rel="stylesheet">
</head>
<body class="container">
<h2 class="breadcrumb alert-danger">Produtos em Destaque</h2>
<div class="row">
<!-- INICIO DA ESTRUTURA DE REPETIÇÃO -->
<?php do {?>
    <div class="col-sm-4 col-md-3"><!-- INICIO DA ESTRUTURA -->
        <div class="thumbnail">
            <a href="produto_detalhe.php?id_produto=<?php echo $row['id_produto'];?>">
                <img src="imagens/<?php echo $row_destaque['imagem_produto']?>" alt="" class="img-responsive img-rounded" style="height:14em;">
            </a>

            <div class="caption text-right">
                <h3 class="text-danger">
                    <strong><?php echo $row_destaque['descri_produto'];?></strong>
                </h3>
                <p class="text-success"><?php echo $row_destaque['rotulo_tipo']?></p>
                <p class="text-warning text-left"><?php echo mb_strimwidth($row_destaque['resumo_produto'],0,42,'...');?></p>
                <p class="text-warning">
                    <button class="btn btn-default disabled" role="button"><?php echo number_format($row_destaque['valor_produto'],2,',','.');?></button>
                    <a href="produto_detalhe.php?id_produto=<?php echo $row_destaque['id_produto'];?>" class="btn btn-default" role="button">
                        <span class="hidden-xs text-info" >Saiba mais...</span>
                        <span class="glyphicon glyphicon-eye-open text-info"></span>
                    </a>
                </p>
            </div>
        </div>
</div> <!-- FIM DA ESTRUTURA  -->
<?php } while ($row_destaque=$lista_destaque->fetch_assoc()); ?>
<!-- FIM DA ESTRUTURA DE REPETIÇÃO -->
</div>
<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
<?php mysqli_free_result($lista_destaque); ?>