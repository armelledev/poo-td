<?php
class Utilisateur
{

    public function __construct(
        public readonly string $nom,
        public readonly int $age,
        public readonly string $email,
    ){}

    public function afficher(): void
    {
        echo "{$this->nom}, {$this->age} ans, {$this->email}";

    }
    public function envoyerEmail(string $message): void
    {
        echo "\n\n Email envoye a {$this->email} : {$message}";
    }
} 
   $eva = new Utilisateur( 
    nom: "eva",
    age: 25,
    email: "eva@example.com"
    
   );
   $eva->afficher();
   $eva->envoyerEmail(message: "bonjour eva");



?>