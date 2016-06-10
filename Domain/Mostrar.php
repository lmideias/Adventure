<?php

include("Conexao.php");
$pdo=conectar();

$buscarusuario=$pdo->prepare("SELECT * FROM Usuario");
$buscarusuario->execute();

$linha = $buscarusuario->fetchAll(PDO::FETCH_ASSOC);

foreach ($linha as $listar){
echo "Nome: ".$listar["nome"]." - Email: ".$listar["email"]." - Senha: ".$listar["senha"]." - Ativo: ".$listar["ativo"]."<br /> <br />";
}
?>