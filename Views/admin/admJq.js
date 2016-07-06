
   var app = angular.module('admApp',[]);
   
   app.controller('StoreController', function($scope){
      $scope.app = "Mensagens";
      $scope.contatos = [
          {nome:"Luciano Eun", mensagem:"Olá besta"},  
          {nome:"Luciano Eun", mensagem:"Olá besta"},
          {nome:"Luciano Eun", mensagem:"Olá besta"},
          {nome:"Luciano Eun", mensagem:"Olá besta"}
      ];
      
      
      $scope.addMensagem = function(contato){
          $scope.contatos.push(contato);
      };
      
   });
   
  