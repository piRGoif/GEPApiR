<?php
// Version 20050801

// NAVIGATION
$idrub = 1;
$RelBasePath = "../../";
$title = "Compils du piR - Musiques [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
?>
<style type="text/css"><!--
/* Compils liste années */
ul#compils-liste
{
padding: 0;
margin: 2em auto;
width: 90%;
text-align: center;
}

ul#compils-liste li
{
margin: 0;
padding: 0;
display: inline;
}
--></style>
<?php
require_once($RelBasePath . 'communs/header2.inc');
?>



<!-- Titre & intro - DEBUT -->
<h1><img src="<?=$RelBasePath?>images/titres/rub1_musiques.png" width="273" height="155" alt="Musiques"><br>
Compils du piR</h1>



<p>Les compils du piR... Toute une histoire ! Qui sera bientôt racontée ici :o)</p>



<?=writeHR()?>



<ul id="compils-liste">
<!--
	<li><a href="compil_95.php"><img src="<?=$RelBasePath?>images/zicmue/95.png" width="70" height="65" alt="95"></a></li>
	<li><a href="compil_96.php"><img src="<?=$RelBasePath?>images/zicmue/96.png" width="70" height="65" alt="96"></a></li>
	<li><a href="compil_97.php"><img src="<?=$RelBasePath?>images/zicmue/97.png" width="70" height="65" alt="97"></a></li>
	<li><a href="compil_98.php"><img src="<?=$RelBasePath?>images/zicmue/98.png" width="70" height="65" alt="98"></a></li>
	<li><a href="compil_99.php"><img src="<?=$RelBasePath?>images/zicmue/99.png" width="70" height="65" alt="99"></a></li>
	<li><a href="compil_00.php"><img src="<?=$RelBasePath?>images/zicmue/00.png" width="70" height="65" alt="00"></a></li>
-->
	<li><a href="compil_01.php"><img src="<?=$RelBasePath?>images/zicmue/01.png" width="70" height="65" alt="01"></a></li>
<!--
	<li><a href="compil_02.php"><img src="<?=$RelBasePath?>images/zicmue/02.png" width="70" height="65" alt="02"></a></li>
	<li><a href="compil_03.php"><img src="<?=$RelBasePath?>images/zicmue/03.png" width="70" height="65" alt="03"></a></li>
-->
	<li><a href="compil_04.php"><img src="<?=$RelBasePath?>images/zicmue/04.png" width="70" height="65" alt="04"></a></li>
	<li><a href="compil_05.php"><img src="<?=$RelBasePath?>images/zicmue/05.png" width="70" height="65" alt="05"></a></li>
</ul>


<p style="text-align: center;">
<a href="10ans/index.php">
<img src="/images/zicmue/compil_10ans.gif" width="180" height="86" alt="Putain 10 ans !">
</a>
</p>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>

