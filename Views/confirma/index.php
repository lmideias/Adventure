<!DOCTYPE html>
<html ng-app="myApp" >
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Participantes</title>       
        <link rel="stylesheet" type="text/css"  href="content/confirma.css" />
        <link rel="stylesheet" type="text/css"  href="/Content/Reset.css" />
      
        <script type="text/javascript" src="content/confirma.js"></script>
       
        <?php include('/Templates/links.php') ?>
     
    
   </script>
        
    </head>
    <body class="body-container"> 
        
        <div  class="menu-barra">
            <div class="menu-logo">
                <ul>
                    <li class=""><a ng-sref="home">Home</a></li>
                    <li class=""><a href="">Participar</a></li>
                    <li class=""><a href="">{{title}}</a></li>                   
                </ul>
            </div>
        </div>
       
       
        <div ng-view>         
        </div>

    </body>
</html>
