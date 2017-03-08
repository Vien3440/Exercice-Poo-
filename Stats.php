<?php
// Super class qui sera appliqué par les classes qui l'etendent
abstract class Stats {
  // Initalisation des proprieté qui on une visibilité protected
  protected $nom = "test";
  protected $pdv = 0;
  protected $atk = 0;
  protected $def = 0;
  
    // Initalisation de notre accesseur qui retourne notre proprieté nom
    public function getNom(){
      return $this->nom;
    }
    // Initalisation de notre accesseur qui permet d'attribuer une valeurs
    // a notre proprieté nom 
    public function setNom($nom){
      $this->nom = $nom;
    }
}
