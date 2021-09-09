<?php
 require_once ('../bdconfig/conexiondb.php');
 $nom=isset($_POST['nom'])?$_POST['nom']:"";
 $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
 $adresse=isset($_POST['adresse'])?$_POST['adresse']:"";
 $tele=isset($_POST['telephone'])?$_POST['telephone']:"";
 $matri=isset($_POST['matricule'])?$_POST['matricule']:"";
 $requete="insert into membre(nom,prenom,adresse,telephone,matricule)values(?,?,?,?,?)";
 $params=array($nom,$prenom,$adresse,$tele,$matri);
 $resultat=$pdo->prepare($requete);
 $resultat->execute($params);

if ($resultat) {
	echo "insertion reussite";
	header('location:listemembre.php');
}
else{
	echo "  insertion n'est pas reussie";
}
 

?>