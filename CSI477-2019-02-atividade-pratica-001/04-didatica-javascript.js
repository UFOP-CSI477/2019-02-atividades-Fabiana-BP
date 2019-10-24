var n=-1;


function darPlay(numeroAudio) {
  var playAudio;
  //exercicio1
  if(numeroAudio==1){
    playAudio = document.getElementById("playAudio1");
  }else if(numeroAudio==2){
    playAudio = document.getElementById("playAudio2");
  }else if(numeroAudio==3){
    playAudio = document.getElementById("playAudio3");
  }else if(numeroAudio==4){
    playAudio = document.getElementById("playAudio4");
  }else if(numeroAudio==5){
    playAudio = document.getElementById("playAudio5");
  }else if(numeroAudio==6){
    playAudio = document.getElementById("playAudio6");
  }else if(numeroAudio==7){
    playAudio = document.getElementById("playAudio7");
//exercicio2 enunciado
  }else if(numeroAudio==8){
    playAudio = document.getElementById("playAudio8");
  }else if(numeroAudio==9){
    playAudio = document.getElementById("playAudio9");
//exercicio2 figuras
  }else if(numeroAudio==10){
    playAudio = document.getElementById("playAudio10");
  }else if(numeroAudio==11){
    playAudio = document.getElementById("playAudio11");
  }else if(numeroAudio==12){
    playAudio = document.getElementById("playAudio12");
  }else if(numeroAudio==13){
    playAudio = document.getElementById("playAudio13");
  }else if(numeroAudio==14){
    playAudio = document.getElementById("playAudio14");
  }else if(numeroAudio==15){
    playAudio = document.getElementById("playAudio15");
  }else if(numeroAudio==16){
    playAudio = document.getElementById("playAudio16");
  }else if(numeroAudio==17){
    playAudio = document.getElementById("playAudio17");
  }
  playAudio.play();
}

function certa(){
  darPlay(6);
}

function errada(){
  darPlay(7);
}

function verifica(grupo,alternativa){
    if(grupo==1){//correta 2
    //desabilitar botoes
      document.getElementById("11a").disabled=true;
      document.getElementById("11b").disabled=true;
      document.getElementById("12a").disabled=true;
      document.getElementById("12b").disabled=true;
      document.getElementById("13a").disabled=true;
      document.getElementById("13b").disabled=true;
      document.getElementById("14a").disabled=true;
      document.getElementById("14b").disabled=true;
      document.getElementById("b1").style.display="block";

      if(alternativa==2){
        document.getElementById("alerta1").style.display="block";
        document.getElementById("alerta2").style.display="none";
      }else{
        document.getElementById("alerta2").style.display="block";
        document.getElementById("alerta1").style.display="none";
      }
    }else if(grupo==2){//correta 2
      //desabilitar botoes
        document.getElementById("21a").disabled=true;
        document.getElementById("21b").disabled=true;
        document.getElementById("22a").disabled=true;
        document.getElementById("22b").disabled=true;
        document.getElementById("23a").disabled=true;
        document.getElementById("23b").disabled=true;
        document.getElementById("24a").disabled=true;
        document.getElementById("24b").disabled=true;
        document.getElementById("b2").style.display="block";

      if(alternativa==3){
        document.getElementById("alerta3").style.display="block";
        document.getElementById("alerta4").style.display="none";
      }else{
        document.getElementById("alerta4").style.display="block";
        document.getElementById("alerta3").style.display="none";
      }
    }else if(grupo==3){//correta 2
    //desabilitar botoes
      document.getElementById("31a").disabled=true;
      document.getElementById("31b").disabled=true;
      document.getElementById("32a").disabled=true;
      document.getElementById("32b").disabled=true;
      document.getElementById("33a").disabled=true;
      document.getElementById("33b").disabled=true;
      document.getElementById("34a").disabled=true;
      document.getElementById("34b").disabled=true;
      document.getElementById("b3").style.display="block";

    if(alternativa==4){
      document.getElementById("alerta5").style.display="block";
      document.getElementById("alerta6").style.display="none";
    }else{
      document.getElementById("alerta6").style.display="block";
      document.getElementById("alerta5").style.display="none";
    }
  }else if(grupo==4){//correta 2
    //desabilitar botoes
      document.getElementById("41a").disabled=true;
      document.getElementById("41b").disabled=true;
      document.getElementById("42a").disabled=true;
      document.getElementById("42b").disabled=true;
      document.getElementById("43a").disabled=true;
      document.getElementById("43b").disabled=true;
      document.getElementById("44a").disabled=true;
      document.getElementById("44b").disabled=true;
      document.getElementById("b4").style.display="block";

    if(alternativa==4){
      document.getElementById("alerta7").style.display="block";
      document.getElementById("alerta8").style.display="none";
    }else{
      document.getElementById("alerta8").style.display="block";
      document.getElementById("alerta7").style.display="none";
    }
  }
}

