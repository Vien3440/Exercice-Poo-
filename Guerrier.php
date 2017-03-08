<?php
// L'objet Guerrier hérite des proprietes de la classe abstrainte Stats
// et implement l'interface iClasse()
class Guerrier extends Stats implements iClasse {
  // Defini le nom de la calsse lors de la creation d'une nouvelle instance  
  public function __construct() {
    $this->nom = "Guerrier";
  }
  // Grace a Implements iClasse nous permet d'appeler notre m'éthode attaquer()
  // si dessou
  public function attaquer() {
    echo " attaque";
  }

}
