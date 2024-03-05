<?php

class Auteur {
    private string $nom;
    private string $prénom;

    public function __construct(string $nom, string $prénom){
        $this->nom = $nom;
        $this->prénom = $prénom;
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

    public function getInfos(){
        return $this->prénom. $this->nom;
    }
}
