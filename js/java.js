// HAMBURGUESA
// CARNE 
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

function myFunction1() {
    var txt;
    if (confirm("Si esta segur@ de enviar el pedido por favor continue.")) {
      txt = "You pressed OK!";
    } else {
      txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
  }