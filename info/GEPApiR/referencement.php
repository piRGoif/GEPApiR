<?php ob_start('ob_gzhandler');
$date_creation = "18/02/2026";
$date_maj = "18/02/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Référencement - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Référencement
</h1>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>Sujet complexe et qui évolue constamment ! Et dans lequel je n'ai pas particulièrement d'attentes : ce site est très modeste, mais j'y partage aussi quelques informations, autant qu'elles puissent être vues O:)</p>

<p>Ma première démarche a été de réaliser des pages :</p>

<ul>
    <li>avec un balisage précis (utilisation de <code>nav</code> et balises de titres par exemple)</li>
    <li>des performances correctes : temps de chargement, volume de données</li>
</ul>

<p>Mais j'ai également investit dans les sujets suivants !</p>



<?= writeHR() ?>



<h2>Google Search Console : suivi du référencement</h2>

<p>Cette interface mise à disposition gratuitement par Google permet de vérifier que les URL sont bien référencées par le moteur, et donne des clés pour améliorer leur utilisation par le moteur de rechercher !</p>

<p class="callout" data-variant="tip">A aller voir ici : <a href="https://search.google.com/search-console">Google Search Console</a></p>



<?= writeHR() ?>



<h2>Données structurées pour les dates de mise à jour</h2>

<h3>Sitemaps</h3>

<p>Un bon moyen d'aider les moteurs de recherche est de fournir un plan de son site sous forme structurée en XML. Mais je ne souhaitais pas me lancer dans la maintenance de ce fichier pour un si petit site...</p>

<p class="callout" data-variant="info">Les informations sur le format Sitemaps : <a href="https://en.wikipedia.org/wiki/Sitemaps">Sitemaps - Wikipedia</a></p>

<h3>CreativeWork</h3>   
    
<p>Il est aussi possible de fournir des données sous format JSON dans chacune des pages concernées ! C'est un moyen très simple de fournir les dates de manière compréhensibles pour les robots des moteurs de recherche, et c'est ce que j'ai fait ! Ainsi, chaque page portant une date de création / modification, comme la page que ovus êtes en train de lire, se voit ajouter les données.</p>

<div class="callout" data-variant="info">
    Deux documents intéressants sur le sujet : 
    <ul>
        <li>Chez Google exemple pour spécifier des dates : <a href="https://developers.google.com/search/docs/appearance/publication-dates?hl=fr">Ajouter une date de publication aux résultats de recherche Google | Google Search Central  |  Documentation  |  Google for Developers</a></li>
        <li>Documentation du format : <a href="https://schema.org/CreativeWork">CreativeWork - Schema.org Type</a></li>
</div>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
