<?php
 require_once ('../bdconfig/conexiondb.php');
 $idm=isset($_GET['id_m'])?$_GET['id_m']:0;

 $requete="delete from membre where id_m=?";
 $params=array($idm);
 $resultat=$pdo->prepare($requete);
 $resultat->execute($params);

if ($resultat) {
	echo "insertion reussite";
	header('location:listemembre.php');
}
else{
	echo "  insertion n'est pas reussite";
}
 

?>