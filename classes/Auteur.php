<?php

class Auteur {
    private string $nom;
    private string $prénom;
    private array $livres;
    
    public function __construct(string $nom, string $prénom){
        $this->nom = $nom;
        $this->prénom = $prénom;
        $this->livres = [];
    }
  
    public function getNom()
    {
        return $this->nom;
    }

   
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrénom()
    {
        return $this->prénom;
    }

    public function setPrénom($prénom)
    {
        $this->prénom = $prénom;

        return $this;
    }

    
    public function getLivres()
    {
        return $this->livres;
    }
    
    
    public function setLivres($livres)
    {
        $this->livres = $livres;
        
        return $this;
    }
    public function getInfos(){
        return $this->nom. $this->prénom;
    }
    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }
    public function afficherLivres(){
        foreach($this->livres as $livre){
    $result = $livre->getTitre. ($livre->getAnnéeParution)
     .":". $livre->getNbPages. "pages/". $livre->getPrix. " €<br>";
        }
        return $result;
    }
        }
    

