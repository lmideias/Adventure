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
                           <h1>Cadastro para o Seguro obrigatório</h1>
                      </div>
                        <div class="ca-numero">
                        
                       </div>
                  </div>
            </div>
            </div>
        <div class="ca-body">
          
            <div class="ca-container">
                <form method="POST" >
                 <div class="ac-box-container">                
                                                       
                     <span>Seguro obrigatório</span>
                <p>   
                As vítimas de acidentes rodoviários têm cobertura do seguro DPVAT (Danos Pessoais Causados por Veículos Automotores de Via Terrestre), uma apólice obrigatória paga por todos os veículos automotores (incluindo ônibus), com o objetivo de garantir indenizações em caso de morte ou invalidez e reembolso, em caso de despesas médicas em decorrência de acidentes.<p/>
                Quem viaja de ônibus não precisa pagar nada por este seguro, ele já é pago pela empresa prestadora de serviço.
                </p>
                
            </div>
                    
                    
                    
            <div class="ac-box-3">
                <div class="ac-box-31">
                    <div class="ac-box-31t">
                        <h3>Participante</h3>
                    </div>
                    <div class="ac-box-31c">
                         <div class="form-group ac-box">
               
                <input type="text" ng-model="nome" name="nome" class="form-control" id="nome" required placeholder="Seu nome completo">
                </div>
                
               <div class="form-group ac-box ">
               
                <input type="text" ng-model="telefone" name="telefone" class="form-control" id="seutelefone" required placeholder="Seu Telefone">
                </div>
                    </div>
                </div>
                 <div class="ac-box-32">
                    <div class="ac-box-32t">
                         <h3>Documento de Identificação</h3>
                    </div>
                    <div class="ac-box-32c">
                         <div class="ac-box-min">    
                             
                              <input type="text" ng-model="numero" name="numero"class="form-control" id="numero" required placeholder="Numero">
                         </div>

                        <div class="ac-box-min ac-mgl">    
                           
                            <input type="text" ng-model="dataex" name="dataex"class="form-control" id="dataexp" required placeholder="Data Expedição">
                        </div>

                         <div class="ac-box-min ac-mgt15">    
                            
                             <input type="text" ng-model="orgao" name="orgao" class="form-control" id="orgao" required placeholder="Orgão Emissor">                

                        </div>

                        <div class="ac-box-min ac-mgt15 ac-mgl">    
                            
                             <input type="text" ng-model="uf" name="uf" class="form-control" id="uf" required placeholder="Estado de Origem">

                        </div> 
                    </div>
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
                <input type="text" ng-model="nomecont" name="nomecont" class="form-control" id="nome" required placeholder="Nome do Contato">
                </div>
                
               <div class="form-group ac-box ac-mgl">               
                <input type="text" ng-model="telefonecont" name="telefonecont" class="form-control" id="seutelefone" required placeholder="Telefone do Contato">
                </div>     
                            
                
                </div>
                 <div class="ac-box-container ac-mgt">
                     
                     <h1 class="ca-h1">Responsabilidades</h1>
                     <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                   </p>
                   <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                   </p>
                </div>
                    
                <div class="ac-box-container ">   
                   <div class="form-group ac-box">                   
                    <button type="button" name="btnOk" ng-click="insertdata()" class="btn btn-primary">Concordar</button>                
                    <button type="button" name="" class="btn btn-primary">Sair</button>
                   
                   </div> 
                </div>
                    
                </form>  
            </div>
        </div>
    </body>
</html>
