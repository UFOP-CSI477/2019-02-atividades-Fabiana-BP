function personalizarOk(campo,alerta,label){
  document.getElementById(alerta).style.display="none";
  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");
  document.getElementById(label).classList.remove("text-danger");
  document.getElementById(label).classList.add("text-success");
}

function personalizarErro(campo,alerta,label){
  //exibe alerta na tela
  document.getElementById(alerta).style.display = "block";

  //reportar erro no campo
  campo.classList.add("is-invalid");

  //destacar label como inválido
  document.getElementById(label).classList.add("text-danger");
}


function validarUsuario(campo,alerta,label){
  let n=document.getElementById(campo);

  //erro
  if(n.value.length==0 || (campo=="name" && n.value.length<3 && n.value.length>191 )
  || (campo=="email" && n.value.length<6 && n.value.length>191 ) ||
  (campo=="senha" && n.value.length<3 && n.value.length>191 )){
    personalizarErro(n,alerta,label);
    n.value="";
    return false;
  }else if(tipo=="email"){
    let emailPattern =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if(emailPattern.test(n)){
      personalizarOk(n,alerta,label);
      return true;
    }
    personalizarErro(n,alerta,label);
    n.value="";
    return false;

  }else{ //campo ok
    personalizarOk(n,alerta,label);
    return true;
  }

}



function limpa(){
  parent.window.document.location.href = '';
}
