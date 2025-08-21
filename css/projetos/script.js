function abrirDiv(){
    var Aparecendo = document.getElementById("testeDiv").style.display;

    if(Aparecendo == "block"){
      document.getElementById("testeDiv").style.display ="none";
    }else{
      document.getElementById("testeDiv").style.display ="block";
    }
    
  }






  /*-----------------------ABRIR CARROSSEL DE CADA CARD----------------*/

    function abrirFotos1(){
      var Aparecendo = document.getElementById("FOTOS1").style.display;

      if(Aparecendo == "block"){
        document.getElementById("FOTOS1").style.display ="none";
      }else{
        document.getElementById("FOTOS1").style.display ="block";
      }
      
    }

    function abrirFotos2(){
        var Aparecendo = document.getElementById("FOTOS2").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS2").style.display ="none";
        }else{
          document.getElementById("FOTOS2").style.display ="block";
        }
        
      }

      function abrirFotos3(){
      var Aparecendo = document.getElementById("FOTOS3").style.display;

      if(Aparecendo == "block"){
        document.getElementById("FOTOS3").style.display ="none";
      }else{
        document.getElementById("FOTOS3").style.display ="block";
      }
      
    }

    function abrirFotos4(){
        var Aparecendo = document.getElementById("FOTOS4").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS4").style.display ="none";
        }else{
          document.getElementById("FOTOS4").style.display ="block";
        }
        
      }

      function abrirFotos5(){
        var Aparecendo = document.getElementById("FOTOS5").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS5").style.display ="none";
        }else{
          document.getElementById("FOTOS5").style.display ="block";
        }
        
      }

      function abrirFotos6(){
        var Aparecendo = document.getElementById("FOTOS6").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS6").style.display ="none";
        }else{
          document.getElementById("FOTOS6").style.display ="block";
        }
        
      }

      function abrirFotos7(){
        var Aparecendo = document.getElementById("FOTOS7").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS7").style.display ="none";
        }else{
          document.getElementById("FOTOS7").style.display ="block";
        }
        
      }

      function abrirFotos8(){
        var Aparecendo = document.getElementById("FOTOS8").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS8").style.display ="none";
        }else{
          document.getElementById("FOTOS8").style.display ="block";
        }
        
      }

      function abrirFotos9(){
        var Aparecendo = document.getElementById("FOTOS9").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS9").style.display ="none";
        }else{
          document.getElementById("FOTOS9").style.display ="block";
        }
        
      }


      function abrirFotos10(){
        var Aparecendo = document.getElementById("FOTOS10").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS10").style.display ="none";
        }else{
          document.getElementById("FOTOS10").style.display ="block";
        }
        
      }

      function abrirFotos11(){
        var Aparecendo = document.getElementById("FOTOS11").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS11").style.display ="none";
        }else{
          document.getElementById("FOTOS11").style.display ="block";
        }
        
      }

      function abrirFotos12(){
        var Aparecendo = document.getElementById("FOTOS12").style.display;
  
        if(Aparecendo == "block"){
          document.getElementById("FOTOS12").style.display ="none";
        }else{
          document.getElementById("FOTOS12").style.display ="block";
        }
        
      }


      /*------------FIM DO ABRIR FOTOS DE CADA CARD---------------*/

  /*------------------COMEÇO JAVASCRIPT DO CARROSSEL-------------*/

      var position = document.querySelector('.position')
    var quant = document.querySelectorAll('.item-slide .images')
    var atual = 0
    var imagem = document.getElementById('atual')
    var avancar = document.getElementById('avancar')
    var voltar = document.getElementById('voltar')
    var rolar = true

    for (let i = 0; i < quant.length; i++) {
      var div = document.createElement('div')
      div.id = i
      position.appendChild(div)
    }
    document.getElementById('0').classList.add('primeira')

    var pos = document.querySelectorAll('.position div')

    for (let i = 0; i < pos.length; i++) {
      pos[i].addEventListener('click', () => {
        atual = pos[i].id
        rolar = false
        slide()
      })
    }

    voltar.addEventListener('click', () => {
      atual--
      rolar = false
      slide()
    })

    avancar.addEventListener('click', () => {
      atual++
      rolar = false
      slide()
    })

    function slide() {
      if (atual >= quant.length) {
        atual = 0;
      } else if (atual < 0) {
        atual = quant.length - 1
      }

      document.querySelector('.primeira').classList.remove('primeira')
      imagem.style.marginLeft = -1024 * atual +'px'
      document.getElementById(atual).classList.add('primeira')

    }

    setInterval(()=>{
      if(rolar){
        atual++
        slide()
      }else{
        rolar = true
      }
    },5000)


  /*------------------FIM JAVASCRIPT DO CARROSSEL-------------*/
     























  /*------------------COMEÇO JAVASCRIPT DO CARROSSEL-------------*/

  var position = document.querySelector('.position1')
  var quant = document.querySelectorAll('.item-slide1 .images1')
  var atual = 0
  var imagem = document.getElementById('atual1')
  var avancar = document.getElementById('avancar1')
  var voltar = document.getElementById('voltar1')
  var rolar = true

  for (let i = 0; i < quant.length; i++) {
    var div = document.createElement('div')
    div.id = i
    position.appendChild(div)
  }
  document.getElementById('0').classList.add('primeira1')

  var pos = document.querySelectorAll('.position1 div')

  for (let i = 0; i < pos.length; i++) {
    pos[i].addEventListener('click', () => {
      atual = pos[i].id
      rolar = false
      slide()
    })
  }

  voltar.addEventListener('click', () => {
    atual--
    rolar = false
    slide()
  })

  avancar.addEventListener('click', () => {
    atual++
    rolar = false
    slide()
  })

  function slide() {
    if (atual >= quant.length) {
      atual = 0;
    } else if (atual < 0) {
      atual = quant.length - 1
    }

    document.querySelector('.primeira1').classList.remove('primeira')
    imagem.style.marginLeft = -1024 * atual +'px'
    document.getElementById(atual).classList.add('primeira')

  }

  setInterval(()=>{
    if(rolar){
      atual++
      slide()
    }else{
      rolar = true
    }
  },5000)


