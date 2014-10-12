<?php
/*******************************************************************************
 Entête commun pages
 Version 20140813
*******************************************************************************/



require_once($RelBasePath . 'communs/http_headers.inc');

require_once($RelBasePath . 'communs/separateurs.inc');

?><!DOCTYPE html>

<html lang="fr">

<head>
<title><?=$title?></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<? // Pour responsive design : http://www.w3.org/TR/mwabp/#bp-viewport ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?
/****
 Générateur http://realfavicongenerator.net/
 Fichier .ico laissé à la racine du site sans déclaration (prb avec Chrome)
   Cf http://www.jonathantneal.com/blog/understand-the-favicon/#highlighter_705436
 Idem pour apple-touch-icon.png
   iOS : support v7+ uniquement
 Idem pour browserconfig.xml (IE11)
****/
?>
<link rel="apple-touch-icon" sizes="57x57" href="<?=$RelBasePath?>images/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=$RelBasePath?>images/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=$RelBasePath?>images/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=$RelBasePath?>images/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=$RelBasePath?>images/favicons/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="<?=$RelBasePath?>images/favicons/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="<?=$RelBasePath?>images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?=$RelBasePath?>images/favicons/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?=$RelBasePath?>images/favicons/mstile-144x144.png">
<meta name="msapplication-square70x70logo" content="<?=$RelBasePath?>images/favicons/mstile-70x70.png">
<meta name="msapplication-square150x150logo" content="<?=$RelBasePath?>images/favicons/mstile-150x150.png">
<meta name="msapplication-square310x310logo" content="<?=$RelBasePath?>images/favicons/mstile-310x310.png">
<meta name="msapplication-wide310x150logo" content="<?=$RelBasePath?>images/favicons/mstile-310x150.png">



<link href="<?=$RelBasePath?>communs/gepapir" rel="stylesheet" type="text/css">



<script src="<?=$RelBasePath?>communs/ondomready/ondomready.jz"></script>
<script src="<?=$RelBasePath?>communs/tools.jz"></script>
<script>
<? // Utilisation onDomReady https://github.com/tubalmartin/ondomready ?>
onDomReady(writeCSSRespImg);
</script>
