<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" title="css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">	

	<title></title>
</head>

<?php
include"menunavigation.php";
?>


<?php
require 'src\date\Month.php';

$month = new App\date\ month(1, 2018);
?>

<h1><?= $month->toString(); ?></h1>



</html>