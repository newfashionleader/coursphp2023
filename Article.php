<?php
class Article{
    private int $idArticle;
    private string $articleName;
    private string $description;
    private DateTime $creationDate;
    private User $user;

    public function __construct(int $idArticle, string $articleName, string $description, DateTime $creationDate, User $user){
        $this->idArticle = $idArticle;
        $this->articleName = $articleName;
        $this->description = $description;
        $this->creationDate = $creationDate;
        $this->user = $user;
    }

    public function getIdArticle(): int{
        return $this->idArticle;
    }
    public function getArticleName(): string{
        return $this->articleName;
    }
    public function getDescription(): string{
        return $this->description;
    }
    public function getCreationDate(): DateTime{
        return $this->creationDate;
    }
    public function getUser(): User{
        return $this->user;
    }

    public function setArticleName(string $unArticleName): void{
        $this->articleName = $unArticleName;
    }
    public function setDescription(string $uneDescription): void{
        $this->description = $uneDescription;
    }
    public function setCreationDate(DateTime $uneCreationDate): void{
        $this->creationDate = $uneCreationDate;
    }
    public function setUser(User $unUser): void{
        $this->user = $unUser;
    }

    public function __toString(): string 
    {
        $date = $this->creationDate->format('d/m/Y');
        return "Id : ".$this->idArticle . "<br>Nom de l'article : ".$this->articleName . "<br>Descritpion : ".$this->description . "<br>Date de publication : ".$date . "<br>Auteur : ".$this->user->getFirstname() ." ". $this->user->getLastname() ."<br><br>";
    }
}