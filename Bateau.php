<?php
class Bateau
{
    private string $nom;
    private string $marque;
    private float $vitesseMax;
    private int $capacite;
    private bool $enMouvement;
    private bool $aLArret;

    //Constructeur 
    public function __construct(string $unNom, string $uneMarque, int $uneCapacite, float $uneVitesseMax)
    {   //Atribus/propriétés
        $this->capacite = $uneCapacite;
        $this->vitesseMax = $uneVitesseMax;
        $this->marque = $uneMarque;
        $this->nom = $unNom;
        //ici on initatialise avec des valeurs par defaut
        $this->enMouvement = false;
        $this->aLArret = true;
    }

    //les Getters
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getMarque(): string
    {
        return $this->marque;
    }
    public function getVitesseMax(): float
    {
        return $this->vitesseMax;
    }
    public function getCapacite(): int
    {
        return $this->capacite;
    }
    public function getEnMouvement(): bool
    {
        return $this->enMouvement;
    }
    public function getALArret(): bool
    {
        return $this->aLArret;
    }


    //Les Setters
    public function setNom(string $unNom): void
    {
        $this->nom = $unNom;
    }
    public function setMarque(string $uneMarque): void
    {
        $this->marque = $uneMarque;
    }
    public function setVitesseMax(float $uneVitesseMax): void
    {
        $this->vitesseMax = $uneVitesseMax;
    }
    public function setCapacite(int $uneCapacite): void
    {
        $this->capacite = $uneCapacite;
    }
    public function setEnMouvement(bool $enMouvement): void
    {
        $this->enMouvement = $enMouvement;
    }
    public function setALArret(bool $aLArret): void
    {
        $this->aLArret = $aLArret;
    }

    //Méthode propre à la classe 
    public function demarrer(): void
    {
        if($this->enMouvement){
            echo "Le bateau a déjà démarré, il est en mouvement<br>";
        }else{
            echo 'Le bateau demarre<br>';
            $this->enMouvement = true;
            $this->aLArret = false;
        //équivalent en utilisant les méthodes
        // $this->setEnMouvement(true);
        // $this->setALArret(false);
        }

        //version inverse
        // if(!$this->enMouvement){
        //     echo 'Le bateau demarre';
        //     $this->enMouvement = true;
        //     $this->aLArret = false;
        // }else{
        //     echo "Le bateau a déjà démarré, il est en mouvement";
        // //équivalent en utilisant les méthodes
        // // $this->setEnMouvement(true);
        // // $this->setALArret(false);
        // }  
    }

    public function arreter(): void
    {
        if ($this->aLArret) {
            echo "Le bateau n'est pas en mouvement<br>";
            $this->enMouvement = false;
        } else {
            $this->enMouvement = false;
            $this->aLArret = true;
            echo "Le bateau s'arrête<br>";
        }
    }

    public function amarrer(): string
    {
        if ($this->aLArret) :
            return 'Vous êtes à l’arrêt et vous pouvez amarrer<br>';
        endif;
        return 'Vous êtes en mouvement et ne pouvez pas amarrer<br>';
    }

    public function __toString(): string
    {
        return "Nom : " . $this->nom . "<br>" .
            "Marque : " . $this->marque . "<br>" .
            "Capacité : " . $this->capacite . " de places<br>" .
            "Vitesse Max : " . $this->vitesseMax . " Km/h<br>" .
            "En mouvement ? : " . ($this->enMouvement ? "Oui" : "Non") . "<br>" .
            "A l'Arrêt ? : " . ($this->aLArret ? "Oui" : "Non") . "<br><br>";
    }
}
