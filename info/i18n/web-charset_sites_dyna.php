<?php
$date_creation = "06/08/2007";
$date_maj = "30/07/2014";

// NAVIGATION
$idrub = 1;
$RelBasePath = "../../";
$title = "Web & charset : notions particulières au développement de sites dynamiques - i18n - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
?>
<?php
require_once($RelBasePath . 'communs/info_web-charset_navlink.inc');
require_once($RelBasePath . 'communs/header2.inc');
?>



<!-- Titre & intro - DEBUT -->
<h1>
<?
require_once('../info_h1.inc');
?>
<br>
Internationalisation<br>
Web & charset : notions particulières au développement de sites dynamiques</h1>

<p class="travaux">
<img src="<?=$RelBasePath?>images/en_construction.jpg" width="505" height="37" alt="En construction...">
</p>

<p>Un site avec des contenus en langue française, OK... Mais quel codage 
utiliser ? Voici un petit tour d'horizon pour pouvoir faire son choix.</p>
<!-- Titre & intro - FIN -->



<?=writeHR()?>



<h2><acronym title="American Standard Code for Information Interchange">Ascii</acronym>, et sur-ensembles ASCII sur 8 bits</h2>

<p><acronym>ASCII</acronym> reste l'Esperanto informatique en ce qui concerne les échanges de 
texte. Jeux comprenant 127 caractères, nommé officiellement us-ascii, il a été 
beaucoup utilisé "à l'époque"... Et puis on a eu besoin très rapidement de plus 
de caractères, par exemple pour les langues latines or anglais comme le 
français O:). On a donc utilisé le 8eme bit, ce qui a porté à 256 caractères... 
Mais reste largement insuffisant pour toutes les langues utilisées sur la 
planète ! Sont donc apparus de très nombreux charset basés sur cette table de 
127 entrées, et rajoutant 128 entrées supplémentaires.</p>

<p>Pour tous ces jeux de caractère, le codage est très simple : à un numéro de 
caractère donné correspond son octet dans le codage. Par exemple, le caractère 
"p" est le numéro 112 de us-ascii et ses dérivés. Il sera donc codé en 0x70.</p>

<p>Attention : tous les jeux de caractères 8 bits ne sont pas basés sur 
us-ascii... IBM par exemple a beaucoup utilisé sur ses systèmes <abbr title="Extended Binary-Coded Decimal Interchange Code">EBCDIC</abbr>, codage 
concurrent et évidemment non compatible...</p>

<p>Pour l'anglais pratiqué en Grande Bretagne et aux <abbr>USA</abbr> (en-gb et en-us), 
us-ascii suffit amplement. Pour le français donc... Il faut se tourner 
ailleurs !</p>



<?=writeHR()?>



<h2><abbr title="International Organization for Standardization">ISO</abbr> Latin-1 (8859-1) et Latin-9 (8859-15)</h2>

<p><abbr>ISO</abbr> Latin-1 est l'un des jeux de caractères les plus répandus 
en Europe de l'Ouest, et ce depuis plusieurs années ! Le support est donc 
excellent, quel que soit le logiciel (éditeur, navigateur, SGBD, ...)</p>

<p>Malheureusement, <abbr>ISO</abbr> Latin-1 ne contient pas certains caractères comme... le
symbole monétaire "€" ! Cela rend donc son usage aujourd'hui assez délicat... 
De plus des langues d'Europe de l'Est nécessiteront d'autres caractères, et 
avec la croissance de l'<abbr title="Union Européenne">UE</abbr>...</p>

<p>Pour remédier à ces points, il a été décidé de réaliser une modification de 
Latin-1. Ce sera <abbr title="International Organization for Standardization">ISO</abbr> Latin-9. 
Malheureusement, le temps pris à standardiser Latin-9 fut bien trop long... Et 
il arriva bien trop tard pour les attentes du marché... en 1999 !</p>

<p>Ainsi, on conseille souvent de ne pas utiliser Latin-9, car au moment de son 
introduction <a href="#Unicode">Unicode</a> était déjà largement utilisable. 
Cependant, aujourd'hui, Latin-9 est à prioris assez bien supporté par les 
principaux navigateurs (dernières versions de Netscape 4 puis versions suivantes, 
Microsoft Internet Explorer 5+ pour Windows et 5 pour MacOS, Mozilla Suite ou 
Firefox, Opera, Safari), et devrais donc pouvoir être utilisé dans le cas 
où une contrainte quelconque empêche le passage à Unicode.</p>

