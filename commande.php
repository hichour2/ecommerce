
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>
<body>
<?php  include("menu.php");

?>
<br/><br/>
<form action="aficher_etat_comm.php" method="post">
<table align="center">
<tr><td>
<td><h1><font color="red">Cote de la Commande:&nbsp;&nbsp;:</font><h1></td><td><input type="text" name="num" placeholder="Cote de la Commande" required></td>
<td><input type="submit" value="Chercher"></td></tr>
</form>
</body>
</html>