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

  public function setAge($age): self
  {
    $this->age = $age;

    return $this;
  }

  abstract function sayHello();
}


class Dog extends Animal{
 function sayHello(){
  echo "<p>".$this -> getNom()." a dit woof</p>";
 }
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

