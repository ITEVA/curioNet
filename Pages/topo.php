<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/topo.js"></script>
    <script src="js/prefixfree.min.js"></script>


    <title>Curió</title>
</head>
<body>
<div id="box">
    <div class="col-lg-12 barraSuperior">
        <div class="botao">
            <button class="btnCliente">Área do cliente &nbsp;<span class="glyphicon glyphicon-user"></span></button>
        </div>
        <div class="col-lg-8 logoResponsive">
            <div class="imgCenter">
                <a href="#home"><img id="logoResponsive" src="img/logo.jpg"/></a>
            </div>
        </div>
    </div>

    <div id="home"></div>

    <div class="col-lg-12 barraInferior">
            <div class="col-lg-6 box2 fixo">
                <div class="logo">
                    <a href="#home"><img id="logo" src="img/logo.jpg"></a>
                </div>
                <div class="menu">
                    <ul class="nav nav-pills">
                        <li id="liMenu1" role="presentation" class="active"><a class="linkRola" href="#home">Home</a></li>
                        <li id="liMenu2" role="presentation"><a class="linkRola" href="#quemSomos">Quem somos</a></li>
                        <li id="liMenu3" role="presentation"><a class="linkRola" href="#planos">Planos</a></li>
                        <li id="liMenu4" role="presentation"><a class="linkRola" href="#contato">Contatos</a></li>
                        <li id="liMenu5" role="presentation"><a class="linkRola" target="_blank" href="http://www.speedtest.net/pt/">Teste de Velocidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="divisoria"></div>

        <div id="menuToggle">
            <div class="entire-menu">
                <input type="checkbox" name="change-hamburguer" id="change-hamburguer" />

                <a id="hamburguer" class="hamburguer" href="#">
                    <span></span>
                    <label for="change-hamburguer"></label>
                </a>

                <div id="menu2" class="menu2">
                    <div id="links">
                        <a class="linkRola" id="link1" href="#home">Home</a>
                        <hr>
                        <a class="linkRola" href="#quemSomos">Quem Somos</a>
                        <hr>
                        <a class="linkRola" href="#planos">Planos</a>
                        <hr>
                        <a class="linkRola" href="#contatos">Contatos</a>
                        <hr>
                        <a target="_blank" href="http://www.speedtest.net/pt/">Teste de Velocidade</a>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="botao2">
                <button class="btnCliente2" title="Área do Cliente">&nbsp;<span class="glyphicon glyphicon-user"></span></button>
            </div>
        </div>
    </div>
</div>

<script src="js/menu.js"></script>
</body>
</html>