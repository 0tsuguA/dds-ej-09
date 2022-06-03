<?php
/*Declarar una clase DatosPersona con las siguientes propiedades.
-Nombre
-Apellido
-Email
-Edad
Agregar un método que imprima todas sus propiedades y tenga de nombre MostrarPropieades.*/

class DatosPersona
{
    public $Nombre;
    public $Apellido;
    public $Email;
    public $Edad;

    public function MostrarPropiedades()
    {
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Email: ' . $this->Email . '<br>';
        echo 'Edad: ' . $this->Edad . '<br>';
    }
}
