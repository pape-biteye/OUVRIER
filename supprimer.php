<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ouvrier_style.css" style="text/css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form name="formdelete" class="formulaire">
        <p><a href="service.php" class="submit">Tableau de bord</a></p>
    <?php
    if(isset($_GET['supprimer1utilisateur']))
    {
        $supprimer1=$_GET['supprimer1utilisateur'];
        $reqDelete="DELETE FROM utilisateur WHERE IMM='$supprimer1'";
        $resultat=mysqli_query($cnouvrier,$reqDelete);

        if($resultat)
        {
            echo "La suppression a ete bien effectuer....";
        }else
        {
            echo "La suppression a echouer....";
        }

    }

   
    
    ?>
    </div>
</body>
</html>