<?php
require_once ('../bdconfig/conexiondb.php');
$idm=isset($_GET['id_m'])?$_GET['id_m']:0;
$requete="SELECT * from membre where id_m=$idm";
$resultat=$pdo->query($requete);
$membre=$resultat->fetch();
$nom=$membre['nom'];
$prenom=$membre['prenom'];
$adresse=$membre['adresse'];
$tele=$membre['telephone'];
$matri=$membre['matricule'];
?>

<!DOCTYPE html>
<HTML>
<head>
<title>edition</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php include("menu.php");?>
<div class="bg-image">
  </div>
  <div class="bg-img">
  </div>

  <div class="columns is-centered">
   	<div class="column is-6">
  <section class="section hero is-fullheight">
    <div class="hero-body">
    <div class="container has-text-centered">
   <div class="box">
  <form  method="post" action="updateMembre.php" class="form">
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
                <label class="label has-text-left has-text-black"></label>
                   <input class="input is-info" name="id_m" type="hidden" value="<?php echo $idm ?>">
                </p>
                </div>
                </div>
                </div>
                <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">Nom</label>
                   <input class="input is-info" name="nom" type="text" value="<?php echo $nom ?>">
                </p>
                </div>

                <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">Prenom</label>
                   <input class="input is-info" name="prenom" type="text" value="<?php echo $prenom ?>">
                </p>
            </div> 
            <div class="field">
                <p class="control">
                <label class="label has-text-left">Adresse</label>
                   <input class="input is-info" name="adresse" type="text" value="<?php echo $adresse ?>"">
                </p>
                </div>
                <div class="field">
                <p class="control">
                <label class="label has-text-left">Telphone</label>
                   <input class="input is-info" name="telephone" type="number" value="<?php echo $tele ?>">
                </p>
            </div>
            <div class="field">
                <p class="control">
                <label class="label has-text-left">matricule</label>
                   <input class="input is-info" name="matricule" type="text" value="<?php echo $matri ?>">
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
          
           
            <div class="field">
                <p class="control">  

                </p>
            </div> 
            </div>
            </form>   
            </div>
         </div>
      </div>
      </section>
      </div>
   </div>
</body>
</HTML>