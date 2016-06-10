var app = angular.module('UsuarioApp',[]);
app.controller('control', function($scope) {
    $scope.titulo = "Usuario2";
   
});

app.controller('listagem', function($scope) {
    $scope.titulo = "Listagem";
   
});

 
 
 app.controller('UsuarioController',function($scope,$http){
     $scope.CadastroUser = function(){
     $http.post('CadastroUser.php',{'email':$scope.email, 'senha':$scope.senha})
        .success(function(){
           $scope.msg="Usuario Cadastrado";                                  
           });
        };
  });      