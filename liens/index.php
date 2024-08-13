<?php ob_start('ob_gzhandler');
// NAVIGATION
$RelBasePath = "../";
$title = "Liens [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?>

<style type="text/css">
form.toolbox p
{
padding: 0;
margin: 0;
}
</style>

<script type="text/javascript">
// modifie les liens de la page (sauf ceux dans la navigation) pour qu'ils pointent vers target=_blank
function chgATarget(newwin)
{
var valtarget = (newwin) ? "_blank" : "";

var Aelement;
var idMenu = "menu_";
var elements = document.getElementsByTagName("a");
for (i = 0; i <= elements.length - 1; i++)
	{
	aElement = elements[i];
	console.log("DEBUG " + aElement.id);
	console.log(aElement.id.substring(0, idMenu.length));
	if (aElement.id.substring(0, idMenu.length) !== idMenu) {
		aElement.target = valtarget;
		}
	}
}
</script>

<?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<a href="<?=$RelBasePath?>">
<img src="<?=$RelBasePath?>images/titres/rub1_liens.png" width="364" height="138"
 data-responsive-img alt="Liens">
</a>
</h1>

<p>Une petite collection de liens bien sympathiques, et même parfois carrément
indispensables !</p>

<form action="" class="toolbox" onSubmit="return false;">
<p>
<label>
<input type="checkbox" name="newwin" onClick="chgATarget(this.checked)" onFocus="this.blur()">
&nbsp;Liens dans nouvelle fenêtre
</label>
</p>
</form>



<?=writeHR()?>



<h2>RSS, alleluia \o/</h2>

<p>Je ne saurai trop vous conseiller l'usage d'un agrégateur RSS... un petit
logiciel (à installer sur votre machine, ou à utiliser sur le web) dans lequel
vous allez créer des abonnements aux sites que vous fréquentez, et qui va vous
présenter chaque nouveau contenu un peu comme dans une boite mail !<br>
Pour ma part, après des années de bonheur avec Google Reader et suite à arrêt du
service, je me suis tourné vers <a href="http://feedly.com/">Feedly</a>, qui a
l'avantage de proposer également une solution par site web doublée d'une application
Androïd.</p>

<p>Capture d'une partie de mon Feedly pour que ça soit bien parlant :</p>

<p style="text-align: center;">
<img src="<?=$RelBasePath?>images/feedly.png" width="921" height="532" data-responsive-img
class="pretty-img">
</p>



<?=writeHR()?>



<h2>Quotidiens</h2>

<p>Les sites visités quasiment chaque jour... Des indispensables !</p>

<dl>

<dt><a href="http://apod.nasa.gov/">APOD</a></dt>
<dd>The Astronomy Picture Of the Day de la NASA : une photo d'astronomie chaque jour avec des explications très complètes</dd>

<dt><a href="http://www.xkcd.com/">XKCD</a></dt>
<dd>Un comic strip de référence dont les thèmes sont autour de l'informatique et des sciences en général</dd>

<dt><a href="https://www.explainxkcd.com/">Explain XKCD</a></dt>
<dd>Puisque parfois XKCD est un peu difficile à comprendre pour nous francophones (ou parfois juste pas assez cultivés ;o) ), ce wiki participatif apporte toutes les explications (et références !) sur chaque strip quotidien.</dd>

<dt><a href="http://lesjoiesducode.fr/">Les joies du code</a></dt>
<dd>Des mêmes internet accompagnés d'une petite phrase sur l'univers du développement</dd>

<dt><a href="http://www.viedemerde.fr/">Vie de merde</a></dt>
<dd></dd>

</dl>



<?=writeHR()?>



<h2>Culture</h2>

<dl>

<dt><a href="http://www.cia.gov/cia/publications/factbook/index.html">CIA - The world factbook </a></dt>
<dd>Vous vous demandez ce que c'est que ce pays, <a href="http://www.cia.gov/cia/publications/factbook/geos/ne.html">Nieu</a>&nbsp;?
Bref un atlas complet, très riche !</dd>

<dt><a href="http://atilf.atilf.fr/">TLFI</a> (le trésor de la langue française informatisée)</dt>
<dd>Le dictionnaire en ligne, l'officiel. L'interface est... pour résumer,
disons, c'est une bonne image de l'immobilisme déprimant qui règne dans les
hautes sphères de l'état sur les questions des NTIC. Quand Mr Jeanneney rale du
problème posé par Google numérisant des livres... Va falloir accélérer le
mouvement en effet :D<br>
Reste que même si le TLFI pourrait être bien mieux en terme d'interface, les
données sont là et c'est bien avant tout ce qu'on lui demande :)</dd>

