<?php
require_once "Autor.php";

class ImprimirAutor {
    public function getInfo(Autor $autor): void {
        echo "Autor: {$autor->getNombre()} {$autor->getApellido()}, Edad: {$autor->getEdad()}\n";
    }
}
