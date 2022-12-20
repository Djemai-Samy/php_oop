<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
  </head>
  <body>
    <h1>PHP OOP</h1>

    <?php
    //1. Créer une classe basique
      class Djemai{
        //Les propriétes
        public $prenom = "Samy";
        public $age = 0;

        //les méthodes
        function disSalut(){
          //this represente la reference a l'objet sur lequel la fonction est executée
          echo "<p>salut je suis" . $this->prenom . "!</p>";
        }
      }

      //2. Instancier un objet de la classe Djemai
      //On dit que cet objet est de type Djemai
      $djemai1 = new Djemai();
      
      //djemai1 et djemai2 sont deux instances différentes du meme type: Djemai
      $djemai2 = new Djemai();
      
      //Lire les proprietes et méthodes d'un objet
      echo $djemai1->prenom;
      echo ' '.$djemai1->age;
      $djemai1->disSalut();
      $djemai2->disSalut();
      var_dump($djemai1 === $djemai2);
    ?>

    <div>
      <h2>Les classe avec constructeur</h2>
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
        }

        $personne1 = new Personne("Djemai", "Samy");
        $personne1 -> disBonjour();
        
        $personne2 = new Personne("Doe", "John");
        $personne2 -> disBonjour();   

        // Exercice:
        //1. Créer une classe 'User' avec constructeur qui possede:
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
        
      }
      
      //2. Instancier deux objets de type User
       $user1 = new User("Sam", "sam.djm93@gmail.com", "123456", "/Hero/Image_samy_djemai.svg");
       var_dump($user1);
     
       $user2 = new User("John", "john@doe.com", "azerty","/Hero/Image_samy_djemai.svg");
       var_dump($user2);

      //3. Afficher l'email des deux instances
      echo '<p>' . $user1 -> getEmail() . '</p>';
      echo '<p>' . $user2 -> getEmail() . '</p>';

      //4. executer la méthode changeUsername() sur les deux instances
      $user1 -> changeUsername("Sams");
      var_dump($user1);

      //5. executer la méthode disBonjour() sur les deux instances.
      $user1 -> disBonjour();
      $user2 -> disBonjour();

      //Exercice:
      //Dans la classe User.
      //1. Modifier le scope des props pour etre en private
      //2. Ajouter 3 getters et 3 setters: (username, email, avatarURL).
      ?>
    </div>

  </body>
</html>
<script>

  function add(a, b){
    return a + b;
  }

  console.log(add(1 ,2));
  console.log(add(5 ,7));
    
 
</script>