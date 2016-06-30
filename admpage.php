<!DOCTYPE html>
<html ng-app="myModule">
    <head>
        
        <title>Trilhas Adventure</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <link rel="stylesheet" type="text/css"  href="Content/main.css" />
        <link rel="stylesheet" type="text/css"  href="Content/bootstrap.css" />     
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

        <link href="Content/Reset.css" rel="stylesheet"/>
        <script src="Scripts/main.js"></script>
        <script src="Scripts/angular.js"></script>
    </head>
    <body ng-controller="myControle">
        
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
                {{message}}
                 <div ng-repeat ="data in dados" > 
                     <h2> {{data.nome}}</h2>   
                     <h2> {{data.telefone}}</h2>   
              
                     <h2> {{data.numero}}</h2>   
                     <h2> {{data.orgao}}</h2>   
                     <h2> {{data.dataex}}</h2>   
                     <h2> {{data.uf}}</h2>   
              
                     <h2> {{data.nomecont}}</h2>   
                     <h2> {{data.telefonecont}}</h2>   
              
                </div> 
            </div>
        </div>
    </body>
</html>
