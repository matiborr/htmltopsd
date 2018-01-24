




function loadLocation(){
  var dpto = document.getElementById("dptoInput").value;
  var x = document.getElementById("locationInput");
  while (x.length > 1) {
      x.remove(x.length-1);
  }
  switch (dpto) {
    case 'Artigas':
      createValues(dptosLocs.Artigas.length,dptosLocs.Artigas);
      break;
    case 'Canelones':
      createValues(dptosLocs.Canelones.length,dptosLocs.Canelones);
      break;
    case 'Montevideo':
      createValues(dptosLocs.Montevideo.length,dptosLocs.Montevideo);
      break;
    case 'Salto':
      createValues(dptosLocs.Salto.length,dptosLocs.Salto);
      break;
    default:

  }
  function createValues(length, dptosL){
    for (var i = 0; i < length ; i++) {
        var option = document.createElement("option");
        option.text = dptosL[i];
        x.add(option);
    }
  }
}


function deleteError(error,input){
  document.getElementById(input).style.borderColor="#cccccc";
  document.getElementById(error).style.display='none';
}


function validate(){
  var name = document.getElementById("nameInput");
  var lastname = document.getElementById("lastnameInput");
  var email = document.getElementById("emailInput");
  var ci = document.getElementById("ciInput");
  var dpto = document.getElementById("dptoInput");
  var location = document.getElementById("locationInput");
  var conditions = document.getElementById("checkConditions");
  var flag = false;
  //Chequeo name
  if(name.value.length == 0){
    name.style.borderColor="red";
    document.getElementById("errorName").innerHTML = 'El campo Nombre no puede estar vacio';
    document.getElementById("errorName").style.display='block';
    flag = true;

  }
  if(name.value.length < 2 && name.value.length != 0){
    name.style.borderColor="red";
    document.getElementById("errorName").innerHTML = "El campo Nombre debe tener más de dos letras";
    document.getElementById("errorName").style.display='block';
    flag = true;
  }

  //Chequeo lastname
  if(lastname.value.length == 0){
    lastname.style.borderColor="red";
    document.getElementById("errorLastname").innerHTML = 'El campo Apellido no puede estar vacio';
    document.getElementById("errorLastname").style.display='block';
    flag = true;
  }
  if(lastname.value.length < 2 && lastname.value.length != 0){
    lastname.style.borderColor="red";
    document.getElementById("errorLastname").innerHTML = "El campo Apellido debe tener más de dos letras";
    document.getElementById("errorLastname").style.display='block';
    flag = true;
  }


  //Chequeo email
  if(email.value.length == 0){
    email.style.borderColor="red";
    document.getElementById("errorEmail").innerHTML = "El campo Email no puede estar vacio";
    document.getElementById("errorEmail").style.display='block';
    flag = true;
  }else{
    // Patron para el correo
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email.value) ){
      email.style.borderColor="red";
      document.getElementById("errorEmail").innerHTML = "Debe ser un email valido";
      document.getElementById("errorEmail").style.display='block';
      flag = true;
    }
  }


  //Chequeo dpto
  if(dpto.value.length == 0){
    dpto.style.borderColor="red";
    document.getElementById("errorDptos").style.display='block';
    flag = true;
  }

  //Chequeo location
  if(location.value.length == 0){
    location.style.borderColor="red";
    document.getElementById("errorLocation").style.display='block';
    flag = true;
  }


  //Chequeo ci
  if(ci.value.length == 0){
    ci.style.borderColor="red";
    document.getElementById("errorCi").innerHTML = "El campo Cedula no puede estar vacio";
    document.getElementById("errorCi").style.display='block';
    flag = true;
  }else{
    if(!validarCedula(ci.value)){
      ci.style.borderColor="red";
      document.getElementById("errorCi").innerHTML = "Debe ser una cedula valida";
      document.getElementById("errorCi").style.display='block';
      flag = true;
    }

  }

  //Chequeo conditions
  if(conditions.checked == false){
    document.getElementById("errorConditions").style.display='block';
    flag = true;
  }

  if(!flag){
      document.getElementById("frm").submit();
  }

}
function changeLabel(label,input){
  if(document.getElementById(input).value.length > 0){
    var d = document.getElementById(label);
    d.className = "now";
  }
}
