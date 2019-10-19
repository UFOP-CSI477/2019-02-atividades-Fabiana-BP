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


function validar(campo,alerta,label,tipo){
  let n=campo.value;

  //erro
  if(n.length==0 || (tipo=="int" && (isNaN (parseInt(n)) || parseInt(n)<0))
  || (tipo=="float" && (isNaN (parseFloat(n)) || parseFloat(n)<0))){
    personalizarErro(campo,alerta,label);
    return false;
  }else if(tipo=="email"){
    let emailPattern =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if(emailPattern.test(n)){
      personalizarOk(campo,alerta,label);
      return true;
    }
    personalizarErro(campo,alerta,label);
    return false;

  }else{ //campo ok
    personalizarOk(campo,alerta,label);
    return true;
  }

}


function cadastro(){
  if(validar(nome,"alerta1","label1","text") && validar(nasc,"alerta2","label2","date") && validar(cpf,"alerta3","label3","text")
  && validar(email,"alerta4","label4","email") && validar(telefone,"alerta5","label5","text") && validar(rua,"alerta6","label6","text")
  && validar(n,"alerta7","label7","int") && validar(bairro,"alerta8","label8","text") && validar(cep,"alerta9","label9","text")
  && validar(cidade,"alerta10","label10","text") && validar(estado,"alerta11","label11","text") && validar(pais,"alerta12","label12","text")){
    window.location.href="confirmacao_cadastro.html";
  }
}

function limpa(){
  parent.window.document.location.href = '';
}
