
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php
	
	include("menu.php");
	echo'<br/><br/><br/><br/><br/>';
	
	//onsubmit="return tester()"
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	if(isset($_SESSION['admin']) ){
		unset($_SESSION['admin']);
		echo "Vous etes Maintenant déconnetés.<br/>Voulez vous se connecter?";
	}
	else {
	}
	echo '</td></tr><tr><td>';
?>
<form method="post" action="identification.php" >
  <table width="298" border="0" align="center">
    <tr>
      <td></td> <td colspan="3" align="center"><h2><font color="#CC0000"><em>Identification:</em></font></h2></td>
    </tr>
    <tr>
      <td width="104">Login</td>
      <td width="13">:</td>
      <td width="225"><label>
        <input name="login" type="text" placeholder="Votre login" />
      </label></td>
    </tr>
    <tr>
      <td>Mot de Passe </td>
      <td>:</td>
      <td><label>
        <input name="pass" type="password" placeholder="Votre Mot de pass"/>
      </label></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><label>
        <input type="submit" name="Submit" value="S'Authentifier" />
      </label>
        <label>
        <input type="reset" name="Submit2" value="R&eacute;initialiser" />
        </label></td>
    </tr>
  
  </table>
</form>


 </td></tr>
</table>
</body>
</html>
