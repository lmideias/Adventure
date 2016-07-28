'use strict';
var myApp = angular.module("myApp", ['ngRoute']);

myApp.config(function($routeProvider){
    $routeProvider
            .when('/',{
            template: 'templates/home.php'
         })
            .when('/',{
                template: 'templates/repo.php'
            })
                    .otherwise({
                        redirectTo: '/'
                    });
});
       