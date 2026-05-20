<?php

require '../../includes/app.php'; 

use App\Vendedor;
estaAutenticado();

// Validar que sea un ID valido 

$id = $_GET['id'];
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

if(!$id) {
  header('Location: /admin');
 
} 

// obtener el arreglo del vendedor 
$vendedor = Vendedor::find($id);



// Arreglo con mensajes de errores 
$errores = Vendedor::getErrores();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// Asignar los valores 
$args = $_POST['vendedor'];


// sincronizar objeto en memri con lo que el usaurio escribio
$vendedor->sincronizar($args);  



// validacion 
$errores = $vendedor->validar(); 



if(empty($errores)) { 
  $vendedor->guardar(); 
}

}

incluirTemplates('header');
?>
<main class="contenedor">
  <h1>Actualizar Vendedor(a)</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POST" >
        <?php include '../../includes/templates/formulario_vendedores.php' ?>
    <input type="submit" value="Guardar Cambios" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplates('footer');
?>