<?php 

namespace App;  

class Vendedor extends activeRecord {
    protected static $tabla = 'vendedores';
     protected static $columnasDB = ['id', 'nombre' , 'apellido', 'telefono'];

     
  public $id;
  public $nombre;
  public $apellido;
  public $telefono; 

  
  public function __construct($args = [])
  {

    $this->id = $args['id'] ?? null;
    $this->nombre = $args['nombre'] ?? '';
    $this->apellido = $args['apellido'] ?? '';
    $this->telefono = $args['telefono'] ?? '';
   
  }

    public function validar(){
    if(!$this->nombre){
      self::$errores[] = "El nombre es obligatorio";

  }

    if(!$this->apellido){
      self::$errores[] = "El apellido es obligatorio";

  }  

    if(!$this->telefono){
      self::$errores[] = "El telefono es obligatorio";

  }

    // validación para el teléfono: exactamente 10 dígitos
    if(!preg_match('/^\d{10}$/', $this->telefono)){
      self::$errores[] = "El teléfono debe tener exactamente 10 dígitos";
    }
    return self::$errores;
}

} 