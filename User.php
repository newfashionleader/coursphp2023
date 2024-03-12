<?php

class User{
    private int $idUser;
    private string $firstname;
    private string $lastname;
    private DateTime $dateOfBirth;
    private string $gender;
    private string $city;
    private float $weightKg;
    private array $listeArticles= [];

    public function __construct(int $id, string $prenom, string $nom, DateTime $dateDeNaiss, string $genre, string $ville, float $poids){
        $this->idUser = $id;
        $this->firstname = $prenom;
        $this->lastname = $nom;
        $this->dateOfBirth = $dateDeNaiss;
        $this->gender = $genre;
        $this->city = $ville;
        $this->weightKg = $poids;
    }

    public function getIdUser(): int{
        return $this->idUser;
    }
    public function getFirstname(): string{
        return $this->firstname;
    }
    public function getLastname(): string{
        return $this->lastname;
    }
    public function getDateOfBirth(): DateTime{
        return $this->dateOfBirth;
    }
    public function getGender(): string{
        return $this->gender;
    }
    public function getCity(): string{
        return $this->city;
    }
    public function getWeightKg(): float{
        return $this->weightKg;
    }
    public function getListeArticles(): array{
        return $this->listeArticles;
    }

    public function setFirstname(string $unFirstname): void{
        $this->firstname = $unFirstname;
    }
    public function setLastname(string $unLastname): void{
        $this->lastname = $unLastname;
    }
    public function setDateOfBirth(DateTime $unDateOfBirth): void{
        $this->dateOfBirth = $unDateOfBirth;
    }
    public function setGender(string $unGender): void{
        $this->gender = $unGender;
    }
    public function setCity(string $unCity): void{
        $this->city = $unCity;
    }
    public function setWeightKg(float $unWeightKg): void{
        $this->weightKg = $unWeightKg;
    }
    //attention version basique
    public function setListeArticles(array $unListeArticles): void{
        $this->listeArticles = $unListeArticles;
    }

    public function __toString(): string 
    {
        $date = $this->dateOfBirth->format('d/m/Y');
        return "Id : ".$this->idUser . "<br>Prénom : ".$this->firstname . "<br>Nom : ".$this->lastname . "<br>Date de Naissance : ".$date . "<br>Genre : ".$this->gender ."<br>Ville : ".$this->city . "<br>Poids : ".$this->weightKg . " Kg<br>Nombre d'articles écrit : ". sizeof($this->listeArticles). "<br><br>";
    }

    public function creerArticle(int $id, string $nom, string $descr): Article {
        $date = new DateTime();
        $article = new Article($id,$nom,$descr,$date,$this);
        $this->listeArticles[]= $article;
        return $article;
    }

    public function afficheNomArticle(): void{
        if(!empty($this->listeArticles)){
            foreach($this->listeArticles as $article){
                echo "Nom article : " .$article->getArticleName() . "<br>";
            }
        }else{
            echo "Vous n'avez pas créer d'article<br>";
        }
    }
    

    
}