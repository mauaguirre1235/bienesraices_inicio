<?php


define('TEMPLATES_URL', __DIR__ . '/templates'); // guarda la ruta completa hacia la carpeta templates
define('FUNCIONES_URL', __DIR__ .'funciones.php'); // guarda el nombre del archivo donde estan las funciones comunes 
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/'); // guarda la ruta completa hacia la carpeta de imagenes




function incluirTemplates ($nombre, $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";   
} 


function estaAutenticado()  {
session_start();

    if(!$_SESSION['login']){
        header('Location: /');
        exit();
    } 

}

function debuguear($variable){
echo "<pre>"; 
var_dump($variable); 
echo "</pre>";  
exit; 
}


// Escapar / Sanitizar el HTML  

function s($html) : string{
    $s = htmlspecialchars($html);
    return $s; 
    
}



