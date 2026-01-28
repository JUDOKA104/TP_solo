<?php
namespace Safari\Animaux;

class Animal {
    protected bool $estMalade = false;

    public function __construct(
        protected string $nom,
        protected float $poids
    ) {}

    public function manger(): string {
        return "L'animal mange.";
    }

    public function seSoigner(): string {
        $this->estMalade = false;
        return "{$this->nom} s'est soigné.";
    }

    public function crier(): string {
        return "L'animal émet un son.";
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function tomberMalade(): string {
        $this->estMalade = true;
        return "{$this->nom} est tombé malade...";
    }
}