<?php

class Utilisateur{
    private string $nom;
    private string $email;

    public function __construct($nom , $email) {
        $this->nom->$nom;
        $this->email->$email;
    }

    public function getnom($nom) {
        return $this->$nom; 
    }

    public function getemail($email) {
        return $this->$email; 
    }

    public function setnom($nom){
        $this nom=$nom;
    }

    public function setemail($email) {
        $this email=$email;
    }

    public function affichierDetails {
        return
        'nom' = $this->$nom;
        'email' = $this->$email;
    }

}

class Auteur extends Utilisateur {
    private string $biographie;

    public function __construct($nom , $email , $biographie) {}

    public function getbiographie {
        return $this->$biographie; 
    }

    public function setbiographie {
        biographie->$biographie;
    }

    public function affichierAuteur {
        return
        'nom' = $this->$nom;
        'email' = $this->$email;
        'biographie' = $this->$biographie;
    }
}

class administrateur extends Utilisateur {
    private string $role;

    public function _contruct($role){
        $this->role->$role;
    }

    public function getrole($role) {
        return $this->$role; 
    }

    public function setrole($role){
        $this role=$role;
    }

    public function supprimerArticle {
        foreach ($this -> Article){
            if(setId($titre) == $titre){
                
            }
        }
    }
}

class Article {
    private string $titre;
    private string $contenu;
    private date $datePublication;
    private Auteur $auteur;

    public function __construct($titre , $contenu , $datePublication , $auteur) {
        $this->titre->$titre;
        $this->contenu->$contenu;
        $this->datePublication->$datePublication;
        $this->auteur->$auteur;
    }

    public function affichierArticle{
        return 
        'titre' = $this->$titre;
        'contenu' = $this->$contenu;
        'datePublication' = $this->$datePublication;
        'auteur' = $this->$auteur;
    }
}

?>