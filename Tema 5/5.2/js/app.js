
const btnResset = document.getElementById('borrar');
const formulario = document.getElementById('formulario')

btnResset.addEventListener('click', alerta)




function alerta(eve) {
  eve.preventDefault();
  const opcion = confirm('Seguro que quieres borrar el formulario?');
  if (opcion == true) {
    formulario.reset();
  }
}
