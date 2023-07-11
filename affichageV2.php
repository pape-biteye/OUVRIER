<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="ouvrier_style.css" style="text/css">
	<title>formulaire</title>
</head>
<body>
	<div class="afform">
<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'OUVRIER');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		//echo 'connexion reussie! <br>';

		//requete SQL
		$requete = "select * from information";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		echo "<table border>";
		echo "<h1> Liste des clients et leurs informations</h1>";
		echo "<tr>
				<th>CNI</th>
				<th>Prenom</th>
				<th>Nom</th>
				<th>Mail</th>
				<th>Telephone</th>
				<th>Vos Besoins</th>	
			</tr>";
		while($ligne = mysqli_fetch_assoc($resultats)){
			echo "<tr>";
			echo "<td>".$ligne['cni']."</td>
			<td>".$ligne['prenom']."</td>
			<td>".$ligne['nom']."</td>
			<td>".$ligne['mail']."</td>
			<td>".$ligne['telephone']."</td>
			<td><a href='accueil.php?var=".$ligne['cni']."'>Ouvrier</a></td>";
			echo "</tr>";
		}
		
			echo "</table>";
}//fin du else
?>

</div>
</body>
</html>