<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// INCLUINDO SISTEMA DE AUTENTICAÇÃO
include("acesso_com.php");

// Varíaveis Globais
$tabela         ="tbprodutos";
$campo_filtro   ="id_produto";


if($_POST){ // ATUALIZANDO NO BANCO DE DADOS
    // Definindo o USE do banco de dados
    mysqli_select_db($conn_produtos,$database_conn);

    // Para guardo nome da imagem no banco e o arquivo no diretório
if ($_FILES['imagem_produto']['name']){
    $nome_img   = $_FILES['imagem_produto']['name'];
    $tmp_img    = $_FILES['imagem_produto']['tmp_name'];
    $dir_img    = "../imagens/".$nome_img;
    move_uploaded_file($tmp_img,$dir_img);
}else{
    $nome_img=$_POST['imagem_produto_atual'];
}

    // Receber os dados do formulário
    // Organize os campos na mesma ordem
    $id_tipo_produto    = $_POST['id_tipo_produto'];
    $destaque_produto   = $_POST['destaque_produto'];
    $descri_produto     = $_POST['descri_produto'];
    $resumo_produto     = $_POST['resumo_produto'];
    $valor_produto      = $_POST['valor_produto'];
    $imagem_produto     = $nome_img;

    // Campo para filtrar o registro --WHERE--
    $filtro_update      =$_POST['id_produto'];

    // Consulta SQL para inserção dos dados
    $updateSQL  =   "UPDATE ".$tabela."                 
                    SET id_tipo_produto = '".$id_tipo_produto."', destaque_produto = '".$destaque_produto."', descri_produto = '".$descri_produto."', resumo_produto = '".$resumo_produto."', valor_produto = '".$valor_produto."', imagem_produto = '".$imagem_produto."'
                    WHERE ".$campo_filtro."='".$filtro_update."'";
    $resultado  = $conn_produtos->query($updateSQL);
    // Após a ação a página será redirecionada
    $destino    = "produtos_lista.php";
    if(mysqli_insert_id($conn_produtos)){
        header("Location: $destino");
    }else{
        header("Location: $destino");
    };   
}

// Consulta para trazer e filtrar os dados
// Definindo o USE do banco de dados
mysqli_select_db($conn_produtos,$database_conn);
$filtro_select  =$_GET['id_produto'];
$consulta       = "SELECT * FROM ".$tabela." WHERE ".$campo_filtro."=".$filtro_select."";
$lista = $conn_produtos->query($consulta);
$row = $lista->fetch_assoc();
$totalRows = ($lista)->num_rows;

// Definindo o USE do banco de dados
mysqli_select_db($conn_produtos,$database_conn);
// Selecionar os dados da chave estrangeira
$tabela_fk    = "tbtipos";
$ordenar_por  = "rotulo_tipo";
$consulta_fk  = "SELECT * 
                FROM ".$tabela_fk." 
                ORDER BY ".$ordenar_por." ASC";
$lista_fk     = $conn_produtos->query($consulta_fk);
$row_fk       = $lista_fk->fetch_assoc();
$totalRows_fk = ($lista_fk)->num_rows;
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

