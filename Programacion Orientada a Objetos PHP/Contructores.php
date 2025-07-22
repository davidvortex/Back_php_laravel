<?php

// Creamos ya un contructor
$vender = new Vender(11.5, date("d-m-Y"));
$vender = new Vender(11.5, date("d-m-Y"));

echo Vender::$contar;
//$sale-> createInvoice();


class Vender {
    private $total;
    private $date;
    public static $contar;

    public function __construct($total, $date) {
        $this->total;
        $this->date;
        self::$contar++;
    }

    public function createInvoice() {
        echo "se crea la facturacion";
    }

}