<dt><a href="http://www.imdb.com">IMDB</a> (the Internet Movie Database)</dt>
<dd>Tous les films, les réalisateurs, les acteurs... Ca c'est de la base !! Une
vraie référence !</dd>

</dl>



<?=writeHR()?>



<h2>Informatique</h2>

<dl>

<dt><a href="http://hacks.mozilla.org/">hacks.mozilla.org</a></dt>
<dd></dd>

<dt><a href="http://www.frandroid.com/">FrAndroid</a></dt>
<dd></dd>

<dt><a href="http://sqlpro.developpez.com/">SQL Pro</a></dt>
<dd>Le site de Frédérique Brouard, une mine d'or pour tout ce qui concerne le
SQL ! Des cours génériques, des articles sur des sujets précis, des exemples de
techniques, ...</dd>

<dt><a href="http://developer.mozilla.org/">DevMo</a></dt>
<dd>En son temps, le site pour développeur de Netscape était une vraie mine
d'or ! Et puis, le site a disparu avec la société et ses employés... Et il
renait maintenant sous l'égide de la fondation Mozilla</dd>

<dt><a href="http://openweb.eu.org/">OpenWeb</a></dt>
<dd>Un site français de référence pour tout concepteur Web. Articles de
vulgarisation sur HTML, CSS, ... Très bien fait !</dd>

</dl>



<?=writeHR()?>



<h2>Pages persos diverses</h2>

<dl>

<dt><a href="http://www.emotioneric.com/">Emotion Eric</a></dt>
<dd>Un des sites qui, avec <a href="http://www.webhamster.com/">HamsterDance</a>,
<a href="http://www.perdu.com">perdu.com</a> ou <a href="http://www.pourquoi.ch">pourquoi.ch</a> ont marqué l'histoire de
l'Internet :o) Et le plus beau, c'est qu'ils sont toujours en ligne ! 8)</dd>

<dt><a href="http://www.standblog.org/">Tristan Nitot</a></dt>
<dd>Ex Netscape, président de Mozilla Europe.</dd>

</dl>



<?=writeHR()?>



<h2>Sites de copains</h2>

<dl>

<dt><a href="http://steinecrit.wordpress.com/">Stein écrit</a></dt>
<dd>Format C:, et après ? Ben après, c'est SBRNR !! Yeaaaaah 8)</dd>

<dt><a href="http://www.studioah.fr/">Studio ah!</a></dt>
<dd></dd>

</dl>



<?=writeHR()?>



<h2>Aéro</h2>

<dl>

<dt><a href="http://www.firstmenonthemoon.com/">The First Men on the Moon: The Apollo 11 Lunar Landing</a></dt>
<dd>Les dernières minutes avant l'alunissage de Apollo 11, comme si vous y étiez !
Retranscription audio et texte (avec infobulles qui expliquent tous les termes
techniques et montrent qui parle), assiette du module lunaire, rythme cardiaque de Arsmtrong...
Magnifique réalisation et surtout superbe aventure, que l'on comprend mieux après
ce que l'on peut appeler sans rougir une expérience ! Prenez 10 minutes de votre
temps, sans AUCUNE interruption... en avant !</dd>

<dt><a href="http://20-100-video.blogspot.fr/">Du virtuel au réel</a></dt>
<dd></dd>

<dt><a href="https://flightsim.to/">Flightsim.to</a></dt>
<dd>Le site de référence sur les addons pour Flight Simulator</dd>

<dt><a href="http://www.cyberavia.org/">Cyberavia</a></dt>
<dd>Haaa, CyberAvia... L'une des plus ancienne compagnie virtuelle pour Flight
Simulator ! Des pilotes virtuels assurent des vols réguliers... Un peu dingue
quelques part. Il y a aussi de nombreuses missions, que l'on exécute dans son
coin comme on peut... Cela donne une nouvelle approche du simulateur, permet de
pratiquer des appareils, des lieux et des conditions que l'on n'aurait sans
doute jamais essayé sinon !</dd>

</dl>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc.php');
?>



</body>
</html>
<?php ob_end_flush(); ?>