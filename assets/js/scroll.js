  window.onload=function(){
    document.getElementById("navbar").style.backgroundColor="transparent";
  }
   var pos=window.pageYOffset;
    window.onscroll=function(){
    var newpos=window.pageYOffset;
   if(pos >newpos){
      document.getElementById("navbar").style.backgroundColor="transparent";
    document.getElementById("navbar").style.transition="2s";

   }else if(newpos>pos){
    document.getElementById("navbar").style.backgroundColor="#33b5E5";
    document.getElementById("navbar").style.transition="2s";
   }else{
    document.getElementById("navbar").style.backgroundColor="transparent";    
   }
  }