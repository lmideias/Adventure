<!DOCTYPE html>

<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Novo Teste de Angular</title>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
         <link href="../Content/bootstrap.css" rel="stylesheet"/>
         <link href="../Content/main.css" rel="stylesheet"/>
         <script src="../Scripts/mainAngular.js" ></script>
    
    
    </head>
    <body ng-app="newApp">
        
        <div class="main-body">
          <div ng-controller="control" class="">
             {{titulo}}
         </div>
           <div ng-controller="listagem" class=" ">
             {{titulo}}<br />
             {{5*2}}
           </div>
      </div> 
    </body>
</html>
 