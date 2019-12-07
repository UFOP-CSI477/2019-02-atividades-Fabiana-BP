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


function validarProtocolar(campo,alerta,label){
  let n=document.getElementById(campo);


  if(n.value.length==0 || (campo=="date" && n.value == "") ||(campo=="subject_id" && n.value=='0') || (campo=="description" && n.value=="")) {
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
