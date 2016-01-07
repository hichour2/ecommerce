<?php
// on définit le nombre de secondes définissant l'intervalle de temps au cours duquel on considère qu'un client est toujours en ligne (ici 3 minutes = 180 secondes)
$tps_max_connex = 180;  
require_once('connect2.php');
$temps_actuel =date("U");  
 $sql = 'SELECT count(*) FROM conecte WHERE id_ip= "'.$_SERVER['REMOTE_ADDR'].'"';  
 $req = $bdd->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());  
 $data = $req->fetch();  
 @mysql_free_result($req);  
 
if ($data[0]) { 
   $sql = 'UPDATE conecte SET time = "'.$temps_actuel.'" WHERE id_ip = "'.$_SERVER['REMOTE_ADDR'].'"'; 
    $req = $bdd->query($sql) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());  
}  
else {  
   $sql = 'INSERT INTO conecte VALUES("'.$_SERVER['REMOTE_ADDR']. '", "'.$temps_actuel.'")';  
  $req = $bdd->query($sql) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());  
}   
$heure_max = $temps_actuel - $tps_max_connex;   
$sql2 = 'DELETE FROM conecte where time < "'.$heure_max.'"';  
 $req2 = $bdd->query($sql2) or die ('Erreur SQL !<br />'.$sql2.'<br />'.mysql_error());  
?>