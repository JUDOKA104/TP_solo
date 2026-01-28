<?php
// Autoloader
spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

use Safari\Parc\Enclos;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;

echo "<h2>Projet Zoo</h2>";

$monEnclos = new Enclos(3); // Capacité de 3
$lionSimba = new Lion("Simba", 150);
$perroquetRio = new Perroquet("Rio", 2);
$perroquetJago = new Perroquet("Jago", 3);
$lionMufasa = new Lion("Mufasa", 180);

echo "<h3>1. Remplissage</h3>";
echo $monEnclos->ajouterAnimal($lionSimba) . "<br>";
echo $monEnclos->ajouterAnimal($perroquetRio) . "<br>";
echo $monEnclos->ajouterAnimal($perroquetJago) . "<br>";
echo $monEnclos->ajouterAnimal($lionMufasa) . "<br>"; // renvoie une erreur pour enclos plein

echo "<h3>2. Visite Guidée</h3>";
echo $monEnclos->visiteGuidée();

echo "<h3>3. Événements</h3>";
echo $lionSimba->setEstMalade(true) . "<br>";
echo $lionSimba->setEstMalade(false) . "<br>";