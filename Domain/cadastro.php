<?php

include("Conexao.php");
$pdo=conectar();

$postdata = file_get_contents('php://input');

$data = json_decode($postdata);


@$nome = $data->nome;
@$telefone = $data->telefone;

@$numero = $data->numero;
@$orgao = $data->orgao;
@$dataex = $data->dataex;
@$uf = $data->uf;

@$nomecont = $data->nomecont;
@$telefonecont = $data->telefonecont;


//prepara o cadastro

$buscasegura=$pdo->prepare("INSERT INTO `lista`( `nome` ,  `telefone` ,  `numero` ,  `orgao` ,  `dataex` ,  `uf` ,  `nomecont` ,  `telcont` )VALUES(:nome, :telefone, :numero, :orgao, :dataex, :uf, :nomecont, :telefonecont)");
$buscasegura->bindValue(":nome",$nome);
$buscasegura->bindValue(":telefone",$telefone);

$buscasegura->bindValue(":numero",$numero);
$buscasegura->bindValue(":orgao",$orgao);
$buscasegura->bindValue(":dataex",$dataex);
$buscasegura->bindValue(":uf",$uf);

$buscasegura->bindValue(":nomecont",$nomecont);
$buscasegura->bindValue(":telefonecont",$telefonecont);

//valida o cadastro
$validar=$pdo->prepare("SELECT * FROM lista WHERE numero=?");
$validar->execute(array($numero));

if($validar->rowCount() == 0):
$buscasegura->execute();


echo"<script type='text/javascript'>";
	echo "alert('O Usuario foi cadastrado com sucesso.');";
echo "</script>";

else:

echo"<script type='text/javascript'>";
	echo "alert('O RG informado ja foi cadastrado, tente outro.');";
echo "</script>";
 
endif;

?>