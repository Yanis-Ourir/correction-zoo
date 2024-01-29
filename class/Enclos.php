<?php

class Enclos extends AbstractEnclos
{


    public function ajouterAnimal(Animal $animal) {
        if($this->nombreAnimal >= 6) {
            echo "$this->nombreAnimal animaux maximum, vous ne pouvez pas en ajouter un autre";
        } else {
            if($animal instanceof Tigre || $animal instanceof Ours) {
                echo "Vous avez ajouter un" . $animal->getEspece();
                $this->animaux[] = $animal;
            }

        }
    }

    public function entretenirEnclos()
    {

    }
}