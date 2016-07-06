<?php

include("Conexao.php");
$pdo=conectar();


$buscar=$pdo->prepare("SELECT * FROM lista");
$buscar->execute();


$data = array();

if($buscar)
{
	while($linha=$buscar->fetch(PDO::FETCH_OBJ)){
	$data[] = $linha;
    }	
}else{
	$data[] = null;
}

echo json_encode($data);

?>