<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "14/08/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "Liens : option \"ouverture dans une nouvelle fenêtre\" - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Liens : option "ouverture dans une nouvelle fenêtre"
</h1>



<?=writeHR()?>



<h2>Introduction</h2>

<p>Dans la rubrique Liens, une option permet d'ouvrir les liens dans une nouvelle
fenêtre. C'est fait via une fonction JavaScript qui va parcourir le DOM, tout en
préservant les liens contenus dans le menu de navigation. Ceux-ci sont détectés
simplement par leur id débutant par "menu-" :</p>



<?=writeHR()?>



<h2>JavaScript</h2>

<pre><code class="javascript">
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
</code></pre>



<?=writeHR()?>



<h2>HTML</h2>

<pre><code class="html">
&lt;form action="" onSubmit="return false;">
&lt;p>
&lt;label>
&lt;input type="checkbox" name="newwin" onClick="chgATarget(this.checked)" onFocus="this.blur()">
&nbsp;Liens dans nouvelle fenêtre
&lt;/label>
&lt;/p>
&lt;/form>
</code></pre>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>