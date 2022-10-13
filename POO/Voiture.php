<?php class Voiture
{
    private $nbrRoue = 4;
    private $puissanceMoteur = 90;
    public $carburantType = "Diesel";

    public function information(){

        echo "C'est une voiture a " . $this -> nbrRoue . " roues, elle à un moteur de " . $this -> puissanceMoteur ," chevaux.";
    }
    //récupère la variable en public
    public function getNbrRoue()
    {
        return $this -> nbrRoue;
    }

    public function setNbrRoue($nbrRoue)
    {
        $this -> nbrRoue = $nbrRoue;
    }
} ?>