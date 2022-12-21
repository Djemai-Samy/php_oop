<?php
class Personne{
  private $prenom;
  private $nom;

  function __construct($unNom, $unPrenom){
    $this->prenom = $unPrenom;
    $this->nom = $unNom;
  }
  
  function disBonjour(){
    echo "<p>Salut je suis " . $this -> prenom . " </p>";
  }
  
  //Getter/Accesseur de la propriete prenom
  function getPrenom(){
    return $this -> prenom;
  }

  //Getter/Accesseur de la propriete nom
  function getNom(){
    return $this -> nom;
  }

  //setter/Mutateur de la propriete prenom
  function setPrenom($newPrenom){
    $this -> prenom = $newPrenom;
  }

  //setter/Mutateur de la propriete nom
  function setNom($newNom){
    $this -> nom = $newNom;
  }

  static function whoAreYou(){
    echo '<p>Je suis une fonction statique de la classe Personne</p>';
  }

  static function affichePersonnes($tabPersonne){
    echo "<h2>Liste des peronnes</h2>";
    
    foreach($tabPersonne as $key => $personne){
      echo '<p>'.$personne -> getNom().'</p>';
    }
    
    echo "<h2>-------</h2>";
  }
}
