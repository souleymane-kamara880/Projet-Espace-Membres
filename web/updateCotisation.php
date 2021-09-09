<?php
 require_once ('../bdconfig/conexiondb.php');
  $idc=isset($_POST['id_c'])?$_POST['id_c']:0;
//  $idm=isset($_POST['id_m'])?$_POST['id_m']:"";
 $dates=isset($_POST['date'])?$_POST['date']:"";
 $mois=isset($_POST['mois'])?$_POST['mois']:"";
 $motif=isset($_POST['motif'])?$_POST['motif']:"";
 $montant=isset($_POST['montant'])?$_POST['montant']:"";
 $identifiant=isset($_POST['id_m'])?$_POST['id_m']:"";
 $requete="UPDATE cotisation set date=?,mois=?,motif=?,montant=?,id_m=? where id_c=?";
 $params=array($idc,$dates,$mois,$motif,$montant,$identifiant);
 $resultat=$pdo->prepare($requete);
 $resultat->execute($params);
  if($resultat){
  	 echo "insertion reussite";
  	 header('location:listeCotisation.php');
  } 
   else{ 
         echo "insertion n'est pas reussite";
   }
?>