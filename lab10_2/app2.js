$(document).ready(function(){
  var i = 0;
    $("#val").click(function(){
      if(i == 0){
        $('.pr').each(function(index,elem){
          tab = $(elem).text();
          tab *= 0.8;
          $(elem).text(tab);         
        })
        $('.pric').animate({backgroundColor: "#ff2b2e"}, 1200);
        i = 1;
        $(".butt").html("Показати ціни!");
      }
      else if(i == 1){
        $('.pr').each(function(index,elem){
          tab = $(elem).text();
          tab /= 0.8;
          $(elem).text(tab);         
        })
        $('.pric').animate({backgroundColor: "#00e727"}, 1200);
        i = 0;
        $(".butt").html("Показати знижки! 20%");
      }
    })
})