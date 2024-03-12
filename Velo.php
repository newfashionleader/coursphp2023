<?php
class Velo
{
    private string $nom;
    private string $marque;
    private string $pays;
    private float $vitesseMax;
    private bool $connecte;

    //Constructeur
    public function __construct(string $unNom, string $uneMarque, string $unPays, float $uneVitesseMax, bool $connecte)
    {   //Atribus/propriétés
        $this->nom = $unNom;
        $this->pays = $unPays;
        $this->vitesseMax = $uneVitesseMax;
        $this->marque = $uneMarque;
        $this->connecte = $connecte;
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
    public function getPays(): string
    {
        return $this->pays;
    }
    public function getVitesseMax(): float
    {
        return $this->vitesseMax;
    }
    public function getConnecte(): bool
    {
        return $this->connecte;
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
    public function setPays(string $unPays): void
    {
        $this->pays = $unPays;
    }
    public function setVitesseMax(float $uneVitesseMax): void
    {
        $this->vitesseMax = $uneVitesseMax;
    }
    public function setConnecte(bool $connecte): void
    {
        $this->connecte = $connecte;
    }

    //méthode propre à la classe 
    public function faireWheeling(): void
    {
        echo "Le vélo fait un wheeling.<br>";
    }

    public function __toString(): string
    {

        return "Nom : " . $this->nom . "<br>" .
            "Marque : " . $this->marque . "<br>" .
            "Pays : " . $this->pays . "<br>" .
            "Vitesse Max : " . $this->vitesseMax . " Km/h<br>" .
            "Connectée ? : " . ($this->connecte ? "Oui" : "Non") . "<br><br>";
    }
}
