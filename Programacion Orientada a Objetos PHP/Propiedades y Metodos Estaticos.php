<?php

// Creamos ya un contructor
$vender = new Vender(11.5, date("d-m-Y"));
$vender = new Vender(11.5, date("d-m-Y"));

echo Vender::$contar;
Vender::resetear(); // hace reset a la variable estatica
$vender = new Vender(11.5, date("d-m-Y"));


// $sale-> createInvoice();


class Vender {
    private $total;
    private $date;
    public static $contar;

    public function __construct($total, $date) {
        $this->total;
        $this->date;
        self::$contar++;
    }

    public static function resetear() {
        return self::$contar = 0;
    }

/*
    public function __destruct() {
        echo "El objeto Vender ha sido destruido.";
    }

    public function createInvoice() {
        echo "se crea la facturacion";
    }
*/

}