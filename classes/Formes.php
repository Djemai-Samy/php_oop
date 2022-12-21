<?php
class Rectangle{
  protected $hauteur;
  protected $largeur;

  function __construct($laHauteur, $laLargeur){
    $this -> hauteur = $laHauteur;
    $this -> largeur = $laLargeur;
  }

  function getHauteur() : int{
    return $this -> hauteur;
  }

  function getLargeur() : int{
    return $this -> largeur;
  }

  function setHauteur(int $newHauteur) : void{
    $this -> hauteur = $newHauteur;
  }

  function setLargeur(int $newLargeur) : void{
    $this -> largeur = $newLargeur;
  }

  function getSurface() : int{
    return $this -> hauteur * $this ->largeur; 
  }

  function isBigger(Rectangle $rect){
    return $this -> largeur < $rect -> getLargeur() && $this -> hauteur < $rect -> getHauteur();
  }
}

class Square extends Rectangle{
  
  function __construct($leCote)
  {
    parent::__construct($leCote, $leCote);
  }

}

//Exercice:
//Créer une classe "Triangle" qui herite de Rectangle
class Triangle extends Rectangle{
  protected $coteA;
  protected $coteB;
  
  function __construct($base, $coteA, $coteB){
    //Refaire:    
    //Initialiser coteA et coteB:
    $this -> coteA = $coteA;
    $this -> coteB = $coteB;
    //Le demi perimetre
    $demiP = ($base + $coteA + $coteB)/2;
    //Heron :Aire = sqrt(demiP*(demiP - $coteA)*())
    

    $surface = sqrt(abs($demiP * ($demiP - $base)*($demiP - $coteB)*($demiP - $coteA)));
    //hauteur = Aire / base *2
    $hauteur = ($surface / $base) * 2;
    var_dump($demiP);
    parent::__construct($hauteur ,$base);
  }
 
  //override: adapter la fonction getSurface pour les triangles. (h * l) / 2
  function getSurface(): int{
    return ($this -> largeur * $this -> hauteur) / 2;
  }
}
//Private: accessible que dans la classe
//Protected: accessible dans la classe et ses enfant
//Public: accessible partout