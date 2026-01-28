<?php
namespace Safari\Animaux;

class Perroquet extends Animal {
    public function crier(): string {
        return "Coco veut un gâteau! ({$this->nom} siffle)";
    }

    public function voler(): string {
        return "{$this->nom} s'envole vers la cime des arbres.";
    }
}