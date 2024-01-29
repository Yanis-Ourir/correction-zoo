<?php

abstract class AbstractEnclos
{
    protected string $nom;
    protected string $proprete;
    protected int $nombreAnimal;

    protected array $animaux = [];

    public function afficherInfoEnclos() : array
    {
        return [
            'nom' => $this->nom,
            'proprete' => $this->proprete,
            'nombreAnimal' => $this->nombreAnimal
        ];
    }
    // Ou methode magique __toString();

    public function afficherInfosAnimaux(array $animals) {
        foreach ($animals as $animal) {
            $animal->animalInfo();
        }
    }

    abstract public function ajouterAnimal(Animal $animal);

    public function enleverAnimal(Animal $animal) {
        if(count($this->animaux) >= 1) {
            foreach ($this->animaux as $key => $value) {
                array_splice($this->animaux, $key, $key);
                $this->nombreAnimal = count($this->animaux);
            }
        } else {
            echo "Vous ne pouvez pas enlever un animal, car il n'y a pas d'animal dans l'enclos";
        }
    }

    abstract public function entretenirEnclos();


}