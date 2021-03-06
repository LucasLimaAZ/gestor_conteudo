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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="myscript/indexScript.js"></script>
    <title>DOM</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Gerenciador de conteúdos DOM.
                </div>
                <form name="form" role="form" action="Success.php" method="POST" enctype="multipart/form-data" onSubmit="return verifica();">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel-body">
                                <div class="form-group">
                                <div class="col-lg-12">
                                    <label><div class="fa fa-text"></div> Nome Completo:</label>
                                        <input type="text" class="form-control" name="nome"/>
                                    </div>
                                    <div class="col-lg-12 linha primeiro_titulo">
                                        Identidade do site.
                                    </div>
                                    <div class="col-lg-6">
                                    <label><div class="fa fa-home"></div> Título do Site</label>
                                        <input type="text" class="form-control" name="titulo"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <label><div class="fa fa-list-alt"></div> Subtítulo do Site</label>
                                        <input type="text" class="form-control" name="subtitulo"/>
                                    </div>
                                    <div class="col-lg-6 linha">
                                        <label><div class="fa fa-tags"></div> Palavras Chave</label>
                                        <input type="text" class="form-control" name="tags" placeholder="Separadas por vírgula. Ex: Hotel, Passeio, Piscina."/>
                                    </div>
                                    <div class="col-lg-6 linha">
                                        <label><div class="fa fa-comment-o"></div> Descreva seu site</label>
                                        <textarea class="form-control" rows="2" placeholder="Descrição do site..." name="descricao"></textarea>
                                    </div>
                                    <div class="col-lg-12 linha titulo">
                                        Características principais.
                                    </div>
                                    <div class="col-lg-6 linha">
                                        <label><div class="fa fa-image"></div> Logo:</label>
                                        <input type="file" name="logo" accept="jpg|png|jpeg|pdf"/>
                                    </div>
                                    <div class="col-lg-3 linha">
                                        <label>Escolha a cor primaria do site:</label>
                                        <input type="color" class="form-control" name="cor_primaria" value="#0000ff"/>
                                    </div>
                                    <div class="col-lg-3 linha">
                                        <label>Escolha a cor secundaria do site:</label>
                                        <input type="color" class="form-control" name="cor_secundaria" value="#ff0000"/>
                                    </div>
                                    <div class="col-lg-12 linha titulo">
                                        Informações e Conteúdo.
                                    </div>
                                    <div class="col-lg-4 linha coluna_esquerda">
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-comment-o"></div> Frases e Slogans:</label>
                                            <textarea class="form-control" rows="2" placeholder="Digite aqui frases atratívas para sliders e títulos..." name="frases"></textarea>
                                        </div>
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-link"></div> Links Úteis:</label>
                                            <input type="text" class="form-control" name="links" placeholder="Links que possam nos ajudar a enteder seu objetivo."/>
                                        </div>
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-play-circle"></div> Mídias adicionais:</label>
                                            <input type="file" name="midias[]" accept="jpg|png|jpeg|pdf" multiple/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 linha coluna_centro">
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-phone"></div> Seu Telefone:</label>
                                            <input type="text" class="form-control" name="telefone" placeholder="(99)99999-9999"/>
                                        </div>
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-envelope-o"></div> E-mail:</label>
                                            <input type="text" class="form-control" name="email" placeholder="exemplo@email.com.br"/>
                                        </div>
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-location-arrow"></div> Localização:</label>
                                            <input type="text" class="form-control" name="endereco" placeholder="Seu endereço."/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 linha coluna_direita">
                                        <div class="col-lg-12 linha">
                                            <label><div class="fa fa-comment-o"></div> Quem Somos?</label>
                                            <textarea class="form-control" rows="8" placeholder="Conte a história do seu negócio..." name="quem_somos"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8 linha">
                                            <label><div class="fa fa-cart-plus"></div> Produtos/Serviços:</label>
                                            <textarea class="form-control" rows="5" placeholder="Cadastre seus produtos ou serviços. (Um por linha)" name="produtos"></textarea>
                                        </div>
                                        <div class="col-lg-4 linha">
                                            <label></div><div class="fa fa-camera"></div> Fotos:</label>
                                            <input type="file" name="fotos[]" multiple/>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-4"></div>
                                        <input type="submit" value="Enviar" class="btn btn-danger col-lg-4 enviar"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>