<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "06/02/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Performances - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Performances
</h1>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Introduction</h2>

<p class="callout" data-variant="warning">Attention, on va parler ici de performances front-end : il ne s'agit donc pas
d'optimisation côté serveur, mais plutôt d'améliorer les temps de téléchargement
et rendu côté client !</p>

<p>Malheureusement, alors que le sujet est assez populaire dans
la communauté de concepteurs web au moins depuis 2007, les bonnes pratiques ne sont
pas encore installées ! Et pourtant, bien souvent c'est bien là que les performances
pèchent...<br>
Voyez par exemple cette capture d'un site dynamique peu optimisé : le rendu total
dure 1.21s, dont environ 300ms de rendu serveur... soit moins du quart !</p>

<p style="text-align: center;">
<img src="<?=$RelBasePath?>images/info/perf-page-non-optimisee.min.png"
 width="646" height="610"
 alt="Rendu d'un site peu optimisé" class="pretty-img" data-responsive-img>
</p>

<p>Pour optimiser son site, il faut travailler autour des 3 axes suivants... Les méthodes pour y parvenir sont détaillées ci-après.</p>

<ul>
	<li>Taille : évidemment, diminuer la taille des contenus transférés</li>
	<li>Nombre de requêtes HTTP : le plus petit possible, les navigateurs étant limités
	dans le nombre de téléchargements concurrents</li>
	<li>JavaScript : la lecture des fichiers JavaScript et leur exécution peuvent
	ralentir un site considérablement !</li>
</ul>



<?=writeHR()?>



<h2>Outils</h2>

<p>Pour diagnostiquer, vérifier ce qui est mis en place etc il va falloir s'outiller !
Quelques exemples de logiciels importants :</p>

<ul>
	<li>Firefox outils de développement, onglet Réseau</li>
	<li>Idem sur Chrome</li>
	<li>Pour Firefox, l'extension <a href="https://developer.yahoo.com/yslow/">YSlow</a>
	est un excellent produit (sans doute le meilleur pour ce sujet !), qui produit
	des diagnostiques en relation avec la base de bonne pratique de Yahoo. Par contre
	celà nécessite d'installer également <a href="http://getfirebug.com/">Firebug</a>...</li>
	<li>Le site <a href="http://tools.pingdom.com/fpt/">Pingdom Website speed test</a></li>
</ul>



<?=writeHR()?>



<h2>Taille : compression des images</h2>

<p>Quelque soit le format de l'image (PNG, JPEG, GIF, WebP), il y a possibilité d'optimiser
la taille... ne serait-ce qu'en supprimant les métadonnées, et aussi bien sûr en
faisant varier la compression pour s'approcher du meilleur compromis taille/qualité !</p>

<p>Plusieurs sites proposent ce service en ligne, et également des outils à installer.
Citons en particulier <a href="http://pngcrush.com/">PNGCrush</a> et le site <a href="http://compresspng.com/">http://compresspng.com/</a>.</p>

<p>Le format <a href="https://fr.wikipedia.org/wiki/WebP">WebP</a> offre quand même des résultats assez époustouflants... Et est par conséquent utilisé sur ce site !</p>



<?=writeHR()?>



<h2>Taille : minification, compression gzip</h2>


<h3>Généralités</h3>

<p>Un moyen de réduire la taille des resources transmises est de supprimer les commentaires
et caractères blancs (espaces, tabulations, ...). En particulier sur les fichiers
CSS et JavaScript, le gain peut être important !</p>

<p>Il existe aussi la compression gzip. C'est un mécanisme présent depuis longtemps
maintenant et par conséquent très largement supporté !<br>
Voir cet article pour plus de détails : <a href="http://www.alsacreations.com/article/lire/914-compression-pages-html-css-gzip-deflate.html">Cache et compression des pages web avec Gzip ou Deflate en HTTP - Alsacreations</a>.</p>

<p>Plusieurs outils proposent de réaliser ces tâches de manière automatique, et il
est bien sûr possible de le faire dynamiquement sur le serveur à chaque requête ou
de l'intégrer à votre outil de build.</p>


<h3>Mise en place</h3>

<p>Sur le serveur de pages perso de Free malheureusement, il y a peu de latitudes
de configuration. Mais il reste possible d'utiliser plusieurs mécanismes !<br>
Cet article m'a donné toutes les clés pour avancer : <a href="http://les.pages.perso.chez.free.fr/index.php/post/2012/06/05/Activer-la-compression-sur-les-Pages-Perso">Activer la compression sur les Pages Perso - Les Pages Perso Chez Free</a></p>

<p>Et j'ai donc mis en place une compression sur :</p>

<ul>
	<li>toutes les pages php (avec <code>&lt;?php ob_start('ob_gzhandler');</code> et <code>&lt;?php ob_end_flush(); ?></code>)</li>
	<li>le fichier CSS du site</li>
	<li>le fichier JavaScript de fonctions utilitaires</li>
</ul>

<p>Les fichiers CSS et JS ont été minifiés et compressés en utilisant un site permettant
d'utiliser l'excellent YUI Compressor en ligne : <a href="http://refresh-sf.com/">Online YUI Compressor</a>.</p>


<h3>Visualiser les taux de compression</h3>

<p>Exemple de moyens disponibles au développeur :</p>

