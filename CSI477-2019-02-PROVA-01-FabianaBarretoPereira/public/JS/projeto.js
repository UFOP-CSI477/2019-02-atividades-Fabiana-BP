function personalizarOk(campo,alerta,label){
  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");
  document.getElementById(label).classList.remove("text-danger");
  document.getElementById(label).classList.add("text-success");
}

function personalizarErro(campo,alerta,label){
  //reportar erro no campo
  campo.classList.add("is-invalid");

  //destacar label como inválido
  document.getElementById(label).classList.add("text-danger");
}


function validarProjeto(campo,label){
  let n=document.getElementById(campo);

//verifica tipos de dados
  if(n.value.length==0 || (campo=="ano" && (isNaN(parseInt(n.value)||(n.value<1900 && n.value>2500)))
   ||(campo=="titulo" && n.value=="") || (campo=="aluno" && n.value=='0') || (campo=="professor" && n.value=='0')
    || (campo=="area" && n.value=="") || (campo=="semestre && n.value<1 && n.value>2") ) {
    personalizarErro(n,label);
    n.value="";
    return false;
  }else{ //campo ok
    personalizarOk(n,label);
    return true;
  }

}

function limpa(){
  parent.window.document.location.href = '';
}
