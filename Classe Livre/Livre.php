

<?php

class Livre{
    
    private string $titre;
    private string $nbPages;
    private int $annéeParution;
    private int $prix;

    private string $auteur;

    public function __construct(string $titre, string $nbPages,
     int $annéeParution, int $prix, string $auteur){
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->annéeParution = $annéeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
     }

     
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }


    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    public function getAnnéeParution()
    {
        return $this->annéeParution;
    }


    public function setAnnéeParution($annéeParution)
    {
        $this->annéeParution = $annéeParution;

        return $this;
    }

 
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
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
        return $this->titre. $this->nbPages. $this->annéeParution . $this->prix . $this->auteur;
    }
}

$l1 = new Livre("Ca", "1138", 1986, 20, "auteur");

echo $l1->getInfos();