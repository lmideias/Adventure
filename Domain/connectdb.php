<?php

define("HOSTNAME", "sql113.freecluster.eu");
define("USERNAME", "fceu_18189627");
define("PASSWORD", "kenga692010");
define("DATABASE", "fceu_18189627_adventure");

$dbhandle = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Erro ao conectar ao banco de dados");
?>