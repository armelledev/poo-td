<!-- cree une classe vehicule avec les attribut marque, modele,annee puis
creez deux classe qui heritent de vehicule:voiture(ajoutez nombreportes)
et moto (ajoutrz typemoteur) implemantez une methode afficherDetails dans chaque clase -->

<?php

//declare(strict_types=1);

class Vehicule{

    public function __construct(

        private string $marque,
         private string $modele,
         private int $annee,
    ){}
   public function afficherDetails(){
    echo"vehicule :{$this->marque} {$this->modele} {$this->annee}";
   }
}
  class Voiture extends Vehicule{

      public function __construct(

        private string $marque,
         private string $modele,
         private int $annee,
         private int $nombrePortes,
    ){
        parent::__construct($marque, $modele, $annee);
    }
    public function afficherDetails(){
        echo"voiture : {$this->marque} {$this->modele} {$this->annee}"; 
        echo"{$this->nombrePortes}";
    }
  }

    class Moto extends Vehicule{
        public function __construct(
            private string $marque,
            private string $modele,
            private int $annee,
            private string $typeMoteur,
        ){
            parent::__construct($marque, $modele, $annee);
        }
           public function afficherDetails(){
            echo"moto :{$this->marque} {$this->modele} ({$this->annee})";
            echo"Moteur : {$this->typeMoteur}";
            
         }
    }


?>
