<?php
require_once "persona.php";

class Vuelo{
    // Definicion de Variables
    private $numero, $importe, $fecha, $destino, $horaArribo, $horaPartida, $cantAsientosTotales, $cantAsientosDisponibles, $refPersona;

    // Constructor
    public function __construct($numero, $importe, $fecha, $destino, $horaArribo, $horaPartida, $cantAsientosTotales, $cantAsientosDisponibles, Persona $refPersona){
        $this->numero = $numero;
        $this->importe = $importe;
        $this->fecha = $fecha;
        $this->destino = $destino;
        $this->horaArribo = $horaArribo;
        $this->horaPartida = $horaPartida;
        $this->cantAsientosTotales = $cantAsientosTotales;  
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;
        $this->refPersona = $refPersona;
    }

    // Getters 
    public function getNumero(){return $this->numero;}
    public function getImporte(){return $this->importe;}
    public function getFecha(){return $this->fecha;}
    public function getDestino(){return $this->destino;}
    public function getHoraArribo(){return $this->horaArribo;}
    public function getHoraPartida(){return $this->horaPartida;}
    public function getCantAsientosTotales(){return $this->cantAsientosTotales;}
    public function getCantAsientosDisponibles(){return $this->cantAsientosDisponibles;}
    public function getRefPersona(){return $this->refPersona;}

    // Setters 
    public function setNumero($numero){return $this->numero = $numero;}
    public function setImporte($importe){return $this->importe = $importe;}
    public function setFecha($fecha){return $this->fecha = $fecha;}
    public function setDestino($destino){return $this->destino = $destino;}
    public function setHoraArribo($horaArribo){return $this->horaArribo = $horaArribo;}
    public function setHoraPartida($horaPartida){return $this->horaPartida = $horaPartida;}
    public function setCantAsientosTotales($cantAsientosTotales){return $this->cantAsientosTotales = $cantAsientosTotales;}
    public function setCantAsientosDisponibles($cantAsientosDisponibles){return $this->cantAsientosDisponibles = $cantAsientosDisponibles;}
    public function setRefPersona($refPersona){return $this->refPersona = $refPersona;}

    public function asignarAsientosDisponibles($asientosAsignados){
        $respuesta = false;

        if($asientosAsignados <= $this->getCantAsientosDisponibles()){
            $respuesta = true;
        }

        return $respuesta;
    }

    // Imprimir Valores
    public function __toString(){

        return  "\nNumero: {$this->getNumero()}".
                "\nImporte: {$this->getImporte()}".
                "\nFecha: {$this->getFecha()}".
                "\nDestino: {$this->getDestino()}".
                "\nHora de arribo: {$this->getHoraArribo()}".
                "\nHora de partida: {$this->getHoraPartida()}".
                "\nCantidad de asientos totales: {$this->getCantAsientosTotales()}".
                "\nCantidad de asientos disponibles: {$this->getCantAsientosDisponibles()}".
                "\nPersona: {$this->getRefPersona()}";
    }
}

?>

