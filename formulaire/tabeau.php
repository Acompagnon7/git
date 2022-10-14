<?php include('bdd.php') ?>

<!DOCTYPE html>
<html lang="en">
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
            <th colspan ="3">Utilisateurs</th>
        </tr>
    </thead>
    <tbody>
        <?php $tab = $pdo->query("SELECT * FROM user");
        //var_dump($tab->fetchAll());

        while($row = $tab->fetch()){
            echo
            '<tr>'
                .'<td>'. $row['id'].'</td>'
                .'<td>'. $row['lastName'].'</td>'
                .'<td>'. $row['firstName'].'</td>'
            .'</tr>';
        }


        ?>
    </tbody>
    </table>
</body>
</html>