<?php
  include_once "./classes/Personne.php";
  include_once "./classes/User.php";
  include_once "./classes/Formes.php";
  include_once "./classes/Animaux.php";
?>

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
        Personne::whoAreYou();

        $personne1 = new Personne("Djemai", "Samy");
        $personne1 -> disBonjour();
        $personne1 -> whoAreYou();

        $personne2 = new Personne("Doe", "John");
        $personne2 -> disBonjour();   

        Personne::affichePersonnes([$personne1, $personne2]);

        // Exercice:
        //1. Créer une classe 'User' avec constructeur qui possede:


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
      
      //Exercice 2:
      //Implémenter une fonction statique dans la classe User:
      // function afficherUsers([User]): void
      //1. La fonction prend en paramètre un tableau d'objets de type 'User'.
      //2. Utiliser une boucle pour afficher l'email, et avatar de chaque objet.
      User::afficheUsers([
          $user1, 
          $user2, 
          new User('Harry',"Harry@Potter.com","potter123", "/Hero/Image_samy_djemai.svg")
      ]);
      ?>
    </div>

    <div>
      <h2>L'heritage</h2>
      <?php
        $rect1 = new Rectangle(10, 20);
        
        $rect1 -> setLargeur(20);

        echo '<p>Surface rect1 = '.$rect1 -> getSurface().'cm²</p>';

        $rect2 = new Rectangle(5, 2);

        if($rect1 -> isBigger($rect2)){
          echo "rect2 est plus grand!";
        }else{
          echo "rect1 est plus grand!";
        }

        $square1 = new Square(10);
        echo '<p>' . $square1 -> getSurface() . '</p>';

        $tri1 = new Triangle(1, 1, 1);
        echo '<p>' . $tri1 -> getSurface() . '</p>';
      ?>
    </div>

    <div>
      <?php
        $dog1 = new Dog("Snow", 7);
        $cat1 = new Cat("Felix", 2);
        $bird1 = new Bird("Titi", 1);
        $caniche1 = new Caniche("Toto", 1);

        $dog1->setNom("Scoobi") -> setAge(5);

        function afficheAnimals($anumauxTab){
          foreach($anumauxTab as $key => $val){
            $val -> sayHello();
          }
        }

        afficheAnimals([$dog1, $cat1, $bird1, $caniche1]);
        Dog::whoAreYou();
        
      ?>
    </div>

  </body>
</html>
<script>

 
</script>