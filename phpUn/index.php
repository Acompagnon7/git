
<?php

$bonjour = 'bonjour';

$nbrA = 400;

$nbrB = 83;

$variableNull = NULL;

$undefined;

if(!isset($undefined)){
    $undefined = 120;
}

if (empty($variableNull)){
    echo "Cette variable est vide";
} 
/* empty vérifie si la variable = 0 , 0.0, string, NULL, False, array() */

echo $undefined;

$fruits = ['pomme', 'fraise'];

$voiture = array('Dacia', 'Ford', 'Citroen');


$nbrC = $nbrA * $nbrB;

$array = [1, 2, 3, 1, 4, "string"];

$associativeArray = ["Jean-Marc" => 4, "Alphonse" => 6];

$associativeArray["Jean-Marc"] = "Kevin";

var_dump($array);

var_dump('coucou');

var_dump($associativeArray);

var_dump($variableNull);

var_dump($voiture);



$cacher = true;

for ($i = 0; $i < 50; $i++){
    echo $i . '<br>';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <h1>Je vous dis <?php echo $bonjour; ?></h1><br>
    <h2><?php echo $nbrA . ' * ' . $nbrB . ' = ' . $nbrC; ?></h2>
    <h2><?php echo $associativeArray["Jean-Marc"]?></h2>
    <h2><?php echo implode(',', $associativeArray) ?></h2>
    <h3><?php echo $nbrA == 4 ? "C'est un nombre 4" : "C'est pas un nombre 4." ;?></h3> <!-- IF ELSE condition ternaire -->
    <p class="<?php echo $cacher ? "cacher" : "" ;?>">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem dignissimos beatae minima at soluta in necessitatibus inventore, veritatis, veniam odit ut tempora doloremque, recusandae illum nulla? Fugiat, sapiente voluptatibus!</p>
    <?php 
    // superglobale
    var_dump($_SERVER); 
    var_dump($_SERVER['SERVER_ADDR']);
    var_dump($_FILES);
    var_dump($GLOBALS);
    var_dump($_SESSION);
    var_dump($_COOKIE);
    ?>
</body>
</html> 


