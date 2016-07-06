<?php
include 'Domain/configuration.php';

if(isset($_POST['entrar']))
{
     $Nome = $_POST['nome'];
     $Senha = $_POST['senha'];
     $verificar = mysql_query("SELECT * FROM 'admLogin' WHERE Nome = '$Nome' AND Senha = '$Senha'");
     
     if(mysql_num_rows($verificar)<=0)
     {
         echo "<h3>Nome ou Senha Errados</h3>";
     }else
     {
         setcookie("nome",$Nome);
         header("Location: http://trilhasadventure.rf.gd/admpage.php");
     }
}

?>




<!DOCTYPE html>
<html>
    <head>
        
        <title>Trilhas Adventure</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <link rel="stylesheet" type="text/css"  href="Content/main.css" />
        <link rel="stylesheet" type="text/css"  href="Content/bootstrap.css" />     
        
        <link href="Content/Reset.css" rel="stylesheet"/>
        <script src="Scripts/main.js"></script>
    </head>
    <body>
           
                                      
                 
             <div class="ca-login">
                 <form method="POST">
                <div class="form-group">               
                    <input type="text" name="nome" class="form-control" id="nome" required placeholder="Nome">              
                    <br />
                    <input type="text" name="senha" class="form-control" id="senha" required placeholder="Senha">               
                </div>
                 
                <div class="form-group">                     
                    <button type="submit" name="entrar" class="btn btn-primary">Entrar</button>                    
                </div>
                </form> 
             </div>
        
    </body>
</html>
