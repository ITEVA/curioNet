<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/quemSomos.css">
    <link rel="stylesheet" href="css/planos.css">
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="css/contrato.css">
    <link rel="stylesheet" href="css/contatos.css">
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script type="text/javascript" src="js/topo.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/topo.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/contrato.js"></script>
    <script type="text/javascript" src="js/contato.js"></script>


    <title>Curió</title>
</head>
<body>
<div id="box">
    <div class="col-lg-12 barraSuperior">
        <div class="botao">
            <a href="http://mk.curionet.com.br:8080/sac/open.do?action=open&sys=SAC" target="_blank"><button class="btnCliente">Área do cliente &nbsp;<span class="glyphicon glyphicon-user"></span></button></a>
        </div>
        <div class="col-lg-8 logoResponsive">
            <div class="imgCenter">
                <a href="#home"><img id="logoResponsive" src="img/logo.jpg"/></a>
            </div>
        </div>
    </div>

    <div id="home"></div>

    <div class="col-lg-12 barraInferior">
        <div id="fixo" class="col-lg-6 box2">
            <div class="logo">
                <a href="#home"><img id="logo" src="img/logo.jpg"></a>
            </div>
            <div class="menu">
                <ul class="nav nav-pills">
                    <li id="liMenu1" role="presentation" class="itemMenu active"><a class="linkRola" href="#home">Home</a></li>
                    <li id="liMenu2" role="presentation" class="itemMenu"><a class="linkRola" href="#quemSomos">Quem somos</a></li>
                    <li id="liMenu3" role="presentation" class="itemMenu"><a class="linkRola" href="#planos">Planos</a></li>
                    <li id="liMenu4" role="presentation" class="itemMenu"><a class="linkRola" href="#contatos">Contatos</a></li>
                    <li id="liMenu5" role="" class=""><a class="" href="http://curionet.speedtest.net" target="_blank">Teste de Velocidade</a></li>
                </ul>
            </div>
        </div>

        <div id="menuToggle">
            <div class="entire-menu">
                <input type="checkbox" name="change-hamburguer" id="change-hamburguer" />

                <a id="hamburguer" class="hamburguer" href="#">
                    <span></span>
                    <label for="change-hamburguer"></label>
                </a>

                <div id="menu2" class="menu2" onclick="$('#change-hamburguer').click();">
                    <div id="links">
                        <a class="linkRola" onclick="marcardesmarcar();" href="#home">Home</a>
                        <hr>
                        <a class="linkRola" onclick="marcardesmarcar();" href="#quemSomos">Quem Somos</a>
                        <hr>
                        <a class="linkRola" onclick="marcardesmarcar();" href="#planos">Planos</a>
                        <hr>
                        <a class="linkRola" onclick="marcardesmarcar();" href="#contatos">Contatos</a>
                        <hr>
                        <a onclick="marcardesmarcar();" id="link5" href="http://simet.nic.br/simet-app.html" target="_blank">Teste de Velocidade</a>
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
<div class="branco"></div>
<div class="divisao col-lg-12"></div>

<script src="js/menu.js"></script>
</body>
</html>