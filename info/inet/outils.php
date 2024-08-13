<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "24/08/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "Outils pour le concepteur de site personnel (et plus) - Internet - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Outils pour le concepteur de site personnel (et plus)
</h1>

<p>Une petite liste d'outils pratiques pour le concepteur de site personnel !</p>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Standards et documentation</h2>

<ul>
	<li><a href="http://www.w3.org/TR/html401/">Recommandation HTML 4.01</a></li>
	<li><a href="http://www.w3.org/TR/html5/">Recommandation HTML 5</a></li>
	<li>W3C : <a href="http://www.w3.org/TR/html5-diff/">Differences from HTML4</a></li>
	<li><a href="http://www.w3.org/TR/CSS21/">Recommandation CSS 2.1</a></li>
	<li><a href="http://www.w3.org/TR/2011/REC-css3-selectors-20110929/">Recommandation CSS Selector Level 3</a></li>
	<li><a href="http://www.w3.org/TR/css3-mediaqueries/">Recommandation Media Queries</a></li>
	<li><a href="http://www.w3.org/Consortium/Process-20010719/tr">W3C Process Document</a> :
	pour connaitre la signification des niveaux des recommandations W3C (working draft, etc)</li>
	<li><a href="http://caniuse.com/">Can I use.com</a> : référence le support
	navigateur HTML, CSS, etc. Indispensable !</li>
	<li><a href="https://www.mnot.net/cache_docs/">Un tutoriel de la mise en cache</a> :
	document de référence sur le sujet !</li>
	<li>Si vous êtes hébergé chez Free : <a href="http://les.pages.perso.chez.free.fr/index.php/">Les Pages Perso Chez Free</a></li>
</ul>



<?=writeHR()?>



<h2>Editeurs</h2>

<dl>
	<dt>PSPad</dt>
	<dd><a href="http://www.pspad.com/">http://www.pspad.com/</a><br>
	Editeur gratuit et extremmement fonctionnel sur Windows !</dd>
	<dt>DroidEdit</dt>
	<dd><a href="http://www.droidedit.com/">http://www.droidedit.com/</a><br>
	Heureux pocesseur d'une tablette Android avec clavier physique, j'ai utilisé
	plusieurs ce très bon éditeur Androïd pour rédiger du HTML, PHP, JavaScript,
	CSS, ...</dd>
	<dt>Emmet</dt>
	<dd><a href="http://emmet.io/">http://emmet.io/</a><br>
	Permet d'écrire très très vite du HTML, en rédigeant <a href="http://docs.emmet.io/cheat-sheet/">des racourcis</a>
	qui sont transformés en HTML par l'outil.<br>
	Disponible sur de très nombreux éditeurs et IDE, en particulier PSPad via un
	plugin, et nativement sur DroidEdit !</dd>
</dl>



<?=writeHR()?>



<h2>Graphisme</h2>

<dl>
	<dt>Paint.net</dt>
	<dd><a href="http://www.getpaint.net/">http://www.getpaint.net/</a><br>
	A une époque lointaine, c'était Paint Shop Pro qui était utilisé par tous les non
	graphistes sur Windows... Paint.Net est gratuit et bourré de fonctionnalités !</dd>
	<dt>Plugin optiPNG pour Paint.net</dt>
	<dd><a href="http://forums.getpaint.net/index.php?showtopic=22841">http://forums.getpaint.net/index.php?showtopic=22841</a><br>
	Pour enregistrer des PNG optimisés.</dd>
	<dt>Générateurs de sprites CSS</dt>
	<dd>Permet de regrouper des images pour utiliser la technique des CSS Sprites.<br>
	De très nombreux sites proposent ce service, pour ma part j'apprécie beaucoup
	<a href="http://draeton.github.io/stitches/">Stitches</a>.</dd>
	<dt>Sites optimisations PNG</dt>
	<dd>Il en existe une multitude... Citons en particulier <a href="http://compresspng.com/">http://compresspng.com/</a></dd>
	<dt>RealFavicons</dt>
	<dd><a href="http://realfavicongenerator.net/">http://realfavicongenerator.net/</a><br>
	Génère quasiment l'ensemble des icones possibles (navigateurs desktop, iOS,
	Android, Windows 8)</dd>
	<dt>Web Fonts</dt>
	<dd>L'excellente librairie <a href="https://www.google.com/fonts#">Google Fonts</a> !</dd>
</dl>



<?=writeHR()?>



<h2>Synchronisation FTP</h2>

<p>Après plusieurs années d'essai d'outils divers, j'utilise maintenant sur Windows
le logiciel <a href="http://www.goodsync.com/">GoodSync</a>.
C'est un shareware mais avec une version gratuite limitée - cf la page décrivant
ces limitations : <a href="http://www.goodsync.com/how-it-works/free-vs-pro">GoodSync Free vs. Pro</a>.</p>



<?=writeHR()?>



<h2>Outils de test</h2>

<p>Pour Microsoft Internet Explorer, le site indispensable : <a href="https://www.modern.ie/fr-fr">Test : interopérabilité, navigateur &amp; multiplateforme | Modern.IE</a> (bravo Microsoft !).</p>

<p>Le responsive design peut être testé sur son pc directement avec par exemple :</p>

<ul>
	<li>Dans Firefox, la vue adaptive (Ctrl + Maj + M, ou développement / vue adaptive)</li>
	<li>Dans Chrome avec l'émulation : <a href="https://developer.chrome.com/devtools/docs/device-mode">Device Mode &amp; Mobile Emulation - Google Chrome</a>. Assez complet avec le support de la
	résolution, du pixel ratio, du user agent, de l'événement touch, etc</li>
</ul>

<p>Lire ce bon article de Alsacréations sur le sujet : <a href="http://www.alsacreations.com/article/lire/1634-comment-tester-un-site-responsive-partie-1.html">Comment tester un site responsive? (partie 1) - Alsacreations</a>.</p>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc.php');
?>



</body>
</html>
<?php ob_end_flush(); ?>