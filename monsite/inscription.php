<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
<?php
include 'menunavigation.php';
?>

<?php
include 'Include/database.php';
global $db
?>
<div class="jumbotron">
    <h1 class="display-3">Inscription</h1>
    <p class="lead">L'ecole IRIS vous propose des forfait d'auto-ecole a tarifs reduit pour ces etudiants </p>
    <hr class="my-4">

    <!----------Signin------->
    <h2>Inscription</h2>
    <form method="post">
        <input type="text" name="prenom" id="prenom" placeholder="Prenom" required=""> <br>
        <input type="text" name="nom" id="nom" placeholder="Nom" required=""> <br>
        <input type="text" name="age" id="age" placeholder="Age" required=""> <br>
        <input type="text" name="adresse" id="adresse" placeholder="Adresse" required=""> <br>
        <input type="text" name="codepostal" id="codepostal" placeholder="Code postal" required=""> <br>
        <input type="email" name="semail" id="semail" placeholder="email" required=""> <br>
        <input type="password" name="password" id="password" placeholder="password" required=""> <br>
        <input type="password" name="cpassword" id="cpassword" placeholder="Veuillez confirmez votre mot de passe" required=""> <br>
        <input type="submit" name="formsend" id="formsend" value="Inscription">
    </form>
    <?php include "Include/Signin.php"  ?>


</div>


</body>
</html>