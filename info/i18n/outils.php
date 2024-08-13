<?php
$date_creation = "03/08/2005";
$date_maj = "30/07/2014";

// NAVIGATION
$idrub = 1;
$RelBasePath = "../../";
$title = "Outils pratiques - i18n - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?>
<style type="text/css"><!--
--></style>
<?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<!-- Titre & intro - DEBUT -->
<h1>
<?
require_once('../info_h1.inc');
?>
<br>
Internationalisation<br>
Outils & docs</h1>
<!-- Titre & intro - FIN -->



<?=writeHR()?>



<h2>Trouver un caractère dans un jeux donné</h2>

<dl>

	<dt><a href="http://lachy.id.au/dev/mozilla/sidebar/Unicode/character-tools">Ian Hickson character tools</a></dt>
	<dd>les outils qui vont bien pour trouver son code point Unicode à partir du
	caractère et lycée de Versailles</dd>

	<dt>La section <a href="http://www.unicode.org/standard/where/">Where is my character</a>
	du site Unicode</dt>
	<dd>Vraiment tout pour découvrir des caractères par script, par code point, ...</dd>

	<dt><a href="http://www.unicode.org/Public/MAPPINGS/">Nombreux jeux de caractères</a>
	documentés sur le site Unicode</dt>
	<dd>Pour chaque jeux l'ensemble des caractères, avec le code point unicode,
	le codage (s'il s'agit d'un jeux 8 bits), et une description en lettre.</dd>

	<dt><a href="http://www.miakinen.net/vrac/charsets">Quelques tables de caractères</a> par Olivier Miakinen</dt>
	<dd>Un outil rapidement indispensable : les tables des principaux codages
	8 bits utilisés pour le français. Un moyen simple de comparer les tables
	entre elles, de connaitre le code point Unicode, etc... Un outil vraiment
	très, très utile !</dd>

</dl>



<?=writeHR()?>



<h2>Conversion de caractères</h2>

<dl>

	<dt>Votre navigateur...</dt>
	<dd>Hé oui, car la majorité des navigateurs permettent de spécifier avec quel
	codage ouvrir une page... ou un fichier via le système de fichier local !
	Internet Explorer permet aussi de spécifier le codage à utiliser pour
	enregistrer !</dd>

	<dt><a href="http://recode.progiciels-bpi.ca/">Recode</a></dt>
	<dd>Utilitaire LInux porté aussi sous Windows. Permet d'effectuer toute
	sorte de conversion d'un codage à un autre.</dd>

</dl>



<?=writeHR()?>



<h2>Clavier</h2>

<dl>

	<dt><a href="http://www.microsoft.com/globaldev/tools/msklc.mspx">Microsoft Keyboard layout creator</a></dt>
	<dd>Un utilitaire gratuit qui permet très simplement de générer des nouveaux
	pilotes de clavier - et en pratique de réaffecter n'importe quelle touche ou
	combinaison de touches !</dd>

	<dt><a href="http://home-14.tiscali-business.nl/~fbou2235/kbdfrac.htm">Pilote de clavier enrichi</a></dt>
	<dd>Ajoute au clavier standard de nombreuses affectations. Extremmement
	pratique pour la rédaction ! Et l'auteur est l'excellent Denis Liegeois.</dd>

	<dt>IBM - <a href="http://www-306.ibm.com/software/globalization/topics/keyboards/registry_index.jsp">global keyboard layouts</a></dt>
	<dd>De très nombreuses disposition de clavier référencées.</dd>

</dl>



<?=writeHR()?>



<h2>Editeurs</h2>

<p>Il est évident que chacun aura sa préférence en terme d'éditeur. Et c'est
bien normal, tellement les besoins et usages seront différents ! Cette liste
n'est donc rien d'autres que les quelques éditeurs que j'utilise régulièrement
dans mon contexte, et qui m'ont plusieurs fois aidés pour des questions
d'internationalisation.</p>

<dl>

	<dt><a href="http://www.esperanto.mv.ru/UniRed/">Unired</a></dt>
	<dd>Un éditeur Unicode, écrit en Java. Editeur Unicode, car il permet de
	manipuler tous les caractères Unicode. Il permet aussi d'enregistrer dans de
	nombreux codages ! Malheureusement, les fonctionnalités d'éditeur pur sont
	assez limitées...</dd>

	<dt><a href="http://www.pspad.com/">PS Pad</a></dt>
	<dd>J'ai adopté PS Pad depuis un moment - de tous ceux que j'ai pu essayé,
	c'est le meilleur éditeur gratuit, et il est presque comparable en terme de
	fonctionnalités à Ultra-Edit ! Oui oui !<br>
	Pour l'instant il ne supporte que l'enregistrement en 8859-2, windows-1252 ou
	UTF-8, et ne permet de saisir que certains caractères (fonctionnement interne
	en ANSI visiblement). Une ré-écriture est en cours par son auteur...<br>
	2 fonctionnalités cependant sont forts utiles : l'affichage du no de
	caractère sélectionné, et un mode d'affichage Hexa.</dd>

</dl>



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

