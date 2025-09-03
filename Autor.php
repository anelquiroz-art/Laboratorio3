<?php
class Autor {
    private string $nombre;
    private string $apellido;
    private int $edad;

    public function __construct(string $nombre, string $apellido, int $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getInfo(): string {
        return "Autor: {$this->nombre} {$this->apellido}, Edad: {$this->edad}";
    }
}
