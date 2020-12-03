<!doctype html>
<html lang="pt-br">
<head>
<meta http-equiv="Refresh" content="15;URL=index.php">
<title>Invasor</title>
<meta charset="utf-8">
<!-- Link arquivos Bootstrap css -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/abdf34532a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/meuestilo.css" type="text/css">
</head>
<body class="fundofixo">
<main class="container">
<section>
<article>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h1 class="breadcrumb text-danger text-center">Atenção!</h1>
            <div class="thumbnail text-center">
                <span class="fa-stack fa-5x">
                    <i class="fas fa-user-secret fa-stack-1x"></i>
                    <i class="fas fa-ban fa-stack-2x text-danger"></i>
                </span>
                <br>
                <br>
                <div class="alert alert-danger" role="alert">
                    <h4>
                        <strong>NÃO AUTORIZADO</strong>
                        <br><br>
                        Solicite acesso ao seu Supervisor.
                    </h4>
                    <p class="text-danger">
                        <a href="index.php" class="btn btn-warning">
                            Voltar<br>Área Administrativa<br>
                            <i class="fas fa-home fa-2x"></i>
                            <br>
                        </a>
                    </p>
                    <p>
                        <br>
                        <small>Caso não faça uma escolha em <span id="count" class="timer">15</span> segundos ou será redirecionado automaticamente para página inicial</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
</section>
</main>
<script type="text/javascript">
    var counter = 15;
    setInterval( function(){
        counter--;

        if( counter >=0){
            id = document.getElementById("count");
            id.innerHTML = counter;
        }
    }, 1000);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>