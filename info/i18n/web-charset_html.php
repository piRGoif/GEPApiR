<?php ob_start('ob_gzhandler');
$date_creation = "16/07/2005";
$date_maj = "22/08/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "Web & charset : internationalisation pour le concepteur Web - i18n - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
require_once($RelBasePath . 'communs/highlight.inc');
require_once($RelBasePath . 'communs/toc/toc-js.inc');
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
<?
require_once('../info_h1.inc');
?>
<br>
Internationalisation<br>
Web & charset : internationalisation pour le concepteur Web</h1>

<p>Cet article détaille les moyens de spécifier le codage (charset, encoding, ...)
sur des pages web. Ces connaissances permettront par exemple d'ajouter du néerlandais
sur un site qui était prévu pour de l'anglais uniquement, de se passer entités
comme des <code>&amp;#0177;</code>, ou de retrouver les caractères attendus plutôt
que des carrés, etc etc (...)</p>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc');
?>



<?=writeHR()?>



<h2>Pourquoi spécifier le codage ?</h2>

<p>Les contenus envoyés à un client par un serveur <abbr title="Hypertext Transfer Protocol">HTTP</abbr> peuvent être libellés 
explicitement pour être lus en utilisant un codage précis. Cependant, on peut 
penser que ces indications ne seraient pas nécessaires : en effet, le chapitre 
3.7.1 de la RFC 2616<sup>[<a href="#fn1">1</a>]</sup> définit
<abbr title="International Organization for Standardization">ISO</abbr> 
Latin-1 comme codage par défaut pour HTTP :</p>

<blockquote>
<p>The "charset" parameter is used with some media types to define the
character set (section 3.4) of the data. When no explicit charset
parameter is provided by the sender, media subtypes of the "text"
type are defined to have a default charset value of 
"ISO-8859-1" 
when received via <abbr>HTTP</abbr>. Data in character sets other than 
"ISO-8859-1" 
or its subsets MUST be labeled with an appropriate charset value.</p>
</blockquote>

<p>Le Web étant d'origine Européenne, on peut comprendre la présence de cette 
valeur par défaut ! Cependant les éditeurs de navigateurs ont tous laissés 
paramétrable le codage à utiliser si aucune information n'est fournie par le 
serveur... Car beaucoup de pages ont été mises à disposition sans aucune information
de codage... Et un utilisateur d'Europe de l'Est voudra sans doute que son 
navigateur essaie d'ouvrir de telles pages en iso latin-2 par exemple !</p>

<p>Cet argument est tout de même à tempérer par l'implémentation de mécanismes 
d'autodétection du codage dans certains navigateurs (par exemple, dans <abbr title="Microsoft Internet Explorer">MSIE</abbr> 6, 
menu affichage / codage / sélection automatique, ou dans Firefox menu View / 
Character encodings / Auto-Detect). Cependant ces mécanismes sont forcément 
complexes, au vu du nombre de codages différents existants, et sachant qu'ils ne 
sont pas tous basés sur us-ascii...</p>

<p>Par ailleurs, les serveurs disposent souvent d'une configuration par 
défaut qui leur fait renvoyer certaines informations de codage... Qui 
indiqueront peut être un codage différent de celui réellement utilisé sur votre 
site !</p>

<p>Par conséquent, il est donc fort utile de renvoyer au client explicitement 
les bonnes informations de codage !</p>



<?=writeHR()?>



<h2>Prérequis</h2>

<ul>
	<li>Choix d'un codage effectué</li>
	<li>Editeur permettant d'enregistrer au bon codage</li>
	<li>Maitrise du transfert (certains clients FTP sur plateforme Macintosh 
	peuvent effectuer des conversions)</li>
	<li>Si pages dynamiques, s'assurer que les contenus issus de source 
	extérieures (bdd, fichiers, ...) seront bien intégrées correctement (ne pas 
	insérer un flux codé en ISO Latin-1 dans un flux UTF-8 par exemple)</li>
	<li>Nom du logiciel serveur et version</li>
</ul>



<?=writeHR()?>



<h2>Méthode pour indiquer au client quel codage est utilisé</h2>


<h3>Introduction</h3>

<p>Par nature, l'information de codage ne peut être contenue dans le fichier : 
pour être en mesure d'ouvrir ce fichier, il faut connaitre ce codage... Et s'il 
faut ouvrir le fichier pour connaitre son codage, on tourne en rond ! :D</p>

<p>Où va exactement être lu l'information de codage par le client ? Hé bien, 
potentiellement à plusieurs endroits :</p>

