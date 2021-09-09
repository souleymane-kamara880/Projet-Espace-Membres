<?php
 require_once ('../bdconfig/conexiondb.php');
 $idms=isset($_POST['id_m'])?$_POST['id_m']:0;
 $nom=isset($_POST['nom'])?$_POST['nom']:"";
 $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
 $adresse=isset($_POST['adresse'])?$_POST['adresse']:"";
 $tele=isset($_POST['telephone'])?$_POST['telephone']:"";
 $matri=isset($_POST['matricule'])?$_POST['matricule']:"";
 $requete="UPDATE membre set nom=?,prenom=?,adresse=?,telephone=?,matricule=? where id_m=?";
 $params=array($nom,$prenom,$adresse,$tele,$matri,$idms);
 $resultat=$pdo->prepare($requete);
 $resultat->execute($params);

if ($resultat) {
	echo "insertion reussie";
	header('location:listemembre.php');
}
else{
	echo "  insertion n'est pas reussite";
}
 

?>