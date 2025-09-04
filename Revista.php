<?php
require_once "Libro.php";

class Revista extends Libro implements IPublicable {
    public function getInfo(): string {
        return "Revista - " . parent::getInfo();
    }
}
