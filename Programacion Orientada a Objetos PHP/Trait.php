<?php

// Traits: reutilización de código sin herencia

trait EmailSender {
    public function MandarCorreo() {
        echo "Enviando correo...\n";
    }
}

trait DB {
    public function GuardarDB() {
        echo "Guardando en la base de datos...\n";
    }
}

trait Login {
    protected function IniciarSesion(string $mensaje, string $ArchivoNombre) {
        if (!file_exists($ArchivoNombre)) {
            // Crea el archivo si no existe
            $file = fopen($ArchivoNombre, "w");
            fwrite($file, $mensaje . "\n");
            fclose($file);
            echo "Archivo creado y mensaje guardado.\n";
        } else {
            // Si existe, agrega el mensaje
            $file = fopen($ArchivoNombre, "a");
            fwrite($file, $mensaje . "\n");
            fclose($file);
            echo "Mensaje guardado en el archivo.\n";
        }

        $tipo = file_get_contents($ArchivoNombre);
        $tipo .= date('Y-m-d H:i:s') . " - " . $mensaje . "\n";
        file_put_contents($ArchivoNombre, $tipo);
    }
}

class Factura {
    use EmailSender, DB, Login;

    public function crear() {
        $this->IniciarSesion("Se crea la factura", "log.txt");
    }
}

$facturacion = new Factura();
$facturacion->MandarCorreo();
$facturacion->GuardarDB();
$facturacion->crear();
