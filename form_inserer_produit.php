
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php
	
	include("menu.php");
	//onsubmit="return tester()"
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	if(!isset($_SESSION['admin'])){
		die("Connecter vous ... pour Ajouter Un Produit... !!!!!!!!!!");
	}
?>
<form id="form1" name="form1" method="post" action="inserer_produit.php" enctype="multipart/form-data">
  <table width="517" border="0" align="center">
    <tr>
      <td colspan="3" align="center"><h1><font color="#CC0000" face="Verdana, Arial, Helvetica, sans-serif">Ajouter un Materiel : </font></h1></td>
    </tr>
	<tr>
      <td width="178">Categorie: </td>
      <td width="26">:</td>
      <td width="291"><label>
        <input name="cate" type="text" placeholder="categorie" value ="<?php if(isset($_SESSION['cate'])) echo $_SESSION['cate']; else echo "";?>"/>
      </label></td>
    </tr>
    <tr>
      <td width="178">Nom: </td>
      <td width="26">:</td>
      <td width="291"><label>
        <input name="nom" type="text" placeholder="nom" value ="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom']; else echo "";?>"/>
      </label></td>
    </tr>
	<tr>
      <td width="178">Marque: </td>
      <td width="26">:</td>
      <td width="291"><label>
        <input name="marque" type="text" placeholder="marque" value ="<?php if(isset($_SESSION['marque'])) echo $_SESSION['marque']; else echo "";?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Carac </td>
      <td>:</td>
      <td><label>
        <input name="carac" type="text" placeholder="Caractéristique" value ="<?php if(isset($_SESSION['carac'])) echo $_SESSION['carac']; else echo "";?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Prix: </td>
      <td>:</td>
      <td><label>
      <input name="prix" type="text" placeholder="prix" value ="<?php if(isset($_SESSION['prix'])) echo $_SESSION['prix']; else echo "";?>"/>
      </label></td>
    </tr>
    <tr>
      
    </tr>
    <tr>
      <td>Nombres d'Exemplaires </td>
      <td>:</td>
      <td><label>
        <select name="nbrexemp" size="1" id="nbrexemp">
			<?php
				for($i = 0; $i<=20; $i++){
					echo "<option value = $i ";
					if(isset($_SESSION['nbrexemp']) and $_SESSION['nbrexemp'] == $i)
						echo "selected";
					echo "> $i </option>";
				}
			?>
        </select>
      </label></td>
    </tr>
	<tr>
      <td>Promotion: </td>
      <td>:</td>
      <td><label>
      <input name="promo" type="text" placeholder="SOld" value ="<?php if(isset($_SESSION['prix'])) echo $_SESSION['prix']; else echo "";?>"/>
      </label></td>
    </tr>
	 <td>Image du Produit: </td>
      <td>:</td>
      <td><label>
      <input name="image" type="file" placeholder="Auteur" value ="">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><label>
        <input type="submit" name="Submit" value="Ajouter" />
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
