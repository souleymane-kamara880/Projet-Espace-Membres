<?php
session_start();
require_once ('../bdconfig/conexiondb.php');

$idm=isset($_GET['id_m'])?$_GET['id_m']:"";
$date=isset($_GET['date'])?$_GET['date']:"";

$size=isset($_GET['size'])?$_GET['size']:10;
$page=isset($_GET['page'])?$_GET['page']:1;
$offset=($page-1)*$size;


	$requeteR="select * from cotisation
	 where id_m like '%$idm%' and date like '%$date%'";
	 $resultatR=$pdo->query($requeteR);

	$requete="select * from membre 
	 INNER JOIN cotisation ON membre.id_m = cotisation.id_m
	limit $size
	offset $offset";
$resultatC=$pdo->query($requete);

$requeteCount="select count(*) countM from cotisation";
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
<title>cotisation</title>

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
<div class="panel-heading" style="margin-top: 50px">Liste des cotisation (<?php echo $nbMembre ?>) Cotisation</div>
<div class="panel-body">
<div class="container-fluid" style="margin-top: 5px">
<div class="row">

<table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="mytable">		
	<thead>
		<tr>
			<th>id cotisation</th>
			<th>id membre</th>
			<th>nom &nbsp &nbsp prenom &nbsp &nbsp adresse &nbsp &nbsp telephone &nbsp &nbsp matricule</th>
			<th>date</th><th>mois </th><th>motif </th><th>montant </th>
			<th>Actions</th>
		</tr>
	</thead>

	<tbody>
				<?php while($cotiser=$resultatC->fetch()) { ?>
				<tr>

				<td><?php echo $cotiser['id_c'];?></td>
				<td><?php echo $cotiser['id_m'];?></td>
				<td><?php echo $cotiser['nom'].
				'&nbsp &nbsp &nbsp'.$cotiser['prenom']
				.'&nbsp &nbsp &nbsp'.$cotiser['adresse']
				.'&nbsp &nbsp &nbsp'.$cotiser['telephone']
				.'&nbsp &nbsp &nbsp'.$cotiser['matricule'];?></td>
			
				<td><?php echo $cotiser['date'];?></td>
				<td><?php echo $cotiser['mois'];?></td>
				<td><?php echo $cotiser['motif'];?></td>
				<td><?php echo $cotiser['montant'];?></td>
		
				


				<td>
				<a href="editerCotisation.php?id_c=<?php echo $cotiser['id_c'];?>">
				<span class="glyphicon glyphicon-edit"></span>
				</a>
				&nbsp
				<a onclick="return confirm('Etes vous sur de vouloir supprimer le membre')"
				 href="supprimerCotistant.php?id_c=<?php echo $cotiser['id_c'];?>">
				<span class="glyphicon glyphicon-trash"></span>
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
			<a href="listeCotisation.php?page=<?php echo $i; ?>">
			<?php echo $i; ?>
			</a>
			</li>
										<?php }?>
			</ul>
		</div>-->
</div>
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
