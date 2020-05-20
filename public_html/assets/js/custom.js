(function pulse(back) {
 $('#seventyfive img').animate(
     {
         width: (back) ? $('#seventyfive img').width() + 20 : $('#seventyfive img').width() - 20            
     }, 700);
 $('#seventyfive').animate(
     {          
         'font-size': (back) ? '100px' : '140px',
         opacity: (back) ? 1 : 0.5
     }, 700, function(){pulse(!back)});
})(false);
 
$(document).ready(function(){
   setTimeout(function(){
        window.location = "report" ;
   }, 2000);
});