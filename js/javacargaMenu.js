//--------------alertas formulario------------------//
function subirmorfi(){
    checkeo("enombrecategoria","nombre de categoria")
    checkeo("esubmenu","submenu")
    checkeo("enombre","nombre")
    checkeo("edescripcion","descripcion")

  }
  
  function checkeo(parametro1, parametro2) {
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
    return false; 
  }