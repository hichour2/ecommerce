
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php  
include("menu.php");
if(!isset($_SESSION['clientLogin'])){
		die("Connecter vous ... pour Consulter votre points... !!!!!!!!!!");
	}
?>
<?php
	
	
	//require_once("connexion.php");
	require_once('connect2.php');
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	$res=$bdd->query("select * from client where login like '".$_SESSION['clientLogin']."'");
	
	if(!$res){
		echo "ERREUR : req SQL incorrecte ........";
	}
	else{
	while($enr = $res->fetch()){
			echo "<tr><td ><font color='red' size='5px'> Votre Nombre de Point est:&nbsp;&nbsp;&nbsp;</font></br></br></br><font color='orange' size='10px'>".$enr[6]."</font></td><td>";
		}
	}
	
	echo '</table>';
?>

 </td></tr>
</table>
</body>
</html>