<ul>
	<li>Sous-type <code>charset</code> de l'entête <abbr>HTTP</abbr> <code>Content-Type</code></li>
	<li>Balise META <code>http-equiv</code></li>
	<li>Attribut <code>charset</code> dans la balise de lien vers cette page (usage 
	et support anecdotique, nous ne reviendrons pas sur l'usage de cet attribut)</li>
</ul>

<p>Quelle est la priorité de lecture ? C'est le chapitre 5.2.2 de la reccommandation
<abbr title="HyperText Markup Language">HTML</abbr> 4<sup>[<a href="#fn2">2</a>]</sup>
qui donne la réponse :</p>

<blockquote lang="en">
<p>To sum up, conforming user agents must observe the following priorities when 
determining a document's character encoding (from highest priority to lowest):<br>
1. An <abbr>HTTP</abbr> "charset" parameter in a "Content-Type" field.<br>
2. A META declaration with "http-equiv" set to "Content-Type" and a value set for "charset".<br>
3. The charset attribute set on an element that designates an external resource.</p>
</blockquote>

<p><strong>C'est l'entête <abbr>HTTP</abbr> qui est prioritaire</strong>... Et c'est celui 
sur lequel le concepteur peut le moins facilement intervenir !</p>

<p>Pour XHTML, le principe est également le même, on y reviendra plus bas !</p>


<h3>Paramétrer le serveur (entête <abbr>HTTP</abbr> <code>Content-Type</code>)</h3>

<p>Aujourd'hui, quasiment tous les serveurs disposent de cette valeur définie 
par défaut... Et même si votre serveur actuel ne renvoit aucune information, 
en cas de transfert vers un autre hébergeur vous pourriez avoir de mauvaises 
surprises...</p>

<p>La méthode à suivre pour forcer la valeur pour cet entête dépend du logiciel 
serveur employé. Notez aussi que si votre site est dynamique, 
il est quasi certain que le langage utilisé vous permette de renvoyer les 
entêtes de votre choix au client de manière atomique (uniquement pour les pages
qui vous intéressent) !</p>

<p>Le document "Le paramètre <abbr>HTTP</abbr> Charset"<sup>[<a href="#fn4">4</a>]</sup>
du W3C donne des indications précieuses sur la marche à suivre pour que l'entête
soit correctement renseigné - des méthodes pour les serveurs et langages les 
plus courants y sont listées.</p>


<h3>La balise META</h3>

<p>D'abord, bien comprendre que toutes les balises <code>http-equiv</code> sont 
des pis-aller : elles permettent de préciser des informations qui devraient 
normalement figurer dans les entêtes <abbr>HTTP</abbr> !</p>

<p>Par ailleurs, l'information de codage est par nature une meta donnée : pour 
ouvrir le fichier et lire le meta, on doit connaitre le codage...</p>

<p>On peut par conséquent considérer que spécifier le codage par une balise 
META est inutile et que l'entête suffit. Cependant, plusieurs voix s'élèvent pour défendre 
l'usage du META : en effet, une page n'est pas forcément lue depuis un serveur 
<abbr>HTTP</abbr> donné, on peut la lire via un système de fichiers ! Le meta donne alors 
la possibilité au navigateur, via le système d'autodétection auquel on faisait 
allusion précédemment de détecter quel est le codage à utiliser pour lire le 
document.</p>

<p>A tempérer quand même : <abbr>MSIE</abbr> Windows par exemple permet d'enregistrer une 
page avec le codage de son choix, et insère dans le fichier une balise META 
appropriée au choix de codage effectué par l'utilisateur pour la sauvegarde.</p>


<h3>Le cas particulier de <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></h3>

<p><abbr title="eXtensible Hypertext Markup Language">XHTML</abbr> étant du <abbr title="eXtensible Markup Language">XML</abbr>, l'information de charset est présente dans le prologue
<abbr>XML</abbr>, en début de fichier :</p>

<pre><code class="xml">&lt;?xml version="1.0" encoding="UTF-8"?></code></pre>

<p>Toutefois, du <abbr>XHTML</abbr> 1.0 servit en text/html devra conserver la balise meta
pour compatibilité : en effet dans ce cas le <abbr>XHTML</abbr> sera lu comme du
<abbr>HTML</abbr> invalide !<br>
Ce comportement est définit dans le chapitre 9 de l'annexe C de la recommandation
<abbr>XHTML</abbr> 1.0<sup>[<a href="#fn3">3</a>]</sup> :</p>

<blockquote lang="en">
<p>In order to portably present documents with specific character encodings, the 
best approach is to ensure that the web server provides the correct headers. If 
this is not possible, a document that wants to set its character encoding 
explicitly must include both the XML declaration an encoding declaration and a 
meta http-equiv statement (e.g., &lt;meta http-equiv="Content-type" content="text/html; charset=EUC-JP" /&gt;).
In XHTML-conforming user agents, the value of the encoding declaration of the
XML declaration takes precedence.</p>
</blockquote>


<?=writeHR()?>



<h2>Les entités</h2>

<p>Les entités sont un mécanisme particulièrement performant permettant d'intégrer
à son document, quelques soit son codage, n'importe quel caractère du jeux
<abbr>ISO</abbr> 10646.<br>
Il existe deux types d'entités :</p>

<dl>

<dt>nommées</dt>
<dd>Exemple : <code>&amp;ocirc;</code></dd>
<dd>L'ensemble des entités nommées sont définies dans la <abbr title="Document Type Definition">DTD</abbr> <abbr>HTML</abbr> 
ou <abbr>XHTML</abbr> utilisée. 
Par exemple, <a href="http://www.w3.org/TR/html401/sgml/entities.html">la liste des entités nommées en HTML 4</a></dd>

<dt>numériques</dt>
<dd>Exemple : <code>&amp;#212;</code></dd>
<dd>Référence au code point Unicode (enfin plutôt au numéro de caractère ISO 
10646, mais les 2 sont identiques), exprimé sous forme numérique (<samp>#&lt;code point&gt;</samp>) 
ou hexadécimale (<samp>#x&lt;code point&gt;</samp>).</dd>
<dd>Le support très réduit pour la forme hexadécimale restraint à ce jour son usage.</dd>

</dl>



<?=writeHR()?>



<h2>Traitement de données issues de la soumission de formulaires</h2>

<p>On lancera cette conclusion obtenue après lectures de différents documents et
contributions Usenet :</p>

<ul>
	<li>En théorie, un client transmet au serveur les textes contenus dans les 
	éléments du formulaire en utilisant le codage qui était utilisé pour le 
	formulaire lui-même. Les caractères en-dehors du jeux de caractères sont 
	transmis sous forme d'entité.</li>
	<li>Comme souvent sur le web... rien n'est certain !</li>
	<li>Soumettre en GET n'est pas une très bonne idée : les caractères échappés 
	dans l'<abbr title="Uniform Resource Location">URL</abbr> ne le sont pas toujours par rapport au jeux de caractère utilisé 
	pour le formulaire reçu par le client</li>
</ul>

<p>Et on ne peut que conseiller la lecture attentive du meilleur document que 
l'on ait pu trouver à ce jour sur le sujet : <a href="http://ppewww.ph.gla.ac.uk/~flavell/charset/form-i18n.html">FORM submission and i18n</a> 
de Alan J Flavell. D'ailleurs, on retourne s'y plonger de ce pas...</p>



<?=writeHR()?>



<h2>Liens</h2>

<h3 id="liens-ref">Spécifications</h3>

<ul>
	<li id="fn1">[1] <a href="http://www.ietf.org/rfc/rfc2616.txt?number=2616"><abbr title="Request for Comments">RFC</abbr> 2616 Hypertext Transfer Protocol -- HTTP/1.1</a></li>
	<li id="fn2">[2] <a href="http://www.w3.org/TR/html401/charset.html#h-5.2.2">Recommandation
	<abbr>HTML</abbr> 4.01 chapitre 5.2.2</a></li>
	<li id="fn3">[3] <a href="http://www.w3.org/TR/xhtml1/#C_9">Recommandation
	<abbr>XHTML</abbr> 1.0 annexe C.9</a></li>
</ul>

<h3>Sites intéressants</h3>
<ul>
	<li id="fn4">[4] La section <a href="http://www.w3.org/International/resource-index.html">Internationalisation (i18n) du <abbr>W3C</abbr></a>
	 contient de nombreux articles intéressants, notemment <a href="http://www.w3.org/International/O-HTTP-charset">Le paramètre <abbr>HTTP</abbr> Charset</a> 
	ou <a href="http://www.w3.org/International/questions/qa-css-charset">déclaration du codage de caractères utilisé dans un fichier <abbr>CSS</abbr></a></li>
	<li>Les 2 sites d'absolue référence sur le sujet : celui de Alan J. Flavell, 
	<a href="http://ppewww.ph.gla.ac.uk/~flavell/charset/">"i18n: <abbr>HTML</abbr> Character set issues beyond <abbr>HTML</abbr>3.2"</a>,
	et la section <a href="http://www.cs.tut.fi/~jkorpela/chars/">"Characters and encodings"</a> 
	de celui de J. Koperla. Vous y trouverez des tonnes d'information, presque 
	tout ce qu'il y a à savoir ! Pour info, ces 2 auteurs sont aussi de réguliers 
	contributeurs de <a href="news://comp.infosystems.www.authoring.html">c.i.w.a.html</a></li>
	<li><a href="http://czyborra.com/">czyborra.com</a> : bcp de ressources sur 
	Unicode. Extremmement intéressant !</li>
<!-- 	<li>Un <a href="http://blog-and-blues.org/weblog/2004/08/16/275-encodage-caracteres-xhtml ">article intéressant sur le sujet</a>
	chez Blog&amp;Blues. Comme d'habitude sur ce blog, excellent tour d'horizon,
	documenté et réfléchi.</li> -->
</ul>



<?=writeHR()?>



<h2>Remerciements</h2>

<p>Merci à Stéphane Moriaux (ASM sur f.c.i.w.auteurs) pour ses compléments !</p>



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
<?php ob_end_flush(); ?>