$(document).ready(function(){
            
    $(function(){
          "use strict";
          
          $("#btnC").click(function(){             
              $(".popupA").fadeIn();             
              return false;
          });          
         
        $("#btnD").click(function(){
            $(".popupA").fadeOut();
        });    
    
      }); 

});


