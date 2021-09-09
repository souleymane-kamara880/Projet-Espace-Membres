<?php
 require_once ('../bdconfig/conexiondb.php');
 $identifiant=isset($_POST['id_c'])?$_POST['id_c']:"";
 $date=isset($_POST['date'])?$_POST['date']:"";
 $mois=isset($_POST['mois'])?$_POST['mois']:"";
 $motif=isset($_POST['motif'])?$_POST['motif']:"";
 $montant=isset($_POST['montant'])?$_POST['montant']:"";
 $identi=isset($_POST['id_m'])?$_POST['id_m']:"";
 $requete="insert into cotisation(id_c,date,mois,motif,montant,id_m)values(?,?,?,?,?,?,?)";
 $params=array($identifiant,$date,$mois,$motif,$montant,$identi);
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