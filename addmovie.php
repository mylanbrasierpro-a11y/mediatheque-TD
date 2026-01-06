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
    <form action="addmovie.php" method='POST'>
    <label for="titre">Titre:</label>
    <input type="text" name='titre' id="titre">
    <label for="realisateur">Votre realisateur:</label>
    <input type="text" name='realisateur' id="realisateur">
    <label for="genre">Genre:</label>
    <input type="text" name='genre' id="genre">
    <label for="duree">Durée:</label>
    <input type="text" name='duree' id="duree">
    <label for="synopsis">synopsis:</label>
    <input type="text" name='synopsis' id="synopsis">
    <button>Valider</button>
    </form> 
    <?php
    if(isset($_POST['titre']) AND isset($_POST['realisateur']) AND isset($_POST['genre']) AND isset($_POST['duree']) AND isset($_POST['synopsis'])) {
            $titre = htmlspecialchars($_POST['titre']);
            $realisateur = htmlspecialchars($_POST['realisateur']);
            $genre = htmlspecialchars($_POST['genre'],);
            $duree = htmlspecialchars($_POST['duree']);
            $synopsis = htmlspecialchars($_POST['synopsis']);



            $adding = $bdd->prepare('INSERT INTO film (titre, realisateur, genre, duree, synopsis) VALUES (?,?,?,?,?)');
            $adding->execute([$titre , $realisateur , $genre , $duree , $synopsis]);
        } 
    ?>
</body>
</html>