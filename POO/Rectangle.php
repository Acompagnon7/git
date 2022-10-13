<?php 
class Rectangle
{
    private $largeur = 5;
    private $longueur = 8;

    public function __construct($largeur, $longueur){

        $this -> largeur = $largeur;

        $this -> longueur = $longueur;

    }

    public function getPerimetre(){
    
    	$calc = ( $this-> longueur + $this-> largeur) * 2;
      return $calc;
    }
    
    public function getSurface() {
    
    	$calc = $this->longueur * $this->largeur;
      return $calc;
    }

    


}
?>

<!-- fonction qui retourne la surface et le périmètre -->