<table>
<caption>Principaux caractères remplacés entre Latin-1 et Latin-9</caption>
<thead>
  <tr>
    <th>Nom Unicode en Latin-1</th>
    <th>Code point Unicode en Latin-1</th>
    <th>Position</th>
    <th>Nom Unicode en Latin-9</th>
    <th>Code point Unicode en Latin-9</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td></td>
  </tr>
</tbody>
</table>
<p>Pour plus de détails, merci de consulter les <a href="#liens-loc-car">références en bas de page</a>.</p>



<?=writeHR()?>



<h2>Windows-1252</h2>

<p>Microsoft, qui n'avait sans doute pas envie d'attendre la sortie de Latin-9, 
lança avec Windows 95 un concurrent direct de <abbr>ISO</abbr> Latin-9 : 
Windows 1252. C'est un jeux assez répandu, et pour cause : de très nombreuses 
applications Windows ne proposent pas de choix de codage à l'enregistrement... 
Elles enregistrent tout simplement en Windows-1252 !</p>

<p>A noter qu'il existe plusieurs versions de Windows-1252... Suivant les 
versions de Windows ! Par ailleurs, ce codage est un sur-ensemble à <abbr>ISO</abbr> Latin-1, 
les caractères supplémentaires étant ajoutés dans une zone qui est réservée pour 
l'<abbr>ISO</abbr> (0x80 .. 0x9F).</p>

<p>Bien que ce codage soit directement attaché à l'éditeur Microsoft et à sa 
plateforme Windows, de nombreux concepteurs avancent que plusieurs navigateurs 
non Windows le supporte sans problème. Cependant, la table de caractères ayant 
connue plusieurs versions, le codage n'étant pas normalisé, il parait difficile 
de l'utiliser serainement sur l'Internet.</p>



<?=writeHR()?>



<h2 id="Unicode"><abbr title="International Organization for Standardization">ISO</abbr> 10646 et Unicode</h2>

<p>Les besoins étaient là depuis longtemps : documents multilingues, 
interopérabilité, ... Deux projets ont vus le jour : celui de l'<abbr title="International Organization for Standardization">ISO</abbr> 
et celui d'un consortium créé pour l'occasion, Unicode. Afin de ne pas se 
porter concurrence, les deux organismes se sont accordés et les deux jeux de 
caractères <abbr>ISO</abbr> 10646 et Unicode sont en tous points identiques ! 
Cependant sur le marché c'est bien Unicode qui s'est imposé et qui est le 
plus connu.</p>

<p>Il existe plusieurs versions du standard Unicode, et la dernière à ce jour 
recense plus de... 93000 caractères ! Ce qui signifie qu'un document 
enregistré en utilisant ce standard peut contenir chacun de ces caractères... 
Une révolution !</p>

<p>Unicode a donc ce fantastique jeux de caractère... Et plusieurs codages 
possibles :</p>
<ul>
	<li>UTF-7 : vieux codage, créé principallement pour des applications email</li>
	<li>UTF-8 : codage à nombre d'octets variables (entre 1 et 6). Sa principale 
	caractéristique est d'être compatible avec us-ascii. C'est le codage tout 
	indiqué si l'on souhaite utiliser Unicode sur le Web !</li>
	<li>UTF-16 : très souvent utilisé, principallement parce que pendant quelques 
	temps 2 octets suffisaient à coder tous les caractères Unicode. Sur le Web, 
	c'est un codage déconseillé.</li>
	<li>UTF-32 : récent...</li>
</ul>

<p>Sur le Web, c'est donc UTF-8 qu'il est le plus judicieux d'utiliser. Le 
support pour ce codage est d'ailleurs excellent, il a même été réellement 
utilisable largement avant <abbr>Iso</abbr> Latin-9 !</p>

<p>Code Point, BOM</p>

<p>Inconvénient : taille</p>



<?=writeHR()?>



<h2>Références</h2>

<ul>
	<li>Des pages conçues par Olivier Miakinen, émérite contributeur à <a href="news://fr.comp.infosystemes.www.auteurs">f.c.i.w.auteurs</a>, 
	et détaillant de manière très visuelle <a href="http://www.miakinen.net/vrac/charsets">les tables des principaux codages utilisés en Europe de l'Ouest</a>, 
	avec bcp d'indications connexes fort intéressantes (code point Unicode, ...)</li>
	<li><a href="http://www.cs.tut.fi/~jkorpela/www/windows-chars.html">On the use of some MS Windows characters in HTML</a></li>
	<li><a href="http://www.cs.tut.fi/~jkorpela/latin9.html">ISO Latin 9 as compared with ISO Latin 1</a></li>
</ul>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc');
?>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>

