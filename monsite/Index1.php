<?php

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Iris Permis</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<!-----------------------------------------------B O D Y--------------------------------------->
<? include 'menunavigation.php' ?>
	






<body>
<?php include 'menunavigation.php'; ?>

	<?php 

	  include 'Include/database.php';
	  global $db

	 ?>
<div class="jumbotron">
  <h1 class="display-3">Espace Membre</h1>
  <p class="lead">L'ecole IRIS vous propose des forfait d'auto-ecole a tarifs reduit pour ces etudiants </p>
  <hr class="my-4">
 

	<!---menu de navigation--->
	<h2>Connexion</h2>
	<form method="post">
	<input type="email" name="lemail" id="lemail" placeholder="email" required=""> <br>
	<input type="password" name="lpassword" id="lpassword" placeholder="password" required=""> <br>
	<input type="submit" name="formlogin" id="formlogin" value="Connexion">
</form>
;
<?php include "Include/login.php" ?>

<!----------Signin------->	
<h2>Inscription</h2>
<form method="post">
	<input type="email" name="semail" id="semail" placeholder="email" required=""> <br>
	<input type="password" name="password" id="password" placeholder="password" required=""> <br>
	<input type="password" name="cpassword" id="cpassword" placeholder="Veuillez confirmez votre mot de passe" required=""> <br>
	<input type="submit" name="formsend" id="formsend" value="Inscription">
</form>
<?php include "Include/Signin.php"  ?>


</div>


</body>
</html>