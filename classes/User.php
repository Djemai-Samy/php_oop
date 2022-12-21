<?php
  class User{
    //  1.1. les propriétés: username, email, password, avatarURL:
    private $username;
    private $email;
    private $password;
    private $avatarURL;

    function __construct($leUsername, $leEmail, $lePassword, $avatarURL){
      $this -> username = $leUsername;
      $this -> email = $leEmail;
      $this -> password = $lePassword;
      $this -> avatarURL = $avatarURL;
    }

  //1.2. Deux méthodes: 
  
  //disBonjour(): (Affiche le username)
  function disBonjour(){
    echo '<p>' . $this->username . '</p>';
  }

  //changeUsername(newUsername): (Permet de modifier le username)
  function changeUsername($newUsername){
    $this -> username = $newUsername;
  }

  //Les Getters: pour lire la valeur
  function getUsername(){
    return $this -> username;
  }

  function getEmail(){
    return $this -> email;
  }

  function getAvatarURL(){
    return "https://www.djemai-samy.com".$this -> avatarURL;
  }

  //Setters: pour modifier la valeur
  function setUsername($nouvelUsername){
    $this -> username = $nouvelUsername;
  }

  function setEmail($nouvelEmail){
    $this -> email = $nouvelEmail;
  }

  function setAvatarUrl($nouvelURL){
    $this -> avatarURL = $nouvelURL;
  }

  static function afficheUsers($usersTab){
    echo '<h2>Liste des utilisateur</h2>';
    foreach($usersTab as $key => $user){
    echo "
    <div>
        <img src=" . $user -> getAvatarURL() . " style='width:100%; max-width:400px;' alt=''>
        <p>".$user -> getEmail() ."</p>
    </div>";
    }
  }
}