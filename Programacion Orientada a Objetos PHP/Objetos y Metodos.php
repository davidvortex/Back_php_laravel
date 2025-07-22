<?php


$vender->Total(11.5);
$vender->date("d-m-Y");
// otra forma de hacer declarar mis objetos
// $sale = new Vender();
// $sale->Total = 11.5;
// print_r($vender);
$sale-> createInvoice();


class Vender {
    private $total;
    private $date;

    public function Total($total) {
        $this->total = $total;
    }

    public function date($date) {
        $this->date = $date;
    }

    public function __toString() {
        return "Total: " . $this->total . ", Date: " . $this->date;
    }
}