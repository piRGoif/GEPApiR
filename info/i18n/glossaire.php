<?php
$date_creation = "02/08/2005";
$date_maj = "30/07/2014";

// NAVIGATION
$idrub = 1;
$RelBasePath = "../../";
$title = "Petit glossaire - i18n - Informatique [GEPApiR]";

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
Petit glossaire</h1>

<p>Quelques très rapides définitions de termes couremment employés lorsque l'on
est dans le domaine de l'internationalisation...</p>
<!-- Titre & intro - FIN -->



<?=writeHR()?>



<h2>Général</h2>

<dl>

<dt><span lang="en">Charset</span>, Jeux de caractères</dt>
<dd>Comme son nom l'indique : ensemble de caractères.</dd>

<dt><span lang="en">Encoding</span>, Codage</dt>
<dd>Pour aller très vite, c'est l'ensembles de règles qui permettent de transformer
le no de caractère d'un jeux de caractère donné en une suite de bits, et
inversement. <span lang="en">Encoding</span> est le terme anglais, codage le
terme français.<br>
La confusion est souvent abusivement entretenue entre jeux de caractère et
codage. Pourtant il s'agit bien de 2 notions distinctes.</dd>

<dt><acronym title="Internationalisation">i18n</acronym></dt>
<dd>Internationali<em>s</em>ation ou internationali<em>z</em>ation ? Vu que le
débat faisait rage et qu'il y avait fort à faire par ailleurs, le raccourci
<acronym title="Internationalisation">i18n</acronym> a été adopté.
De même on parle de <acronym title="Localisation">l10n</acronym> pour
localisation.</dd>

<dt>us-ascii</dt>
<dd>Un peu l'esperanto : un jeux de caractères 7 bits très répandu, et sur
lequel se sont basés tous les codages 8 bits de l'ISO, et beaucoup d'autres
(jeux Microsoft, mac-roman, ...). Parfois simplement nommé "ascii"</dd>

</dl>



<?=writeHR()?>



<h2>Caractères</h2>

<dl>

<dt>Glyphe</dt>
<dd>Voyez cette excellente <a href="http://fr.wikipedia.org/wiki/Glyphe">définition de Wikipedia</a></dd>

<dt>Diacritique</dt>
<dd>Voyez cette excellente <a href="http://fr.wikipedia.org/wiki/Diacritique">définition de Wikipedia</a></dd>

</dl>



<?=writeHR()?>



<h2>Unicode</h2>

<dl>

<dt><abbr title="Byte Order Mark">BOM</abbr></dt>
<dd>Suivant les plateformes, des informations codées sur plusieurs octets ne
seront pas représentées de la même manière : poid fort sur le premier octet
(little endian), ou sur le dernier (big endian) - pour faire rapide, lecture de
gauche à droite des octets ou inversement.<br>
C'est donc en UTF-16 ou UTF-32 que le <abbr title="Byte Order Mark">BOM</abbr>
trouve son utilité. Cependant, il peut aussi être ajouté en préfixe d'un flux
UTF-8 : il permet alors de rapidement repérer que l'on a affaire à un codage
Unicode.</dd>

<dt>Code Point</dt>
<dd>C'est le numéro de caractère dans le jeux Unicode, donc un identifiant
unique.</dd>
<dd>La notation habituelle est U+&lt;no_hexa&gt;. Par exemple, l'Euro est le
caractère U+20AC.</dd>

<dt>Script</dt>
<dd>Les caractères utilisés de par le monde ne sont pas propres à un langage
donné. Ainsi, les ensembles de caractères sont plutôt liés au système
d'écriture, et appelés "script". Le script Latin regroupe par exemple des
symboles et signes de ponctuation utilisés dans plusieurs langages différents.
On peut citer aussi les scripts Cyrillique, Arabe, etc.</dd>
<dd>A ce sujet voir sur le site Unicode <a href="http://www.unicode.org/faq/basic_q.html#17">cette entrée</a>
de leur excellentissime FAQ, et surtout un <a href="http://www.unicode.org/onlinedat/languages-scripts.html">tableau de correspondance langages / scripts</a></dd>

<dt><abbr title="Unicode transformation format">UTF</abbr></dt>
<dd>Le jeux de caractères Unicode peut être codé en utilisant plusieurs codages.
Ces codages sont au nombre de 4 : UTF-7, UTF-8 (compatible avec us-ascii !),
UTF-16, UTF-32.</dd>
<dd><strong>Attention</strong> : quelque soit le codage <abbr title="Unicode transformation format">UTF</abbr>
utilisé, on peut dans tous les cas coder l'intégralité des caractères du jeux
Unicode. Cela signifie donc que le chiffre après <abbr title="Unicode transformation format">UTF</abbr>
ne correspond pas au nombre de bits / caractères : il s'agit de la taille du
"code unit", chaque caractère étant codé sur un nombre variable de code unit.</dd>
<dd>L'équivalent en ISO 10646, c'est UCS.</dd>

</dl>



<?=writeHR()?>



<h2>Internet</h2>

<dl>

<dt>Entête HTTP</dt>
<dd>Un client doit pouvoir envoyer de nombreuses informations, en plus de sa
requète : langage ou type de contenu préféré, cookies, etc. Inversement,
le serveur doit aussi spécifier des informations en-dehors du contenu
lui-même : codage du flux, cookies, informations de cache, ... Toutes ces
informations sont donc transmises à travers les entêtes.<br>
Ceux-ci ne sont pas directement visibles... Si vous êtes équipés de Firefox,
vous pouvez utiliser l'excellente extension <a href="http://livehttpheaders.mozdev.org/">Live HTTP Headers</a>
pour les visualiser ! Il existe pour Internet Explorer Windows un autre
utilitaire : <a href="http://www.fiddlertool.com/fiddler/">Fiddler</a></dd>

<dt><abbr title="Multipurpose Internet Mail Extensions">MIME</abbr></dt>
<dd>Il fallait trouver une solution pour qu'un mail puisse contenir non
seulement des pièces jointes, mais aussi plusieurs versions (par exemple :
texte brut et HTML, avec les ressources associées - images, css, ...). Cette
solution, c'est MIME.<br>
Puisque grâce à MIME on peut simplement détailler un contenu (type, taille, ...)
le principe a été repris à de nombreux endroits. Et c'est le cas en HTTP.</dd>
<dd>Les RFC détaillant MIME sont la RFC <a href="http://www.ietf.org/rfc/rfc2045.txt">2045</a> ("Format of Internet Message Bodies"),
<a href="http://www.ietf.org/rfc/rfc2046.txt?number=2046">2046</a> ("Media Types"),
<a href="http://www.ietf.org/rfc/rfc2047.txt?number=2047">2047</a> ("Message Header Extensions for Non-ASCII Text"),
<a href="http://www.ietf.org/rfc/rfc2048.txt?number=2048">2048</a> ("Registration Procedures"),
<a href="http://www.ietf.org/rfc/rfc2049.txt?number=2049">2049</a> ("Conformance Criteria and Examples")</dd>

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

