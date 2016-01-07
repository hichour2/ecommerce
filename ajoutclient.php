

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php
	include("menu.php");
	
	function verifier($nom, $prenom, $age, $sexe, $email, $login, $motPasse){
	require_once('connect2.php');
		if(strlen(trim($nom)) == 0 || strlen(trim($prenom))==0 || strlen(trim($login))==0 || strlen(trim($motPasse))==0 || strlen(trim($email))==0)
			return "Vous devez remplir tous les champs du formulaire";
		else{
			//tester si le login spécifié est déja utilisé
			
			$res=$bdd->query("select * from client where login like '$login'");
			//echo ("select * from adherent where login like '$login'");
			//echo "<br/>".$res;
			}
		return "true";
	}

	echo '<table width="800" border="0" align="center"><tr><td>';
	
	$nom = $_POST['tnom'];
	$age = $_POST['age'];
	$prenom = $_POST['tprenom'];
	$email = $_POST['temail'];
	$login = $_POST['tlogin'];
	$motPasse = $_POST['tmotPasse'];
	$sexe = $_POST['sexe'];
	
	////////////
	//echo $nom."<br/>".$prenom."<br/>".$email."<br/>".$age."<br/>".$sexe."<br/>".$login."<br/>".$motPasse."<br/>";
	///////////////
	$msg = verifier($nom, $prenom, $age, $sexe, $email, $login, $motPasse);
	if(strcmp($msg, "true") != 0){
		echo $msg;
		//Enregistrer les données reçues dans des variables sessions
		$_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $prenom;
		$_SESSION['age'] = $age;
		$_SESSION['email'] = $email;
		$_SESSION['sexe'] = $sexe;
		$_SESSION['login'] = $login;
		$_SESSION['motPasse'] = $motPasse;
		echo "<br/>Cliquer <a href=\"adherentInscription.php\">ici</a> pour revenir au formulaire....";
	}
	else {
	
	
		//executer la requette INSERT.
		try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=commerce', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
				$requ = $bdd->prepare("insert into client values('',:nom,:prenom,:age,:sexe,:email,1,:login,:motPasse)");
				

		if(!($requ->execute(array('nom' => $nom,
'prenom'=> $prenom,
'age'=> $age,
'sexe'=> $sexe,
'email'=> $email,
'motPasse'=> $motPasse,
'login'=> $login,
))))
{
			echo "<h1 align = \"center\"><font color=\"#FF0000\"><em><strong><u>REQ SQL incorrecte ...</u></strong></em></font></h1>";}
		else{ echo "<h1 align = \"center\"><font color=\"#FF0000\"><em><strong><u>Inscription enregistrée avec succes ..</u></strong></em></font></h1>";
			echo "";
		}
			echo "<br/><h1 align = \"center\"><font color=\"#FF0000\"><em><strong><u>Cliquez <a href = \"clientInscription.php\" > ici </a> pour revenir au formulaire.</u></strong></em></font></h1>";
	}
	
	
?>
  </td></tr>
</table>
</body>
</html>
