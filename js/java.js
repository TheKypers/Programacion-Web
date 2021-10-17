// e21
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
  var h1 = document.getElementById("1.1.1.1").checked
  var h2 = document.getElementById("1.1.1.2").checked
  var h3 = document.getElementById("1.1.1.3").checked
  var h4 = document.getElementById("1.1.1.4").checked
  var h5 = document.getElementById("1.1.1.0.1").checked
  var h6 = document.getElementById("1.1.1.0.2").checked
  var h7 = document.getElementById("1.1.1.0.3").checked
  var h8 = document.getElementById("1.1.1.0.4").checked
  var h9 = document.getElementById("1.1.1.0.0.1").checked
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
  var p1 = document.getElementById("2.1.1.1").checked
  var p2 = document.getElementById("2.1.1.2").checked
  var p3 = document.getElementById("2.1.1.3").checked
  var p4 = document.getElementById("2.1.1.4").checked
  var p5 = document.getElementById("2.1.1.0.1").checked
  var p6 = document.getElementById("2.1.1.0.2").checked
  var p7 = document.getElementById("2.1.1.0.3").checked
  var p8 = document.getElementById("2.1.1.0.4").checked
  var p9 = document.getElementById("2.1.1.0.5").checked
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
  var e1 = document.getElementById("3.1.1.1").checked
  var e2 = document.getElementById("3.1.1.2").checked
  var e3 = document.getElementById("3.1.1.3").checked
  var e4 = document.getElementById("3.1.1.0.1").checked
  var e5 = document.getElementById("3.1.1.0.2").checked
  var e6 = document.getElementById("3.1.1.0.3").checked
  var e7 = document.getElementById("3.1.1.0.4").checked
  var e8 = document.getElementById("3.1.1.0.5").checked
  var e9 = document.getElementById("3.1.1.0.6").checked
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
  var e21 = document.getElementById("3.1.1.0.18").checked
  var e22 = document.getElementById("3.1.1.0.19").checked
  var e23 = document.getElementById("3.1.1.0.20").checked
  var e24 = document.getElementById("3.1.1.0.20").checked
  var e25 = document.getElementById("3.1.1.0.21").checked
  var e26 = document.getElementById("3.1.1.0.22").checked
  var e27 = document.getElementById("3.1.1.0.23").checked
  var e28 = document.getElementById("3.1.1.0.24").checked
  var e29 = document.getElementById("3.1.2").checked
  var e30 = document.getElementById("3.1.3").checked
  var e31 = document.getElementById("3.1.4").checked
  var e32 = document.getElementById("3.1.5").checked
  //PASTAS Y SALSAS VARS 
  var pys1 = document.getElementById("4.1.1.1").checked
  var pys2 = document.getElementById("4.1.1.2").checked
  var pys3 = document.getElementById("4.1.1.3").checked
  var pys4 = document.getElementById("4.1.1.0.1").checked
  var pys5 = document.getElementById("4.1.1.0.2").checked
  var pys6 = document.getElementById("4.1.1.0.3").checked
  var pys7 = document.getElementById("4.1.1.0.4").checked
  var pys8 = document.getElementById("4.1.1.0.5").checked
  var pys9 = document.getElementById("4.1.1.0.6").checked
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
  var pys20 = document.getElementById("4.1.1.0.0.11").checked
  var pys21 = document.getElementById("4.1.1.0.0.12").checked
  var pys22 = document.getElementById("4.1.1.0.0.13").checked
  var pys23 = document.getElementById("4.1.1.0.0.14").checked
  var pys24 = document.getElementById("4.1.1.0.0.15").checked
  var pys25 = document.getElementById("4.1.1.0.0.16").checked
  var pys26 = document.getElementById("4.2.2").checked
  var pys27 = document.getElementById("4.2.3").checked
  var pys28 = document.getElementById("4.2.4").checked
  var pys29 = document.getElementById("4.2.5").checked
  //CAFE VARS
  var c1 = document.getElementById("5.1.1.1").checked
  var c2 = document.getElementById("5.1.1.2").checked
  var c3 = document.getElementById("5.1.1.3").checked
  var c4 = document.getElementById("5.1.1.4").checked
  var c5 = document.getElementById("5.1.1.5").checked
  var c6 = document.getElementById("5.1.1.0.1").checked
  var c7 = document.getElementById("5.1.1.0.2").checked
  var c8 = document.getElementById("5.1.1.0.3").checked
  var c9 = document.getElementById("5.1.1.0.4").checked
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
  var b1 = document.getElementById("7.1.1.1").checked
  var b2 = document.getElementById("7.1.1.2").checked
  var b3 = document.getElementById("7.1.1.3").checked
  var b4 = document.getElementById("7.1.1.0.1").checked
  var b5 = document.getElementById("7.1.1.0.2").checked
  var b6 = document.getElementById("7.1.1.0.3").checked
  var b7 = document.getElementById("7.1.1.0.4").checked
  var b8 = document.getElementById("7.1.1.0.5").checked
  var b9 = document.getElementById("7.1.1.0.6").checked
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
    if (e4 == true | e5 == true | e6 == true | e7 == true | e8 == true | e9 == true | e10 == true | e11 == true | e12 == true | e13 == true | e14 == true | e15 == true | e16 == true | e17 == true | e18 == true | e19 == true | e20 == true | e21 == true | e22 == true | e23 == true | e24 == true | e25 == true | e26 == true | e27 == true | e28 == true | e29 == true){
      alert("Seleccione el tamaño de la ensalada")
      var listo = false
    }
  }

  else if(e1 == true | e2 == true | e3 == true){
    if(e4 == false & e5 == false & e6 == false & e7 == false & e8 == false & e9 == false & e10 == false & e11 == false & e12 == false & e13 == false & e14 == false & e15 == false & e16 == false & e17 == false & e18 == false & e19 == false & e20 == false & e21 == false & e22 == false & e23 == false & e24 == false & e25 == false & e26 == false & e27 == false & e28 == false & e29 == false){
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
  //h25 | p35 | pys26 | c32 | a09 | b31
  
  if ( h1 == false & h2 == false & h3 == false & h4 == false & h5 == false & h6 == false & h7 == false & h8 == false & h9 == false & h10 == false & h11 == false & h12 == false & h13 == false & h14 == false & h15 == false & h16 == false & h17 == false & h18 == false & h19 == false & h20 == false & h21 == false & h22 == false & h23 == false & h24 == false){
    if( p1 == false & p2 == false & p3 == false & p4 == false & p5 == false & p6 == false & p7 == false & p8 == false & p9 == false & p10 == false & p11 == false & p12 == false & p13 == false & p14 == false & p15 == false & p16 == false & p17 == false & p18 == false & p19 == false & p20 == false & p21 == false & p22 == false & p23 == false & p24 == false & p25 == false & p26 == false & p27 == false & p28 == false & p29 == false & p30 == false & p31 == false & p32 == false & p33 == false & p34 == false & p35 == false){
      if( e1 == false & e2 == false & e3 == false & e4 == false & e5 == false & e6 == false & e7 == false & e8 == false & e9 == false & e10 == false & e11 == false & e12 == false & e13 == false & e14 == false & e15 == false & e16 == false & e17 == false & e18 == false & e19 == false & e20 == false & e21 == false & e22 == false & e23 == false & e24 == false & e25 == false & e26 == false & e27 == false & e28 == false & e29 == false & e30 == false & e31 == false & e32 == false){
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
  /////////////////////////////////// HACER WHILES QUE VEAN CUAL VAR ES TRUE Y MANDARLOS AL COSO
  var pedido= []
  if (listo){
    var i=0
    while(i<0){
      while(ped){
        elpedido(b1)
        i+=1
      }
      while(!(ped)){
        i+=1
      }
    }  
  }
  //////////////////////////////////
}
function elpedido(){

}