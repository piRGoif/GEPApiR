<?php
$date_creation = "06/08/2007";
$date_maj = "30/07/2014";

// NAVIGATION
$idrub = 1;
$RelBasePath = "../../";
$title = "Web & charset : notions fondamentales - i18n - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?>
<?php
require_once($RelBasePath . 'communs/info_web-charset_navlink.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<!-- Titre & intro - DEBUT -->
<h1>
<?
require_once('../info_h1.inc');
?>
<br>
Internationalisation<br>
Web & charset : notions fondamentales</h1>

<p class="travaux">
<img src="<?=$RelBasePath?>images/en_construction.jpg" width="505" height="37" alt="En construction...">
</p>

<p>Les notions fondamentales pour aborder les problématiques d'internationalisation
de pages sur le Web.</p>
<!-- Titre & intro - FIN -->



<?=writeHR()?>



<h2>Charset, encoding, codage ??</h2>

<p>Comme vous le savez, les ordinateurs "parlent" uniquement binaire. Ainsi,
toutes les données qu'ils manipulent sont au final exprimés sous forme de simple
0 et 1. Nous allons nous intéresser ici plus particulièrement aux méthodes
utilisées pour transformer des suites de glyphes en bits, et inversement. C'est
très rapidement ainsi que l'on pourrait définir un codage (encoding en anglais) :
l'ensemble de règles utilisées pour qu'un texte soit exprimé sous forme de bits,
et inversement l'ensemble de règles à utliser pour déterminer quelles glyphes sont
contenus dans un flux binaire.</p>

<blockquote>
<p>Exemple :<br>
en utilisant le codage ISO Latin-1 le caractère "e" correspond à 0x65 (ou autrement exprimé : 0110 0101)
</p>
</blockquote>

<p>De par l'histoire de l'informatique, de très nombreux codages existent. Certains
ont été conçus par des constructeurs et sont restés propriétaires, d'autres ont
été normalisés - on le verra plus bas.</p>

<p>Tous les codages s'appuient sur un jeux de caractères (character set ou charset
en anglais) associé : cette table représente la liste des différents caractères
que l'on pourra utiliser. Le raccourci entre jeux de caractères et codage est souvent
fait, mais c'est une erreur : le jeux de caractères Unicode peut ainsi être utilisé
via 4 codages différents !</p>



<?=writeHR()?>



<h2><acronym title="American Standard Code for Information Interchange">Ascii</acronym>, et sur-ensembles ASCII sur 8 bits</h2>

<p>ASCII reste l'Esperanto informatique en ce qui concerne les
échanges de texte. Jeux comprenant 127 caractères (donc 7 bits servent au codage des
caractères : le 8eme étant réservé au contrôle de parité) nommé officiellement us-ascii,
il est implémenté depuis des lustres par à peu près tous les systèmes. Mais si 127
caractères cela suffisent pour des textes en anglais, on est très vite limité !

<p>C'est ainsi que de très nombreuses extensions ont été conçues : en utilisant
le 8eme bit, il devient possible d'exprimer 256 combinaisons différentes. C'est
encore trop peu pour du multilingue, aussi chaque sur-ensemble est limité à quelques
langues seulement.</p>

<p>On distinguera principalement 2 concepteurs de ces sur-ensembles à us-ascii :</p>

<ul>
<li><abbr title="International Organization for Standardization">ISO</abbr> : exemples ISO Latin-1, ISO Latin-2</li>
<li>Microsoft : exemple Windows-1252, Windows-1250</li>
</ul>

<p>La différence est évidemment liée à la nature de l'ISO : c'est un organisme de
normalisation. On notera aussi que les implémentations ISO et Microsoft sont assez
proches : Windows-1252 et ISO Latin-9 ne diffèrent que par de subtiles différences,
principalement liées au fait que Microsoft a utilisé la zone 0x80..0x9F qui est réservée dans
toutes les tables de caractères correspondantes chez l'ISO.</p>

<p>Tous ces codages sont très simples : le no de position du caractère dans la table
donne la valeur binaire à enregistrer.</p>

<blockquote>
<p>Exemple :<br>
En ISO Latin-1, le caractère "r" est le 114eme dans la table, soit 0x72 en hexadécimal.<br>
Ce caractère sera donc codé 0x72 (soit 0111 0010)
</p>
</blockquote>



<?=writeHR()?>



<h2 id="Unicode"><abbr>ISO</abbr> 10646 et Unicode</h2>

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



<h2>Les autres...</h2>

<p>Attention : tous les jeux de caractères 8 bits ne sont pas basés sur
us-ascii... IBM par exemple a beaucoup utilisé sur ses systèmes <abbr title="Extended Binary-Coded Decimal Interchange Code">EBCDIC</abbr>, codage
concurrent et évidemment non compatible...</p>



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

