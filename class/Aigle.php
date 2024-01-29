<?php

require_once './Animal.php';
class Aigle extends Animal
{

    public function crie()
    {

    }

    public function mouvement()
    {

    }
}

$aigle = new Aigle();
echo $aigle->__toString();