<?php
declare(string_types=1);

$vender = new Vender(11.5, date("d-m-Y"));
$producto1 = new Concepto("Papas", 5.0);
$vender->agregarconcepto($producto1);
print_r($vender->conceptos);

// Creamos ya un contructor
$vender = new Vender(11.5, date("d-m-Y"));
// echo gettype($vender->total);
// echo $vender->createInvoice();


class Vender {
    private $total;
    private $date;
    public array $conceptos = [];
    public static $contar;

    public function __construct($total, $date) {
        $this->total;
        $this->date;
        self::$contar++;
    }

    public function agregarconcepto(Concepto $contenido) {
        $this->conceptos[] = $contenido;
    }

    public static function resetear() {
        return self::$contar = 0;
    }

    public function __destruct() {
        echo "El objeto Vender ha sido destruido.";
    }
/*
    public function createInvoice() {
        echo "se crea la facturacion";
    }
*/

}

class Concepto {
    public string $descripcion;
    public float $contenido;

    public function __construct($descripcion, $contenido) {
        $this->$descripcion = $descripcion;
        $this->$contenido = $contenido;
    }


}