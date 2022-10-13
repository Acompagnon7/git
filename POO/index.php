<?php

spl_autoload_register(function($class){
    include $class .".php";

});

//création d'objet
$voiture = new Voiture();

$voiture -> setNbrRoue(9);

$voiture->carburantType = "Essence"; //ATTENTION NE JAMAIS FAIRE CA, C'EST LE MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAL

$personne = new Personne("John Doe", 170, 45);
$personneDeux = new Personne("Eric Gris", 180, 65 );
$personneTrois = new Personne("Alice", 164, 25 );

$personne -> setName("Marcie Jones");

$personneDeux -> setname("Rick Astley");

$rectangle = new Rectangle(5, 8);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POO</title>
</head>
<body>
    <h1 class= "color">POO: Programmation orienté objet</h1>
    <h2><?php echo $voiture->carburantType ?></h2>
    <!-- <h2><?php // echo $voiture->nbrRoue ?></h2> Ne peut pas l'afficher car c'est en priver-->
    <h2><?php echo $voiture->information(); ?></h2>
    <h2><?php echo $voiture->getNbrRoue(); ?></h2>
    <h1 class="color">Exercice php POO</h1>
    <h2><?php echo $personne->thisGuy(); ?></h2>
    <h2><?php echo $personne->getName(); ?></h2>
    <h2><?php echo $personneDeux->thisGuy(); ?></h2>
    <h2><?php echo $personneTrois->thisGuy(); ?></h2>
    <h1 class="color">Exercice Rectangle</h1>
    <h2><?php echo $rectangle->getPerimetre(); ?> cm</h2>
    <h2><?php echo $rectangle->getSurface(); ?> cm²</h2>
</body>
</html>