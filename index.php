<?php
/** Arquivo de configuração do sistema */
include_once('Classes/Config.inc.php');

/** @var array parametros passados via URL */
$url = Url::getParametros();

include_once("Pages/topo.php");
include_once("Pages/home.php");
include_once("Pages/rodape.php");

if ($url[0] == "sac"){
    echo'<script>window.location="http://177.19.248.64:8195/sac/open.do?action=open&sys=SAC"</script>';
}