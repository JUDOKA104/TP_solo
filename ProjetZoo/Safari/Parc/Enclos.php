<?php
namespace Safari\Parc;

use Safari\Animaux\Animal;

class Enclos {
    private array $animaux = [];
    private string $proprete = "Sale";

    public function __construct(
        private int $capaciteMax = 5
    ) {}

    public function ajouterAnimal(Animal $nouvelAnimal): string {
        if (count($this->animaux) >= $this->capaciteMax) {
            return "Erreur : Enclos plein ! Impossible d'ajouter {$nouvelAnimal->getNom()}.";
        }

        $this->animaux[] = $nouvelAnimal;
        return "Bienvenue à {$nouvelAnimal->getNom()} !";
    }

    public function entretenir(): string {
        $this->proprete = "Propre";
        return "Nettoyage en cours... L'enclos est maintenant {$this->proprete}.";
    }

    public function visiteGuidée(): string {
        $rapport = "Voici les animaux de l'enclos :<br>";

        if (empty($this->animaux)) {
            return $rapport . "L'enclos est vide.";
        }

        foreach ($this->animaux as $animal) {
            $rapport .= "- " . $animal->crier() . "<br>";
        }

        return $rapport;
    }
}