
// Recogemos el DOM
const buttonResset = document.getElementById('borrar');
const formulario = document.getElementById('formulario')

// Escuchamos el boton de reset
buttonResset.addEventListener('click', alerta)




function alerta(eve) {
  eve.preventDefault();
  const opcion = confirm('Seguro que quieres borrar el formulario?');
  if (opcion == true) {
    formulario.reset();
  }
}
