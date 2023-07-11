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
      <form name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">
        <h2 align="center">Ajouter nouvelle voiture...</h2>

        <label><b>Photo :</b></label>
        <input type="file" name="textPhoto" class="zonetext" placeholder="Choisir une image" required>

        <label><b>Immatriculation :</b></label>
        <input type="text" name="textImm" class="zonetext" placeholder="Entre Immatriculation" required>

        <label><b>Metier :</b></label>
        <input type="text" name="textMetier" class="zonetext" placeholder="Entre le Metier" required>

        <label><b>Prenom :</b></label>
        <input type="text" name="textPrenom" class="zonetext" placeholder="Entre le prenom" required>

        <label><b>Nom :</b></label>
        <input type="text" name="textNom" class="zonetext" placeholder="Entre le nom" required>

        <label><b>Region :</b></label>
        <input type="text" name="textRegion" class="zonetext" placeholder="Entre la region" required>

        <label><b>Telephone :</b></label>
        <input type="number" name="textTelephone" class="zonetext" placeholder="Entre le numero telephone" required>

        <input type="submit" name="btAdd" value="Ajouter" class="submit">

        <p><a href="service.php" class="submit">Tableau de bord</a></p>
        <label style="text-align: center; color: #960406">
        <?php
        if(isset($_POST['btAdd']))
        {
            $imm=$_POST['textImm'];
            $metier=$_POST['textMetier'];
            $prenom=$_POST['textPrenom'];
            $nom=$_POST['texNom'];
            $region=$_POST['textRegion'];
            $telephone=$_POST['textTelephone'];
            $image=$_FILES['textPhoto']['tmp_name'];
            $traget="image/".$_FILES['textPhoto']['name'];
            move_uploaded_file($image,$traget);
            $reqAdd="INSERT INTO utilisateur(IMM,METIER,PRENOM,NOM,REGION,TELEPHONE,PHOTO) VALUES('$imm','$metier','$prenom','$nom','$region','$telephone''$traget');
            $resultat=mysqli_query($cnouvrier,$reqAdd);
        }
            ?>
        </label>
        </form>
   </div>  
   </body>
</html>