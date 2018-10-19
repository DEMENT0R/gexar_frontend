var i = 0;
setInterval(function(){
      i++;
      if (i == 3) {
         $('#button1').tooltip('show');
      }
      if (i == 6) {
         $('#button1').tooltip('hide');
      }
      if (i == 7) {
         $('#button2').tooltip('show');
      }
      if (i == 10) {
         $('#button2').tooltip('hide');
      }
      if (i == 11) {
         $('#button3').tooltip('show');
      }
      if (i == 14) {
         $('#button3').tooltip('hide');
      }
      if (i > 14){
          i = 0;
      }
},1000);
