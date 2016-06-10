<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro do Usuário</title>
        <link href="caduser.css" rel="stylesheet"/>
        <link href="../Content/bootstrap.css" rel="stylesheet"/>
        <script src="../Scripts/angular.js" ></script>
         <script src="../Scripts/mainAngular.js" ></script>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        
    </head>
    <body class="body-a" >
   
       
    <div class="cad-body">
            <div class="cad-termo container"> 
                <h3>Termo de Uso do site</h3><br />
                <h5>Suas Imagens e videos</h5><br />
                 <h5>Suas Imagens e videos</h5><br />
                  <h5>Suas Imagens e videos</h5><br />
     
           </div>
        
        
        
        <div class="cad-usuario cad-container">
                      
            <form>
                <div ng-controller="ControleUm" class="cad-form">
                     <h4> {{titulo}} </h4><br />
                     <input type="text" class="form-control" ng-model="email" name="email" placeholder="Digite seu Email" /> <br />
                     <input type="text" class="form-control" ng-model="senha" name="senha" placeholder="Digite sua Senha" /><br />
                     <button type="submit" value="submit" ng-click="CadastroUser()" class="btn btn-success">Próximo</button>
                </div>
            </form>
        
        
        </div>
        
        
        
        <div class="cad-pessoa cad-container">
             
            <form action="" method="post">
               
                <div class="cad-form" ng-repeat="UsuarioAd in data">
                      <div class="">
                        Codigo: {{usuario.userid}}
                      </div>
                       <div class="">
                         Email: {{usuario.email}}
                      </div>
                      <div class="">
                         Senha: {{usuario.senha}}
                      </div>
                     <div class="">
                         Ativo: {{usuario.ativo}}
                      </div>
                     <div class="">
                         Pessoa Id: {{usuario.pessoaId}}
                      </div>
                 </div>
                
                <div class="cad-form">
                <h4> Dados Pessoais </h4><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <button type="submit" class="btn btn-success">Endereço</button>
                </div>
            </form>
        </div>
        <div class="cad-endereco cad-container"> 
             <form action="" method="post">
                <div class="cad-form">
                <h4> Endereço </h4><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <button type="submit" class="btn btn-success">Endereço</button>
                </div>
            </form>
        
        </div>
        <div class="cad-contato cad-container"> 
            
             <form action="" method="post">
                <div class="cad-form">
                <h4> Contatos de Emergencia </h4><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <button type="submit" class="btn btn-success">Endereço</button>
                </div>
            </form>
        </div>
        <div class="cad-experiencia cad-container">Experiencia </div>
        
        </div>
        
        <script>
             var app = angular.module('myApp',[]);
             app.controller('ControleUm',function($scope,$http){
                 $scope.CadastroUser = function(){
                     $http.post('Domain/CadastroUser.php',{'email':$scope.email, 'senha':$scope.senha})
                             .success(function(){
                                 $scope.msg="Usuario Cadastrado";
                                  $scope.titulo = "Usuario";
                             });
                 };
             });
             
             var app = angular.module('simpleApp', []);
                 app.controller('myCtrl', function($scope) {
                 $scope.titulo = "Usuario";
   
            });
        
        </script>
        
        
        
        
    </body>
</html>
