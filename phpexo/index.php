<?php 

function toUpper($nom, $i) {
    if($i >= strlen($nom))
    {
        $i = strlen($nom) - 1;
    }
        echo $nom[$i] = strtoupper($nom[$i]);
  }

  toUpper("truc", 0);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo php</title>
</head>
<body>
    
    <h1>Exercice php</h1>
    <p>Avec l'aide de la documentation de php, faire fonction php qui prends comme argument une string et un index et qui permet de retourner cette string avec une majuscule avec l'index choisit. Si l'index est supérieur à la valeur de la string la fonction prendra la derniere lettre.</p>
    <p></p>
</body>
</html>

<!-- function upperChar($string, $index)
    upperChar('hello', 2) => 'heLlo' -->