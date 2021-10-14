
//------------checkeo pedido---------------------//
function pedidoseguro() {
    var txt;
    if (confirm("Si esta segur@ de enviar el pedido por favor continue.")) {
      txt = "SI"; 
    } else {
      txt = "NO";
    }
    document.getElementById("demo1").innerHTML = txt;
  }
//--------------alertas formulario------------------//
function formulario(){
  formularioN("comentnombre","nombre")
  formularioN("comentapellido","apellido")
  tedioso("1.1.1.1","1.1.1.2","1.1.1.3","1.1.1.4")
}

function formularioN(parametro1, parametro2) {
  const message = document.getElementById(parametro1)
  message.InnerHTML = " ";
  let x = document.getElementById(parametro2).value;
  try { 
    if(x == "")  throw " introduzca " + parametro2;
    else throw "bien";
  }
  catch(err) {
    if(err == "bien") message.innerHTML = " ";
    else message.innerHTML = "*Por favor, " + err;
  }
}
//--------------el tedioso------------------//
function tedioso(coso1,coso2,coso3,coso4){
  //BURGUER VARS
  var h01 = document.getElementById("1.1.1.1").checked
  var h02 = document.getElementById("1.1.1.2").checked
  var h03 = document.getElementById("1.1.1.3").checked
  var h04 = document.getElementById("1.1.1.4").checked
  var h05 = document.getElementById("1.1.1.0.1").checked
  var h06 = document.getElementById("1.1.1.0.2").checked
  var h07 = document.getElementById("1.1.1.0.3").checked
  var h08 = document.getElementById("1.1.1.0.4").checked
  var h09 = document.getElementById("1.1.1.0.0.1").checked
  var h10 = document.getElementById("1.1.1.0.0.2").checked
  var h11 = document.getElementById("1.1.1.0.0.3").checked
  var h12 = document.getElementById("1.1.1.0.0.4").checked
  var h13 = document.getElementById("1.1.1.0.0.5").checked
  var h14 = document.getElementById("1.1.1.0.0.6").checked
  var h15 = document.getElementById("1.1.1.0.0.7").checked
  var h16 = document.getElementById("1.1.1.0.0.8").checked
  var h17 = document.getElementById("1.1.1.0.0.9").checked
  var h18 = document.getElementById("1.2.2").checked
  var h19 = document.getElementById("1.2.3").checked
  var h20 = document.getElementById("1.2.4").checked
  var h21 = document.getElementById("1.2.5").checked
  var h22 = document.getElementById("1.2.6").checked
  var h23 = document.getElementById("1.2.7").checked
  var h24 = document.getElementById("1.2.8").checked
  var h25 = document.getElementById("1.2.9").checked
  //PIZZA VARS
  var p01 = document.getElementById("2.1.1.1").checked
  var p02 = document.getElementById("2.1.1.2").checked
  var p03 = document.getElementById("2.1.1.3").checked
  var p04 = document.getElementById("2.1.1.4").checked
  var p05 = document.getElementById("2.1.1.0.1").checked
  var p06 = document.getElementById("2.1.1.0.2").checked
  var p07 = document.getElementById("2.1.1.0.3").checked
  var p08 = document.getElementById("2.1.1.0.4").checked
  var p09 = document.getElementById("2.1.1.0.5").checked
  var p10 = document.getElementById("2.1.1.0.6").checked
  var p11 = document.getElementById("2.1.1.0.0.1").checked
  var p12 = document.getElementById("2.1.1.0.0.2").checked
  var p13 = document.getElementById("2.1.1.0.0.3").checked
  var p14 = document.getElementById("2.1.1.0.0.4").checked
  var p15 = document.getElementById("2.1.1.0.0.5").checked
  var p16 = document.getElementById("2.1.1.0.0.6").checked
  var p17 = document.getElementById("2.1.1.0.0.7").checked
  var p18 = document.getElementById("2.1.1.0.0.8").checked
  var p19 = document.getElementById("2.1.1.0.0.9").checked
  var p20 = document.getElementById("2.1.1.0.0.10").checked
  var p21 = document.getElementById("2.1.1.0.0.11").checked
  var p22 = document.getElementById("2.1.1.0.0.12").checked
  var p23 = document.getElementById("2.1.1.0.0.13").checked
  var p24 = document.getElementById("2.1.1.0.0.14").checked
  var p25 = document.getElementById("2.1.1.0.0.15").checked
  var p26 = document.getElementById("2.1.1.0.0.16").checked
  var p27 = document.getElementById("2.1.1.0.0.17").checked
  var p28 = document.getElementById("2.1.1.0.0.18").checked
  var p29 = document.getElementById("2.1.1.0.0.19").checked
  var p30 = document.getElementById("2.1.1.0.0.20").checked
  var p31 = document.getElementById("2.2.2").checked
  var p32 = document.getElementById("2.2.3").checked
  var p33 = document.getElementById("2.2.4").checked
  var p34 = document.getElementById("2.2.5").checked
  var p35 = document.getElementById("2.2.6").checked
  //ENSALADA VARS
  var e01 = document.getElementById("3.1.1.1").checked
  var e02 = document.getElementById("3.1.1.2").checked
  var e03 = document.getElementById("3.1.1.3").checked
  var e04 = document.getElementById("3.1.1.0.1").checked
  var e05 = document.getElementById("3.1.1.0.2").checked
  var e06 = document.getElementById("3.1.1.0.3").checked
  var e07 = document.getElementById("3.1.1.0.4").checked
  var e08 = document.getElementById("3.1.1.0.5").checked
  var e09 = document.getElementById("3.1.1.0.6").checked
  var e10 = document.getElementById("3.1.1.0.7").checked
  var e11 = document.getElementById("3.1.1.0.8").checked
  var e12 = document.getElementById("3.1.1.0.9").checked
  var e13 = document.getElementById("3.1.1.0.10").checked
  var e14 = document.getElementById("3.1.1.0.11").checked
  var e15 = document.getElementById("3.1.1.0.12").checked
  var e16 = document.getElementById("3.1.1.0.13").checked
  var e17 = document.getElementById("3.1.1.0.14").checked
  var e18 = document.getElementById("3.1.1.0.15").checked
  var e19 = document.getElementById("3.1.1.0.16").checked
  var e20 = document.getElementById("3.1.1.0.17").checked
  var e22 = document.getElementById("3.1.1.0.18").checked
  var e23 = document.getElementById("3.1.1.0.19").checked
  var e24 = document.getElementById("3.1.1.0.20").checked
  var e25 = document.getElementById("3.1.1.0.20").checked
  var e26 = document.getElementById("3.1.1.0.21").checked
  var e27 = document.getElementById("3.1.1.0.22").checked
  var e28 = document.getElementById("3.1.1.0.23").checked
  var e29 = document.getElementById("3.1.1.0.24").checked
  var e30 = document.getElementById("3.1.2").checked
  var e31 = document.getElementById("3.1.3").checked
  var e32 = document.getElementById("3.1.4").checked
  var e33 = document.getElementById("3.1.5").checked
  //PASTAS Y SALSAS VARS 
  var pys01 = document.getElementById("4.1.1.1").checked
  var pys02 = document.getElementById("4.1.1.2").checked
  var pys03 = document.getElementById("4.1.1.3").checked
  var pys04 = document.getElementById("4.1.1.0.1").checked
  var pys05 = document.getElementById("4.1.1.0.2").checked
  var pys06 = document.getElementById("4.1.1.0.3").checked
  var pys07 = document.getElementById("4.1.1.0.4").checked
  var pys08 = document.getElementById("4.1.1.0.5").checked
  var pys09 = document.getElementById("4.1.1.0.6").checked
  var pys10 = document.getElementById("4.1.1.0.0.1").checked
  var pys11 = document.getElementById("4.1.1.0.0.2").checked
  var pys12 = document.getElementById("4.1.1.0.0.3").checked
  var pys13 = document.getElementById("4.1.1.0.0.4").checked
  var pys14 = document.getElementById("4.1.1.0.0.5").checked
  var pys15 = document.getElementById("4.1.1.0.0.6").checked
  var pys16 = document.getElementById("4.1.1.0.0.7").checked
  var pys17 = document.getElementById("4.1.1.0.0.8").checked
  var pys18 = document.getElementById("4.1.1.0.0.9").checked
  var pys19 = document.getElementById("4.1.1.0.0.10").checked
  var pys21 = document.getElementById("4.1.1.0.0.11").checked
  var pys22 = document.getElementById("4.1.1.0.0.12").checked
  var pys23 = document.getElementById("4.1.1.0.0.13").checked
  var pys24 = document.getElementById("4.1.1.0.0.14").checked
  var pys25 = document.getElementById("4.1.1.0.0.15").checked
  var pys26 = document.getElementById("4.1.1.0.0.16").checked
  var pys27 = document.getElementById("4.2.2").checked
  var pys28 = document.getElementById("4.2.3").checked
  var pys29 = document.getElementById("4.2.4").checked
  var pys30 = document.getElementById("4.2.5").checked
  //CAFE VARS
  var c01 = document.getElementById("5.1.1.1").checked
  var c02 = document.getElementById("5.1.1.2").checked
  var c03 = document.getElementById("5.1.1.3").checked
  var c04 = document.getElementById("5.1.1.4").checked
  var c05 = document.getElementById("5.1.1.5").checked
  var c06 = document.getElementById("5.1.1.0.1").checked
  var c07 = document.getElementById("5.1.1.0.2").checked
  var c08 = document.getElementById("5.1.1.0.3").checked
  var c09 = document.getElementById("5.1.1.0.4").checked
  var c10 = document.getElementById("5.1.1.0.5").checked
  var c11 = document.getElementById("5.1.1.0.6").checked
  var c12 = document.getElementById("5.1.1.0.7").checked
  var c13 = document.getElementById("5.1.1.0.8").checked
  var c14 = document.getElementById("5.1.1.0.9").checked
  var c15 = document.getElementById("5.1.1.0.10").checked
  var c16 = document.getElementById("5.1.1.0.11").checked
  var c17 = document.getElementById("5.1.1.0.0.1").checked
  var c18 = document.getElementById("5.1.1.0.0.2").checked
  var c19 = document.getElementById("5.1.1.0.0.3").checked
  var c20 = document.getElementById("5.1.1.0.0.4").checked
  var c21 = document.getElementById("5.1.1.0.0.0.1").checked
  var c22 = document.getElementById("5.1.1.0.0.0.2").checked
  var c23 = document.getElementById("5.1.1.0.0.0.3").checked
  var c24 = document.getElementById("5.1.1.0.0.0.4").checked
  var c25 = document.getElementById("5.1.1.0.0.0.5").checked
  var c26 = document.getElementById("5.1.1.0.0.0.6").checked
  var c27 = document.getElementById("5.1.1.0.0.0.0.1").checked
  var c28 = document.getElementById("5.1.1.0.0.0.0.2").checked
  var c29 = document.getElementById("5.1.1.0.0.0.0.3").checked
  var c30 = document.getElementById("5.1.1.0.0.0.0.4").checked
  var c31 = document.getElementById("5.1.1.0.0.0.0.5").checked
  var c32 = document.getElementById("5.1.1.0.0.0.0.6").checked
  //AGREGADOS VARS
  var a1 = document.getElementById("6.1.1.1").checked
  var a2 = document.getElementById("6.1.1.2").checked
  var a3 = document.getElementById("6.1.1.3").checked
  var a4 = document.getElementById("6.1.1.4").checked
  var a5 = document.getElementById("6.1.1.0.1").checked
  var a6 = document.getElementById("6.1.1.0.2").checked
  var a7 = document.getElementById("6.1.1.0.3").checked
  var a8 = document.getElementById("6.1.1.0.4").checked
  var a9 = document.getElementById("6.1.1.0.5").checked
  //BEBIDAS VARS
  var b01 = document.getElementById("7.1.1.1").checked
  var b02 = document.getElementById("7.1.1.2").checked
  var b03 = document.getElementById("7.1.1.3").checked
  var b04 = document.getElementById("7.1.1.0.1").checked
  var b05 = document.getElementById("7.1.1.0.2").checked
  var b06 = document.getElementById("7.1.1.0.3").checked
  var b07 = document.getElementById("7.1.1.0.4").checked
  var b08 = document.getElementById("7.1.1.0.5").checked
  var b09 = document.getElementById("7.1.1.0.6").checked
  var b10 = document.getElementById("7.1.1.0.7").checked
  var b11 = document.getElementById("7.1.1.0.8").checked 
  var b12 = document.getElementById("7.1.1.0.0.1").checked
  var b13 = document.getElementById("7.1.1.0.0.2").checked
  var b14 = document.getElementById("7.1.1.0.0.3").checked
  var b15 = document.getElementById("7.1.1.0.0.4").checked
  var b16 = document.getElementById("7.1.1.0.0.5").checked
  var b17 = document.getElementById("7.1.1.0.0.0.1").checked
  var b18 = document.getElementById("7.1.1.0.0.0.2").checked
  var b19 = document.getElementById("7.1.1.0.0.0.3").checked
  var b20 = document.getElementById("7.1.1.0.0.0.4").checked
  var b21 = document.getElementById("7.1.1.0.0.0.5").checked
  var b22 = document.getElementById("7.1.1.0.0.0.0.1").checked
  var b23 = document.getElementById("7.1.1.0.0.0.0.2").checked
  var b24 = document.getElementById("7.1.1.0.0.0.0.3").checked
  var b25 = document.getElementById("7.1.1.0.0.0.0.4").checked
  var b26 = document.getElementById("7.1.1.0.0.0.0.5").checked
  var b27 = document.getElementById("7.1.1.0.0.0.0.6").checked
  var b28 = document.getElementById("7.1.1.0.0.0.0.7").checked
  var b29 = document.getElementById("7.1.1.0.0.0.0.8").checked
  var b30 = document.getElementById("7.1.1.0.0.0.0.9").checked
  var b31 = document.getElementById("7.1.1.0.0.0.0.10").checked


  //CONDICIONALES
  //-------------------------------hamburguesa BIEN 
  if (h01 == false & h02 == false & h03 == false & h04 == false){ //no carne
    if ((h05 == true | h06 == true | h07 == true | h08 == true)){ //si pan
      alert("Seleccione la carne de la hamburguesa")
    }
  }

  else if((h01 == true | h02 == true | h03 == true | h04 == true)){
    if(h05 == false & h05 == false & h06 == false & h07 == false & h08 == false){
      alert("Seleccione el pan de la hamburguesa")
    }
  }
  //---------------------------------pizzas BIEN
  if (p01 == false & p02 == false & p03 == false & p04 == false){ 
    if ((p05 == true | p06 == true | p07 == true | p08 == true | p09 == true | p10 == true )){
      alert("Seleccione el tamaño de la pizza")
    }
  }

  else if((p01 == true | p02 == true | p03 == true | p04 == true)){
    if(p05 == false & p05 == false & p06 == false & p07 == false & p08 == false & p09 == false & p10 == false){
      alert("Seleccione el queso de la pizza")
    }
  }

  //--------------------------------ensalada
  if (e01 == false & e02 == false & e03 == false){ 
    if ((e04 == true | e05 == true | e06 == true | e07 == true | e08 == true | e09 == true | e10 == true  | e11 == true  | e12 == true  | e13 == true  | e14 == true  | e15 == true  | e16 == true  | e17 == true  | e18 == true  | e19 == true  | e20 == true  | e21 == true  | e22 == true  | e23 == true  | e24 == true  | e25 == true  | e26 == true  | e27 == true  | e28 == true  | e29 == true)){
      alert("Seleccione el tamaño de la ensalada")
    }
  }

  else if((e01 == true | e02 == true | e03 == true)){
    if(e04 == false & e05 == false & e06 == false & e07 == false & e08 == false & e09 == false & e10 == false  & e11 == false  & e12 == false  & e13 == false  & e14 == false  & e15 == false  & e16 == false  & e17 == false  & e18 == false  & e19 == false  & e20 == false  & e21 == false  & e22 == false  & e23 == false  & e24 == false  & e25 == false  & e26 == false  & e27 == false  & e28 == false  & e29 == false){
      alert("Seleccione incredientes de la ensalada")
    }
  }
  //----------------------------------pastas y salsas
  if (pys01 == false & pys02 == false & pys03 == false){ 
    if ((pys04 == true | pys05 == true | pys06 == true | pys07 == true | pys08 == true | pys09 == true )){
      alert("Seleccione la salsa del plato")
    }
  }

  else if((pys01 == true | pys02 == true | pys03 == true | pys04 == true)){
    if(pys04 == false & pys05 == false & pys06 == false & pys07 == false & pys08 == false & pys09 == false ){
      alert("Seleccione tipo de pasta")
    }
  }
}