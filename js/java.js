// e21
//------------checkeo pedido---------------------//
function pedidoseguro() {
    var txt;
    if (confirm("Si esta segur@ de enviar el pedido por favor continue.")) {
      txt = "SI"; 
    } else {
      txt = "NO";
    }
    //document.getElementById("demo1").innerHTML = txt;
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
  var h1 = document.getElementById("h1").checked
  var h2 = document.getElementById("h2").checked
  var h3 = document.getElementById("h3").checked
  var h4 = document.getElementById("h4").checked
  var h5 = document.getElementById("h5").checked
  var h6 = document.getElementById("h6").checked
  var h7 = document.getElementById("h7").checked
  var h8 = document.getElementById("h8").checked
  var h9 = document.getElementById("h9").checked
  var h10 = document.getElementById("h10").checked
  var h11 = document.getElementById("h11").checked
  var h12 = document.getElementById("h12").checked
  var h13 = document.getElementById("h13").checked
  var h14 = document.getElementById("h14").checked
  var h15 = document.getElementById("h15").checked
  var h16 = document.getElementById("h16").checked
  var h17 = document.getElementById("h17").checked
  var h18 = document.getElementById("h18").checked
  var h19 = document.getElementById("h19").checked
  var h20 = document.getElementById("h20").checked
  var h21 = document.getElementById("h21").checked
  var h22 = document.getElementById("h22").checked
  var h23 = document.getElementById("h23").checked
  var h24 = document.getElementById("h24").checked
  var h25 = document.getElementById("h25").checked
  //PIZZA VARS
  var p1 = document.getElementById("p1").checked
  var p2 = document.getElementById("p2").checked
  var p3 = document.getElementById("p3").checked
  var p4 = document.getElementById("p4").checked
  var p5 = document.getElementById("p5").checked
  var p6 = document.getElementById("p6").checked
  var p7 = document.getElementById("p7").checked
  var p8 = document.getElementById("p8").checked
  var p9 = document.getElementById("p9").checked
  var p10 = document.getElementById("p10").checked
  var p11 = document.getElementById("p11").checked
  var p12 = document.getElementById("p12").checked
  var p13 = document.getElementById("p13").checked
  var p14 = document.getElementById("p14").checked
  var p15 = document.getElementById("p15").checked
  var p16 = document.getElementById("p16").checked
  var p17 = document.getElementById("p17").checked
  var p18 = document.getElementById("p18").checked
  var p19 = document.getElementById("p19").checked
  var p20 = document.getElementById("p20").checked
  var p21 = document.getElementById("p21").checked
  var p22 = document.getElementById("p22").checked
  var p23 = document.getElementById("p23").checked
  var p24 = document.getElementById("p24").checked
  var p25 = document.getElementById("p25").checked
  var p26 = document.getElementById("p26").checked
  var p27 = document.getElementById("p27").checked
  var p28 = document.getElementById("p28").checked
  var p29 = document.getElementById("p29").checked
  var p30 = document.getElementById("p30").checked
  var p31 = document.getElementById("p31").checked
  var p32 = document.getElementById("p32").checked
  var p33 = document.getElementById("p33").checked
  var p34 = document.getElementById("p34").checked
  var p35 = document.getElementById("p35").checked
  //ENSALADA VARS
  var e1 = document.getElementById("e1").checked
  var e2 = document.getElementById("e2").checked
  var e3 = document.getElementById("e3").checked
  var e4 = document.getElementById("e4").checked
  var e5 = document.getElementById("e5").checked
  var e6 = document.getElementById("e6").checked
  var e7 = document.getElementById("e7").checked
  var e8 = document.getElementById("e8").checked
  var e9 = document.getElementById("e9").checked
  var e10 = document.getElementById("e10").checked
  //var e11 = document.getElementById("e11").checked
  var e12 = document.getElementById("e12").checked
  var e13 = document.getElementById("e13").checked
  var e14 = document.getElementById("e14").checked
  var e15 = document.getElementById("e15").checked
  var e16 = document.getElementById("e16").checked
  var e17 = document.getElementById("e17").checked
  var e18 = document.getElementById("e18").checked
  var e19 = document.getElementById("e19").checked
  var e20 = document.getElementById("e20").checked
  var e21 = document.getElementById("e21").checked
  var e22 = document.getElementById("e22").checked
  var e23 = document.getElementById("e23").checked
  var e24 = document.getElementById("e24").checked
  var e25 = document.getElementById("e25").checked
  var e26 = document.getElementById("e26").checked
  var e27 = document.getElementById("e27").checked
  var e28 = document.getElementById("e28").checked
  var e29 = document.getElementById("e29").checked
  var e30 = document.getElementById("e30").checked
  var e31 = document.getElementById("e31").checked
  var e32 = document.getElementById("e32").checked
  //PASTAS Y SALSAS VARS 
  var pys1 = document.getElementById("pys1").checked
  var pys2 = document.getElementById("pys2").checked
  var pys3 = document.getElementById("pys3").checked
  var pys4 = document.getElementById("pys4").checked
  var pys5 = document.getElementById("pys5").checked
  var pys6 = document.getElementById("pys6").checked
  var pys7 = document.getElementById("pys7").checked
  var pys8 = document.getElementById("pys8").checked
  var pys9 = document.getElementById("pys9").checked
  var pys10 = document.getElementById("pys10").checked
  var pys11 = document.getElementById("pys11").checked
  var pys12 = document.getElementById("pys12").checked
  var pys13 = document.getElementById("pys13").checked
  var pys14 = document.getElementById("pys14").checked
  var pys15 = document.getElementById("pys15").checked
  var pys16 = document.getElementById("pys16").checked
  var pys17 = document.getElementById("pys17").checked
  var pys18 = document.getElementById("pys18").checked
  var pys19 = document.getElementById("pys19").checked
  var pys20 = document.getElementById("pys20").checked
  var pys21 = document.getElementById("pys21").checked
  var pys22 = document.getElementById("pys22").checked
  var pys23 = document.getElementById("pys23").checked
  var pys24 = document.getElementById("pys24").checked
  var pys25 = document.getElementById("pys25").checked
  var pys26 = document.getElementById("pys26").checked
  var pys27 = document.getElementById("pys27").checked
  var pys28 = document.getElementById("pys28").checked
  var pys29 = document.getElementById("pys29").checked
  //CAFE VARS
  var c1 = document.getElementById("c1").checked
  var c2 = document.getElementById("c2").checked
  var c3 = document.getElementById("c3").checked
  var c4 = document.getElementById("c4").checked
  var c5 = document.getElementById("c5").checked
  var c6 = document.getElementById("c6").checked
  var c7 = document.getElementById("c7").checked
  var c8 = document.getElementById("c8").checked
  var c9 = document.getElementById("c9").checked
  var c10 = document.getElementById("c10").checked
  var c11 = document.getElementById("c11").checked
  var c12 = document.getElementById("c12").checked
  var c13 = document.getElementById("c13").checked
  var c14 = document.getElementById("c14").checked
  var c15 = document.getElementById("c15").checked
  var c16 = document.getElementById("c16").checked
  var c17 = document.getElementById("c17").checked
  var c18 = document.getElementById("c18").checked
  var c19 = document.getElementById("c19").checked
  var c20 = document.getElementById("c20").checked
  var c21 = document.getElementById("c21").checked
  var c22 = document.getElementById("c22").checked
  var c23 = document.getElementById("c23").checked
  var c24 = document.getElementById("c24").checked
  var c25 = document.getElementById("c25").checked
  var c26 = document.getElementById("c26").checked
  var c27 = document.getElementById("c27").checked
  var c28 = document.getElementById("c28").checked
  var c29 = document.getElementById("c29").checked
  var c30 = document.getElementById("c30").checked
  var c31 = document.getElementById("c31").checked
  var c32 = document.getElementById("c32").checked
  //AGREGADOS VARS
  var a1 = document.getElementById("a1").checked
  var a2 = document.getElementById("a2").checked
  var a3 = document.getElementById("a3").checked
  var a4 = document.getElementById("a4").checked
  var a5 = document.getElementById("a5").checked
  var a6 = document.getElementById("a6").checked
  var a7 = document.getElementById("a7").checked
  var a8 = document.getElementById("a8").checked
  var a9 = document.getElementById("a9").checked
  //BEBIDAS VARS
  var b1 = document.getElementById("b1").checked
  var b2 = document.getElementById("b2").checked
  var b3 = document.getElementById("b3").checked
  var b4 = document.getElementById("b4").checked
  var b5 = document.getElementById("b5").checked
  var b6 = document.getElementById("b6").checked
  var b7 = document.getElementById("b7").checked
  var b8 = document.getElementById("b8").checked
  var b9 = document.getElementById("b9").checked
  var b10 = document.getElementById("b10").checked
  var b11 = document.getElementById("b11").checked 
  var b12 = document.getElementById("b12").checked
  var b13 = document.getElementById("b13").checked
  var b14 = document.getElementById("b14").checked
  var b15 = document.getElementById("b15").checked
  var b16 = document.getElementById("b16").checked
  var b17 = document.getElementById("b17").checked
  var b18 = document.getElementById("b18").checked
  var b19 = document.getElementById("b19").checked
  var b20 = document.getElementById("b20").checked
  var b21 = document.getElementById("b21").checked
  var b22 = document.getElementById("b22").checked
  var b23 = document.getElementById("b23").checked
  var b24 = document.getElementById("b24").checked
  var b25 = document.getElementById("b25").checked
  var b26 = document.getElementById("b26").checked
  var b27 = document.getElementById("b27").checked
  var b28 = document.getElementById("b28").checked
  var b29 = document.getElementById("b29").checked
  var b30 = document.getElementById("b30").checked
  var b31 = document.getElementById("b31").checked
  //bandera de pedido
  var listo = true

  //CONDICIONALES
  //-------------------------------hamburguesa
  if (h1 == false & h2 == false & h3 == false & h4 == false){ //no carne
    if ((h5 == true | h6 == true | h7 == true | h8 == true)){ //si pan
      alert("Seleccione la carne de la hamburguesa")
      var listo = false
    }
  }

  else if((h1 == true | h2 == true | h3 == true | h4 == true)){
    if(h5 == false & h5 == false & h6 == false & h7 == false & h8 == false){
      alert("Seleccione el pan de la hamburguesa")
      var listo = false
    }
  }
  //---------------------------------pizzas
  if (p1 == false & p2 == false & p3 == false & p4 == false){ 
    if ((p5 == true | p6 == true | p7 == true | p8 == true | p9 == true | p10 == true )){
      alert("Seleccione el tamaño de la pizza")
      var listo = false
    }
  }

  else if((p1 == true | p2 == true | p3 == true | p4 == true)){
    if(p5 == false & p5 == false & p6 == false & p7 == false & p8 == false & p9 == false & p10 == false){
      alert("Seleccione el queso de la pizza")
      var listo = false
    }
  }

  //--------------------------------ensalada
  if (e1 == false & e2 == false & e3 == false){ 
    if (e4 == true | e5 == true | e6 == true | e7 == true | e8 == true | e9 == true | e10 == true | e12 == true | e13 == true | e14 == true | e15 == true | e16 == true | e17 == true | e18 == true | e19 == true | e20 == true | e21 == true | e22 == true | e23 == true | e24 == true | e25 == true | e26 == true | e27 == true | e28 == true | e29 == true){
      alert("Seleccione el tamaño de la ensalada")
      var listo = false
    }
  }

  else if(e1 == true | e2 == true | e3 == true){
    if(e4 == false & e5 == false & e6 == false & e7 == false & e8 == false & e9 == false & e10 == false & e12 == false & e13 == false & e14 == false & e15 == false & e16 == false & e17 == false & e18 == false & e19 == false & e20 == false & e21 == false & e22 == false & e23 == false & e24 == false & e25 == false & e26 == false & e27 == false & e28 == false & e29 == false){
      alert("Seleccione los incredientes de la ensalada")
      var listo = false
    }
  }
  //----------------------------------pastas y salsas
  if (pys1 == false & pys2 == false & pys3 == false){ 
    if (pys4 == true | pys5 == true | pys6 == true | pys7 == true | pys8 == true | pys9 == true | pys10 == true | pys11 == true | pys12 == true | pys13 == true | pys14 == true | pys15 == true | pys16 == true | pys17 == true | pys18 == true | pys19 == true | pys20 == true | pys21 == true | pys22 == true | pys23 == true | pys24 == true | pys25 == true | pys26 == true ){
      alert("Seleccione el tipo de salsa")
      var listo = false
    }
  }

  else if(pys1 == true | pys2 == true | pys3 == true){
    if(pys4 == false & pys5 == false & pys6 == false & pys7 == false & pys8 == false & pys9 == false & pys10 == false & pys11 == false & pys12 == false & pys13 == false & pys14 == false & pys15 == false & pys16 == false & pys17 == false & pys18 == false & pys19 == false & pys20 == false & pys21 == false & pys22 == false & pys23 == false & pys24 == false & pys25 == false & pys26 == false){
      alert("Seleccione el tipo pasta")
      var listo = false
    }
  }
  //--------------CONDICION TOTAL-----------------
  //h25 | p35 | e32 | pys26 | c32 | a9 | b31
  
  if ( h1 == false & h2 == false & h3 == false & h4 == false & h5 == false & h6 == false & h7 == false & h8 == false & h9 == false & h10 == false & h11 == false & h12 == false & h13 == false & h14 == false & h15 == false & h16 == false & h17 == false & h18 == false & h19 == false & h20 == false & h21 == false & h22 == false & h23 == false & h24 == false){
    if( p1 == false & p2 == false & p3 == false & p4 == false & p5 == false & p6 == false & p7 == false & p8 == false & p9 == false & p10 == false & p11 == false & p12 == false & p13 == false & p14 == false & p15 == false & p16 == false & p17 == false & p18 == false & p19 == false & p20 == false & p21 == false & p22 == false & p23 == false & p24 == false & p25 == false & p26 == false & p27 == false & p28 == false & p29 == false & p30 == false & p31 == false & p32 == false & p33 == false & p34 == false & p35 == false){
      if( e1 == false & e2 == false & e3 == false & e4 == false & e5 == false & e6 == false & e7 == false & e8 == false & e9 == false & e10 == false & e12 == false & e13 == false & e14 == false & e15 == false & e16 == false & e17 == false & e18 == false & e19 == false & e20 == false & e21 == false & e22 == false & e23 == false & e24 == false & e25 == false & e26 == false & e27 == false & e28 == false & e29 == false & e30 == false & e31 == false & e32 == false){
        if( pys1 == false & pys2 == false & pys3 == false & pys4 == false & pys5 == false & pys6 == false & pys7 == false & pys8 == false & pys9 == false & pys10 == false & pys11 == false & pys12 == false & pys13 == false & pys14 == false & pys15 == false & pys16 == false & pys17 == false & pys18 == false & pys19 == false & pys20 == false & pys21 == false & pys22 == false & pys23 == false & pys24 == false & pys25 == false & pys26 == false & pys27 == false & pys28 == false & pys29 == false){
          if( c1 == false & c2 == false & c3 == false & c4 == false & c5 == false & c6 == false & c7 == false & c8 == false & c9 == false & c10 == false & c11 == false & c12 == false & c13 == false & c14 == false & c15 == false & c16 == false & c17 == false & c18 == false & c19 == false & c20 == false & c21 == false & c22 == false & c23 == false & c24 == false & c25 == false & c26 == false & c27 == false & c28 == false & c29 == false & c30 == false & c31 == false & c32 == false){
            if( a1 == false & a2 == false & a3 == false & a4 == false & a5 == false & a6 == false & a7 == false & a8 == false & a9 == false ){
              if( b1 == false & b2 == false & b3 == false & b4 == false & b5 == false & b6 == false & b7 == false & b8 == false & b9 == false & b10 == false & b11 == false & b12 == false & b13 == false & b14 == false & b15 == false & b16 == false & b17 == false & b18 == false & b19 == false & b20 == false & b21 == false & b22 == false & b23 == false & b24 == false & b25 == false & b26 == false & b27 == false & b28 == false & b29 == false & b30 == false & b31 == false){
                alert("No ha seleccionado nada del menu")
                var listo = false
              }
            }
          }
        }
      }
    }
  }
  /////////////////////////////////// WHILES DE PEDIDO 
  
  var pedido= " "
  if (listo){
    var i = 1
    while(i<=25){ //hamburguesa
      var variable = "h" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    }
    while(i<=35){ //pizza
      var variable = "p" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    }
    var i = 1
    while(i<=32){ //ensalada
      var variable = "e" + String(i)
      if (variable == 'e11'){
        i+=1
      }
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    }
    var i = 1
    while(i<=26){ // pys
      var variable = "pys" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    }
    var i = 1
    while(i<=32){ // cafe
      var variable = "c" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    }
    var i = 1
    while(i<=9){ // agregados
      var variable = "a" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    }
    var i = 1
    while(i<=31){ // bebidas
      var variable = "b" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " | " 
      }
      i+=1
    } 
    
  }  
  
}

