/*---------------COMEÇO DO SCRIPT DO FICHAS----------------------------*/

function abrirDiretoria(){
    var Aparecendo = document.getElementById("diretoria1").style.display;

    if(Aparecendo == "block"){
      document.getElementById("diretoria1").style.display ="block";
      document.getElementById("diretoria2").style.display ="none";
    }else{
      document.getElementById("diretoria1").style.display ="block";
      document.getElementById("equipe").style.display ="none";
      document.getElementById("diretoria2").style.display ="none";
    }
    
  }

  function abrirEquipe(){
    var Aparecendo = document.getElementById("equipe").style.display;

    if(Aparecendo == "block"){
      document.getElementById("equipe").style.display ="none";
      document.getElementById("diretoria1").style.display ="block";
      document.getElementById("diretoria2").style.display ="none";
    }else{
      document.getElementById("equipe").style.display ="block";
      document.getElementById("diretoria1").style.display ="none";
      document.getElementById("diretoria2").style.display ="none";
    }
    
  }
/*---------------FIM DO SCRIPT DO FICHAS----------------------------*/


/*---------------COMEÇO DO SCRIPT DO SOBRE----------------------------*/
function abrirDiv1(){

  document.getElementById('tituloSobre').innerHTML = 'Sobre';

  var Aparecendo = document.getElementById("testeDiv1").style.display;

  if(Aparecendo == "block"){
    document.getElementById("testeDiv1").style.display ="block";
    document.getElementById("testeDiv4").style.display ="none";
  }else{
    document.getElementById("testeDiv1").style.display ="block";
    document.getElementById("testeDiv2").style.display ="none";
    document.getElementById("testeDiv3").style.display ="none";
    document.getElementById("testeDiv4").style.display ="none";
  }
  
}

function abrirDiv2(id){

  document.getElementById('tituloSobre').innerHTML = 'História';

  var Aparecendo = document.getElementById("testeDiv2").style.display;

  if(Aparecendo == "block"){
    document.getElementById("testeDiv2").style.display ="none";
    document.getElementById("testeDiv1").style.display ="block";
    document.getElementById("testeDiv4").style.display ="none";
  }else{
    document.getElementById("testeDiv2").style.display ="block";
    document.getElementById("testeDiv3").style.display ="none";
    document.getElementById("testeDiv1").style.display ="none";
    document.getElementById("testeDiv4").style.display ="none";
  }
  
}

function abrirDiv3(id){

  document.getElementById('tituloSobre').innerHTML = 'Estrutura';

  var Aparecendo = document.getElementById("testeDiv3").style.display;

  if(Aparecendo == "block"){
    document.getElementById("testeDiv3").style.display ="none";
    document.getElementById("testeDiv1").style.display ="block";
    document.getElementById("testeDiv4").style.display ="none";
  }else{
    document.getElementById("testeDiv3").style.display ="block";
    document.getElementById("testeDiv2").style.display ="none";
    document.getElementById("testeDiv1").style.display ="none";
    document.getElementById("testeDiv4").style.display ="none";
  }
  
}
/*---------------FIM DO SCRIPT DO SOBRE----------------------------*/


