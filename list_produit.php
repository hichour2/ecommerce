
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php  
include("menu.php");
if(!isset($_SESSION['admin'])){
		die("Connecter vous ... pour Aficher la listes des produits... !!!!!!!!!!");
	}
?>
<?php
	
	
	//require_once("connexion.php");
	require_once('connect2.php');
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	$res=$bdd->query("select * from produit");
	
	if(!$res){
		echo "ERREUR : req SQL incorrecte ........";
	}
	else{
		echo '<table width="700" ><tr><td align = "center"><font color="#0033CC"><em><strong><h2>Les produits Disponibles :</h2></strong></em></font></td></tr></table>';
		echo'<table width="700"  border="1"bordercolor="black" align="center"><tr><th bgcolor="orange">Numero</th><th bgcolor="orange">Categorie</th><th bgcolor="orange">Nom</th><th bgcolor="orange">Marque</th><th bgcolor="orange">Caracteriqtique</th><th bgcolor="orange">Nombre d\'exemplaires</th><th bgcolor="orange">Prix</th><th bgcolor="orange">Promotion</th><th bgcolor="orange">image</th></tr>';
	while($enr = $res->fetch()){
			echo "<tr><td bgcolor='green'><font color='white'>".$enr[0]."</td><td>".$enr[1]."</td><td>".$enr[2]."</td><td bgcolor='yellow'>".$enr[3]."</td><td>".$enr[4]."</td><td>".$enr[5]."</td><td>".$enr[6]."</td><td>".$enr[7]."</td><td><img alt='img' src=".$enr[8]." width='100' height='100'/></td></tr>";
		}
	}
	
	echo '</table>';
?>

 </td></tr>
</table>
</body>
</html>
