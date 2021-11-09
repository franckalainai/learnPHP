<?php
class Personnage{
    private $nom;
    private $vie = 100;
    private $atk = 20;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 200;
        }else{
            $this->vie = $this->vie + $vie;
        }
        
    }

    private function empacher_negatif(){
        if($this->vie <0){
            $this->vie = 0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empacher_negatif();
    }
}