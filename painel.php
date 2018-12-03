<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="SB-Admin-2/dist/css/sb-admin-2.min"/>
    <link rel="stylesheet" href="mystyle/mystyle.css"/>
    <link href="SB-Admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script href="bootstrap/js/bootstrap.min.js"></script>
    <?php include('back-end/buscador.php'); ?>
    <title>Painel</title>
</head>
<body>    
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Conteúdos:
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Subtitulo</th>
                                    <th>Tags</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($results as $campo):?>
                                    <tr>
                                        <td><?=$campo->id;?></td>
                                        <td><?=$campo->titulo;?></td>
                                        <td><?=$campo->subtitulo;?></td>
                                        <td><?=$campo->tags;?></td>
                                        <td><?=$campo->descricao;?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>