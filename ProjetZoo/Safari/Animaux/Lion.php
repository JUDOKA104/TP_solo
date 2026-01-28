<?php
namespace Safari\Animaux;

class Lion extends Animal {
    public function __construct(
        string $nom,
        float $poids,
        private int $niveauAgressivite = 5
    ) {
        parent::__construct($nom, $poids);
    }

    public function crier(): string {
        return "ROAAAAR! {$this->nom} rugit férocement.";
    }

    public function chasser(): string {
        return "{$this->nom} part en chasse sur la savane...";
    }
}