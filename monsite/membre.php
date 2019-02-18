<?php
session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: Index1.php');
	exit();
}
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" title="css" href="C:/Users/johan/Desktop/monsite/css/styles.css">
	<link rel="stylesheet" type="text/css" title="css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">	
<title>Espace membre</title>
<?php include"menunavigation.php"  ?>
</head>

<body>
					<header>
						 <button type="button" class="btn btn-success">Bienvenue <?php echo htmlentities(trim($_SESSION['email'])); ?> !<br /> </button>
					</header>






					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">Header</div>
				  <div class="card-body">
				    <h4 class="card-title">Primary card title</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>


				  <div class="card text-white bg-primary mb-3" style="max-width: 20rem; position: absolute;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Primary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>



  <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Primary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>




  <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Primary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>








						<footer>
								 <a type="button" class="btn btn-danger" href="deconnexion.php" role=button >Déconnexion</a>
						 </footer>
</body>
</html>