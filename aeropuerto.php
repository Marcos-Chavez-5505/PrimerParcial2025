<?php

class Aeropuerto{
    // Definicion de Variables
    private $denominacion, $direccion, $colAerolineas;

    // Constructor
    public function __construct($denominacion, $direccion, $colAerolineas){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->colAerolineas = $colAerolineas;
    }

    // Getters 
    public function getDenominacion(){return $this->denominacion;}
    public function getDireccion(){return $this->direccion;}
    public function getColAerolineas(){return $this->colAerolineas;}

    // Setters 
    public function setDenominacion($denominacion){return $this->denominacion;}
    public function setDireccion($direccion){return $this->direccion;}
    public function setColAerolineas($colAerolineas){return $this->colAerolineas;}


    public function retornarVuelosAerolineas($aerolinea){
        $colVuelosAerolinea = null;

        if($aerolinea->getColVuelos() !== null){
            $colVuelosAerolinea = $aerolinea->getColVuelos();
        }
    
        return $colVuelosAerolinea;
    }


    public function ventaAutomatica($cantAsientos, $fecha, $destino){
        $colAerolineas = $this->getColAerolineas();


        $vueloAsignado = $colAerolineas->venderVueloDestino($cantAsientos, $fecha, $destino);

        return $vueloAsignado;

    }

    public function promedioRecaudadoXAerolinea($identificacion){
        $colAerolineas = $this->getColAerolineas();

        $promedio = $colAerolineas->montoPromedioRecaudado($identificacion);
    }

    // Imprimir Valores
    public function __toString(){
        $colAerolineas = $this->getColAerolineas;
        $strColAerolineas = "";
        foreach($colAerolineas as $aerolinea){
            $strColAerolineas .= $aerolinea."\n";
        }

        return  "\nDenominacion: {$this->getDenominacion()}".
                "\nDireccion: {$this->getDireccion()}".
                "\nColeccion de Aerolineas: {$strColAerolineas}";
    }
}

?>

