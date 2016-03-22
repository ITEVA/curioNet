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
            <img id="logoResponsive" src="img/logo.jpg"/>
        </div>
    </div>
</div>


<div class="col-lg-12 barraInferior">
    <div class="col-lg-6 box2">
    <div class="logo">
        <img id="logo" src="img/logo.jpg">
    </div>

    <div class="menu">
        <ul class="nav nav-pills">
            <li id="liMenu" role="presentation" class="active"><a href="home">Home</a></li>
            <li id="liMenu" role="presentation"><a href="#quemSomos">Quem somos</a></li>
            <li id="liMenu" role="presentation"><a href="planos">Planos</a></li>
            <li id="liMenu" role="presentation"><a href="contato">Contatos</a></li>
            <li id="liMenu" role="presentation"><a href="http://www.speedtest.net/pt/" target="blank">Medidor de velocidade</a></li>
        </ul>
    </div>
    </div>

    <div id="menuToggle">
        <div class="entire-menu">

            <input type="checkbox" id="change-hamburguer" />

            <a id="hamburguer" class="hamburguer" href="#">
                <span></span>
                <label for="change-hamburguer"></label>
            </a>

            <div id="menu2" class="menu2">
                <div id="links">
                    <a id="link1" href="#">Home</a>
                    <hr>
                    <a href="#quemSomos">Quem Somos</a>
                    <hr>
                    <a href="#planos">Planos</a>
                    <hr>
                    <a href="#contatos">Contatos</a>
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
<!--
    <div id="boxes">

        <div id="dialog" class="window">
            <div class="menuResponsive">
                <a href="">Home</a>
                <hr/>
                <a href="">Quem Somos</a>
                <hr/>
                <a href="">Planos</a>
                <hr/>
                <a href="">Contatos</a>
                <hr/>
                <a href="">Teste de Velocidade</a>
            </div>
        </div>

        <!-- Máscara para cobrir a tela
        <div id="mask"></div>

</div>
-->
</div>
</div>

<script src="js/menu.js"></script>
</body>
</html>