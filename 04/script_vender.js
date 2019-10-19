function disponibilidade(){
  let campo=document.getElementById("produtos");
  if(campo.value==0){//não selecionado
    campo.classList.add("is-invalid");
    document.getElementById("comprar").disabled=true;
  }else if(campo.value==2){
    campo.classList.add("is-invalid");
    document.getElementById("comprar").disabled=true;
  }else{
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");
    document.getElementById("comprar").disabled=false;
  }
}

function efetua_venda(){
  if(document.getElementById("clientes").value!=0){
    document.getElementById("clientes").classList.remove("is-invalid");
    document.getElementById("clientes").classList.add("is-valid");
    document.getElementById("comprar").disabled=true;
    document.getElementById("clientes").value=0;
    document.getElementById("produtos").value=0;
    document.getElementById("clientes").classList.remove("is-valid");
    document.getElementById("clientes").classList.remove("is-invalid");
    window.location.href="sucesso_compra.html";
  }else{
    document.getElementById("clientes").classList.remove("is-valid");
    document.getElementById("clientes").classList.add("is-invalid");
    document.getElementById("clientes").focus();
  }
}
