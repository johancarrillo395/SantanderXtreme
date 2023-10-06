// Obtener los valores de los campos del formulario
const ndocumento = document.getElementById("ndocumento").value;
const tpdoc = document.getElementById("tpdoc").value;
const nombres = document.getElementById("nombres").value;
const apellidos = document.getElementById("apellidos").value;
const nacimiento = document.getElementById("nacimiento").value;
const mail = document.getElementById("mail").value;
const password = document.getElementById("password").value;
const tel = document.getElementById("tel").value;
const contacto = document.getElementById("contacto").value;

// Validar los campos del formulario

// ID Cliente
if (ndocumento === "") {
  alert("El campo ID Cliente es obligatorio.");
  return false;
}
if (!/^[0-9]{1,15}$/.test(ndocumento)) {
  alert("El campo ID Cliente debe ser un número de 1 a 15 dígitos.");
  return false;
}

// Tipo de documento
if (tpdoc === "") {
  alert("El campo Tipo de documento es obligatorio.");
  return false;
}

// Nombres
if (nombres === "") {
  alert("El campo Nombres es obligatorio.");
  return false;
}
if (!/^[a-zA-Z0-9\s]+$/.test(nombres)) {
  alert("El campo Nombres solo puede contener letras, números y espacios.");
  return false;
}

// Apellidos
if (apellidos === "") {
  alert("El campo Apellidos es obligatorio.");
  return false;
}
if (!/^[a-zA-Z0-9\s]+$/.test(apellidos)) {
  alert("El campo Apellidos solo puede contener letras, números y espacios.");
  return false;
}

// Fecha de nacimiento
if (nacimiento === "") {
  alert("El campo Fecha de nacimiento es obligatorio.");
  return false;
}

// Email
if (mail === "") {
  alert("El campo Email es obligatorio.");
  return false;
}
if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(mail)) {
  alert("El campo Email no es válido.");
  return false;
}

// Contraseña
if (password === "") {
  alert("El campo Contraseña es obligatorio.");
  return false;
}

// Telefono
if (tel === "") {
  alert("El campo Telefono es obligatorio.");
  return false;
}
if (!/^[0-9]{10}$/.test(tel)) {
  alert("El campo Telefono debe ser un número de 10 dígitos.");
  return false;
}

// Contacto
if (contacto === "") {
  alert("El campo Contacto es obligatorio.");
  return false;
}
if (!/^[0-9]{10}$/.test(contacto)) {
  alert("El campo Contacto debe ser un número de 10 dígitos.");
  return false;
}

// Si todos los campos son válidos, se permite enviar el formulario
return true;
