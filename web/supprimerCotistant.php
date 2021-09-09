<?php
 require_once ('../bdconfig/conexiondb.php');
 $idm=isset($_GET['id_c'])?$_GET['id_c']:0;

 $requete="delete from cotisation where id_c=?";
 $params=array($idm);
 $resultat=$pdo->prepare($requete);
 $resultat->execute($params);

if ($resultat) {
	echo "insertion reussite";
	header('location:listeCotisation.php');
}
else{
	echo "  insertion n'est pas reussite";
}
 

?>