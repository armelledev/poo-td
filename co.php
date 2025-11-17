<?php
declare(strict_types=1);

class Moteur{

    public function __construct(

        private string $type,
        private int $puissance,
        private int $cylindree,
    ){}

    public function demarrer(): void{
        echo "Moteur {$this->type} ({$this->cylindree}cc, {$this->puissance}ch:Vroum!\n";
    }

    public function afficherCaracteristique(): void{
        echo " -Type :{$this->type}\n";
        echo " -Puissance :{$this->puissance}ch\n";
        echo " -cylindree :{$this->cylindree}cc\n";
    }
}

   class Voiture{
     private Moteur $moteur;
     
     public function __construct(
        private string $Marque,
        private string $Modele,
        string $typeMoteur,
        int $puissance,
        int $cylindree
     ){
        $this->moteur = new Moteur($typeMoteur,$puissance, $cylindree);

     }
     public function demarrer(): void{
        echo "{$this->Marque} {$this->Modele} demarrer\n";
        $this->moteur->demarrer();
     }
     public function afficherDetails(): void{
        echo "\n-------------------------\n";
        echo "{$this->Marque} {$this->Modele}\n";
        echo "caracteristics du moteur\n";
        $this->moteur->afficherCaracteristique();
     }
   }

   $voiture=new Voiture("BMW", "M3", "V6 Essence", 510,2993);
     $voiture->demarrer();
     $voiture->afficherDetails();
?>