function novamente(grupo){
  if(grupo==1){
    document.getElementById("11a").disabled=false;
    document.getElementById("11b").disabled=false;
    document.getElementById("12a").disabled=false;
    document.getElementById("12b").disabled=false;
    document.getElementById("13a").disabled=false;
    document.getElementById("13b").disabled=false;
    document.getElementById("14a").disabled=false;
    document.getElementById("14b").disabled=false;
    document.getElementById("alerta1").style.display="none";
    document.getElementById("alerta2").style.display="none";
    document.getElementById("b1").style.display="none";
  }else if(grupo==2){
    document.getElementById("21a").disabled=false;
    document.getElementById("21b").disabled=false;
    document.getElementById("22a").disabled=false;
    document.getElementById("22b").disabled=false;
    document.getElementById("23a").disabled=false;
    document.getElementById("23b").disabled=false;
    document.getElementById("24a").disabled=false;
    document.getElementById("24b").disabled=false;
    document.getElementById("alerta3").style.display="none";
    document.getElementById("alerta4").style.display="none";
    document.getElementById("b2").style.display="none";
  }else if(grupo==3){
    document.getElementById("31a").disabled=false;
    document.getElementById("31b").disabled=false;
    document.getElementById("32a").disabled=false;
    document.getElementById("32b").disabled=false;
    document.getElementById("33a").disabled=false;
    document.getElementById("33b").disabled=false;
    document.getElementById("34a").disabled=false;
    document.getElementById("34b").disabled=false;
    document.getElementById("alerta5").style.display="none";
    document.getElementById("alerta6").style.display="none";
    document.getElementById("b3").style.display="none";
  }else if(grupo==4){
      document.getElementById("41a").disabled=false;
      document.getElementById("41b").disabled=false;
      document.getElementById("42a").disabled=false;
      document.getElementById("42b").disabled=false;
      document.getElementById("43a").disabled=false;
      document.getElementById("43b").disabled=false;
      document.getElementById("44a").disabled=false;
      document.getElementById("44b").disabled=false;
      document.getElementById("alerta7").style.display="none";
      document.getElementById("alerta8").style.display="none";
      document.getElementById("b4").style.display="none";
  }
}

function selecao(imagem){
  let palavra;
  if(n>-1){
  //desabilitar a palavra marcada primeiro
    if(n==1){
      document.getElementById("t").disabled=true;
      palavra="Triângulo";
    }else if(n==2){
      document.getElementById("q").disabled=true;
      palavra="Quadrado";
    }else if(n==3){
      document.getElementById("c").disabled=true;
      palavra="Círculo";
    }else if(n==4){
      document.getElementById("r").disabled=true;
      palavra="Retângulo";
    }

    if(imagem==1){ //marca ele próprio
      document.getElementById("a1").value=palavra;
      document.getElementById("a1").style.display="block";
      document.getElementById("i1").disabled=true;
    }else if (imagem==2){
      document.getElementById("a2").value=palavra;
      document.getElementById("a2").style.display="block";
      document.getElementById("i2").disabled=true;
    }else if (imagem==3){
      document.getElementById("a3").value=palavra;
      document.getElementById("a3").style.display="block";
      document.getElementById("i3").disabled=true;
    }else{
      document.getElementById("a4").value=palavra;
      document.getElementById("a4").style.display="block";
      document.getElementById("i4").disabled=true;
    }

  }
}

