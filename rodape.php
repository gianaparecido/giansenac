<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Link arquivos Bootstrap css 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rodapé</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/meuestilo.css" rel="stylesheet">-->
</head>
<body class="fundofixo">

<div class="row panel-footer" style="background-color:rgba(255,255,255,0.8)"><!-- ABRE O PAINEL DE RODAPÉ -->

<div class="col-sm-6 col-md-4"><!-- ABRE ÁREA DE LOCALIZAÇÃO -->
    <div class="panel-footer" style="background:none;">
        <img src="imagens/logochurrascopequeno.png" alt="">
        <br>
        <i>O melhor churrasco da região</i>
        <address>
            <i>Rua Dom Joaquim, 495 - Centro - Itapetininga - SP - CEP 18200-000</i>
            <br>
            <span class="glyphicon glyphicon-phone-alt"></span>
            &nbsp;Fone (15) 3511 1200
            <br>
            <span class="glyphicon glyphicon-envelope"></span>
            &nbsp;Email:
            <a href="mailto:contato@chuletaquente.com.br?subject=Contato&cc=seuemail@hotmail.com">
                contato@chuletaquente.com.br
            </a>
        </address>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3525697091727!2d-48.05486788529228!3d-23.59168528466779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5cc93b46246ed%3A0x6ec0870ce87bb6fd!2sSenac%20Itapetininga!5e0!3m2!1spt-BR!2sbr!4v1591722663117!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;"></iframe>
        </div>
    </div>
</div><!-- FECHA ÁREA DE LOCALIZAÇÃO -->
<div class="col-sm-6 col-md-4"><!-- ABRE ÁREA DE NAVEGAÇÃO -->
    <div class="panel-footer" style="background:none;">
        <h4>Links</h4>
        <ul class="nav nav-pills nav-stacked">
            <li>
                <a href="index.php#home" class="text-danger">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"><strong>&nbsp;HOME</strong></span>
                </a>
            </li>

            <li>
                <a href="index.php#destaques" class="text-danger">
                    <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"><strong>&nbsp;DESTAQUES</strong></span>
                </a>
            </li>

            <li>
                <a href="index.php#home" class="text-danger">
                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"><strong>&nbsp;PRODUTOS</strong></span>
                </a>
            </li>

            <li>
                <a href="index.php#home" class="text-danger">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"><strong>&nbsp;CONTATO</strong></span>
                </a>
            </li>

            <li>
                <a href="admin/index.php#home" class="text-danger">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><strong>&nbsp;ADMINISTRAÇÃO</strong></span>
                </a>
            </li>

        </ul>
    </div>
</div> <!-- FECHA ÁREA DE NAVEGAÇÃO -->
<!-- ABRE ÁREA FORM CONTATO -->
<div class="col-sm-6 col-md-4">
    <div class="panel-footer" style="background:none;">
    <h4>Contato</h4>
    <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
        <!-- INPUT GROUP -->
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" name="basic-addon1">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </span>
                <input type="text" name="nome_contato" id="nome_contato" placeholder="Digite seu nome" aria-describedby="basic-addon1" required class="form-control">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2" name="basic-addon2">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </span>
                <input type="email" name="email_contato" id="email_contato" placeholder="Digite seu Email" aria-describedby="basic-addon2" required class="form-control">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3" name="basic-addon3">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </span>
                <textarea name="comentarios_contato" id="comentarios_contato" placeholder="Digite seu comentário, dúvidas e/ou sugestões" aria-describedby="basic-addon3" required class="form-control" rows="5" required></textarea>
            </div>
            <button class="btn btn-danger btn-block" aria-label="Enviar">
             Enviar <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
            </button>
    </form>
    </div>
</div>
<!-- FECHA ÁREA FORM CONTATO -->
<div class="col-sm-12" style="background:none;">
    <div class="panel-footer" style="background:none;">
        <h6 class="text-danger text-center">
            Developed by Gian&trade; 2020.
            <br>
            <a href="#"></a>
        </h6>
    </div>
</div>
</div><!-- FECHA O PAINEL DE RODAPÉ -->
<!-- Link arquivos Bootstrap js 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
</body>