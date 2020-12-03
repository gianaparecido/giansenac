<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área Administrativa</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/meuestilo.css" rel="stylesheet">

</head>
<body class="fundofixo">
<main class="container">
<h1 class="breadcrumb">Área Administrativa</h1>
<div class="row"><!-- manter os elementos na linha -->

    <!-- ADM PRODUTOS -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail alert-danger">
            <img src="../imagens/icone_produtos.png" alt="">
            <br>
            <div class="alert-danger">
                <!-- BOTÃO PRINCIPAL -->
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <button class="btn btn-default disabled">PRODUTOS</button>
                    </div>
                </div>
                <!-- BOTÃO LISTA -->
                 <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="produtos_lista.php">
                            <button class="btn btn-danger">CATÁLOGO</button>
                        </a>
                    </div>
                </div>
                <!-- BOTÃO INSERIR -->
                 <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="produtos_insere.php">
                            <button class="btn btn-danger">INSERIR</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- FIM ADM PRODUTOS -->

    <!-- ADM TIPOS -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail alert-warning">
            <img src="../imagens/icone_tipos.png" alt="">
            <br>
            <div class="alert-warning">
                <!-- BOTÃO PRINCIPAL -->
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <button class="btn btn-default disabled">TIPOS</button>
                    </div>
                </div>
                <!-- BOTÃO LISTA -->
                 <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="tipos_lista.php">
                            <button class="btn btn-warning">CATÁLOGO</button>
                        </a>
                    </div>
                </div>
                <!-- BOTÃO INSERIR -->
                 <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="tipos_insere.php">
                            <button class="btn btn-warning">INSERIR</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- FIM ADM TIPOS -->

     <!-- ADM USUARIOS -->
     <div class="col-sm-6 col-md-4">
        <div class="thumbnail alert-info">
            <img src="../imagens/icone_user.png" alt="">
            <br>
            <div class="alert-primary">
                <!-- BOTÃO PRINCIPAL -->
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <button class="btn btn-default disabled">USUÁRIOS</button>
                    </div>
                </div>
                <!-- BOTÃO LISTA -->
                 <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="usuarios_lista.php">
                            <button class="btn btn-primary">CATÁLOGO</button>
                        </a>
                    </div>
                </div>
                <!-- BOTÃO INSERIR -->
                 <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group">
                        <a href="usuarios_insere.php">
                            <button class="btn btn-primary">INSERIR</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- FIM ADM USUARIOS -->

</div><!-- FIM ROW -->
</main>



<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>