<?php
// L'objet Personnage hérite des proprietés de la classe absraite Stats 
class Personnage extends Stats{
  // Initialisation de nos variable public pour les manipuler
  // y avoir accés n'inpore ou .
  public $race = null;
  public $classe = null;
  // Methode qui sera appelé lors de la création 
  // d'une nouvelle instance de personage.
  // On met en paramétre : Le nom, la race, la classe
  // ces parametre seront a remplir lors de la création
  public function __construct($nom, $race, $classe) {
    $this->nom = $nom;
    $this->race = $race;
    $this->classe = $classe;
  }
  // On implemente la methode attaquer qui vient de l'interface Iclasse.php
  public function attaquer() {
    $this->classe->attaquer();
  }
   // On implemente la methode seDeplace venant de l'interface iRace.php 
  public function seDeplacer() {
    $this->race->seDeplacer(2);
  }

  public function attendre() {

  }

  public function mourir() {

  }



}
