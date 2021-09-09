<?php
require_once ('../bdconfig/conexiondb.php');

?>
<!DOCTYPE html>
<HTML>
<head>
<title>Membre</title>

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
        <form  method="post" action="ajoutmembre.php">
       <!--<div class="field is-horizontal">
       <div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>-->
       <!-- <div class="field-body">-->
      <h1 class="title">
        Ajouter membre
      </h1>
      <p class="subtitle">
        <strong></strong>
      </p>
           <div class="field is-horizontal">
           <div class="field-body">
                <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">Nom</label>
                   <input class="input is-info" name="nom" type="text" placeholder="votre nom">
                </p>
                </div>
                </div>
                </div>

                <div class="field">
                <p class="control">
                <label class="label has-text-left has-text-black">Prenom</label>
                   <input class="input is-info" name="prenom" type="text" placeholder="votre prenom">
                </p>
            </div> 
            <div class="field">
                <p class="control">
                <label class="label has-text-left">Adresse</label>
                   <input class="input is-info" name="adresse" type="text" placeholder="adresse">
                </p>
                </div>
                <div class="field">
                <p class="control">
                <label class="label has-text-left">Telphone</label>
                   <input class="input is-info" name="telephone" type="number" placeholder="telephone">
                </p>
            </div>
            <div class="field">
                <p class="control">
                <label class="label has-text-left">matricule</label>
                   <input class="input is-info" name="matricule" type="text" placeholder="matricule">
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
          </div>
          </div>
          
           
            <div class="field">
                <p class="control">  

                </p>
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