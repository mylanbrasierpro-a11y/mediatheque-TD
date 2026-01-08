    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8','root');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="inscription.php">inscrivez-vous</a>
    <a href="connexion.php">connectez-vous</a>
    <a href="addmovie.php">ajouter un film</a>

    <?php 
    $request = $bdd->prepare('SELECT titre,duree FROM film ');
    $request->execute(array());
    while($data = $request->fetch()){
        echo $data['titre'].' '. $data['duree'] . '</p>';
    }
    ?>
        <a href="movielist.php">Liste des films</a>
</body>
</html>