<?php include("menu.php");$num=$_POST['num'];	try{	//On se connecte � MySQL	$bdd = new PDO('mysql:host=localhost;dbname=commerce', 'root', '');}catch(Exception $e){	// En cas d'erreur, on affiche un message et on arr�te tout        die('Erreur : '.$e->getMessage());}	echo '<table width="800" border="0" align="center"><tr><td>';		$res=$bdd->query("select * from produit where id_produit='".$num."'");		if(!$res){		echo "ERREUR : req SQL incorrecte ........";	}	else{	while($enr = $res->fetch()){	echo'<form id="form1" name="form1" method="post" action="confirm_modif_produit.php?num='.$enr[0].'" enctype="multipart/form-data">  <table width="517" border="0" align="center">    <tr>      <td colspan="3" align="center"><h1><font color="#CC0000" face="Verdana, Arial, Helvetica, sans-serif">Ajouter un Materiel : </font></h1></td>    </tr>	<tr>      <td width="178">Categorie: </td>      <td width="26">:</td>      <td width="291"><label>        <input name="cate" type="text" placeholder="categorie" value ='.$enr[1].'>      </label></td>    </tr>    <tr>      <td width="178">Nom: </td>      <td width="26">:</td>      <td width="291"><label>        <input name="nom" type="text" placeholder="nom" value ='.$enr[2].'>      </label></td>    </tr>	<tr>      <td width="178">Marque: </td>      <td width="26">:</td>      <td width="291"><label>        <input name="marque" type="text" placeholder="marque" value ='.$enr[3].'>      </label></td>    </tr>    <tr>      <td>Carac </td>      <td>:</td>      <td><label>        <input name="carac" type="text" placeholder="Caract�ristique" value ='.$enr[4].'>      </label></td>    </tr>    <tr>      <td>Prix: </td>      <td>:</td>      <td><label>      <input name="prix" type="text" placeholder="prix" value ='.$enr[6].'>      </label></td>    </tr>    <tr>          </tr>    <tr>      <td>Nombres d\'Exemplaires </td>      <td>:</td>      <td><label>       		   <input name="nbrexemp" type="text" placeholder="Nomre des exemple desiponible" value ='.$enr[5].'>		      </label></td>    </tr>	<tr>      <td>Promotion: </td>      <td>:</td>      <td><label>      <input name="promo" type="text" placeholder="SOld" value ='.$enr[7].'>      </label></td>    </tr>    <tr>      <td>&nbsp;</td>      <td colspan="2"><label>        <input type="submit" name="Submit" value="Modifier"/>      </label>        </td>    </tr>  </table></form> </td></tr></table>			';		echo'</table>';}}?>