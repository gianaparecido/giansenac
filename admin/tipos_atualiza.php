<?php
include("../Connections/conn_produtos.php");
// INCLUINDO SISTEMA DE AUTENTICAÇÃO
include("acesso_com.php");

$tabela= "tbtipos";
$campo_filtro= "id_tipo";

if($_POST){
    // Definindo o USE do banco de dados
    mysqli_select_db($conn_produtos,$database_conn);

    // Receber os dados do formulário
    $rotulo_tipo= $_POST['rotulo_tipo'];
    $sigla_tipo= $_POST['sigla_tipo'];
    // Campo para filtrar o registro WHERE
    $filtro_update= $_POST['id_tipo'];

    // Consulta SQL para inserção dos dados
    $updateSQL  = "UPDATE ".$tabela."
                    SET rotulo_tipo = '".$rotulo_tipo."', sigla_tipo = '".$sigla_tipo."'
                    WHERE ".$campo_filtro."='".$filtro_update."'";
    $resultado  = $conn_produtos->query($updateSQL);
    // Após a ação a página será redirecionada
    $destino= "tipos_lista.php";
    if(mysqli_insert_id($conn_produtos)){
        header("Location: $destino");
    }else{
        header("Location: $destino");
    };
}
mysqli_select_db($conn_produtos,$database_conn);
$filtro_select  =$_GET['id_tipo'];
$consulta       = "SELECT * FROM ".$tabela." WHERE ".$campo_filtro."=".$filtro_select."";
$lista = $conn_produtos->query($consulta);
$row = $lista->fetch_assoc();
$totalRows = ($lista)->num_rows;
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Tipos - Atualiza</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include "menu_adm.php"; ?>
<main class="container">
<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <h2 class="breadcrumb text-warning">
            <a href="tipos_lista.php">
                <button class="btn btn-warning" type="button">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </button>
            </a>
            Atualizando Tipos
        </h2>
        <div class="thumbnail">
            <div class="alert alert-warning">
            <form name="form_tipo_atualiza" id="form_tipo_atualiza" action="tipos_atualiza.php" method="post" enctype="multipart/form-data">
            <!--Inserir o campo id_tipo oculto para uso em filtro -->
            <input type="hidden"id="id_tipo"name="id_tipo"value="<?php echo $row['id_tipo']; ?>">
            <!-- input rotulo_tipo -->
            <label for="rotulo_tipo">Rótulo</label>
               <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
                    </span>
                    <input type="text" name="rotulo_tipo" id="rotulo_tipo" autofocus maxlength="15" placeholder="Digite o tipo do produto" class="form-control" required value="<?php echo $row['rotulo_tipo']; ?>">
                </div>
                <br>
                <!-- input sigla_tipo -->
            <label for="sigla_tipo">Sigla</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </span>
                    <input type="text" name="sigla_tipo" id="sigla_tipo" maxlength="3" placeholder="Digite a sigla do tipo" class="form-control" required value="<?php echo $row['sigla_tipo']; ?>">
                </div>
                <br>
                <!-- btn enviar -->
                <input class="btn btn-danger btn-block" role="button" type="submit" value="Atualizar" name="enviar" id="enviar">
            </form>
            </div>
        </div>
    </div>
</div>
</main>
<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?phpmysqli_free_result($lista); ?>