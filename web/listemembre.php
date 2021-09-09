<?php
require_once ('../bdconfig/conexiondb.php');

$nom=isset($_GET['nom'])?$_GET['nom']:"";
$tele=isset($_GET['telephone'])?$_GET['telephone']:"telephone";
$size=isset($_GET['size'])?$_GET['size']:10;
$page=isset($_GET['page'])?$_GET['page']:1;
$offset=($page-1)*$size;

if($tele=="telephone" || $nom=="nom"){
$requete="select*from membre
 where nom like '%$nom%'
 limit $size
 offset $offset";

}else{
	$requete="select*from membre
	where telephone like '%$tele%' and nom like '%$nom%'
	limit $size
	offset $offset";
	

}
$resultat=$pdo->query($requete);

$requeteCount="select count(*) countM from membre";
$resultatCount=$pdo->query($requeteCount);
$tabCount=$resultatCount->fetch();
$nbMembre=$tabCount['countM'];

$reste=$nbMembre % $size;
if($reste===0)
$nbPage=$nbMembre/$size;
else
$nbPage=floor($nbMembre/$size)+1;
?>
<!DOCTYPE html>
<HTML>
<head>
<title>Les Membres</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="../bootstrap/css/bootstrap.css"rel="stylesheet" type="text/css">
<link href="../bootstrap/css/monStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include("menu.php");?>
<div class="panel-heading" style="margin-top: 50px">Liste des membres (<?php echo $nbMembre ?>) Membres</div>
<div class="panel-body">
<div class="container" style="margin-top: 5px">
<div class="row">
<table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="mytable">		
	<thead>
		<tr>
			<th>id membre</th>
			<th>nom</th>
			<th>prenom</th>
			<th>adresse</th>
			<th>telephone</th>
			<th>matricule</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
				<?php while($membre=$resultat->fetch()) { ?>
				<tr>
				<td><?php echo $membre['id_m'];?></td>
				<td><?php echo $membre['nom'];?></td>
				<td><?php echo $membre['prenom'];?></td>
				<td><?php echo $membre['adresse'];?></td>
				<td><?php echo $membre['telephone'];?></td>
				<td><?php echo $membre['matricule'];?></td>
				<td>
			
				
				<a href="editerMembre.php?id_m=<?php echo $membre['id_m'];?>">
				<button class='btn btn-success btn-sm edit btn-flat' data-id=""><span class="glyphicon glyphicon-edit icon "></span> Editer</button>
				</a>
				&nbsp
				<a onclick="return confirm('Etes vous sur de vouloir supprimer le membre')"
				 href="supprimerMembre.php?id_m=<?php echo $membre['id_m'];?>">
				 <button class='btn btn-danger btn-sm delete btn-flat' data-id=""><span class="glyphicon glyphicon-trash icon "></span>supprimer</button>
				</a>
			    </td>
				</tr>

			  <?php } ?>
</tbody>
</table> 
		<!--<div> 
			<ul class="pagination">
			<?php for($i=1;$i<=$nbPage;$i++) {?>
			<li class="<?php if($i==$page) echo 'active' ?>">
			<a href="listemembre.php?page=<?php echo $i; ?>">
			<?php echo $i; ?>
			</a>
			</li>
										<?php }?>
			</ul>
		</div>-->
</div>
</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    	<script type="text/javascript">
			    $(document).ready(function() {
			    $('#mytable').DataTable( {
			    	
			    } );
			} );
    	</script>
</body>
</HTML>
