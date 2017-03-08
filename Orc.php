<?php

class Orc extends Stats implements iRace{

  public function __construct() {
    $this->nom = "Orc";
  }

  public function seDeplacer($distance) {
    echo " se Déplace de " . $distance;
  }

}
