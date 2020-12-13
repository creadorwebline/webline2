<?php
class Visitante{
    private $nombre_visitante;
    private $apellido_visitante;
    private $cedula_visitante;
    private $fecha_visitante;
    private $telefono_visitante;

    //metodos para el nombre
    public function setNombre($nombre){
        $this->nombre_visitante= $nombre;
    }
    public function getNombre(){
        return $this->nombre_visitante;
    }

    //metodos para el apellido
    public function setApellido($apellido){
        $this->apellido_visitante= $apellido;
    }
    public function getApellido(){
        return $this->apellido_visitante;
    }

    //metodos para la cedula
    public function setCedula($cedula){
        $this->cedula_visitante= $cedula;
    }
    public function getCedula(){
        return $this->cedula_visitante;
    }

    //metodos para la fecha
    public function setFecha($fecha){
        $this->fecha_visitante= $fecha;
    }
    public function getFecha(){
        return $this->fecha_visitante;
    }
    //metodos para el telefono
    public function setTelefono($telefono){
        $this->telefono_visitante= $telefono;
    }
    public function getTelefono(){
        return $this->telefono_visitante;
    }
}
?>