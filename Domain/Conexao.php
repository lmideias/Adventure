<?php
function conectar(){
    try
    {
	    $pdo = new PDO("mysql:host=sql113.freecluster.eu; dbname=fceu_18189627_adventure;","fceu_18189627","kenga692010");
                      
    }
    catch(PDOException $e)
    {
	    echo $e->getMessage();
    }    
    return $pdo;
}

?>