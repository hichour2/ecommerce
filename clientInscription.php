
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bienvenu au !|E-commerce</title>
<script language="javascript">
	function tester(){
		
		if(document.form1.tnom.value == ""){
			alert('Le champ nom n\'est pas rempli!!!!!');
			return false;
		}
		if(document.form1.tprenom.value == ""){
			alert('Le champ prenom n\'est pas rempli!!!!!');
			return false;
		}
		if(document.form1.temail.value == ""){
			alert('Le champ email n\'est pas rempli!!!!!');
			return false;
		}
		if(document.form1.tlogin.value == ""){
			alert('Le champ login n\'est pas rempli!!!!!');
			return false;
		}
		if(document.form1.tmotPasse.value == ""){
			alert('Le champ mot de passe n\'est pas rempli!!!!!');
			return false;
		}
		return true;
	} 
	
	function verifier (){
		if(document.from1.tnom.value==""){
			alert("Veuillez rmplir les champs du formulare!!");
		}
		else
			document.form1.submit();
	}
</script>
</head>

<body>
<?php
	
	include("menu.php");
	echo'<br/><br/><br/><br/><br/>';
	//onsubmit="return tester()"
	echo '<table width="800" border="0" align="center"><tr><td>';
?>
<form id="form1" name="form1" method="post" action="ajoutclient.php" >
  <table width="412" border="0" align="center">
    <tr>
      <td colspan="2" align="center"><h1 ><font color="blue"><strong><em>Formulaire d'Inscription </em></strong></font></h1></td>
    </tr>
    <tr>
      <td width="139">Nom</td>
      <td width="263"><label>
        <input name="tnom" type="text" placeholder=" Votre Nom" value ="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Pr&eacute;nom</td>
      <td><label>
        <input name="tprenom" type="text" placeholder=" Prenom" value ="<?php if(isset($_SESSION['prenom'])) echo $_SESSION['prenom']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label>
      <select name="age" size="1" id="age">
        <?php
				for($i = 7; $i<=100; $i++){
					echo "<option value=$i ";
					if(isset($_SESSION['age']) and $_SESSION['age'] == $i)
						echo "selected";
					echo "> $i </option>";
				}
			?>
      </select>
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input name="temail" type="text" placeholder=" Votre Email" value ="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Sexe</td>
      <td><label>
        <input name="sexe" type="radio" value="Homme" checked="checked" />
        Homme
        <input type="radio" name="sexe" value="Femme" <?php if(isset($_SESSION['sexe']) and $_SESSION['sexe'] == "Femme") echo 'checked="checked"'; ?>/>
      Femme</label></td>
    </tr>
    <tr>
      <td>Login</td>
      <td><label>
        <input name="tlogin" type="text" placeholder=" Choisie un login" value ="<?php if(isset($_SESSION['login'])) echo $_SESSION['login']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Mot de Passe </td>
      <td><label>
        <input name="tmotPasse" type="password" placeholder=" Choisie une Mot de pass" value ="<?php if(isset($_SESSION['motPasse'])) echo $_SESSION['motPasse']; ?>"/>
      </label></td>
    </tr>
    <tr>
      
      <td>
        <input type="submit" name="Submit" value="Envoyer" /></td>
     
       <td> <input type="reset" name="Submit2" value="R&eacute;initialiser" />
      </label></td>
    </tr>
  </table>
</form>

 </td></tr>
</table>
</body>
</html>
