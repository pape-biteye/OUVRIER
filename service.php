<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ouvrier_style.css" style="text/css">
    <title>Document</title>
    <style>
        .myphoto {
            width:50px;height: 50px;border-radius: 50px;border: 1px solid;
        }
    </style>
</head>
<body>
    <div id="globale">
            <a href="deconnecter.php">Deconnection</a>
        <div id="tableaubord">
        <?php include("tableaubord.php") ?>
        </div>
    </div>
</body>
</html>