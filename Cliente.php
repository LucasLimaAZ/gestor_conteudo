<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366px, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="SB-Admin-2/dist/css/sb-admin-2.min"/>
    <link rel="stylesheet" href="mystyle/mystyle.css"/>
    <link href="SB-Admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script href="bootstrap/js/bootstrap.min.js"></script>
    <title>Cliente</title>
    <?php include 'back-end/PaginaCliente.php' ?>
</head>
<body class="cliente_body">
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?=$nome?>
                </div>
                <div class="panel-body">
                    <h4>Título: <?=$titulo?></h4>
                    <h5>Subtitulo: <?=$subtitulo?></h5>
                    <h6>Tags: <?=$tags?></h6>
                </div>
                <div class="panel-footer">
                    Informações de identidade e indexação.
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Descrição
                </div>
                <div class="panel-body">
                    <p><?=$descricao?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="well">
                <h4>Frases e Slogans:</h4>
                <p><?=$frases?></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="well">
                <h4>Links de referência:</h4>
                <p><a><?=$links?></a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cores">
                <div class="col-lg-6">
                <h3>Cor primária:</h3>
                <h3 style="color:<?=$cor_primaria?>"><?=$cor_primaria?></h3>
                </div>
                <div class="col-lg-6">
                <h3>Cor secundária:</h3>
                <h3 style="color:<?=$cor_secundaria?>"><?=$cor_secundaria?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="well">
                <h4><i class="fa fa-phone"> Telefone: </i></h4>
                <p><?=$telefone?></p>
                <h4><i class="fa fa-envelope"> Email: </i></h4>
                <p><?=$email?></p>
                <h4><i class="fa fa-location-arrow"> Endereço: </i></h4>
                <p><?=$endereco?></p>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="well">
                <h4>Quem Somos :</h4>
                <p><?=$quem_somos?></p>
            </div>
        </div>
    </div>
</body>
</html>