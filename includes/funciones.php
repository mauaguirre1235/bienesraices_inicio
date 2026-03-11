<?php


define('TEMPLATES_URL', __DIR__ . '/templates'); // guarda la ruta completa hacia la carpeta templates
define('FUNCIONES_URL', __DIR__ .'funciones.php'); // guarda el nombre del archivo donde estan las funciones comunes 

function incluirTemplates ($nombre, $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";   
} 


function estaAutenticado()  {
session_start();

    if(!$_SESSION['login']){
        header('Location: /');
    } 

}

function debuguear($variable){
echo "<pre>"; 
var_dump($variable); 
echo "</pre>";  
exit; 
}



