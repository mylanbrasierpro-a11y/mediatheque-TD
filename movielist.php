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
    <?php
        $request = $bdd->prepare('SELECT titre,duree FROM film ');
    $request->execute(array());
    while($data = $request->fetch()){
        echo $data['titre'].' '. $data['duree'] . '</p>';
    }
    ?>
</body>
</html>