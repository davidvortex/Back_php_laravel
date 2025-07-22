<?php

$cerveza1 = new Cerveza("Victoria", 15);
echo $cerveza1->getName() . " - Precio: " . $cerveza1->calcularprecio() . "\n";

function showInfo(Producto $producto) {
    echo "Nombre: " . $producto->getName() . "\n";
    echo "Precio: " . $producto->calcularprecio() . "\n";
}

abstract class Producto {
    protected string $nombre;
    protected float $precio;

    abstract public function calcularprecio(): float;

    public function getName(): string {
        return $this->nombre;
    }

}

class Cerveza extends Producto {

    const alcohol = 2.2;
    public function __construct(string $nombre, float $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function calcularprecio(): float {
        return $this->precio * self::alcohol;
    }

}