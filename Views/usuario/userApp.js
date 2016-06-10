var app = angular.module('testeApp',[]);

app.controller('userControl', function($scope, $http){
    $http.post('inserir.php')
            .success(function(data){
                $scope.posts = data;
            });
    
});


