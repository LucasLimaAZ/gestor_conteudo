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
<body>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?=$titulo?>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#indexacao" data-toggle="tab">Indexação</a>
                    </li>
                    <li><a href="#visual" data-toggle="tab">Visual</a>
                    </li>
                    <li><a href="#info" data-toggle="tab">Info</a>
                    </li>
                    <li><a href="#conteudo" data-toggle="tab">Conteúdo</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="indexacao">
                        <h4>Titulo: <?=$titulo?></h4>
                        <h5>Subtitulo: <?=$subtitulo?></h5>
                    </div>
                    <div class="tab-pane fade" id="visual">
                        <h4>Profile Tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="info">
                        <h4>Messages Tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="conteudo">
                        <h4>Settings Tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>