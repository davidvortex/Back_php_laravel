<?php

interface ManrdarInterface {
    public function Enviar(string $mensaje);
}


interface GuardarInterface {
    public function Guardar();
}

class Documento implements ManrdarInterface, GuardarInterface {

    public function Enviar(string $mensaje) {
        echo "Enviando mensaje: $mensaje\n";
    }

    public function Guardar() {
        echo "Guardando documento...\n";
    }

}

class MensajeRepositorio implements GuardarInterface {

    public function Guardar() {
        echo "Se guardo en la Base de Datos.\n";
    }
}

class GuardarProceso{
    private GuardarInterface $GuardarManagerPunto;
    public function __construct(GuardarInterface $GuardarManagerPunto) {
        $this->GuardarManagerPunto = new Documento();
        $this->GuardarManagerPunto = $GuardarManagerPunto;
    }

    public function GuardorPuntador() {
        echo "Iniciando el proceso de guardado...\n";
        $this->GuardarManagerPunto->Guardar();
    }

}

$MensajeRepositorio = new MensajeRepositorio();
$Documento = new Documento();
$GuardarProceso = new GuardarProceso($Documento);
$GuardarProceso->GuardorPuntador();


