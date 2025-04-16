<?php

require_once "aeropuerto.php";
require_once "aerolinea.php";
require_once "vuelo.php";


//Personas

$persona1 = new Persona("Lucia", "Fernandez", "Av. Argentina 123", "lucia.fernandez@gmail.com", "1123456789");
$persona2 = new Persona("Martin", "Cirio", "Av. Argentina 124", "martin.cirio@hotmail.com", "3411234567");
$persona3 = new Persona("Valeria", "López", "Av. Argentina 125", "valeria.lopez@yahoo.com", "3519876543");
$persona4 = new Persona("Julián", "Alvarez", "Av. Argentina 126", "julian.alvarez@outlook.com", "2613344556");




// Vuelos
$vuelo1 = new Vuelo(1, 15000, "10-05-2025", "Buenos Aires", "18:30", "15:00", 50, 20, $persona1);
$vuelo2 = new Vuelo(2, 20000, "12-05-2025", "Cordoba", "22:00", "19:30", 60, 45, $persona2);
$vuelo3 = new Vuelo(3, 18000, "15-05-2025", "Neuquen", "21:15", "17:00", 40, 10, $persona3);
$vuelo4 = new Vuelo(4, 22000, "20-05-2025", "Mendoza", "23:00", "20:00", 55, 5, $persona4);

// Coleccion de vuelos
$colVuelo1 = [$vuelo1, $vuelo2];
$colVuelo2 = [$vuelo3, $vuelo4];

$aerolinea1 = new Aerolinea(1, "aerolinea1", $colVuelo1);
$aerolinea2 = new Aerolinea(2, "aerolinea2", $colVuelo2);

// Coleccion aerolineas
$colAerolineas = [$aerolinea1, $aerolinea2];

$aeropuerto = new Aeropuerto(1, "Avenida Argentina 123", $colAerolineas);

echo $aeropuerto->ventaAutomatica(3, "10-05-2025", "Neuquen");

echo $aeropuerto->promedioRecaudadoXAerolinea(2);
?>