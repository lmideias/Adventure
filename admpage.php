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
        
           <div class="ca-header-barra">
            <div class="ca-header">
                  <div class="ca-logo">
                      <a href="admlogin.php"><img alt="Logo" src="/Imagens/adventure-min.png" width="80" height="76" /></a>
                  </div>
                   <div class="ca-menu">
                       <div class="ca-titulo">
                           <h1>Eventos</h1>
                      </div>
                        <div class="ca-numero">
                         <select class="ca-dropdown" name="Evento">
                            <option value="v0">Selecione o Evento</option>
                            <option value="v1">Festival da Pinga</option>
                            <option value="v2">Capitolio</option>
                            <option value="v3">Camping no Afegao</option>
                            <option value="v4">Rapel na lua</option>
                        </select>
                       </div>
                  </div>
            </div>
            </div>
        
        <div class="ca-body">
            <div class="ca-menu-body">
                          
            </div>
            
            <div class="ca-container-a">
                <div class="ca-container-a-small">
                      
                     <div ng-repeat ="data in dados" > 
                         
                        <div class="ca-linha-box"> 
                            
                          <div class="linha-a">
                              <p><h1>Participante</h1></p>
                         </div>
                         <div class="linha-a"> </div>                      
                            
                          <div class="linha-a">
                              <div class="linha-b"><h3>Nome:</h3></div> 
                              <div class="linha-b2">{{data.nome}}</div>
                              
                              <div class="linha-b"><h3>Telefone:</h3></div> 
                              <div class="linha-b3">{{data.telefone}}</div>                              
                              
                         </div>
                            
                            
                          <div class="linha-a">
                              
                               <div class="linha-b"><h3>RG Numero:</h3></div> 
                              <div class="linha-b3">{{data.numero}}</div>
                              
                              <div class="linha-b"><h3>Orgao Emissor:</h3></div> 
                              <div class="linha-b3">{{data.orgao}}</div>  
                              
                               <div class="linha-b"><h3>Data Expedição:</h3></div> 
                              <div class="linha-b3">{{data.dataex}}</div>
                              
                              <div class="linha-b"><h3>UF:</h3></div> 
                              <div class="linha-b4">{{data.uf}}</div>                             
                            
                         </div>
                        <div class="linha-a"> </div>
                          <div class="linha-a">
                            <p><h1>Contato de Emergência</h1> </p>
                         </div>
                         <div class="linha-a"> </div>
                         
                         
                         
                          <div class="linha-a ">
                              
                               <div class="linha-b"><h3>Nome:</h3></div> 
                              <div class="linha-b2">{{data.nomecont}}</div>
                              
                              <div class="linha-b"><h3>Telefone:</h3></div> 
                              <div class="linha-b3">{{data.telefonecont}}</div>                             
                         </div>
                         
                         <div class="linha-a"> </div>
                          <div class="linha-a ">
                               <div class="linha-b"><h3>Assinatura:</h3></div>
                               <div class="linha-b2">_______________________________</div>
                         </div>
                         
                       </div>  
                         

                    </div>          
                </div>        
            </div>
            
             <div class="ca-container-b">
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
