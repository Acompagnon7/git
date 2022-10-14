<?php 

$pdo = new PDO('mysql:host=localhost; dbname=exophp', 'root', 'admin');

if( !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['Size']) && !empty($_POST['Age']))
{
    $fullName = $_POST['firstName']. ' ' . $_POST['lastName'];
    try {    
    $sql = $pdo -> prepare("INSERT INTO user03 (Name, Size, Age) VALUES (:Name, :Size, :Age)");
    $sql ->bindParam(':Name', $fullName );
    $sql ->bindParam(':Size', $_POST['Size']);
    $sql ->bindParam(':Age', $_POST['Age']);
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