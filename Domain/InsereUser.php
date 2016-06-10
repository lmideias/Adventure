<?php

include("Conexao.php");
$pdo=conectar();

$nome = "Edilson";
$email = "edilson@gmail.com";
$senha = 1234;
$ativo = 2;
//prepara o cadastro

$buscasegura=$pdo->prepare("INSERT INTO Usuario(nome,email, senha, ativo)VALUES(:nome, :email, :senha, :ativo)");
$buscasegura->bindValue(":nome",$nome);
$buscasegura->bindValue(":email",$email);
$buscasegura->bindValue(":senha",$senha);
$buscasegura->bindValue(":ativo",$ativo);

//valida o cadastro
$validar=$pdo->prepare("SELECT * FROM Usuario WHERE email=?");
$validar->execute(array($email));

if($validar->rowCount() == 0):
$buscasegura->execute();
echo "O Usuario ".$email."  foi cadastrado com sucesso";
 
else:

echo "O ".$email." Informado já foi cadastrado";
 
endif;

?>