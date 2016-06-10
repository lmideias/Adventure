<?php

include 'conexao.php';

$query = "SELECT * FROM UsuarioAdv";

$resultado = $mysqli->query($query);
$arr = array();

if($resultado->num_rows > 0){
    while ($row=$resultado->fetch_assoc()){
        $arr[]=$row;
    }
}

$json_respaw = json_encode($arr);
        echo $json_respaw;
        