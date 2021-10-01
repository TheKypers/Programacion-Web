/*
//---------test enviar opciones----------//
var mixcarne = document.getElementById("op0.1");
var carne = document.getElementById("op0.2");
var pollo = document.getElementById("op0.3");
var vegana = document.getElementById("op0.4");
var error = document.getElementById("error");

function enviarCarne(){
    console.log("Enviando formulario...")
    
    var mensajesError = [];
    if((mixcarne.value === null || mixcarne.value === '' ) && (carne.value === null || carne.value === '') &&( pollo.value === null || pollo.value === '' ) && (vegana.value === null || vegana.value === '' )){
        mensajesError.push('Selecciona una Carne');
    }
    
    return false;
}
*/

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
