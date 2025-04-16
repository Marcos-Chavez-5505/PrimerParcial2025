<?php

class Aerolinea{
    // Definicion de Variables
    private $identificacion, $nombre, $colVuelos;

    // Constructor
    public function __construct($identificacion, $nombre, $colVuelos){
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->colVuelos = $colVuelos;
    }

    // Getters
    public function getIdentidicacion(){return $this->identificacion;}
    public function getNombre(){return $this->nombre;}
    public function getColVuelos(){return $this->colVuelos;}

    // Setters
    public function setIdentidicacion($identificacion){return $this->identificacion = $identificacion;}
    public function setNombre($nombre){return $this->nombre = $nombre;}
    public function setColVuelos($colVuelos){return $this->colVuelos = $colVuelos;}

    public function darVueloDestino($destino, $cantAsientosLibres){
        $colVuelos = $this->getColVuelos();
        $colVuelosDestino = null;

        foreach($colVuelos as $vuelo){
            if($vuelo->getDestino() == $destino && $vuelo->asignarAsientosDisponibles($cantAsientosLibres) == true){
                $colVuelosDestino[] = $vuelo;
            }
        }

        return $colVuelosDestino;
    }

    public function incorporarVuelo($vueloParam){
        $colVuelos = $this->getColVuelos();
        $incorporacion = false;

        $destinoVuelo = $vueloParam->getDestino();
        $fechaVuelo = $vueloParam->getFecha();
        $horaVuelo = $vueloParam->getHoraPartida();

        foreach($colVuelos as $vuelo){
            if($vuelo->getDestino() !== $destinoVuelo && $vuelo->getFecha() !== $fechaVuelo && $vuelo->getHoraPartida() !== $horaVuelo){
                $incorporacion = true;
            }
        }

        return $incorporacion;
    }


    public function venderVueloADestino($cantAsientos, $fecha, $destino){
        $i = 0;
        $bandera = true;
        $colVuelos = $this->getColVuelos();
        $vueloAsignado = null;

        while($i < count($colVuelos) && $bandera){
            $vuelo = $colVuelos[$i];
            if($vuelo->getDestino() == $destino && $vuelo->asignarAsientosDisponibles($cantAsientos) && $vuelo->getFecha() == $fecha){
                $vueloAsignado = $vuelo;
                $bandera = false;
            }
            $i++;
        }
        return $vueloAsignado;
    }


    

    // Imprimir Valores
    public function __toString(){
        $colVuelos = $this->getColVuelos();
        $strColVuelos = "";
        foreach($colVuelos as $vuelo){
            $strColVuelos .= $vuelo."\n";
        }

        return  "\nIdentificacion: {$this->getIdentificacion()}".
                "\nNombre: {$this->get()}".
                "\nColVuelos: {$this->get()}";
    }
}

?>

