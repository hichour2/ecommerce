
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php
	
	include("menu.php");
	function verifier ($login, $motPasse){
		if(strlen(trim($login))==0 || strlen(trim($motPasse))==0)
			return "Vous devez remplir tous les champs du formulaire !!!";
		else{
			//tester si le login spécifié est déja utilisé
			require_once("connexion.php");
		$res = mysql_query("select * from client where login like '$login' and pass like '$motPasse'");
			//echo ("select * from adherent where login like '$login'");
			//echo $res;
				if(mysql_num_rows($res)==0)
				return "Vous n'etes pas Client essayer d'inscrire !!!!";
		}
		return "true";
	}
	//onsubmit="return tester()"
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	$login = $_POST['login'];
	$motPasse = $_POST['pass'];
	
	$msg = verifier($login, $motPasse);
	if(strcmp($msg, "true") != 0){
		echo $msg;
		echo "<br/>Cliquer <a href=\"formAuthentificationclient.php\">ici</a> pour revenir au formulaire....";
	}
	else {
		$_SESSION['clientLogin'] = $login;
		$_SESSION['clientMotPasse'] = $motPasse;
		
		echo "<br/>Bienvenu : <font color='red'>".$_SESSION['clientLogin']."</font>";
		echo '<br/> si vous voulez  actualiser la connection  cliquer :<a href="index.php">ici</a>';
	}
?>

 </td></tr>
</table>
</body>
</html>
