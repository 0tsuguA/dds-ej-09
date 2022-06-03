<?php

/*En un archivo index:
-instanciar la clase DatosPersona, 
-darle valor a las propiedades (el valor que ustedes quieran), 
-llamar al método MostrarPropieades. */

require_once 'modelo/datosPersona.php';

$a = new DatosPersona();
$a->Nombre = 'Augusto';
$a->Apellido = 'López';
$a->Email = 'augusstotl@gmail.com';
$a->Edad = '19 Años';
$a->MostrarPropiedades();
