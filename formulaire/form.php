<?php 

$pdo = new PDO('mysql:host=localhost; dbname=form_bdd', 'root', 'admin');

if( !empty($_POST['lastName']) && !empty($_POST['firstName']))
{
    try {    
    $sql = $pdo -> prepare("INSERT INTO user (lastName, firstName) VALUES (:lastName, :firstName)");
    $sql ->bindParam(':lastName', $_POST['lastName']);
    $sql ->bindParam(':firstName', $_POST['firstName']);
    $sql ->execute();
    } catch (PDOException $e)
{
    echo "Problème(s) trouvés : " . $e->getMessage();
}
}
else
{
    echo "Veuillez compléter le formulaire correctement.";
    exit;
}

header("location: index.php");
?>