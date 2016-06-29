<?php
include 'Domain/configuration.php';

if(isset($_POST['cadastrar']))
{
     $Nome = $_POST['nome'];
     $Telefone = $_POST['telefone'];
     
     $Numero = $_POST['numero'];
     $Orgao = $_POST['orgao'];
     $DataEx = $_POST['dataex'];
     $Uf = $_POST['uf'];
     
     $NomeCont = $_POST['nomecont'];
     $TelefoneCont = $_POST['telefonecont'];
     
     
     
     
     $query = "INSERT INTO lista ('nome','telefone','numero','orgao','dataex','uf','nomecont','telcont') VALUES ('$Nome','$Telefone','$Numero','$Orgao','$DataEx','$Uf','$NomeCont','$TelefoneCont')";
     $data = mysql_query($query)or die(mysql_error());
     
     if($data)
     {
         setcookie("nome",$Nome);
         header("Location: http://trilhasadventure.rf.gd/admpage.php");
         
     }else
     {
        echo "<h3>Nome ou Senha Errados</h3>";
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
        <div class="ca-body">
            <div class="ca-header">
                  <div class="ca-logo">
                      <a href="admlogin.php"><img alt="Logo" src="/Imagens/adventure-min.png" width="80" height="76" /></a>
                  </div>
                   <div class="ca-menu">
                       <div class="ca-titulo">
                           <h1>Cadastros</h1>
                      </div>
                        <div class="ca-numero">
                        100
                       </div>
                  </div>
            </div>
            <div class="ca-container">
                <form method="POST" >
                 <div class="ac-box-container">
                     
                     
                       <h3>Cadastro para o Seguro obrigatório</h3> <br /> <br />
                
                <p>                 
                Seguro obrigatório<p/> <br />  
                As vítimas de acidentes rodoviários têm cobertura do seguro DPVAT (Danos Pessoais Causados por Veículos Automotores de Via Terrestre), uma apólice obrigatória paga por todos os veículos automotores (incluindo ônibus), com o objetivo de garantir indenizações em caso de morte ou invalidez e reembolso, em caso de despesas médicas em decorrência de acidentes.<p/>
                Quem viaja de ônibus não precisa pagar nada por este seguro, ele já é pago pela empresa prestadora de serviço.
                </p>
                <br />                
                <br />
                <h3>Participante</h3>
                <br /><br />
                
                <div class="form-group ac-box">
                <label for="nome completo">Nome Completo</label><p/>
                <input type="text" name="nome" class="form-control" id="nome" required placeholder="Seu nome completo">
                </div>
                
               <div class="form-group ac-box ac-mgl">
                <label for="nome completo">Telefone</label><p/>
                <input type="text" name="telefone" class="form-control" id="seutelefone" required placeholder="Seu Telefone">
                </div>
                 </div>
                
                
                 <div class="ac-box-container">
                <h3>Documento de Identificação</h3>
                <br /><br />
                
                <div class="form-group ac-box">
                <label for="rgnumero">Numero</label><p/>
                <input type="text" name="numero"class="form-control" id="numero" required placeholder="Numero">
                 <br /><br />
                  <label for="rgnumero">Data Expedição</label><p/>
                <input type="text" name="dataex"class="form-control" id="dataexp" required placeholder="Data Expedição">
                
                </div>
                
               <div class="form-group ac-box ac-mgl">
                <label for="nome completo">Orgão Emissor</label><p/>
                <input type="text" name="orgao" class="form-control" id="orgao" required placeholder="Orgão Emissor">                
                 <br /><br />
                  <label for="rgnumero">UF</label><p/>
                <input type="text" name="uf" class="form-control" id="uf" required placeholder="Estado de Origem">
                
                </div>
                 </div>
                                
                
                
                 <div class="ac-box-container ac-mgt">
                <h3>Contato de Emergência</h3>
                 <br />  
                  <br />  
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <br /><br />
                
                                
                <div class="form-group ac-box">
                <label for="nome completo">Nome Completo</label><p/>
                <input type="text" name="nomecont" class="form-control" id="nome" required placeholder="Seu nome completo">
                </div>
                
               <div class="form-group ac-box ac-mgl">
                <label for="nome completo">Telefone</label><p/>
                <input type="text" name="telefonecont" class="form-control" id="seutelefone" required placeholder="Seu Telefone">
                </div>     
                            
                
                </div>
                
                <div class="ac-box-container ">
                    <button type="submit" name="cadastrar"class="btn btn-primary">Cadastrar</button>
                    <button type="button" class="btn btn-warning">Limpar Formulario</button>
                </div>
                </form>  
            </div>
        </div>
    </body>
</html>
