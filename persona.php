<?php

class Persona{
    // Definicion de Variables
    private $nombre, $apellido, $direccion, $mail, $telefono;

    // Constructor
    public function __construct($nombre, $apellido, $direccion, $mail, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->telefono = $telefono;
    }

    // Getters 
    public function getNombre(){return $this->nombre;}
    public function getApellido(){return $this->apellido;}
    public function getDireccion(){return $this->direccion;}
    public function getMail(){return $this->mail;}
    public function getTelefono(){return $this->telefono;}

    // Setters 
    public function setNombre($nombre){return $this->nombre = $nombre;}
    public function setApellido($apellido){return $this->apellido = $apellido;}
    public function setDireccion($direccion){return $this->direccion = $direccion;}
    public function setMail($mail){return $this->mail = $mail;}
    public function setTelefono($telefono){return $this->telefono = $telefono;}

    // Imprimir Valores
    public function __toString(){

        return  "\nNombre: {$this->getNombre()}".
                "\nApellido: {$this->getApellido()}".
                "\nDireccion: {$this->getDireccion()}".
                "\nMail: {$this->getMail()}".
                "\nTelefono: {$this->getTelefono()}";
    }
}

?>

