<?php

namespace Model;

class Servicio extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    public $id;
    public $nombre;
    public $precio;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }
    public function validar(){
        if(!$this->nombre){
            self::$alertas['error'][]='El nombre del servicio es Obligatorio';
        }
        if(!$this->precio){
            self::$alertas['error'][]='El precio del servicio es Obligatorio';
        }
        if(!is_numeric($this->precio)){
            self::$alertas['error'][]='no es un formato valido de precio';
        }

         $existe = self::SQL("SELECT * FROM " . static::$tabla . " WHERE nombre = '" . self::$db->escape_string($this->nombre) . "' LIMIT 1");

        if(!empty($existe) && (!$this->id || $existe[0]->id != $this->id)) {
            static::setAlerta('error', 'Ya existe un servicio con este nombre');

        return self::$alertas;
    }
}
}