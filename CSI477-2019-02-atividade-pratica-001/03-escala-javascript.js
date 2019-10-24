function validaCampo(campo,label){
  let n=campo.value;
  if(n.length==0 || (isNaN(parseFloat(n)) && n<0)){
    campo.classList.remove("is-valid");
    campo.classList.add("is-invalid");
    document.getElementById(label).classList.add("text-danger");
    n="";
    return false;
  }else{
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");
    document.getElementById(label).classList.remove("text-danger");
    return true;
  }
}



function calculo(){
  let m=0;
  let a=document.getElementById("amplitude");
  let t=document.getElementById("tempo");
  let posicaoEscala=-1;

  if(validaCampo(a,"label1") && validaCampo(t,"label2")){
    m=Math.log10(parseFloat(a.value)) + 3*(Math.log10(8*parseFloat(t.value))) - 2.92;
    console.log(m);
    //marcar na tabela o efeito
    if(m<3.5){
      document.getElementById("0").classList.add("bg-info");
      posicaoEscala=0;
    }else if(m>=3.5 && m<=5.4){
      document.getElementById("1").classList.add("bg-info");
      posicaoEscala=1;
    }else if(m>=5.5 && m<=6){
      document.getElementById("2").classList.add("bg-info");
      posicaoEscala=2;
    }else if(m>=6.1 && m<=6.9){
      document.getElementById("3").classList.add("bg-info");
      posicaoEscala=3;
    }else if(m>=7 && m<=7.9){
      document.getElementById("4").classList.add("bg-info");
      posicaoEscala=4;
    }else{
      document.getElementById("5").classList.add("bg-info");
      posicaoEscala=5;
    }

    a.disabled=true;
    t.disabled=true;
    document.getElementById("resultado").value=m.toFixed(2);
    document.getElementById("novo").style.display="block";
    document.getElementById("calc").disabled=true;
    grafico(posicaoEscala);
  }
}

function limpar(){
  document.getElementById("amplitude").value="";
  document.getElementById("tempo").value="";
  document.getElementById("novo").style.display="none";
  document.getElementById("calc").disabled=false;
  document.getElementById("amplitude").disabled=false;
  document.getElementById("tempo").disabled=false;
  location.reload();
}
//https://bl.ocks.org/mbostock/4573883
function grafico(posicao){
var formatEscale = d3.format(".0f"),
    formatNumber = d3.format(".0f"),
    e0="#d8b8b3",
    e1="#d8b8b4",
    e2="#d8b8b5",
    e3="#d8b8b6",
    e4="#d8b8b7",
    e5="#d8b8b8",
    ereal="#760000";

var threshold;
var x;
var xAxis;
var g;

if(posicao==0){
  e0=ereal;
}else if(posicao==1){
  e1=ereal;
}else if(posicao==2){
  e2=ereal;
}else if(posicao==3){
  e3=ereal;
}else if(posicao==4){
  e4=ereal;
}else{
  e5=ereal;
}

threshold = d3.scaleThreshold()
    .domain([0.35, 0.55, 0.6, 0.7, 0.8,1])
    .range([e0, e1, e2, e3, e4, e5]);

x = d3.scaleLinear()
    .domain([0, 1])
    .range([0, 400]);

xAxis = d3.axisBottom(x)
    .tickSize(13)
    .tickValues(threshold.domain())
    .tickFormat(function(d) { return 10 * d; });

g = d3.select("g").call(xAxis);

g.select(".domain")
    .remove();

g.selectAll("rect")
  .data(threshold.range().map(function(color) {
    var d = threshold.invertExtent(color);
    if (d[0] == null) d[0] = x.domain()[0];
    if (d[1] == null) d[1] = x.domain()[1];
    return d;
  }))
  .enter().insert("rect", ".tick")
    .attr("height", 10)
    .attr("x", function(d) { return x(d[0]); })
    .attr("width", function(d) { return x(d[1]) - x(d[0]); })
    .attr("fill", function(d) { return threshold(d[0]); });

g.append("text")
    .attr("fill", "#000")
    .attr("font-weight", "bold")
    .attr("text-anchor", "start")
    .attr("y", -10)
    .text("Representação: Escala de Ritcher");
}
