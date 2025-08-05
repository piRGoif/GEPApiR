<?php ob_start('ob_gzhandler');
$date_creation = "04/08/2025";
$date_maj = "04/08/2025";

// NAVIGATION
$RelBasePath = "../";
$title = "Sites Web - Liens [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?><?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<a href="<?=$RelBasePath?>">
<img src="<?=$RelBasePath?>images/titres/rub1_liens.png" width="364" height="138"
 data-responsive-img alt="Liens"></a><br>
 Le RSS
</h1>



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



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
