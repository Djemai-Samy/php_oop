<?php

abstract class Animal{
  private $nom;
  private $age;

  function __construct($nom, $age){
    $this -> nom = $nom;
    $this -> age = $age;
    
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function setNom($nom): self{
    $this->nom = $nom;
    return $this;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge(int $age): self{
    $this->age = $age;

    return $this;
  }

  abstract function sayHello();
  
}


class Dog extends Animal{
  //Le mot clé 'final' ne permet le ovveride d'une fonction (proprietes)
  final function sayHello(){

  self::whoAreYou();
  echo "<p>".$this -> getNom()." a dit woof</p>";
 }

 static function whoAreYou(){
  echo "<p>Je suis un chien</p>";
 }
}

class Caniche extends Dog{
  // function sayHello(){
  //   echo "<p>".$this -> getNom()." a dit waf</p>";
  // }
}


class Cat extends Animal{
  function sayHello(){
    echo "<p>".$this -> getNom()." a dit miaou</p>";
  }
}

class Bird extends Animal{
  function sayHello(){
    echo "<p>".$this -> getNom()." a dit cuicui</p>";
  }
}

