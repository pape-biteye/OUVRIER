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
    <p><h1><b>Liste des ouvriers....</b></h1>
    <?php
    $reqselect="select * from utilisateur";
    $resultat=mysqli_query($cnouvrier,$reqselect);

    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b>".$nbr."</b> Ouvriers...</p>";
    ?>
    </p>
    <p><a href="ajouter1.php"><img src="image/ajouter.png" width="50px" hieght="50px"></a></p>
    <table width="100%" border="1">
        <tr>
            <th>Photo</th>
            <th>Immatriculation</th>
            <th>Metier</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Region</th>
            <th>Telephone</th>
            <th>Suprimer</th>
            <th>Modifier</th>
        </tr>
        <?php
        while($ligne=mysqli_fetch_assoc($resultat))
        {
            
      
        ?>
            <tr>
                <td><img src='<?php echo $ligne['Photo'];?>' class="photocar"> </td>
                <td><?php echo $ligne['Imm'];?></td>
                <td><?php echo $ligne['Metier'];?></td>
                <td><?php echo $ligne['Prenom'];?></td>
                <td><?php echo $ligne['Nom'];?></td>
                <td><?php echo $ligne['Region'];?></td>
                <td><?php echo $ligne['Telephone'];?></td>
                <td><a href="supprimer.php?supprimerutilisateur=<?php echo $ligne['Imm'];?>"><img src="image/suprimer.jpg" width="50px" height="50px"></a></td>
                <td><a href="modifier.php?modifierutilisateur=<?php echo $ligne['Imm'];?>"><img src="image/modifier.png" width="50px" height="50px"></a></td>
            </tr>

        <?php
          }
        ?>
    </table>
</body>
</html>