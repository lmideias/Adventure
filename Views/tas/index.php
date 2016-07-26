<!DOCTYPE html>

<html >
    <head>
        
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
       
        
         <link rel="stylesheet" type="text/css"  href="Content/bootstrap.css" />
         <link href="/Content/Reset.css" rel="stylesheet"/>
       
         
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>         
         <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
         <script type="text/javascript" src="/Scripts/jquery-2.2.2.min.js"></script>
        
      
        <link rel="stylesheet" type="text/css"  href="/Views/tas/Config/main.css" />
        <script src="Config/main.js"></script>
       
       <script type="text/javascript" src="/Views/tas/Config/main.js"></script>   
      
       <script type="text/javascript" src="Config/mainJQ.js"></script>
       
     
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
