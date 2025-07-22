<?php
declare(strict_types=1);

// Crear un objeto Vender
$vender = new Vender(11.5, date("d-m-Y"));
$producto1 = new Concepto("Papas", 5.0);
$vender->agregarConcepto($producto1);

echo "Factura Vender:\n";
echo $vender->createInvoice();
print_r($vender->getConceptos());

echo "\n\n";

// Crear un objeto OnlineSale (hereda de Vender)
$onlineSale = new OnlineSale(20.0, date("d-m-Y"), "Paypal");
$concepto2 = new Concepto("Galletas", 3.5);
$onlineSale->agregarConcepto($concepto2);

echo "Factura OnlineSale:\n";
echo $onlineSale->createInvoice();
print_r($onlineSale->getConceptos());

// Clases
class Vender {
    protected float $total;
    protected string $date;
    private array $conceptos = [];
    private static int $contar = 0;

    public function __construct(float $total, string $date) {
        $this->total = $total;
        $this->date = $date;
        self::$contar++;
    }

    public function agregarConcepto(Concepto $concepto): void {
        $this->conceptos[] = $concepto;
    }

    public function getConceptos(): array {
        return $this->conceptos;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function setTotal(float $total): void {
        $this->total = $total;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setDate(string $date): void {
        $this->date = $date;
    }

    public static function getContar(): int {
        return self::$contar;
    }

    public static function resetear(): void {
        self::$contar = 0;
    }

    public function createInvoice(): string {
        return "Factura creada para venta local. Total: {$this->total} - Fecha: {$this->date}\n";
    }

    public function __destruct() {
        echo "Objeto Vender destruido.\n";
    }
}

class OnlineSale extends Vender {
    private string $metodoPago;

    public function __construct(float $total, string $date, string $metodoPago) {
        parent::__construct($total, $date);
        $this->metodoPago = $metodoPago;
    }

    public function getMetodoPago(): string {
        return $this->metodoPago;
    }

    public function setMetodoPago(string $metodoPago): void {
        $this->metodoPago = $metodoPago;
    }

    public function createInvoice(): string {
        return "Factura de venta en línea creada. Total: {$this->getTotal()} - Fecha: {$this->getDate()} - Pago: {$this->metodoPago}\n";
    }
}

class Concepto {
    private string $descripcion;
    private int|float $contenido;

    public function __construct(string $descripcion, int|float $contenido) {
        $this->descripcion = $descripcion;
        $this->contenido = $contenido;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function getContenido(): int|float {
        return $this->contenido;
    }

    public function setContenido(int|float $contenido): void {
        $this->contenido = $contenido;
    }
}
