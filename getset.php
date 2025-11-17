<?php
 declare(strict_types=1);

 class personne{
    private string $nom;
    private int $age;  

    public function getNom(): string
 {
        return $this->nom;
 }
    public function setNom(string $nom): void{
    if(strlen($nom < 2)){
        throw new InvalidArgumentException( "le nom doit contenir au moins 2 caractere");
    }
}
    public function setAge(int $age): int{
         {
        return $this->age;
 }

        if($age <0 || $age > 150){
     throw new InvalidArgumentException( "age invalide");
        }
        $this->age =$age;
    }
}

     $personne = new Personne();
 $personne = setNom(nom: "eva");
 $personne = setAge(age: 25);


 echo $personne->getNom();
 echo $personne->getAge();
 
 


?>