<dl>
<dt>Firefox</dt>
<dd>Les outils de développements affichent la taille de transfert (ce qui est passé sur le réseau) et la taille réelle entre parenthèse.Exemple : <q>5,97 Ko (taille 14,65 Ko)</q>.<br>
Attention sur d'anciennes versions un bug était présent, mais il a été corrigé à en 2014 : <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=731318">731318 – Display response size before and after content decoding</a>).</dd>
<dt>Chrome</dt>
<dd>Les outils de développement Chrome gèrent bien la compression - un bug
existait également mais a été corrigé en avril 2011 : <a href="https://code.google.com/p/chromium/issues/detail?id=40502">Issue 40502 - chromium - DevTools don't show compressed size of pages with chunked encoding - An open-source project to help move the web forward. - Google Project Hosting</a>.</dd>
<dt>Outil en ligne</dt>
<dd>par exemple sur <a href="http://seositecheckup.com/tool/html_compression_status">HTML Compression/GZIP Test | SeoSiteCheckup.com</a></dd>
<dt>Et aussi...</dt>
<dd>Dans les entêtes HTTP ! en particulier <code>Content-Encoding :"gzip"</code> et
<code>Content-Length</code></dd>
</dl>



<?=writeHR()?>



<h2>Nombre de requêtes HTTP : concaténation, CDN</h2>

<p>Première chose à faire pour réduire le nombre de requêtes HTTP : regrouper le
code ! En particulier en CSS et JavaScript (on verra au chapitre suivant que c'est
possible pour les images également).</p>

<p>Aussi, on peut servir les resources depuis un domaine différent de la page :
celà permet de contourner une limitation du navigateur. En particulier sur la GepapiR,
plusieurs resources sont appelées sur les sites originaux :</p>

<ul>
	<li>les images HTML 5 et CSS de la page d'accueil depuis les serveurs du W3C</li>
	<li>la web font des titres H2 depuis les serveurs Google</li>
	<li>les fichiers JS et CSS de l'outil de coloration syntaxique du code depuis <a href="https://highlightjs.org/download/">l'adresse proposée par l'éditeur</a></li>
</ul>



<?=writeHR()?>



<h2>Nombre de requêtes HTTP : CSS Sprites</h2>


<h3>Principe</h3>

<p class="callout" data-variant="info">Les CSS Sprites sont une technique permettant de réduire le nombre de resources
à appeler dans une page : on regroupe en effet plusieurs images en une seule ! <br>
Cela permet aussi de mieux gérer la politique de cache, et parfois apporte des gains de
taille de fichiers (un fichier regroupant plusieurs icones aura souvent une taille
inférieure à la somme des petits fichiers de chaque icone).</p>

<p>Le principe est simple : plutôt que d'insérer avec la balise <code>img</code>,
on crée un élément que l'on dimensionne à la taille de l'image, et on lui applique
une image de fond. Cette image de fond regroupe les resources identiques, on
sélectionne l'image voulue grace à <a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background-position"><code>background-position;</code></a>.<br>
Cet article chez Alsacreations explique bien la chose : <a href="http://www.alsacreations.com/tuto/lire/1068-sprites-css-background-position.html">Les sprites CSS - Alsacreations</a>.</p>


<h3>Mise en place</h3>

<p>Sur la GEPApiR, ce sont les séparateurs qui
utilisent cette technique (respectivement, mêmes largeurs et mêmes hauteurs).<br>
Les images ont été regroupées grace à l'excellent <a href="http://draeton.github.io/stitches/">Stitches</a> !</p>

<p>Le code :</p>

<pre><code class="html">
<?php
echo htmlspecialchars(<<<'HTML'
<!-- Séparateurs -->
<style>
hr.sep
{
clear: left;
margin: 4ex auto;
width: 630px;
border-style: none;
background-image: url("../images/separateurs/separateurs-sprites.png");
background-repeat: no-repeat;
box-shadow: 1px 1px 8px rgba(0,0,0,0.5);
}

/* Win 3.x */
hr.sep1
{
height: 23px;
background-position: 0 -59px;
}
</style>

<hr class="sep sep1">
HTML
);
?>
</code></pre>



<?=writeHR()?>



<h2>Nombre de requêtes HTTP : cache</h2>

<p class="callout" data-variant="info">C'est un moyen simple de réduire le nombre de requêtes : permettre de mettre en
cache sur le navigateur des resources, qui ne seront ainsi téléchargées que une
seule fois !</p>

<p>Malheureusement sur le site des pages perso de Free il n'est pas possible d'utiliser
les directives pour personnaliser le comportement du serveur... Aussi faut-il se
contenter de la configuration par défaut, basée sur Etag et requêtes <code>If-Modified-Since</code>.
En conséquent, si on gagne sur les données transférées, on a quand même toujours
des requêtes http qui partent...</p>

<p class="callout" data-variant="tip">Le document d'absolu référence sur le sujet, qui vous fera tout comprendre du
fonctionnement du cache sur HTTP, et vous permettra de décider quelle technique adopter
pour vos besoins : <br>
<a href="https://www.mnot.net/cache_docs/">Un tutoriel de la mise en cache pour les auteurs Web et les webmestres</a>.</p>



<?=writeHR()?>



<h2>JavaScript</h2>

<p>Chapitre à venir au prochain épisode ! :)</p>



<?=writeHR()?>



<h2>Pour aller plus loin...</h2>

<p>Quelques sites pour en apprendre un peu plus :</p>

<ul>
	<li>La référence absolue sur le sujet sur Yahoo Developper : <a href="https://developer.yahoo.com/performance/">Exceptional Performance</a>.</li>
	<li>Un excellent blog de Eric Daspet, plus maintenu mais qui contient encore toutes
	les archives avec de très bons articles : <a href="http://performance.survol.fr/">Performance web | Quelques mots pour des sites web rapides</a>.</li>
	<li>Site anglophone, avec des articles de très bonne qualité : <a href="http://www.websiteoptimization.com/">Web Site Optimization: Speed Up Your Site website optimization web speed optimize web site performance company</a>.</li>
</ul>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
