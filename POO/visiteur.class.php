<?php

//creation d'une class
class Visiteur 
{
    //propriete de la classe
    private $prenom;
    public $nom;

    //methode de la classe
    //setters
    public function set_prenom($nouveau_prenom)
    {
        $this -> prenom = $nouveau_prenom;
    }

    public function set_nom($nouveau_nom)
    {
        $this -> nom = $nouveau_nom;
    }

    //getters
    public function get_prenom()
    {
        return $this-> prenom;
    }

    public function get_nom()
    {
        return $this-> nom;
    }
}

?>