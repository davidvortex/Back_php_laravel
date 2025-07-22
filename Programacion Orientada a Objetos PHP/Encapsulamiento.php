<?php
declare(strict_types=1);

// Crear un objeto Vender
$vender = new Vender(11.5, date("d-m-Y"));
$producto1 = new Concepto("Papas", 5.0);
$vender->agregarConcepto($producto1);

echo "Factura Vender:\n";
echo $vender->createInvoice();
print_r($vender->conceptos);

echo "\n\n";

// Crear un objeto OnlineSale (hereda de Vender)
$onlineSale = new OnlineSale(20.0, date("d-m-Y"), "Paypal");
$concepto2 = new Concepto("Galletas", 3.5);
$onlineSale->agregarConcepto($concepto2);

echo "Factura OnlineSale:\n";
echo $onlineSale->createInvoice();
print_r($onlineSale->conceptos);

// Clases
class Vender {
    protected float $total;
    protected string $date;
    public array $conceptos = [];
    public static int $contar = 0;

    public function __construct(float $total, string $date) {
        $this->total = $total;
        $this->date = $date;
        self::$contar++;
    }

    public function agregarConcepto(Concepto $concepto): void {
        $this->conceptos[] = $concepto;
    }

    public function createInvoice(): string {
        return "Factura creada para venta local. Total: {$this->total} - Fecha: {$this->date}\n";
    }

    public static function resetear(): void {
        self::$contar = 0;
    }

    public function __destruct() {
        echo "Objeto Vender destruido.\n";
    }
}

class OnlineSale extends Vender {
    public $metodoPago;

    public function __construct(float $total, string $date, string $metodoPago) {
        parent::__construct($total, $date);
        $this->metodoPago = $metodoPago;
    }

    // Sobrescribe método del padre
    public function createInvoice(): string {
        return "Factura de venta en línea creada. Total: {$this->total} - Fecha: {$this->date} - Pago: {$this->metodoPago}\n";
    }
}

class Concepto {
    public string $descripcion;
    public int|float $contenido;

    public function __construct(string $descripcion, int|float $contenido) {
        $this->descripcion = $descripcion;
        $this->contenido = $contenido;
    }
}
