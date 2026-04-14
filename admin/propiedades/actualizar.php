<?php

use App\Propiedad;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager as Image;

require '../../includes/app.php';

estaAutenticado();


// Validar la URL por ID valido 
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header('Location: /admin');
}




// Obtener los datos de la propiedad 
$propiedad = Propiedad::find($id);



// CONSULTAR PARA OBTENER LOS VENDEDORES
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo con mensajes de errores 
$errores = Propiedad::getErrores();




// Ejecuta el codigo despues de que el usuario envia el formulario 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


// Asignar los atributos 
$args = $_POST['propiedad']; 

  $propiedad->sincronizar($args);
  

  // validacion
  $errores = $propiedad->validar();
  

   // Generar un nombre unico 
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";


  // subida de archivos
  if ($_FILES['propiedad']['tmp_name']['imagen']) {
    $manager = new Image(Driver::class);
    $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
    $propiedad->setImagen($nombreImagen);
  } 
 
     debuguear($propiedad); 
    

  // REVISAR QUE EL ARRAY DE ERRORES EST VACIO
  if (empty($errores)) {
 
  exit; 


    // INSERTAR EN LA BASE DE DATOS 
    $query = " UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen= '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}
        , wc = ${wc} , estacionamiento = ${estacionamiento}, vendedores_id = ${vendedores_id} WHERE id = ${id} ";


    //  echo $query;  



    $resultado = mysqli_query($db, $query);

    if ($resultado) {

      // REDIRECCIONAR AL USUARIO 
      header('Location: /admin?resultado=2');
    }
  }
}


incluirTemplates('header');
?>
<main class="contenedor">
  <h1>Actualizar Propiedad</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POST" enctype="multipart/form-data">
    <?php include '../../includes/templates/formulario_propiedades.php' ?>
    <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplates('footer');
?>