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
  tedioso()
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
//--------------el tedioso------------------🧉
function tedioso(){
  //BURGUER VARS c1-c25
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
  //PIZZA VARS c26-c60
  var c26 = document.getElementById("c26").checked //p1
  var c27 = document.getElementById("c27").checked
  var c28 = document.getElementById("c28").checked
  var c29 = document.getElementById("c29").checked
  var c30 = document.getElementById("c30").checked
  var c31 = document.getElementById("c31").checked
  var c32 = document.getElementById("c32").checked
  var c33 = document.getElementById("c33").checked
  var c34 = document.getElementById("c34").checked
  var c35 = document.getElementById("c35").checked
  var c36 = document.getElementById("c36").checked
  var c37 = document.getElementById("c37").checked
  var c38 = document.getElementById("c38").checked
  var c39 = document.getElementById("c39").checked
  var c40 = document.getElementById("c40").checked
  var c41 = document.getElementById("c41").checked
  var c42 = document.getElementById("c42").checked
  var c43 = document.getElementById("c43").checked
  var c44 = document.getElementById("c44").checked
  var c45 = document.getElementById("c45").checked
  var c46 = document.getElementById("c46").checked
  var c47 = document.getElementById("c47").checked
  var c48 = document.getElementById("c48").checked
  var c49 = document.getElementById("c49").checked
  var c50 = document.getElementById("c50").checked
  var c51 = document.getElementById("c51").checked
  var c52 = document.getElementById("c52").checked
  var c53 = document.getElementById("c53").checked
  var c54 = document.getElementById("c54").checked
  var c55 = document.getElementById("c55").checked
  var c56 = document.getElementById("c56").checked
  var c57 = document.getElementById("c57").checked
  var c58 = document.getElementById("c58").checked
  var c59 = document.getElementById("c59").checked
  var c60 = document.getElementById("c60").checked
  //ENSALADA VARS c61-c92
  var c61 = document.getElementById("c61").checked //e1
  var c62 = document.getElementById("c62").checked
  var c63 = document.getElementById("c63").checked
  var c64 = document.getElementById("c64").checked
  var c65 = document.getElementById("c65").checked
  var c66 = document.getElementById("c66").checked
  var c67 = document.getElementById("c67").checked
  var c68 = document.getElementById("c68").checked
  var c69 = document.getElementById("c69").checked
  var c70 = document.getElementById("c70").checked
  var c71 = document.getElementById("c71").checked
  var c72 = document.getElementById("c72").checked
  var c73 = document.getElementById("c73").checked
  var c74 = document.getElementById("c74").checked
  var c75 = document.getElementById("c75").checked
  var c76 = document.getElementById("c76").checked
  var c77 = document.getElementById("c77").checked
  var c78 = document.getElementById("c78").checked
  var c79 = document.getElementById("c79").checked
  var c80 = document.getElementById("c80").checked
  var c81 = document.getElementById("c81").checked
  var c82 = document.getElementById("c82").checked
  var c83 = document.getElementById("c83").checked
  var c84 = document.getElementById("c84").checked
  var c85 = document.getElementById("c85").checked
  var c86 = document.getElementById("c86").checked
  var c87 = document.getElementById("c87").checked
  var c88 = document.getElementById("c88").checked
  var c89 = document.getElementById("c89").checked
  var c90 = document.getElementById("c90").checked
  var c91 = document.getElementById("c91").checked
  //PASTAS Y SALSAS VARS c93-c121
  var c92 = document.getElementById("c92").checked //pys1
  var c93 = document.getElementById("c93").checked
  var c94 = document.getElementById("c94").checked
  var c95 = document.getElementById("c95").checked
  var c96 = document.getElementById("c96").checked
  var c97 = document.getElementById("c97").checked
  var c98 = document.getElementById("c98").checked
  var c99 = document.getElementById("c99").checked
  var c100 = document.getElementById("c100").checked
  var c101 = document.getElementById("c101").checked
  var c102 = document.getElementById("c102").checked
  var c103 = document.getElementById("c103").checked
  var c104 = document.getElementById("c104").checked
  var c105 = document.getElementById("c105").checked
  var c106 = document.getElementById("c106").checked
  var c107 = document.getElementById("c107").checked
  var c108 = document.getElementById("c108").checked
  var c109 = document.getElementById("c109").checked
  var c110 = document.getElementById("c110").checked
  var c111 = document.getElementById("c111").checked
  var c112 = document.getElementById("c112").checked
  var c113 = document.getElementById("c113").checked
  var c114 = document.getElementById("c114").checked
  var c115 = document.getElementById("c115").checked
  var c116 = document.getElementById("c116").checked
  var c117 = document.getElementById("c117").checked
  var c118 = document.getElementById("c118").checked
  var c119 = document.getElementById("c119").checked
  var c120 = document.getElementById("c120").checked
  //CAFE VARS c121-c152
  var c121 = document.getElementById("c121").checked //c1
  var c122 = document.getElementById("c122").checked
  var c123 = document.getElementById("c123").checked
  var c124 = document.getElementById("c124").checked
  var c125 = document.getElementById("c125").checked
  var c126 = document.getElementById("c126").checked
  var c127 = document.getElementById("c127").checked
  var c128 = document.getElementById("c128").checked
  var c129 = document.getElementById("c129").checked
  var c130 = document.getElementById("c130").checked
  var c131 = document.getElementById("c131").checked
  var c132 = document.getElementById("c132").checked
  var c133 = document.getElementById("c133").checked
  var c134 = document.getElementById("c134").checked
  var c135 = document.getElementById("c135").checked
  var c136 = document.getElementById("c136").checked
  var c137 = document.getElementById("c137").checked
  var c138 = document.getElementById("c138").checked
  var c139 = document.getElementById("c139").checked
  var c140 = document.getElementById("c140").checked
  var c141 = document.getElementById("c141").checked
  var c142 = document.getElementById("c142").checked
  var c143 = document.getElementById("c143").checked
  var c144 = document.getElementById("c144").checked
  var c145 = document.getElementById("c145").checked
  var c146 = document.getElementById("c146").checked
  var c147 = document.getElementById("c147").checked
  var c148 = document.getElementById("c148").checked
  var c149 = document.getElementById("c149").checked
  var c150 = document.getElementById("c150").checked
  var c151 = document.getElementById("c151").checked
  var c152 = document.getElementById("c152").checked
  //AGREGADOS VARS c153-c161
  var c153 = document.getElementById("c153").checked //a1
  var c154 = document.getElementById("c154").checked
  var c155 = document.getElementById("c155").checked
  var c156 = document.getElementById("c156").checked
  var c157 = document.getElementById("c157").checked
  var c158 = document.getElementById("c158").checked
  var c159 = document.getElementById("c159").checked
  var c160 = document.getElementById("c160").checked
  var c161 = document.getElementById("c161").checked
  //BEBIDAS VARS c162-c193
  var c162 = document.getElementById("c162").checked //b1
  var c163 = document.getElementById("c163").checked
  var c164 = document.getElementById("c164").checked
  var c165 = document.getElementById("c165").checked
  var c166 = document.getElementById("c166").checked
  var c167 = document.getElementById("c167").checked
  var c168 = document.getElementById("c168").checked
  var c169 = document.getElementById("c169").checked
  var c170 = document.getElementById("c170").checked
  var c171 = document.getElementById("c171").checked
  var c172 = document.getElementById("c172").checked
  var c173 = document.getElementById("c173").checked 
  var c174 = document.getElementById("c174").checked
  var c175 = document.getElementById("c175").checked
  var c176 = document.getElementById("c176").checked
  var c177 = document.getElementById("c177").checked
  var c178 = document.getElementById("c178").checked
  var c179 = document.getElementById("c179").checked
  var c180 = document.getElementById("c180").checked
  var c181 = document.getElementById("c181").checked
  var c182 = document.getElementById("c182").checked
  var c183 = document.getElementById("c183").checked
  var c184 = document.getElementById("c184").checked
  var c185 = document.getElementById("c185").checked
  var c186 = document.getElementById("c186").checked
  var c187 = document.getElementById("c187").checked
  var c188 = document.getElementById("c188").checked
  var c189 = document.getElementById("c189").checked
  var c190 = document.getElementById("c190").checked
  var c191 = document.getElementById("c191").checked
  var c192 = document.getElementById("c192").checked
  //var c193 = document.getElementById("c193").checked
  //bandera de pedido
  var listo = true
  var coca = true
  var pedido= " "
  //CONDICIONALES
  //-------------------------------hamburguesa
  if (c1 == false & c2 == false & c3 == false & c4 == false){ //no carne
    if ((c5 == true | c6 == true | c7 == true | c8 == true)){ //si pan
      alert("Seleccione la carne de la hamburguesa")
      var listo = false
    }
  }

  else if((c1 == true | c2 == true | c3 == true | c4 == true)){
    if(c5 == false & c5 == false & c6 == false & c7 == false & c8 == false){
      alert("Seleccione el pan de la hamburguesa")
      var listo = false
    }
  }
  //---------------------------------pizzas
  if (c26 == false & c27 == false & c28 == false & c29 == false){ 
    if(c30 == true | c31 == true | c32 == true | c33 == true | c34 == true | c35 == true | c36 == true){
      alert("Seleccione el tamaño de la pizza")
      var listo = false
    }
  }

  else if((c26 == true | c27 == true | c28 == true | c29 == true)){
    if(c30 == false & c31 == false & c32 == false & c33 == false & c34 == false & c35 == false & c36 == false){
      alert("Seleccione el queso de la pizza")
      var listo = false
    }
  }

  //--------------------------------ensalada
  if (c61 == false & c62 == false & c63 == false){ 
    if (c64 == true | c65 == true | c66 == true | c67 == true | c68 == true | c69 == true | c70 == true | c71 == true | c72 == true | c73 == true | c74 == true | c75 == true | c76 == true | c77 == true | c78 == true | c79 == true | c80 == true | c81 == true | c82 == true | c83 == true | c84 == true | c85 == true | c86 == true | c87 == true | c88 == true){
      alert("Seleccione el tamaño de la ensalada")
      var listo = false
    }
  }

  else if(c61 == true | c62 == true | c63 == true){
    if(c64 == false & c65 == false & c66 == false & c67 == false & c68 == false & c69 == false & c70 == false & c71 == false & c72 == false & c73 == false & c74 == false & c75 == false & c76 == false & c77 == false & c78 == false & c79 == false & c80 == false & c81 == false & c82 == false & c83 == false & c84 == false & c85 == false & c86 == false & c87 == false & c88 == false){
      alert("Seleccione los incredientes de la ensalada")
      var listo = false
    }
  }
  //----------------------------------pastas y salsas
  if (c92 == false & c93 == false & c94 == false){ 
    if (c95 == true | c96 == true | c97 == true | c98 == true | c99 == true | c100 == true | c101 == true | c102 == true | c103 == true | c104 == true | c105 == true | c106 == true | c107 == true | c108 == true | c109 == true | c110 == true | c111 == true | c112 == true | c113 == true | c114 == true | c115 == true | c116 == true | c117 == true){
      alert("Seleccione el tipo de salsa")
      var listo = false
    }
  }

  else if(c92 == true |c93 == true | c94 == true){
    if(c95 == false & c96 == false & c97 == false & c98 == false & c99 == false & c100 == false & c101 == false & c102 == false & c103 == false & c104 == false & c105 == false & c106 == false & c107 == false & c108 == false & c109 == false & c110 == false & c111 == false & c112 == false & c113 == false & c114 == false & c115 == false & c116 == false & c117 == false){
      alert("Seleccione el tipo pasta")
      var listo = false
    }
  }
  
    
  //--------------CONDICION TOTAL-----------------
  //h25 | p35 | e32 | pys26 | c32 | a9 | b31
  
  if ( c1 == false & c2 == false & c3 == false & c4 == false & c5 == false & c6 == false & c7 == false & c8 == false & c9 == false & c10 == false & c11 == false & c12 == false & c13 == false & c14 == false & c15 == false & c16 == false & c17 == false & c18 == false & c19 == false & c20 == false & c21 == false & c22 == false & c23 == false & c24 == false & c25 == false){
    if( c26 == false & c27 == false & c28 == false & c29 == false & c30 == false & c31 == false & c32 == false & c33 == false & c34 == false & c35 == false & c36 == false & c37 == false & c38 == false & c39 == false & c40 == false & c41 == false & c42 == false & c43 == false & c44 == false & c45 == false & c46 == false & c47 == false & c48 == false & c49 == false & c50 == false & c51 == false & c52 == false & c53 == false & c54 == false & c55 == false & c56 == false & c57 == false & c58 == false & c59 == false & c60 == false){
      if( c61 == false & c62 == false & c63 == false & c64 == false & c65 == false & c66 == false & c67 == false & c68 == false & c69 == false & c70 == false & c71 == false & c72 == false & c73 == false & c74 == false & c75 == false & c76 == false & c77 == false & c78 == false & c79 == false & c80 == false & c81 == false & c82 == false & c83 == false & c84 == false & c85 == false & c86 == false & c87 == false & c88 == false & c89 == false & c90 == false & c91 == false){
        if( c92 == false & c93 == false & c94 == false & c95 == false & c96 == false & c97 == false & c98 == false & c99 == false & c100 == false & c101 == false & c102 == false & c103 == false & c104 == false & c105 == false & c106 == false & c107 == false & c108 == false & c109 == false & c110 == false & c111 == false & c112 == false & c113 == false & c114 == false & c115 == false & c116 == false & c117 == false & c118 == false & c119 == false & c120 == false){
          if( c121 == false & c122 == false & c123 == false & c124 == false & c125 == false & c126 == false & c127 == false & c128 == false & c129 == false & c130 == false & c131 == false & c132 == false & c133 == false & c134 == false & c135 == false & c136 == false & c137 == false & c138 == false & c139 == false & c140 == false & c141 == false & c142 == false & c143 == false & c144 == false & c145 == false & c146 == false & c147 == false & c148 == false & c149 == false & c150 == false & c151 == false & c152 == false){
            if( c153 == false & c154 == false & c155 == false & c156 == false & c157 == false & c158 == false & c159 == false & c160 == false & c161 == false ){
              if( c162 == false & c163 == false & c164 == false & c165 == false & c166 == false & c167 == false & c168 == false & c169 == false & c170 == false & c171 == false & c172 == false & c173 == false & c174 == false & c175 == false & c176 == false & c177 == false & c178 == false & c179 == false & c180 == false & c181 == false & c182 == false & c183 == false & c184 == false & c185 == false & c186 == false & c187 == false & c188 == false & c189 == false & c190 == false & c191 == false & c192 == false){
                alert("No ha seleccionado nada del menu")
                var listo = false
                var coca = false
              }
            }
          }
        }
      }
    }
  }
  //----------------------------------bebidas si o si
  if((c162 == false & c163 == false & c164 == false & c165 == false & c166 == false & c167 == false & c168 == false & c169 == false & c170 == false & c171 == false & c172 == false & c173 == false & c174 == false & c175 == false & c176 == false & c177 == false & c178 == false & c179 == false & c180 == false & c181 == false & c182 == false & c183 == false & c184 == false & c185 == false & c186 == false & c187 == false & c188 == false & c189 == false & c190 == false & c191 == false & c192 == false & c121 == false & c122 == false & c123 == false & c124 == false & c125 == false) & (coca)){
    alert("Seleccione bebida")
  }
  /////////////////////////////////// WHILES DE PEDIDO  -----> pasar a formato y pegar en PHP
  if (listo){
    var i = 1
    while(i<=192){ //pedido formato Victoria
      var variable = "c" + String(i)
      if(variable){
        pedido= pedido + document.getElementsByName(variable) + " , " 
      }
      i+=1
    }
  }
    
}
