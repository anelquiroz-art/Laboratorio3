<?php
require_once "Autor.php";
require_once "Libro.php";
require_once "Revista.php";
require_once "ImprimirAutor.php";

// Crear autores
$autor1 = new Autor("Elena", "White", 87);
$autor2 = new Autor("Gabriel", "García Márquez", 85);
$autor3 = new Autor("Mario", "Vargas Llosa", 88);
$autor4 = new Autor("Julio", "Cortázar", 70);

echo "Autores creados correctamente.\n";

// Probar ImprimirAutor
$imprimirAutor = new ImprimirAutor();
$imprimirAutor->getInfo($autor1);

// Crear libros y revistas
$libro1 = new Libro("Cien años de soledad", $autor2);
$libro2 = new Libro("La ciudad y los perros", $autor3);
$revista1 = new Revista("Revista Cultural", $autor1);
$revista2 = new Revista("Revista Literaria", $autor4);

// Guardar en arreglo
$publicaciones = [$libro1, $libro2, $revista1, $revista2];

// Iterar e imprimir
foreach ($publicaciones as $pub) {
    echo $pub->getInfo() . "\n";
}
