<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once ('../bdconfig/conexiondb.php');
 $idc=isset($_GET['id_c'])?$_GET['id_c']:0; 
 $requete="select * from cotisation";
 $resultatC=$pdo->query($requete);

  $cotiser=$resultatC->fetch(); 

  $date=$cotiser['date'];
  $mois=$cotiser['mois'];
  $motif=$cotiser['motif'];
  $montant=$cotiser['montant'];
  
  //  $requete="select * from membre 
//  INNER JOIN cotisation ON membre.id_m = cotisation.id_m";

?>
<!DOCTYPE html>
<HTML>
<head>
<title>modiffication</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php include("menu.php");?>
<div class="bg-image2">
  </div> 
  <div class="bg-img">
  </div>
  <div class="columns is-centered">
   	<div class="column is-6">
	<section class="section hero is-fullheight">
    <div class="hero-body">
    <div class="container has-text-centered">
   <div class="box">

	<form method="post" action="updateCotisation.php" class="form">
		<h1 class="title">
        modification
      </h1>
      <p class="subtitle">
       <strong></strong>
      </p>
      <div class="field is-horizontal">
           <div class="field-body">
		         <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">id cotisation</label>
                   <input class="input is-info" name="id_c" type="text" value="<?php echo $idc ?>"/>
                </p>
                </div>
                </div>
                </div>

		    <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">Date</label>
                   <input class="input is-info" name="date" type="date" value="<?php echo $date ?>">
                </p>
                </div>

         <div class="control">
         <div class="select">
		<label for="mois">mois:</label>
		<select name="mois" class="form-control" id="mois" value="<?php echo $mois ?>">
			<option>Choisir le mois</option>
			<option value="janvier">janvier</option> 
			<option value="Février">Février</option>
			<option value="mars"> mars</option>
			<option value="avril">avril</option>
			<option value="mai">mai</option>
			<option value="juin">juin</option>
			<option value="juillet">juillet</option>
			<option value="août">août</option>
			<option value="septembre">septembre</option>
			<option value="octobre">octobre</option>
			<option value="novembre">novembre</option>
			<option value="décembre">décembre</option>
		</select>
		</div>
		</div><br>

		<div class="control">
         <div class="select">
		<label for="motif">motif:</label>
		<select name="motif" class="form-control"id="motif" value="<?php echo $motif ?>">
			<option>votre motif</option>
			<option value="inscription">inscription</option> 
			<option value="mensualite">mensualité</option>
		</select>
	    </div>
	    </div>

	    <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">montant</label>
                   <input class="input is-info" name="montant" type="text" value="<?php echo $montant ?>">
                </p>
		</div>
      <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">id membre</label>
                   <input class="input is-info" name="id_m" type="hidden" value="<?php echo $montant ?>">
                </p>
		</div>
	
<div class="field is-horizontal">
            <div class="field">
                <p class="control">
                   <input class="button is-info" type="submit" name="" id="" value="Enregistrer">
                </p>
            </div>
            <div class="field">
                <p class="control">
                   <input class="button is-danger ml-4" type="reset" name="" id="" value="Annuler">
                </p>
            </div>        
          </div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</HTML>