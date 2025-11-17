<?php
declare(strict_types=1);

class utilisateur{
    private string $nom;
    private int $age;
    private string $email;

    public function __construct(string $nom ,int $age ,string $email){
    $this->nom = $nom;
    $this->age = $age;
    $this->email = $email;
    }
    public function afficher(){
        echo "{$this->nom}, {$this->age} {$this->email}";


    }
        public function envoyerEmail(string $message){

        }
    }

    $eva = new Utilisateur("eva" , 25, "eva@example.com");
    $eva->afficher();
    $eva->envoyerEmail(message: "bonjour");

?>