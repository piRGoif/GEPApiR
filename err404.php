<?php ob_start('ob_gzhandler');
// Version 20140829
// Erreur 404 personnalisée
// Voir http://httpd.apache.org/docs/custom-error.html
// Sur Free sont vides : $HTTP_SERVER_VARS["Redirect_URL"] et $_SERVER :(

// NAVIGATION
$RelBasePath = (!preg_match('/free\.fr$/', $_SERVER['SERVER_NAME'])) ? "/GepapiR/" : "/";
$title = "Erreur 404 [GEPApiR]";
?><!DOCTYPE HTML>

<html lang="fr">

<head>
<title><?=$title?></title>

<link href="<?=$RelBasePath?>communs/gepapir.css" rel="stylesheet" type="text/css">

<style type="text/css">
p
{
width: 100%;
text-align: center;
margin: 4em 0;
}
</style>

</head>
<body>



<h1>
<img src="<?=$RelBasePath?>images/err-404.png" width="438" height="253" alt="404 - la ressource n'existe pas (ou plus)">
</h1>



<p>
<a href="<?=$RelBasePath?>index.php">Retour à l'accueil</a></p>



</body>
</html>
<?php ob_end_flush(); ?>