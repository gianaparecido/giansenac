<?php 
// Incluir arquivo para fazer a conexão
include("Connections/conn_produtos.php");
// Consulta para trazer dados
$tabela         = "tbtipos";
$ordenar_por    = "rotulo_tipo";
$consulta_tipos  = "SELECT * FROM ".$tabela." ORDER BY ".$ordenar_por."";
$lista_tipos    = $conn_produtos->query($consulta_tipos);
$row_tipos       = $lista_tipos->fetch_assoc();
$totalRows_tipos = ($lista_tipos)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Chuleta Quente</title>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meuestilo.css" rel="stylesheet"> 
</head>
<body>
<!-- ABRE A BARRA DE NAVEGAÇÃO -->
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- AGRUPAMENTO MOBILE -->
<div class="navbar-header">
    <a href="index.php" class="navbar-brand"><img src="imagens/logochurrascopequeno.png" alt=""></a><!-- LOGO CHULETA QUENTE -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar" aria-expanded="false">
            <span class="sr-only">Toogle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">
            <img src="../imagens/logochurrascopequeno.png" alt="">
        </a>
    </div><!-- FIM AGRUPAMENTO MOBILE -->
    <div class="collapse navbar-collapse" id="defaultNavbar"><!-- NAV DIREITA -->
    <ul class="nav navbar-nav navbar-right">
        <li class="active">
            <a href="index.php">
                <span class="glyphicon glyphicon-home"></span>
            </a>
        </li>
        <li><a href="index.php#destaques">DESTAQUES</a></li>
        <li><a href="index.php#produtos">PRODUTOS</a></li>
        <li class="dropdown"><!-- INICIO DROPDOWN -->
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                TIPOS
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <?php do { ?>
                <li>
                    <a href="produtos_por_tipo.php?id_tipo=<?php echo $row_tipos['id_tipo'];?>">
                    <?php echo $row_tipos['rotulo_tipo']; ?>
                    </a>
                </li>
            <?php } while ($row_tipos=$lista_tipos->fetch_assoc())?>
            </ul>
        </li><!-- FIM DROPDOWN -->
        <li><a href="index.php#contato">CONTATO</a></li>
        <!-- INICIO FORM DE BUSCA -->
        <form action="produtos_busca.php" method="get" name="form_busca" id="form_busca" class="navbar-form navbar-left" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Busca Produto" name="buscar" id="buscar" size="9" required>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>   
            </div>
        </form>
        <!-- FIM FORM DE BUSCA -->
        <li class="active">
            <a href="admin/index.php">
                <span class="glyphicon glyphicon-user"></span>
            </a>
        </li>
    </ul>

    </div><!-- FIM NAV DIREITA -->
</div> 
</nav><!-- FECHA A BARRA DE NAVEGAÇÃO -->
<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

<?php mysqli_free_result($lista_tipos); ?>