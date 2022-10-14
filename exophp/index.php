<!-- CREATE DATABASE exophp 
    CREATE TABLE user03 (
    ID INT PRIMARY KEY NOT NULL,
    Name VARCHAR (255),
    Heigth INT (3),
    birthDate DATE
    ); -->

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

    <h1>Exercice php</h1>

    <form action="form.php" method="POST">

     <label for="firstName">Votre nom</label><br>
    <input type="text" placeholder="nom" name="firstName"><br>
   
    <label for="lastName">Votre prénom</label><br>
    <input type="text" placeholder="prenom" name="lastName"><br>

    <label for="Size">Votre taille</label><br>
    <input type="text" placeholder="taille (en cm)" name="Size"><br>

    <label for="Age">Votre age</label><br>
    <input type="text" placeholder="age" name="Age">

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