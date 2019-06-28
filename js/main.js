        i=0;
        m=200;
        prl=0;
        function r() {
          mapper=document.getElementById("mapper");
          mapper.style.position="relative"
        var timer = setInterval(function() {
          if (i==m){
           clearInterval(timer);
           mapCont=document.getElementById("mapper-cont");
           mapCont.onclick=function(){q();}
          }
          else {
            mapper.style.height = i + 'px';
            i++;
          }
          }, 5)
          
        }
        function q() {
           mapper=document.getElementById("mapper");
           var timer = setInterval(function() {
          if (i<0){
           clearInterval(timer);
           mapper.style.position="absolute"
           mapCont=document.getElementById("mapper-cont");
           mapCont.onclick=function(){r();}
          }
          else {
            mapper.style.height = i + 'px';
            i--;
          }
          }, 1)
          
        }