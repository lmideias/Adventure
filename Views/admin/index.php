<!DOCTYPE html>
<html ng-app="admApp">
    <head>
        
        <title>ADM</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        
        
         <link rel="stylesheet" type="text/css"  href="Content/bootstrap.css" />
         <link href="/Content/Reset.css" rel="stylesheet"/>
         <script src="/Scripts/angular.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        
         <link rel="stylesheet" type="text/css"  href="/Content/bootstrap.css" />
       <link rel="stylesheet" type="text/css"  href="adm.css" />
       <script type="text/javascript" src="/Views/admin/admJq.js"></script>
       <script type="text/javascript" src="/Scripts/jquery-2.2.2.min.js"></script>
        
    </head>
    <body>
        <div class="lmi-header-full">
            <div class="lmi-header" ng-controller="menuController">
                <h1 class="abc">{{"Ola"}}</h1>
             </div> 
        </div> 
        <div class="lmi-barra-menu-full">
            <div class="lmi-menu">
            
             </div> 
        </div> 
        <div class="lmi-body-full">
             <div class="lmi-body">
                 <div class="" ng-controller="StoreController as store">
                     <h1>{{store.product.name}}</h1>
                     <h2>{{store.product.price}}</h2>
                     
                 </div>
             </div>
        </div> 
        <div class="lmi-footer-full">
             <div class="lmi-footer">
            
             </div>
        </div> 
       
    </body>
</html>
