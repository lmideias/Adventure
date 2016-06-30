var myApp = angular.module("myModule", []);

myApp.controller("myControle", function($scope, $http) {   
    
    $scope.message = "Funcionou";
    
    $scope.insertdata = function(){
    	$http.post("Domain/cadastro.php",{'nome':$scope.nome,'telefone':$scope.telefone,'numero':$scope.numero, 'orgao':$scope.orgao, 'dataex':$scope.dataex, 'uf':$scope.uf,  'nomecont':$scope.nomecont,'telefonecont':$scope.telefonecont})
    	.success(function(response){
    		alert("Cadastrado com sucesso");

    	});
    };
     
     
    	$http.get("Domain/mostrarLista.php")
    	.success(function(data){
    		$scope.dados = data; 		

    		alert("Cadastrado com sucesso");

    	});
   
   
});

