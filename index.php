<?php ob_start('ob_gzhandler');
// Version 20141012
$pageVersion = "v7.9.3";

// NAVIGATION
$RelBasePath = "";
$title = "Accueil [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
?>

<meta name="description" content="Le site personnel de Pierre Goiffon, contenant
toute la musique qu'il aime (elle vient de là, elle vient... oui bon), quelques 
bafouilles techniques autour des technologies de l'Internet et du développement, 
et encore d'autres trucs (pour le goût)">

<link rel="alternate" type="application/rss+xml" title="GepapiR Changelog"
 href="http://feed43.com/gepapir.xml">

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
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
<a href="<?=$RelBasePath?>">
<img src="images/titres/rub1_accueil.jpg" width="575" height="167" data-responsive-img
alt="La GEPApiR">
</a><br>
Le site personnel de Pierre Goiffon<br>
<?=$pageVersion?> Official Service Release<br>
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
Cependant ces pages respectent plusieur bonnes pratiques (sprites, minification/compression, ...) 
et sont valides <a href="http://www.w3.org/TR/html5/" title="Recommandations W3C pour HTML 5">HTML
5</a> et <a href="http://www.w3.org/Style/CSS/" title="W3C CSS HomePage">CSS 3</a>. 
Vous trouverez des détails sur les techniques utilisées sur ce site en consultant
cette sous rubrique : <a href="info/#GepapiR">La GepapiR côté technique</a>.</p>

<p id="w3clogo">
<a href="http://validator.w3.org/check?uri=referer"><img
 src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="63" height="64"
 alt="HTML5 Powered" title="HTML5 Powered"></a> <a
 href="http://jigsaw.w3.org/css-validator/check/referer"><img
 style="border:0px;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss"
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



<?=writeHR()?>



<h2 id="changelog-title">Changelog</h2>

<p>
Ci dessous les dernières mises à jour sur le site.<br>
Ces mises à jour sont disponibles en RSS grace au service de <a href="http://feed43.com/">Feed43</a> :
<a href="http://feed43.com/gepapir.xml"><img src="images/feed-icon.gif" alt="RSS" width="16" height="16"></a></p>



<dl id="changelog-ul">

<?
/****
<dt>TODO</dt>
<dd>
+ html vs xhtml actualisation
+ css.php blockquote (radius, shadow, border-left)
+ Finale fonctions utiles (ctrl + flèche haut/bas, saisie clavier, nb systèmes par page, nb mesures par systèmes, script raz pauses, créa coda, couches)
+ informatique / perf : limite naviguateurs nb requêtes parallèles
+ informatique / perf : compléments JavaScript
+ informatique / perf : sélecteurs CSS ?
+ informatique : ajout d'une <a href="info/index.php#dev">rubrique Développement</a>, article IDE<br>
+ desc dans les liens
+ i18n mise en jambe
+ i18n site dynamiques
+ apps android
+ apps windows
+ bureaux
</dd>
****/
?>
    
<dt>??, v??</dt>
<dd>
    - 
</dd>

<dt>12/10/2014, v7.9.3</dt>
<dd>
- modification du texte de la page d'accueil,<br>
- correction de la couleur des liens de la barre de navigation,<br>
- informatique / <a href="info/GEPApiR/css.php">CSS mises en forme diverses</a> : 
complément sur la compatibilité navigateurs,<br>
- informatique / <a href="info/GEPApiR/menu_nav.php">Menu de navigation</a> : complément
sur la bordure,<br>
- informatique / <a href="info/inet/ND_doctype.php">Développement Notes / Domino et doctype HTML</a> : 
maj suite à constatation que le DarkBlog n'est plus accessible
</dd>

<dt>02/09/2014, v7.8.1</dt>
<dd>
informatique / <a href="info/GEPApiR/responsive.php">responsive design</a> :<br>
- introduction plus complète,<br>
- ajout d'exemples sur les marges en %,<br>
- précision sur le border-radius du menu
</dd>

<dt>30/08/2014, v7.8.0</dt>
<dd>
- marges horizontales en %,<br>
- passage de l'arrondi du menu en % pour la composante horizontale,<br>
- informatique / <a href="info/GEPApiR/responsive.php">responsive design</a> :
mise à jour des captures du menu et de la fonction writeCSSRespImg(), ajout d'un
paragraphe sur les unités CSS relatives,<br>
- ajout de box-shadow, border-radius et border outset sur les blockquote
</dd>

<dt>29/08/2014, v7.7.5</dt>
<dd>
- ajout du gzip sur les pages du site,<br>
- minification et ajout du gzip sur la css et le javascript du site,<br>
- informatique / <a href="info/GEPApiR/performances.php">performances</a> : renommage de la page (anciennement CSS Sprites) et ajout d'info sur les autres techniques utilisées (concaténation, minification, gzip, ...),<br>
- ajout d'arrondis sur la bordure du menu,<br>
- ajout d'une marge sous les images des H1,<br>
- informatique / <a href="info/GEPApiR/css.php">mises en forme diverses</a> : compléments supplémentaires sur CSS Shapes,<br>
- informatique / <a href="info/inet/outils.php">outils pour le concepteur de site personnel</a> :
ajout d'outils de test responsive design,<br>
- mini corrections diverses dans des articles
</dd>

