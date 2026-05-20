<?php 

namespace App; 

class activeRecord {


  // BASE DE DATOS
  protected static $db;
  protected static $columnasDB = [];
  protected static $tabla = ''; 


  // Errores 
  protected static $errores = [];



  // Definir la conexion a la base de datos
  public static function setDB($database)
  {
   self::$db = $database;

  }



  public function guardar(){
    if(!is_null($this->id)){

    // actualizar 
     $this->actualizar(); 

    } else {
       $this->crear(); 
    }

  }

  public function crear()
  {

    // Sanitizar los datos  
    $atributos = $this->sanitizarAtributos();


    // Insertar en la base de datos 
    $query = "INSERT INTO " . static::$tabla . "(";
    $query .= join(', ', array_keys($atributos));
    $query .= " ) VALUES (' ";
    $query .= join("', '", array_values($atributos));
    $query .= " ') ";
    $resultado =  self::$db->query($query);
   // Mensaje de exito
    if ($resultado) {

      // REDIRECCIONAR AL USUARIO 
      header('Location: /admin?resultado=1');
      exit();
    }
  }

  public function actualizar() {
      $atributos = $this->sanitizarAtributos();

      $valores = []; 
      foreach($atributos as $key =>$value){
        $valores[] = "{$key}= '{$value}'"; 
      }

    $query = "UPDATE " . static::$tabla . " SET ";
$query .= join(', ', $valores);
$query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
$query .= " LIMIT 1";

$resultado = self::$db->query($query);  

  if ($resultado) {

      // REDIRECCIONAR AL USUARIO 
      header('Location: /admin?resultado=2');
    }
       
  }

  // Eliminar un registro 
  public function eliminar() {
    
    $query = "DELETE FROM ". static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
    $resultado = self::$db->query($query); 

    if($resultado) {
      $this->borrarImagen(); 
      header('location: /admin?resultado=3');
      
    }

    
  }

  // identificar y unir los atributos de la base de datos
  public function atributos()
  {
    $atributos = [];
    foreach (static::$columnasDB as $columna) {
      if ($columna === 'id') continue;
      $atributos[$columna] = $this->$columna;
    }
    return $atributos;
  }

  public function sanitizarAtributos()
  {
    $atributos = $this->atributos();
    $sanitizado = [];


    foreach ($atributos as $key => $value) {
      $sanitizado[$key] = self::$db->escape_string($value);
    }
    return $sanitizado;
  }

  // Subida de archivos
    public function setImagen($imagen)
  { 
    // Elimina la imagen previa 

    if(!is_null($this->id) ){
      $this->borrarImagen(); 

          } 
    
    if ($imagen) {
      $this->imagen = $imagen;
    }
  }

  // Eliminar archivo
  public function borrarImagen(){
      // comprobar si existe el archivo y que no sea vacío ni directorio
      $rutaImagen = CARPETA_IMAGENES . $this->imagen;
      if(!empty($this->imagen) && file_exists($rutaImagen) && is_file($rutaImagen)) {
          unlink($rutaImagen);
      }
    
  }

  // Validacion   

  public static function getErrores()
  {
    return static::$errores;
  }

  public function validar()
  {

    static::$errores=[]; 
    return static::$errores;
  }



  //lista todos los registros

  public static function all()
  {
    $query = "SELECT * FROM " . static::$tabla;


    $resultado =  self::consultarSQL($query);

    return $resultado;
  }

  // Obtiene determinado numero de registros
 public static function get($cantidad)
  {
    $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad;

    

    $resultado =  self::consultarSQL($query);

    return $resultado;
  }


  // Buscar un registro por su id 
  public static function find($id)
  {
    $query = "SELECT * FROM ". static::$tabla . " WHERE id = ${id}";

    $resultado = self::consultarSQL($query);

    return array_shift($resultado);
  }


  public static function consultarSQL($query)
  {

    // Consultar la base de datos
    $resultado = self::$db->query($query);

    // Iterar los resultados  
    $array = [];
    while ($registro = $resultado->fetch_assoc()) {
      $array[] = static::crearObjeto($registro);
    }

    // Liberar la memoria 
    $resultado->free();

    // Rotornar 
    return $array;
  }

  // metodo para crear un objeto a partir de un registro de la base de datos
  public static function crearObjeto($registro)
  {
    $objeto = new static;


    foreach ($registro as $key => $value) {
      if (property_exists($objeto, $key)) {
        $objeto->$key = $value;
      }
    }

    return $objeto;
  } 

  
  // sincroniza el objeto en memoria con los cambios realizados por el usaurio
  public function sincronizar( $args = [])
  {
    foreach ($args as $key => $value) {
      if (property_exists($this, $key) && !is_null($value)) {
        $this->$key = $value; 
      }
    }
  }

}