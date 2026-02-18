<?php
/*******************************************************************************
 Entête commun pages
*******************************************************************************/



require_once($RelBasePath . 'communs/http_headers.inc.php');

require_once($RelBasePath . 'communs/separateurs.inc.php');

?><!DOCTYPE html>

<html lang="fr">

<head>
<title><?=$title?></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<? // Pour responsive design : http://www.w3.org/TR/mwabp/#bp-viewport ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?
/****
 * Favicon
 *   Générateur http://realfavicongenerator.net/
 ***/
?>
<link rel="apple-touch-icon" sizes="180x180" href="<?=$RelBasePath?>images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=$RelBasePath?>images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$RelBasePath?>images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?=$RelBasePath?>site.webmanifest">
<link rel="mask-icon" href="<?=$RelBasePath?>images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">





<link href="<?=$RelBasePath?>communs/gepapir?2026-02" rel="stylesheet" type="text/css">



<script src="<?= $RelBasePath ?>communs/ondomready/ondomready.jz"></script>



<link rel="alternate" type="application/rss+xml" title="GEPApiR changelog" href="<?= $RelBasePath ?>rss.php">
