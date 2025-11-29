<?php 
// Base de datos 

require '../../includes/config/database.php'; 
$db = conectarDB(); 

// CONSULTAR PARA OBTENER LOS VENDEDORES
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta); 

// Arreglo con mensajes de errores 
$errores = [];

  $titulo = '';
  $precio = '';
  $descripcion = '';
  $habitaciones = '';
  $wc = '';
  $estacionamiento = '';
  $vendedores_id = ''; 

// Ejecuta el codigo despues de que el usuario envia el formulario 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

  //  echo "<pre>";
  //  var_dump($_POST); 
  //  echo "</pre>";  

  //   echo "<pre>";
  //  var_dump($_FILES); 
  //  echo "</pre>";  


  $titulo =mysqli_real_escape_string($db,  $_POST['titulo']); 
  $precio =mysqli_real_escape_string($db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']); 
  $wc = mysqli_real_escape_string($db, $_POST['wc']);
  $estacionamiento =mysqli_real_escape_string($db,  $_POST['estacionamiento']);
  $vendedores_id =mysqli_real_escape_string($db,  $_POST['vendedor']); 
  $creado =date('Y/m/d');

  //Asignar files hacia una variable 
  $imagen = $_FILES['imagen'];
  

  if(!$titulo) {
    $errores[] = "Debes añadir un titulo"; 
  } 

  if(!$precio) {
    $errores[] = "El precio es obligatorio";
  }
  
  if( strlen( $descripcion) < 50) {
    $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
  }
  
  if(!$habitaciones) {
    $errores[] = "El Numero de habitaciones es obligatorio";
  }

   if(!$wc) {
    $errores[] = "El Numero de baños es obligatorio";
  }

   if(!$estacionamiento) {
    $errores[] = "El Numero de lugar de Estacionamiento es obligatorio";
  }

   if(!$vendedores_id) {
    $errores[] = "Elige un vendedor";
  }

  if(!$imagen['name'] || $imagen['error']) {
    $errores[] = "La imagen es obligatoria";
  }

  // Validar por tamano (100 kb por tamano )

  $medida = 1000 * 100; 

  if($imagen['size'] > $medida ){
    $errores[] = 'La imagen es muy pesada'; 

  }

  //  echo "<pre>";
  //  var_dump($errores); 
  //  echo "</pre>";  
  // exit; 

  // REVISAR QUE EL ARRAY DE ERRORES EST VACIO
  if(empty($errores)){

          /** SUBIDA DE ARCHIVOS**/

          $carpetaImagenes = '../../imagenes/'; 
          if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
          }

          // Generar un nombre unico 
          $nombreImagen = md5( uniqid(rand(), true)) . ".jpg"; 

        
         
          // subir la imagen
          move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen); 

       

          // INSERTAR EN LA BASE DE DATOS 
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento,
         creado, vendedores_id) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', 
         '$wc', '$estacionamiento', '$creado', '$vendedores_id') "; 


        // echo $query; 

        $resultado = mysqli_query($db, $query); 
        if($resultado ){
         
          // REDIRECCIONAR AL USUARIO 
          header ('Location: /admin');
        } 
  }

 
  
}

require '../../includes/funciones.php';
incluirTemplates('header'); 
?> 
    <main class="contenedor">
        <h1>Crear</h1>
      <a href="/admin" class="boton boton-verde">Volver</a>

      <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error?>
          </div>
      <?php endforeach; ?>

      <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
          <legend>informacion general</legend>

          <label for="titulo">Titulo:</label>
          <input type="text" id="titulo" name="titulo" placeholder="titulo Propiedad" value="<?php echo $titulo; ?>">

          <label for="precio">Precio:</label>
          <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

          <label for="imagen">Imagen:</label>
          <input type="file"  id="imagen" accept="image/jpeg, image/png" name="imagen">
          
          <label for="descripcion">Descripcion:</label>
          <textarea id="descripcion" name="descripcion"><?php echo $descripcion?></textarea>

        </fieldset>

        <fieldset>
          <legend> Informacion Propiedad</legend>

          <label for="habitaciones">Habitaciones:</label>
          <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max= "9"  value="<?php echo $habitaciones ?>" >


          <label for="WC">Baños:</label>
          <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max= "9"  value="<?php echo $wc ?>">


          <label for="estacionamiento">Estacionamiento:</label>
          <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max= "9"  value="<?php echo $estacionamiento ?>">

        </fieldset>

        <fieldset> 
          <legend> Vendedor </legend>
          <select name="vendedor"> 
            <option value="">--Seleccione--</option>
            <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
              <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
             <?php endwhile;  ?>
          </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
      </form>
    </main>

  <?php
    incluirTemplates('footer'); 
  ?>



