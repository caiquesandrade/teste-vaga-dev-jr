   //Formulario Toggle   
   
   $('.message a').click(function(){
      $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
   });

   $('.new-register a').click(function(){
      $('form').animate({height: "toggle", opacity: "toggle"}, "toggle");
   });

   //Abrir Popup
   var abrir = function(URL) {
      window.open(URL,
          'Teste',
          'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');
   }

   //Mascara para inpute de data

   function dateMask(inputData, e){
   if(document.all) // Internet Explorer
   var tecla = event.keyCode;
   else //Outros Browsers
   var tecla = e.which;
   
   if(tecla >= 47 && tecla < 58){ // numeros de 0 a 9 e "/"
   var data = inputData.value;
   if (data.length == 2 || data.length == 5){
   data += '/';
   inputData.value = data;
   }
   }else if(tecla == 8 || tecla == 0) // Backspace, Delete e setas direcionais(para mover o cursor, apenas para FF)
   return true;
   else
   return false;
   }

    //Mascara para inpute de telefone

   function telMask(inputTel, e){
      if(document.all) // Internet Explorer
      var tecla = event.keyCode;
      else //Outros Browsers
      var tecla = e.which;
      
      if(tecla > 47){ // numero  0
      var data = inputTel.value;
      if (data.length == 0){
      data += '(';
      inputTel.value = data;
      return;
      }
      else if(data.length == 3){
         data += ') ';
      inputTel.value = data;
      return;
      }
      }
      }
      
      //Mascara para inpute de valor

      function preco(inputVal, e){
         if(document.all) // Internet Explorer
         var tecla = event.keyCode;
         else //Outros Browsers
         var tecla = e.which;
         
         if(tecla >= 47){ // numero  0
         var data = inputVal.value;
         if (data.length == 0){
         data += 'R$ ';
         inputVal.value = data;
         return;
         }
         return;
         }
         }

         //Exmpandir Comentario

         $(document).ready(function(){
            $("textarea").focus(function(){
              $("textarea").animate({
                height: '150px',
              });
            });
          });