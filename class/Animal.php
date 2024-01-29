<?php

abstract class Animal
{
    protected int $poids;
    protected int $taille;
    protected string $espece;
    protected int $age;
    protected bool $satiete;
    protected bool $fatigue;
    protected bool $malade;


    abstract public function crie();

    abstract public function mouvement();

    public function animalInfo() {
        return [
            'poids' => $this->poids,
            'taille' => $this->taille,
            'age' => $this->age,
            // ...
        ];
    } // OU utiliser méthode magique toString
    public function __toString()
    {
        // https://www.php.net/manual/fr/language.oop5.magic.php#object.tostring
    }

    public function getPoids(): int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): void
    {
        $this->poids = $poids;
    }

    public function getTaille(): int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): void
    {
        $this->taille = $taille;
    }

    public function getEspece(): string
    {
        return $this->espece;
    }

    public function setEspece(string $espece): void
    {
        $this->espece = $espece;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function isSatiete(): bool
    {
        return $this->satiete;
    }

    public function setSatiete(bool $satiete): void
    {
        $this->satiete = $satiete;
    }

    public function isFatigue(): bool
    {
        return $this->fatigue;
    }

    public function setFatigue(bool $fatigue): void
    {
        $this->fatigue = $fatigue;
    }

    public function isMalade(): bool
    {
        return $this->malade;
    }

    public function setMalade(bool $malade): void
    {
        $this->malade = $malade;
    }

}