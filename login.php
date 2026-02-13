<?php

use Dom\Mysql;

require 'includes/config/database.php';
$db = conectarDB(); 

$errores = []; 

if($_SERVER['REQUEST_METHOD'] === 'POST') {


// echo "<pre>"; 
// var_dump($_POST);
// echo "</pre>"; 

$email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
$password = mysqli_real_escape_string($db, $_POST['password']); 

if(!$email) {
    $errores[] = "El email es obligatorio o no es valido"; 
}

if(!$password) {
    $errores[] = "El password es obligatorio"; 
  } 

  if(empty($errores)){

  // REVISAR SI EL USUARIO EXISTE
  $query = "SELECT * FROM usuarios WHERE email = '${email}' "; 
  $resultado = mysqli_query($db, $query); 


 

  if($resultado -> num_rows) {

  // revisar si el pasword es correcto
  $usuario = mysqli_fetch_assoc($resultado);
  
 


  // verificar si el password es correcto o no 
  $auth = password_verify($password, $usuario['password']); 
  
  if($auth) {
    // el usuario esta autenticado
    session_start();
    
    // llenar el arreglo de la sesion 
    $_SESSION['usuario'] = $usuario['email']; 
    $_SESSION['login'] = true; 

    header('Location: /admin');
 
  } else {
    
    $errores [] ="El password es incorrecto"; 
  }
  } else {
    $errores [] = "el usuario no existe";

  }
    
  }

}


require 'includes/funciones.php';
incluirTemplates('header');

?>

<main class="contenedor seccion contenido-centrado"> 
    <h1>Iniciar sesion</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach;  ?>
    <form method="POST" class="formulario">
          <fieldset>
                <legend>Email Y Password</legend>
                 <label for="email">E-mail:</label>
                <input id="email" name="email" type="email" placeholder="Tu email">

                
                 <label for="password">Password:</label>
                <input id="password" name="password" type="password" placeholder="Tu password">
    
            </fieldset>
            <input type="submit" value="Iniciar sesion" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplates('footer');
?>