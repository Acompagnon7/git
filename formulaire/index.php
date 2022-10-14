<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire PHP</title>
</head>
<body>
    <div class="center">

    <h1>Formulaire en php</h1>

    <form action="form.php" method="POST">

     <label for="lastName">Votre nom</label><br>
    <input type="text" placeholder="nom" name="lastName"><br>
   
    <label for="firstName">Votre prénom</label><br>
    <input type="text" placeholder="prenom" name="firstName">

    <div class="center">

    <input type="submit" value="Valider">

    </div>
        <div>
            <h2>
                <a href= "tabeau.php">Vers le tableau</a>
            </h2>
        </div>
    </form>

    </div>

    
</body>
</html>

<!-- nom et prenom concaténer 2 inputs
transformer 170cm en 1m70 
taille et age -->