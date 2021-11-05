//"comentnombre","nombre"
function Checkeo(){
    formulario1("comentusername1","email")
    formulario2("comentusername2","contra")
}

function formulario1(parametro1, parametro2) {
    const message = document.getElementById(parametro1)
    message.InnerHTML = " ";
    let x = document.getElementById(parametro2).value;
    try { 
      if(x == "")  throw " introduzca un email";
      else throw "bien";
    }
    catch(err) {
      if(err == "bien") 
      {
        message.innerHTML = " ";
      }
      else message.innerHTML = "*Por favor, " + err;
    }
  }
function formulario2(parametro1, parametro2) {
    const message = document.getElementById(parametro1)
    message.InnerHTML = " ";
    let x = document.getElementById(parametro2).value;
    try { 
        if(x == "")  throw " introduzca una contraseña ";
        else throw "bien";
    }
    catch(err) {
        if(err == "bien") {
          message.innerHTML = " ";
          location.href='../cargaMenu.html'
        }
        else message.innerHTML = "*Por favor, " + err;
    }
}