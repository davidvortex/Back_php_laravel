<?php

// Creamos ya un contructor
$vender = new Vender(11.5, date("d-m-Y"));

$sale-> createInvoice();


//los desctructores se ejecutan cuando el objeto se destruye
// se ejecuta cuando el objeto se destruye, por ejemplo al salir del alcance de la variable


class Vender {
    private $total;
    private $date;

    public function __construct($total, $date) {
        $this->total;
        $this->date;
    }

    public function __destruct() {
        echo "El objeto Vender ha sido destruido.";
    }

    public function createInvoice() {
        echo "se crea la facturacion";
    }

}