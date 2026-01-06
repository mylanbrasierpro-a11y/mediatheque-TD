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

    $request = $bdd->prepare('SELECT prenom,nom FROM user ');
    $request->execute(array());
    while($data = $request->fetch()){
        echo'<p>Bonjour ' . $data['prenom'] ." ". $data['nom']. '</p>';
    }
    ?>
    <form action="index.php" method='POST'>
        <label for="prenom">Votre prenom:</label>
        <input type="text" name='prenom' id="prenom">
        <label for="transport">Votre nom:</label>
        <input type="text" name='nom' id="nom">
        <input type="submit" value="Validez">
    </form> 
         <?php 
        
        if(isset($_POST['nom']) && isset($_POST['prenom'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);

            $adding = $bdd->prepare('INSERT INTO user (nom, prenom) VALUES (?,?)');
            $adding->execute([$nom, $prenom]);
        }
        ?>
    <a href="addmovie.php">ajouter un film</a>
</body>
</html>