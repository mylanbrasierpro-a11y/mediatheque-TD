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
        $id = htmlspecialchars($_GET['id']);
        $request = $bdd->prepare("SELECT synopsis FROM film WHERE id = :id ");
        $request->execute(array('id'=>$id));
        while($data = $request->fetch()){
            echo $data['synopsis'] . '</p>';
        }
    ?>
</body>
</html>