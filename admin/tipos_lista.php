<?php 
include("../Connections/conn_produtos.php");
// INCLUINDO SISTEMA DE AUTENTICAÇÃO
include("acesso_com.php");
$consulta = "SELECT * FROM tbtipos ORDER BY id_tipo ASC";
$lista = $conn_produtos->query($consulta);
$row = $lista->fetch_assoc();
$totalRows = ($lista)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Tipos - Lista</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Meu css -->
<link href="../css/meuestilo.css" rel="stylesheet">
</head>
<body class="fundofixo">
<?php include "menu_adm.php"; ?>
<main class="container">
<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
<h1 class="breadcrumb alert-warning">Lista de Tipos</h1>
    <table class=" table table-hover table-condensed tbopacidade">
        <!-- thead>tr>th*4 -->
        <thead><!-- cabeçalho da tabela -->
            <tr>
                <th class="hidden">ID</th><!-- cabeça da coluna -->
                <th>SIGLA</th>
                <th>ROTULO</th>
                <th><a href="tipos_insere.php" target="_self" class="btn btn-primary btn-block btn-xs " role="button">
                    <span class="hidden-xs">ADICIONAR<br></span>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                </th>
            </tr>
        </thead>
        <!-- tbody>tr>td*4 -->
        <tbody><!-- corpo da tabela -->
        <?php do {?> <!-- abre a estrutura de repetição -->
            <tr>
                <!-- Insira os dados determinando a linha e o campo -->
                <td class="hidden"><?php echo $row['id_tipo'];?></td>
                <td><?php echo $row['sigla_tipo'];?></td>
                <td><?php echo $row['rotulo_tipo'];?></td>
                <td>
                <a href="tipos_atualiza.php?id_tipo=<?php echo $row ['id_tipo']; ?>" target="_self" class="btn btn-warning btn-block btn-xs" role="button">
                    <span class="hidden-xs">ATUALIZAR<br></span>
                    <span class=" glyphicon glyphicon-refresh"></span>
                </a> <br>
                    <button class="btn btn-danger delete btn-block btn-xs">
                        <span class="hidden-xs">EXCLUIR<br></span>
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
            <?php } while ($row = $lista->fetch_assoc()); ?> <!-- fecha a estrutura de repetição -->
        </tbody>
    </table>
</div>
</main>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-danger">ATENÇÃO!</h4>
                </div>
                <div class="modal-body">
                    Deseja mesmo EXCLUIR o item?
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-danger delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-success" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Script para o Modal -->
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); // Buscar o valor do atributo data-nome
        var id   = $(this).data('id'); // Buscar o valor do atributo data-id
        $('span.nome').text(nome); // Inserir o nome do produto na pergunta de confirmação
        $('a.delete-yes').attr('href','tipos_exclui.php?id_tipo='+id); // mudar dinamicamente o id do link no botão confirmar
        $('#myModal').modal('show'); // Modal abre
    });
</script>
</body>
</html>