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
  }else{ //campo ok
    personalizarOk(campo,alerta,label);
    return true;
  }
}


function validaSelect(campo,alerta,label){
  let n=campo.value;
  //erro
  if(n==0){
    personalizarErro(campo,alerta,label);
    return false;
  }else{//campo ok
    personalizarOk(campo,alerta,label);
    return true;
  }
}


function validaRadio(campos,alerta,label){
  let itemchecked=false;
  //erro
  for(var i=0;i<campos.length;i++){
    if(campos[i].checked){
      document.getElementById(label).classList.remove("text-danger");
      document.getElementById(label).classList.add("text-success");
      document.getElementById(alerta).style.display = "none";
      return true;
    }
  }
  document.getElementById(alerta).style.display = "block";
  document.getElementById(label).classList.add("text-danger");

}


function cadastro() {
  let nome=document.dados.nome_produto;
  let desc=document.dados.descricao;
  let peso_=document.dados.peso;
  let un=document.dados.unidade;
  let valor_=document.dados.valor;
  let est_in=document.dados.estoque_inicial;
  let m=document.dados.mercado;
  let fornecedor_=document.dados.fornecedor;

  if(validar(nome,"alerta1","label1","text") && validar(desc,"alerta2","label2","text") && validar(peso_,"alerta3","label3","float")
  && validar(un,"alerta4","label4","string") && validar(valor_,"alerta5","label5","float") && validar(est_in,"alerta6","label6","int")
  && validaRadio(m,"alerta7","label7") && validaSelect(fornecedor_,"alerta8","label8")){
    window.location.href="confirmacao_cadastro.html";
  }
}

function limpa(){
  parent.window.document.location.href = '';
}
