<?php Require_once ('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ouvrier_style.css" style="text/css">
</head>
<body>
    <div id="entete">
        <a href="login.php" class="login">Login</a>
        <!-- <video autoplay="autoplay" class="video_entete">
            <source src="image/ouvrier.mp4" type="video/mp4" />
        </video> -->
        <img src="image/kane.jpg" alt="" class="video_entete">
        <p class="nomsite">Application de recherche d'ouvrier facilement<p>
            <div id="formauto">
                <form name="formauto" method="post" action="">
                    <input id="motcle" type="text" name="motcle" placeholder=" Recherche par metier..." />
                    <input class="btfind" type="submit" name="btsubmit" value=" Recherche" />
            </div>
    </div>
    <div id="articles">
        <?php
        if(isset($_POST['btsubmit'])){
            $mc=$_POST['motcle'];
            $reqSelect="select * from utilisateur where METIER like '%$mc%'";

        }
        else{
            $reqSelect="select * from utilisateur";
        }
        $resultat=mysqli_query($cnouvrier,$reqSelect);
        $nbr=mysqli_num_rows($resultat);
        echo "<p><b>" .$nbr. " </b> Resultat de votre recherche...</p>";
        while($ligne=mysqli_fetch_assoc($resultat))
        {
        ?>
        <div id="auto">
            <img src="<?php echo $ligne['Photo'] ?>" /><br/>
            <?php echo $ligne['Imm'] ?>
            <?php echo $ligne['Metier']; ?>
            <?php echo $ligne['Prenom']; ?>
            <?php echo $ligne['Nom']; ?>
            <?php echo $ligne['Region']; ?>
            <?php echo $ligne['Telephone']; ?>
        </div>
        <?php } ?>
    </div>
</body>
</html>