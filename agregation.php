<?php
 declare(strict_types=1);
  
 class Vehicule{

    public function __construct(
        protected string $marque,
        protected int $VitesseMax
    ){
        echo "Creation d'un vehicule{$this->marque}\n";
    }
    
    public function denarrer():void{
        echo "le vehicule demarre.\n";
    }
 }
    class Voiture extends Vehicule{
        public function __construct(
            string $marque,
            int $VitesseMax,
            private int $nombrePortes
        ){
            parent::__construct($marque,$VitesseMax);
            echo "c'est une voiture a {$this->nombrePortes}portes.\n";
        }
        public function demarrer():void{
            parent::demarrerr();
            echo "contact,cle tournee moteur lance!\n";
        }
        public function ouvrirCoffre(): void{
            echo "coffre ouvert!\n";
        }
    }

      $Voiture = new Voiture("peugeot", 180,5);
       $Voiture->demarrer();
        $Voiture->ouvrirCoffre;



?>