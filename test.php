<?php

class Voiture {

  public $carburant = 100;

  public function rouler() {
    echo "test";
  }

}

$voiture = new Voiture();

echo $voiture->carburant;

$voiture->rouler();
