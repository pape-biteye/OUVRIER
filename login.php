<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ouvrier_style.css" style="text/css">
    <title>Location car...</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="formulaire">
            <h1>Connection</h1>
            <label><b>Nom d'utilisateur :</b></label>
            <input type="text" placeholder="Entre le nom d'utilisateur" name="txtlogin" riquired class="zonetext">

            <label><b>Mot de passe :</b></label>
            <input type="password" placeholder="Entre le mot de passe" name="txtpw" riquired class="zonetext">

            <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">

            <?php
            if(isset($_POST['btlogin']))
            {
                $req="select * from service where login='".$_POST['txtlogin']."' and motPasse='".$_POST['txtpw']."'";
                if($resultat=mysqli_query($cnouvrier,$req))
                {
                    $ligne=mysqli_fetch_assoc($resultat);
                    if($ligne!=0){
                        session_start();
                        $_SESSION['monlogin']=$_POST['txtlogin'];
                        header("location:service.php");
                    }
                    else{
                        echo "<font color='#F0001D'>Login ou mot de passe invalide</font>";
                    }
                }
            }

            ?>
        </form>
    </div>
</body>
</html>