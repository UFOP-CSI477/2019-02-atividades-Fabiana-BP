function validaEntrada(campo,label){
  n=campo.value;
  //erro
  if(n.length==0 || isNaN(parseFloat(n))){
    document.getElementById(label).classList.add("text-danger");
    campo.classList.add("is-invalid");
    campo.value="";
    campo.focus();
    return false;
  }else{
    document.getElementById(label).classList.remove("text-danger");
    campo.classList.remove("is-invalid");
    document.getElementById(label).classList.add("text-success");
    campo.classList.add("is-valid");
    return true;
  }
}

function calculoIMC(){
  let p=document.getElementById("peso");
  let a=document.getElementById("altura");
  let pesoIdealMax=0;
  let pesoIdealMin=0;
  let imc=0;
  if(validaEntrada(p,"label1") && validaEntrada(a,"label2")){
    imc=(parseFloat(p.value) / (parseFloat(a.value)*parseFloat(a.value))).toFixed(2);
    document.getElementById("resultado").value=imc;
    //classificação
    if(imc<18.5){
      document.getElementById("classificacao").value="Subnutriçao";
    }else if(imc>=18.5 && imc<=24.9){
      document.getElementById("classificacao").value="Peso Saudável";
    }else if(imc>=25 && imc<=29.9){
      document.getElementById("classificacao").value="Sobrepeso";
    }else if(imc>=30 && imc<=34.9){
      document.getElementById("classificacao").value="Obesidade grau 1";
    }else if(imc>=35 && imc>=39.9){
      document.getElementById("classificacao").value="Obesidade grau 2";
    }else{
      document.getElementById("classificacao").value="Obesidade grau 3";
    }

    //intervalo peso ideal com base na Altura
    pesoIdealMin=(18.5 *(parseFloat(a.value)*parseFloat(a.value))).toFixed(2);
    pesoIdealMax=(24.9 *(parseFloat(a.value)*parseFloat(a.value))).toFixed(2);
    document.getElementById("intervalo").value="Entre "+pesoIdealMin +" e "+pesoIdealMax;
  }
}

function limpar(){
  document.getElementById("peso").value="";
  document.getElementById("altura").value="";
  document.getElementById("classificacao").value="";
  document.getElementById("resultado").value="";
  document.getElementById("intervalo").value="";
  location.reload();
}
