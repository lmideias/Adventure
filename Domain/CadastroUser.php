<?php

include("connectdb.php");

$data = json_decode(file_get_contents("php://input"));
$email=$dbhandle->real_escape_string($data->email);
$senha=$dbhandle->real_escape_string($data->senha);




$query="INSERT INTO UsuarioAdv  ('email','senha') VALUES ('".$email."','".$senha."')";
$dbhandle->query($query);