<dt>23/08/2014, v7.6.1</dt>
<dd>
- musiques : création d'<a href="zicmue/finale.php">une page sur Finale</a>,<br>
- informatique / <a href="info/GEPApiR/css.php">mises en forme diverses</a> : ajout de compléments sur CSS Shapes
</dd>

<dt>22/08/2014, v7.5.0</dt>
<dd>
- ajout d'un flux RSS sur le changelog,<br>
- informatique : fait disparaitre les articles pas encore prets,<br>
- informatique / <a href="info/i18n/web-charset_html.php">internationalisation pour le concepteur web</a> : mise à jour,<br>
- informatique / <a href="info/GEPApiR/responsive.php">responsive design</a> : compléments sur les attributs HTML 5 data-*
</dd>

<dt>15/08/2014, v7.4.3</dt>
<dd>
- informatique : ajout au besoin d'un système de TOC automatique (merci <a href="http://www.whitsoftdev.com/articles/toc.html">WhitSoftDev</a>),<br>
- informatique : ajout d'une sous rubrique "<a href="info/#GepapiR">La GepapiR côté technique</a>",<br>
- informatique : ajout d'une page <a href="info/inet/outils.php">outils</a> des
concepteurs de site personnel,<br>
- informatique / <a href="info/inet/css_grp.php">css groupement</a> : changement titre, ajout préproc et variables CSS,<br>
- informatique : mise en place des nouvelles footnotes,<br>
- bascule sur la web font <a href="https://www.google.com/fonts/specimen/Satisfy">Satisfy</a> chez <a href="https://www.google.com/fonts">Google fonts</a>, afin de profiter de leur CDN et polices optimisées !<br>
- moi : ajout d'un lien IMDB
</dd>

<dt>13/08/2014, v7.3.5</dt>
<dd>
- responsive design : gestion des images d'entête (petit oubli oops) via un JS qui se débrouille au chargement, <br>
- ajout d'un clear: left manquant sur les séparateurs,<br>
- musiques : ajout liens pour écouter les démo JeudiSoir et IYB
</dd>

<dt>09/08/2014, v7.3.2</dt>
<dd>
- pour une meilleure expérience sur mobiles et tablettes, responsive design sur les séparateurs
et le menu de navigation (via <a href="http://www.w3.org/TR/css3-mediaqueries/">Media Queries</a>
conjuguée à la <a href="http://www.w3.org/TR/mwabp/#bp-viewport">balise meta viewport</a>), <br>
- menu de navigation : basculé sur le nouvel élément <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">nav</a>,<br>
- menu de navigation : ajout de <a href="http://www.w3.org/TR/CSS21/generate.html">:before</a>
avec <a href="http://www.unicode.org/charts/PDF/U2700.pdf">U+27A6</a> pour les
séparations, <br>
- remise à jour de la rubrique Liens (reste encore pas mal de rédaction), <br>
- mise à jour contenu de la page Musiques,<br>
- corrections sur la lettre pi dans la description ci-dessus
</dd>

<dt>05/08/2014, v7.1.9</dt>
<dd>
- modif de <a href="zicmue/#piR_tromb">l'image dans musiques</a> (border, <a href="http://www.w3.org/TR/css3-background/#box-shadow">box-shadow</a> et <a href="http://www.w3.org/TR/css3-transforms/#funcdef-rotate">transform rotate</a>),<br>
- ajout d'un box-shadow sur les images de titre et les séparateurs,<br>
- ajout d'une image de titre pour <a href="moi/">la rubrique "moi"</a>,<br>
- ajout explications titre du site
</dd>

<dt>01/08/2014, v7.1.5</dt>
<dd>Continuation de la mise à niveau du site :<br>
- mise en sprites de certaines images (icones du menu de navigation, séparateurs),<br>
- menu de navigation : changement de certaines icones,<br>
- menu de navigation : modif du :hover, suppression d'un léger bug de décalage,<br>
- séparateurs : maintenant tirés au sort (un petit F5 pour voir ?),<br>
- séparateurs : ajout d'un séparateur X11,<br>
- séparateurs : ré-ordonnés différemment
</dd>

<dt>30/07/2014, v7.0.5</dt>
<dd>Ouf enfin ! Reprise de ce site... Bon, rien de trop visible mais c'est un début 
de remise à niveau, avant d'attaquer le contenu...<br>
- doctype HTML5,<br>
- ajout de liens vers la home sur les titres de rubriques,<br>
- suppression des hacks IE (nous sommes - et ça fait du bien ! - dans une autre époque),<br>
- fusion des CSS (objectif moins de resources à télécharger),<br>
- remplacement des images des titres de 2eme niveau par du texte (vive les <a href="http://dev.w3.org/csswg/css-fonts/#font-face-rule">web fonts</a> !),<br>
- ré-écriture contenu page d'accueil,<br>
- ajout d'un favicon (oui, ça change tout ! ;) ) (et merci <a href="http://realfavicongenerator.net/">http://realfavicongenerator.net/</a>),<br>
- musiques : mini modif sur l'image,<br>
- musiques : ré-écriture et actualisation des groupes,<br>
- divers : ajout de liens,<br>
- liens : suppression du bookmark
</dd>

<dt>19/04/2009, v6.1.0</dt>
<dd>Correction et compléments dans l'article <a href="info/inet/html_ou_xhtml.php">"HTML ou XHTML ?"</a>
à propos de l'attribut id.
</dd>

</dl>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>
<?php ob_end_flush(); ?>