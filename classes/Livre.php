

<?php

class Livre{
    
    private string $titre;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;

    private Auteur $auteur;
    
    public function __construct(string $titre, int $nbPages,
     int $anneeParution, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
     }

     
    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    public function getAnnéeParution(): int
    {
        return $this->anneeParution;
    }

    public function setAnnéeParution(int $anneeParution)
    {
        $this->anneeParution = $anneeParution;

        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }
       
    public function getAuteur()
    {
       return $this->auteur;
    }
    
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        
        return $this;
    }


    public function getInfos()
    {
        return $this. $this->nbPages. $this->anneeParution . $this->prix . $this->auteur;
    }
    
    public function __toString(){
        return $this->titre;
    }
    
}

/* TEST DONNEES
$l1 = new Livre("Ca", "1138", 1986, 20, "auteur");

echo $l1->getInfos();*/