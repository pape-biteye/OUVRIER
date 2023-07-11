<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="ouvrier_style.css" style="text/css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form name="formUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
            <h2 align="center">Mettre a jour un ouvrier</h2>

            <label><b>Immatriculation :</b></label>
            <input type="text" name="txtImm" class="zonetxt" values="<?php echo $_GET['modifier1utilisateur'] ?>" readonly>

            <label><b>Metier :</b></label>
            <input type="text" name="txtMetier" class="zonetxt" placaholder="Entrer un metier ici..." required>

            <label><b>Prenom :</b></label>
            <input type="text" name="txtPrenom" class="zonetxt" placaholder="Entrer un premon ici..." required>

            <label><b>Nom :</b></label>
            <input type="text" name="txtNom" class="zonetxt" placaholder="Entrer un mon ici..." required>

            <label><b>Region :</b></label>
            <input type="text" name="txtRegion" class="zonetxt" placaholder="Entrer une region ici..." required>

            <label><b>Telephone :</b></label>
            <input type="number" name="txtTelephone" class="zonetxt" placaholder="Entrer un numero ici..." required>

            <label><b>Photo :</b></label>
            <input type="file" name="txtPhoto"  placaholder="Choisir une image..." required>

            <input type="submit" class="submit" name="btmod" values="Mettre a jour" >

            <p><a href="service.php" class="submit">Tableau de bord</a></p>

            <label style="text-align: center; color: #369881;">
            <?php
            if(isset($_POST['btmod']))
            {
                $imm=$_POST['txtImm'];
                $metier=$_POST['txtMetier'];
                $prenom=$_POST['txtPrenom'];
                $nom=$_POST['txtNom'];
                $region=$_POST['txtRegion'];
                $telephone=$_POST['txtTelephone'];

                $modifier=$_GET['mod'];
                $image=$_FILES['txtPhoto']['tmp_name'];
                $traget="image/".$_FILES['txtPhoto']['name'];
                move_uploaded_file($image,$traget);
                $reqUp="UPDATE utilisateur SET IMM='$imm',METIER='$metier',PRENOM='$prenom',NOM='$nom',REGION='$region',TELEPHONE='$telephone',
                PHOTO='$traget', WHERE IMM='$modifier'";
                $resultat=mysqli_query($cnouvrier,$reqUp);

                if($resultat)
                {
                    echo "Mise a jour des donnees valider....";
                }else
                {
                    echo "Echec de modification des donnees....";
                }

            }
            
            ?>
        </label>


        </form>    
    
    </div>
</body>
</html>