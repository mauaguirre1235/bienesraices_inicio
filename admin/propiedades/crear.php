<?php
require '../../includes/app.php';

use App\Propiedad;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager as Image;

estaAutenticado();


// Base de datos 
$db = conectarDB();

$propiedad = new Propiedad;  

// CONSULTAR PARA OBTENER LOS VENDEDORES
$consulta = "SELECT * FROM vendedores";

$resultado = mysqli_query($db, $consulta);


// Arreglo con mensajes de errores 
$errores = Propiedad::getErrores();


// Ejecuta el codigo despues de que el usuario envia el formulario 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $propiedad = new Propiedad($_POST);


  

  // Generar un nombre unico 
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
  if ($_FILES['imagen']['tmp_name']) {
    $manager = new Image(Driver::class);
    $image = $manager->read($_FILES['imagen']['tmp_name'])->cover(800, 600);
    $propiedad->setImagen($nombreImagen);
  } 

  $errores =  $propiedad->validar();


  // REVISAR QUE EL ARRAY DE ERRORES EST VACIO
  if (empty($errores)) {


    /** SUBIDA DE ARCHIVOS**/

    
    if (!is_dir(CARPETA_IMAGENES)) {
      mkdir(CARPETA_IMAGENES);
    }


    // GUARDAR LA IMAGEN EN EL SERVIDOR
    $image->save(CARPETA_IMAGENES . $nombreImagen);

    $resultado = $propiedad->guardar();

    // SUBIR LA IMAGEN
    if ($resultado) {

      // REDIRECCIONAR AL USUARIO 
      header('Location: /admin?resultado=1');
    }
  }
}






incluirTemplates('header');
?>
<main class="contenedor">
  <h1>Crear</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <?php include '../../includes/templates/formulario_propiedades.php' ?>
    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplates('footer');
?>