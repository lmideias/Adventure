<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connect = mysql_connect("sql113.freecluster.eu","fceu_18189627","kenga692010") or die ("Erro ao conectar ao servidor de dados");
$db = mysql_select_db("fceu_18189627_adventure", $connect)or die ("Falha ao conectar a base de dados");
?>