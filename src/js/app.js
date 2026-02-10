

document.addEventListener('DOMContentLoaded', function(){

    eventListeners();  

    darkMode();
});

function darkMode() {

    // detecta si el sistema operativo del usuario (windows, macos, etc) prefiere el modo oscuro.
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
  
    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode'); // devuelve true si el usuario tiene modo oscuro activado y se agrega la clase dark mode
    } else {
     document.body.classList.remove('dark-mode'); // si no elimina la clase 
    }

    // si el usuario activa el modo oscuro en su computadora, la pagina se actualiza sola al modo oscuro sin recargarla
    prefiereDarkMode.addEventListener('change', function(){
 if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    } else {
     document.body.classList.remove('dark-mode');
    }

    }); 

    // busca un boton en el html con la clase dark-mode-boton
    const botonDarMode = document.querySelector(".dark-mode-boton");

    // cunado el usuario hace click en ese boton, se activa o desactiva (toogle) la clase dark - mode en el body
    botonDarMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}


function eventListeners() {
// busca un elemento en la clase .mobile-menu 
    const mobileMenu = document.querySelector('.mobile-menu');

    // le agrega un evento click que llama a la funcion nevegacionResponsive
    mobileMenu.addEventListener('click', navegacionResponsive ) ;

    
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion'); 

    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar'); 
    } else  {
        navegacion.classList.add('mostrar');
    }

} 