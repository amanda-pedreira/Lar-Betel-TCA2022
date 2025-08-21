document.querySelector(".hamburguer").addEventListener("click", () =>
    document.querySelector(".container").classList.toggle("show-menu")
);


function abrirDiv(){
    var Aparecendo = document.getElementById("testeDiv").style.display;

    if(Aparecendo == "block"){
      document.getElementById("testeDiv").style.display ="none";
    }else{
      document.getElementById("testeDiv").style.display ="block";
    }
    
  }

  function abrirFale(){
      var Aparecendo = document.getElementById("fale2").style.display;

      if(Aparecendo == "block"){
        document.getElementById("fale2").style.display ="none";
      }else{
        document.getElementById("fale2").style.display ="block";
      }
      
    }
