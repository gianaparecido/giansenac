<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// INCLUINDO SISTEMA DE AUTENTICAÇÃO
include("acesso_com.php");
if($_POST){
    // Definindo o USE do banco de dados
    mysqli_select_db($conn_produtos, $database_conn);
    // Variáveis para acrescentar dados no banco
    $tabela_insert = "tbtipos";
    $campos_insert = "sigla_tipo, rotulo_tipo";
    // Receber os dados do formulário
    // Organize os campos na mesma ordem
    $sigla_tipo = $_POST['sigla_tipo'];
    $rotulo_tipo = $_POST['rotulo_tipo'];
    // Reunir os valores a serem inseridos
    $valores_insert = "'$sigla_tipo','$rotulo_tipo'";
    // Consulta SQL para inserção dos dados
    $insertSQL  =   "INSERT INTO ".$tabela_insert."                 
                        (".$campos_insert.")
                    VALUES 
                        (".$valores_insert.")";
    $resultado  = $conn_produtos->query($insertSQL);
    // Após a ação a página será redirecionada
    $destino   = "tipos_lista.php";
    if(mysqli_insert_id($conn_produtos)){
        header("Location: $destino");
    }else{
        header("Location: $destino");
    };   
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Produtos - Insere</title>
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
            Inserindo Tipos
        </h2>
        <div class="thumbnail">
            <div class="alert alert-warning">
            <form action="tipos_insere.php" nome="form_insere_tipo" id="form_insere_tipo" method="POST" enctype="multipart/form-data">
            <!-- input rotulo_tipo -->
            <label for="rotulo_tipo">Rótulo</label>
               <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
                    </span>
                    <input type="text" name="rotulo_tipo" id="rotulo_tipo" autofocus maxlength="15" placeholder="Digite o tipo do produto" class="form-control" required>
                </div>
                <br>
                <!-- input sigla_tipo -->
            <label for="sigla_tipo">Sigla</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </span>
                    <input type="text" name="sigla_tipo" id="sigla_tipo" maxlength="3" placeholder="Digite a sigla do tipo" class="form-control" required>
                </div>
                <br>
                <!-- btn enviar -->
                <input type="submit" value="Cadastrar" role="button" name="enviar" id="enviar" class="btn btn-block btn-warning">
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