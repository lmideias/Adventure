<!DOCTYPE html>
<html ng-app="inApp">
    <head>
        <meta charset="UTF-8">
        
        <title>Trilhas Adventure</title>       
        <?php include('Templates/links.php') ?>
       
    </head>
    <body>      
        <header ng-include="'Templates/header.php'">            
        </header>
               
        <article ng-include="'/Templates/bodycontainer.php'">            
        </article>

        <div class="container-base">

            <a href="#" id="btnC" class="btn">Abrir popup</a>

            <div class="popupA">       
            <div class="boxCo">

            <a href="#" id="btnD">fechar popup</a>
            <h1>{{"title"}}</h1>
            <span>xxxxxxxxxxxxXxxxxxxxx</span>
            </div> 
            </div>

        </div>
        
       <footer ng-include="'Templates/footer.php'">           
       </footer>
    </body>
</html>