<!-- Meu css -->
<link href="../css/meuestilo.css" rel="stylesheet">
</head>
<body class="fundofixo">
<?php include "menu_adm.php"; ?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-3 col-md-6 col-md-offset-3">
            <!-- Caixa de título -->
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                <button class="btn btn-danger" type="button">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </button>
                </a>
                Atualizando Produtos
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                <form name="form_produto_atualiza" id="form_produto_atualiza" action="produtos_atualiza.php" method="post" enctype="multipart/form-data">
                   <!-- Inserir o campo id_produto oculto para uso em filtro -->
                   <input type="hidden" name="id_produto" id="id_produto" value="<?php echo $row['id_produto']; ?>   ">
                   <!-- select id_produto -->
                    <label for="tipo_produto">Tipo:</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                        </span>
                    <!-- select>option*2 -->
                        <select class="form-control" name="id_tipo_produto" id="id_tipo_produto" required>
                        <!-- Abre a estrutura de repetição -->
                        <?php do {?>
                            <option value="<?php echo $row_fk['id_tipo'];?>"<?php if(!(strcmp($row_fk['id_tipo'],$row['id_tipo_produto']))){echo "selected=\selected\"";} ?>    >
                                <?php echo $row_fk['rotulo_tipo'];?>
                            </option>
                        <?php } while ($row_fk = $lista_fk->fetch_assoc()); 
                        $row_fk = mysqli_num_rows($lista_fk);
                        if($row_fk > 0){
                            mysqli_data_seek($lista_fk,0);
                            $row_fk = $lista_fk->fetch_assoc();
                        }
                        ?>
                        <!-- Fecha a estrutura de repetição -->
                        </select>
                    </div>
                    <br>
                    <!-- radio id_produto -->
                    <label for="destaque_produto">Destaque?</label>
                    <div class="input-group">
                        <label class="radio-inline" for="destaque_produto_s">
                            <input type="radio" name="destaque_produto" id="destaque_produto" value="Sim" <?php echo $row['destaque_produto']=="Sim" ? "checked" : null; ?>   > Sim
                        </label>
                        <label class="radio-inline" for="destaque_produto_n">
                            <input type="radio" name="destaque_produto" id="destaque_produto" value="Não" <?php echo $row['destaque_produto']=="Não" ? "checked" : null; ?>   > Não
                        </label>
                    </div>
                    <br>
                    <!-- text id_produto -->
                    <label for="descri_produto">Descrição:</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" type="text" name="descri_produto" id="descri_produto" placeholder="Digite o título do produto" maxlength="100" required value="<?php echo $row ['descri_produto']; ?>">
                    </div>
                    <br>
                    <!-- textarea resumo_produto -->
                    <label for="resumo_produto">Resumo:</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        </span>
                        <textarea class="form-control" name="resumo_produto" id="resumo_produto" cols="30" rows="5" placeholder="Digite os detalhes do produto"><?php echo $row ['resumo_produto']; ?></textarea>
                    </div>
                    <br>
                    <!-- number valor_produto -->
                    <label for="valor_produto">Valor:</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" type="number" name="valor_produto" id="valor_produto" min="0" step="0.01" value="<?php echo $row ['valor_produto']; ?>">
                    </div>
                    <br>
                    <!-- file imagem_produto ATUAL -->
                    <label for="">Imagem Atual:</label>
                    <img src="../imagens/<?php echo $row ['imagem_produto']; ?>" alt="" class="img-responsive" style="max-width:30%">
                    <!-- type="hidden" campo oculto para guardar dados -->
                    <!-- Aqui guardamos o nome da imagem se ela nao for alterada -->
                    <input type="hidden" name="imagem_produto_atual" id="imagem_produto_atual" value="<?php echo $row ['imagem_produto']; ?>">
                    <!-- file imagem_produto NOVA -->
                    <label for="imagem_produto">Nova Imagem:</label>
                    <br>
                    <img class="img-responsive" src="" alt="" name="imagem" id="imagem">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-picture"></span>
                        </span>
                        <input class="form-control" type="file" name="imagem_produto" id="imagem_produto" onchange="visualizarImagem.call(this)">
                    </div>
                    <br>
                    <!-- btn enviar -->
                    <input class="btn btn-danger btn-block" role="button" type="submit" value="Atualizar" name="enviar" id="enviar">
                </form>
        </div>
    </div>
</main>
    <script>
        function visualizarImagem(){
            if(this.files && this.files[0]){
                var obj = new FileReader();
                obj.onload = function(data){
                    var imagem = document.getElementById("imagem");
                    imagem.src = data.target.result;
                    imagem.style.display = "block";
                }
                obj.readAsDataURL(this.files[0]);
            }
        }
    </script>
    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php 
mysqli_free_result($lista_fk); 
mysqli_free_result($lista); 
?>