var i=0;

var listaCompetidores=[];


function preencherTabelaDados(largada){
  let l=document.createElement('tr');
  let competidor = {
    largadaC:'',
    nomeC:'',
    tempoC:''
  };
  l.insertCell(0).innerHTML=largada;
  l.insertCell(1).innerHTML=entrada.nome.value;
  l.insertCell(2).innerHTML=entrada.tempo.value;
  competidor.largadaC=largada;
  competidor.nomeC=entrada.nome.value;
  competidor.tempoC=parseInt(entrada.tempo.value);
  listaCompetidores.push(competidor);
  document.getElementById("tdados").appendChild(l);
  return true;
}

function verificaCampos(campo,label,tipo){
  let n=campo.value;
  if(n.length==0 || (tipo=="int" && isNaN(parseInt(n)) && n<0)){
    campo.classList.add("is-invalid");
    document.getElementById(label).classList.add("text-danger");
    return false;
  }else{
    campo.classList.remove("is-invalid");
    document.getElementById(label).classList.remove("text-danger");
    return true;
  }
}

function inserirCompetidor(){
  let t=entrada.tempo;
  let n=entrada.nome;
  i=i+1;
  if(i<=6){
    document.getElementById("d").style.display="block";
    if(verificaCampos(n,"label1","text") && verificaCampos(t,"label2","int")){
      preencherTabelaDados(i);
      t.value="";
      n.value="";
      n.disabled=false;
      t.disabled=false;
      document.getElementById("inserir").disabled=false;
      document.getElementById("res").style.display="none";
    }else{
      if(i==1){
        document.getElementById("d").style.display="none";
      }
      i=i-1;
    }
  }
  if(i>=6){
    document.getElementById("inserir").disabled=true;
    insereResultado();
  }
}

function insereResultado(){
  document.getElementById("finalizar").style.display="none";
  entrada.tempo.disabled=true;
  entrada.nome.disabled=true;
  //ordena lista
  listaCompetidores.sort(function(a,b){
    return a.tempoC<b.tempoC ? -1 : a.tempoC>b.tempoC ? 1 : 0;
  });
  //insere na tabela

  for(let i=0;i<listaCompetidores.length;i++){
    let primeiroTempo=listaCompetidores[0].tempoC;
    let l=document.createElement('tr');
    l.insertCell(0).innerHTML=i;
    l.insertCell(1).innerHTML=listaCompetidores[i].largadaC;
    l.insertCell(2).innerHTML=listaCompetidores[i].nomeC;
    l.insertCell(3).innerHTML=listaCompetidores[i].tempoC;
    if(listaCompetidores[i].tempoC==primeiroTempo){
      l.insertCell(4).innerHTML="Vencedor(a)!";
    }else{
      l.insertCell(4).innerHTML="-";
    }
    document.getElementById("tresult").appendChild(l);
    document.getElementById("res").style.display="block";
  }
  console.log(listaCompetidores);
}

function recarregaPagina(){
  location.reload();
}
