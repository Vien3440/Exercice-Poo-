<?php
// implements iClasse nous permet d'appeler notre m'éthode attaquer
  class Archer extends Stats implements iClasse {
    
    public function __construct() {
      $this->nom = "Archer";
    }

    public function attaquer() {
      echo " tire une flèche";
    }

  }
