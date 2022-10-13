<?php 

class Personne
{


    private $name = "John Doe";
    public $year = 20;
    public $heigth = 170;

    public function thisGuy(){

        echo "Cet homme s'appelle " . $this -> name . ", il est agé de  " . $this -> year ," ans et il fait " . $this -> heigth .  " cm";
    }

    public function getName()
    {
        return $this -> name;
    }

    public function setName($name)
    {
        $this -> name = $name;
    }    
        
        public function __construct($name, $heigth, $year){
        $this -> name = $name;
        $this -> heigth = $heigth;
        $this -> year = $year;
    }
}

?>

<!-- age, taille, nom
get/set
afficher sur l'index -->