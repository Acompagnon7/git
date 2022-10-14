<?php include('bdd.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tableau</title>
</head>
<body>
    <h1>Exercice tableau</h1>
    <table class="table">
    <thead>
        <tr>
            <th colspan ="4">Utilisateurs</th>
        </tr>
    </thead>
    <tbody>
        <?php $tab = $pdo->query("SELECT * FROM user03");
        //var_dump($tab->fetchAll());

        while($row = $tab->fetch()){
            echo
            '<tr>'
                .'<td>'. $row['ID'].'</td>'
                .'<td>'. $row['Name'].'</td>'
                .'<td>'. $row['Size'].'</td>'
                .'<td>'. $row['Age'].'</td>'
            .'</tr>';
        }


        ?>
    </tbody>
    </table>
</body>
</html>