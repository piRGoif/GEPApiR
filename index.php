<?php ob_start('ob_gzhandler');
// NAVIGATION
$RelBasePath = "";
$title = "Accueil [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/changelog.inc.php');
?>

<meta name="description" content="Le site personnel de Pierre Goiffon, contenant
toute la musique qu'il aime (elle vient de là, elle vient... oui bon), quelques
bafouilles techniques autour des technologies de l'Internet et du développement,
et encore d'autres trucs (pour le goût)">

<style>
#w3clogo
{
text-align: center;
margin: 2ex auto;
}

#w3clogo A
{
margin-left: 20px;
margin-right: 20px;
display: inline-block;
vertical-align: middle;
}
</style>
<?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<a href="<?=$RelBasePath?>">
<img src="images/titres/rub1_accueil.jpg" width="575" height="167" data-responsive-img
alt="La GEPApiR">
</a><br>
Le site personnel de Pierre Goiffon<br>
<?=GepapirChangelog::getCurrentVersion()?> Official Service Release<br>
(Build 2751 : Service Pack 8)</h1>



<?=writeHR()?>



<h2>Introduction</h2>

<p>Ce site est la continuité de ma toute 1<sup>ère</sup> page personnelle,
apparue au début de l'année 1996 sur un coin du serveur de Mediartis (<q>toute
une époque</q>). Au départ liste de liens pour partager les bonnes adresses
(Winfiles, le Web Museum - <q>tient, vous avez ressortit le vitriol ?</q>) et
une seule et unique page, mon site personnel s'est peu à peu étoffé.</p>

<p>Après quelques ajouts, ce site est devenu mon lieu d'expérimentation :
JavaScript, CSS, etc.<br>
Plusieurs fois il a été plongé dans de longues phases de sommeil... Il contient
maintenant un (joyeux ?) bazard, regroupant quelques uns de mes principaux centres
d'intérêts, et en particulier la musique et le développement web.</p>

<p>Vous constaterez que l'esthétique n'est pas du tout à la mode : c'est un choix
délibéré, en souvenir de ce web ancien dont ce site est issu !<br>
Cependant ces pages respectent les bonnes pratiques du web moderne (responsive design,
sprites, minification/compression, ...) et sont valides <a href="http://www.w3.org/TR/html5/" title="Recommandations W3C pour HTML 5">HTML 5</a> et <a href="http://www.w3.org/Style/CSS/" title="W3C CSS HomePage">CSS 3</a>.
Vous trouverez des détails sur les techniques utilisées sur ce site en consultant
cette sous rubrique : <a href="info/#GepapiR">La GepapiR côté technique</a>.</p>

<p id="w3clogo">
<a href="http://validator.w3.org/check?uri=referer">
<img src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="63" height="64" alt="HTML5 Powered" title="HTML5 Powered">
</a> <a
 href="http://jigsaw.w3.org/css-validator/check/referer"><img
 style="border:0px;width:88px;height:31px" src="https://www.w3.org/Icons/valid-css"
 alt="code CSS valide"></a></p>



<?=writeHR()?>



<h2>GEPApiR ?</h2>

<p>Le titre provient de la contraction de "page" en verlan, et de mon pseudo sur
réseau depuis quelques éternités : piR.<br>
Ce pseudo est à prononcer comme mon prénom, "Pierre" ! En fait je l'ai étrenné au
départ (vers fin 1994... oui ça date...) en émulation VT100, et tout déconfi
de ne trouver comment entrer la lettre <a href="http://fr.wikipedia.org/wiki/Pi_%28lettre_grecque%29"
title="lettre grecque pi">&#x1D6D1;</a>
(<a href="http://www.unicode.org/charts/PDF/U0370.pdf">U+03CO</a> pour la lettre
et <a href="http://www.unicode.org/charts/PDF/U1FF80.pdf">U+1D6D1</a> pour le
symbole mathématique) je m'étais alors résolu à simplement saisir "pi" en toutes
lettres, le R majuscule marquant la prononciation !</p>

<p>Les sources de ce site sont ouvertes et disponibles sur <a href="https://github.com/piRGoif/GEPApiR">un dépôt GitHub</a>.</p>



<?=writeHR()?>



<h2 id="changelog-title">Changelog</h2>

<p>
Ci dessous les dernières mises à jour sur le site. Elles sont également <a href="rss.php">disponibles en RSS</a>.
</p>

<?
/****
<dt>TODO</dt>
<dd>
+ ide shortcuts add .kbd
+ no titre repl par CSS counter (http://caniuse.com/#search=counter, https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Counters)
+ css.php blockquote (radius, shadow, border-left)
+ Finale fonctions utiles (ctrl + flèche haut/bas, saisie clavier, nb systèmes par page, nb mesures par systèmes, script raz pauses, créa coda, couches)
+ informatique / perf : limite naviguateurs nb requêtes parallèles
+ informatique / perf : compléments JavaScript
+ informatique / perf : sélecteurs CSS ?
+ desc dans les liens
+ i18n mise en jambe
+ i18n site dynamiques
+ apps android
+ apps windows
+ bureaux
</dd>
****/
?>

<?=HtmlChangelogRenderer::getContent(7)?>


<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
