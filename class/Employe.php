<?php

class Employe
{
    private $nom;
    private $age;
    private $sexe;

    public function examinerEnclos(Enclos $enclos) {
        //
    }

    public function nettoyerEnclos(Enclos $enclos) {
        //
    }

    public function nourrirAnimaux(Enclos $enclos) {

    }

    public function ajouterAnimal(Animal $animal, Enclos $enclos) {
        //
    }

    public function enleverUnAnimal(Enclos $enclos) {
        //
    }

    public function transfererUnAnimal(Enclos $retirerEnclos, Enclos $ajouterEnclos, Animal $animal) {
        $retirerEnclos->enleverAnimal($animal);
        $ajouterEnclos->ajouterAnimal($animal);
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }


    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }


}