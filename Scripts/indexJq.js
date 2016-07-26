$(document).ready(function(){
      $(function(){
          "use strict";
          
          $(".btnAbrir").click(function(){
              $(".popupA").fadeIn();
          });
          
           $("span").click(function(){
              $(".popupA").fadeOut();
          });
          
           $(".overlay").click(function(){
              $(".popupA").fadeOut();
          });
      });    
    
});


