<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inscription.php" method='POST'>
        <label for="prenom">Votre prenom:</label>
        <input type="text" name='prenom' id="prenom">
        <label for="transport">Votre nom:</label>
        <input type="text" name='nom' id="nom">
        <label for="password">mots de passe :</label>
        <input type="text" name='password' id="password">
        <input type="submit" value="Validez">
    </form> 

        <?php 
        if(isset($_POST['nom']) && isset($_POST['prenom'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $password = password_hash($_POST['password'] , PASSWORD_ARGON2I);

            $adding = $bdd->prepare('INSERT INTO user (nom, prenom, password) VALUES (?,?,?)');
            $adding->execute([$nom, $prenom, $password]);
        }
        ?>
</body>
</html>