<?php ob_start('ob_gzhandler');



/**
 * RSS feed for GEPApiR
 * @uses RssChangelogRenderer
 */



header('Content-Type: application/rss+xml; charset=utf-8');




$RelBasePath = "";
require_once($RelBasePath . 'communs/changelog.inc.php');


echo RssChangelogRenderer::getContent();


ob_end_flush();