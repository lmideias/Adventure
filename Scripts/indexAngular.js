var inApp = angular.module("inApp", ['ui.router']);

       inApp.config(['$urlRouterProvider','$stateProvider', function($urlRouterProvider,$stateProvider){
               $urlRouterProvider
                       .otherwise('/');               
                $stateProvider
                        .state('footer',{ url:'/', templateUrl:'Templates/footer.php' })
                        .state('nav',{ url:'/', templateUrl:'Templates/nav.php' })
                        .state('about',{ url:'/', templateUrl:'Templates/sobre.php' })
                        .state('login',{ url:'/', templateUrl:'Templates/login.php' })
                        .state('user',{ url:'/', templateUrl:'Templates/user.php',
  
               controller:['$scope', function($scope){
                       $scope.title = "Usuarios";
                       $scope.items = ['Home','Sobre','Contatos'];
                      }]
               });
               
               
 }]);