/*------------------FIM JAVASCRIPT DO CARROSSEL-------------*/


































  /*------------------COMEÇO JAVASCRIPT DO CARROSSEL-------------*/

  var position = document.querySelector('.position2')
  var quant = document.querySelectorAll('.item-slide2 .images2')
  var atual = 0
  var imagem = document.getElementById('atual2')
  var avancar = document.getElementById('avancar2')
  var voltar = document.getElementById('voltar2')
  var rolar = true

  for (let i = 0; i < quant.length; i++) {
    var div = document.createElement('div')
    div.id = i
    position.appendChild(div)
  }
  document.getElementById('0').classList.add('primeira2')

  var pos = document.querySelectorAll('.position2 div')

  for (let i = 0; i < pos.length; i++) {
    pos[i].addEventListener('click', () => {
      atual = pos[i].id
      rolar = false
      slide()
    })
  }

  voltar.addEventListener('click', () => {
    atual--
    rolar = false
    slide()
  })

  avancar.addEventListener('click', () => {
    atual++
    rolar = false
    slide()
  })

  function slide() {
    if (atual >= quant.length) {
      atual = 0;
    } else if (atual < 0) {
      atual = quant.length - 1
    }

    document.querySelector('.primeira2').classList.remove('primeira')
    imagem.style.marginLeft = -1024 * atual +'px'
    document.getElementById(atual).classList.add('primeira')

  }

  setInterval(()=>{
    if(rolar){
      atual++
      slide()
    }else{
      rolar = true
    }
  },5000)


/*------------------FIM JAVASCRIPT DO CARROSSEL-------------*/
   