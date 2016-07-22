<!DOCTYPE html>

<html >
    <head>
        
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        
        
         <link rel="stylesheet" type="text/css"  href="Content/bootstrap.css" />
         <link href="/Content/Reset.css" rel="stylesheet"/>
         <script src="Config/main.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
         
         <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>

        
         <link rel="stylesheet" type="text/css"  href="/Content/bootstrap.css" />
       <link rel="stylesheet" type="text/css"  href="Config/main.css" />
       
       <script type="text/javascript" src="/Views/Content/angular.js"></script>
       <script type="text/javascript" src="/Views/tas/Config/main.js"></script>
       
       <script type="text/javascript" src="/Views/admin/admJq.js"></script>
       <script type="text/javascript" src="/Scripts/jquery-2.2.2.min.js"></script>
        <title>Adventure Social</title>
        
    </head>
    <body ng-app="tasApp">
        <nav ng-include="'Templates/nav.php'"></nav>
        
         <div class="body-social">
              <div ui-view>
            
             </div>
        </div>
        
        
        <footer ng-include="'Templates/footer.php'"></footer>
    </body>
</html>