function triangulo(){
  let tri=document.getElementById("t");
  tri.classList.remove("btn-link");
  tri.classList.add("btn-outline-dark");
  n=1;
}

function quadrado(){
  let qua=document.getElementById("q");
  qua.classList.remove("btn-link");
  qua.classList.add("btn-outline-info");
  n=2;
}

function circulo(){
  let ci=document.getElementById("c");
  ci.classList.remove("btn-link");
  ci.classList.add("btn-outline-success");
  n=3;
}

function retangulo(){
  let ret=document.getElementById("r");
  ret.classList.remove("btn-link");
  ret.classList.add("btn-outline-danger");
  n=4;
}

function limpar(){
  n=-1;
  let palavra="";
  document.getElementById("a1").value=palavra;
  document.getElementById("a1").style.display="none";
  document.getElementById("i1").disabled=false;
  document.getElementById("a2").value=palavra;
  document.getElementById("a2").style.display="none";
  document.getElementById("i2").disabled=false;
  document.getElementById("a3").value=palavra;
  document.getElementById("a3").style.display="none";
  document.getElementById("i3").disabled=false;
  document.getElementById("a4").value=palavra;
  document.getElementById("a4").style.display="none";
  document.getElementById("i4").disabled=false;
  document.getElementById("t").disabled=false;
  document.getElementById("q").disabled=false;
  document.getElementById("c").disabled=false;
  document.getElementById("r").disabled=false;
  document.getElementById("t").classList.add("btn-link");
  document.getElementById("t").classList.remove("btn-outline-dark");
  document.getElementById("q").classList.add("btn-link");
  document.getElementById("q").classList.remove("btn-outline-info");
  document.getElementById("r").classList.add("btn-link");
  document.getElementById("r").classList.remove("btn-outline-danger");
  document.getElementById("c").classList.add("btn-link");
  document.getElementById("c").classList.remove("btn-outline-success");
  document.getElementById("r2").style.display="none";
  document.getElementById("r1").style.display="none";
  document.getElementById("r2").style.display="none";
  document.getElementById("r3").style.display="none";
  document.getElementById("r4").style.display="none";
  document.getElementById("s1certo").style.display="none";
  document.getElementById("s2certo").style.display="none";
  document.getElementById("s3certo").style.display="none";
  document.getElementById("s4certo").style.display="none";
  document.getElementById("s1errado").style.display="none";
  document.getElementById("s2errado").style.display="none";
  document.getElementById("s3errado").style.display="none";
  document.getElementById("s4errado").style.display="none";
}

function verificaRelacao(){
  if(document.getElementById("a1").value=="Quadrado") {
    document.getElementById("s1certo").style.display="block";
  }else{
    document.getElementById("s1errado").style.display="block";
  }
  if(document.getElementById("a2").value=="Círculo") {
    document.getElementById("s2certo").style.display="block";
  }else{
    document.getElementById("s2errado").style.display="block";
  }
  if(document.getElementById("a3").value=="Retângulo") {
    document.getElementById("s3certo").style.display="block";
  }else{
    document.getElementById("s3errado").style.display="block";
  }
  if(document.getElementById("a4").value=="Triângulo") {
    document.getElementById("s4certo").style.display="block";
  }else{
    document.getElementById("s4errado").style.display="block";
  }
  document.getElementById("r1").style.display="block";
  document.getElementById("r2").style.display="block";
  document.getElementById("r3").style.display="block";
  document.getElementById("r4").style.display="block";
}
