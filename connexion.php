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
    <form id="auth2" action="connexion.php" method='POST'>
        <label id="nom">Votre nom</label>
        <input type="text" name="nom" id="nom">
        <label id="password">Votre mot de passe</label>
        <input type="password" name="password" id="password">
        <button>Valider</button>
    </form>
        <?php 
             if(isset($_POST['nom']) && isset($_POST['password'])){
            $entryUser = htmlspecialchars($_POST['nom']);
            $entryPassword = htmlspecialchars($_POST['password']);

            if(($entryUser == $user) && (password_verify($entryPassword,$passwordArgon))){
            header('location:bienvenue.php?auth=1');
            }else{
                echo "<p>Mot de passe ou nom d'utilisateur incorrect<p>";
                }
            }
        ?>
</body>
</html>