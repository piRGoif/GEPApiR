<?php ob_start('ob_gzhandler');
// Version 20050726

// NAVIGATION
$idrub = 1;
$RelBasePath = "../";
$title = "Chansons - Delamort - Musiques [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?>
<link rel="contents" href="index.php#delamort">
<?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<!-- Titre & intro - DEBUT -->
<h1>
<?
require_once('zicmue_h1.inc');
?>
<br>
Delamort<br>
Les chansons</h1>

<p>Voilà, nous y sommes. Dans mon panthéon personnel des chansons. Il s'agit
donc de choix très subjectifs, bien entendu... Mais pour moi absolument
<strong>incontournables</strong> ! Ces chansons ont en effet marquées mon
histoire avec la musique, elles m'ont accompagnées. A vous de les découvrir...</p>
<!-- Titre & intro - FIN -->



<?=writeHR()?>



<!-- Rah Lovely - DEBUT -->
<h2><img src="<?=$RelBasePath?>images/titres/rub2_rah_lovely.png" width="236" height="42" alt="Raaaah lovely"></h2>

<dl>

<dt>Good morning Hearthache - Billy Holliday</dt>
<dd></dd>

<dt>Don't think twice - Bryan Ferry - Frantic (2002)</dt>
<dd>Bryan Ferry mais si vous le connaissez... "More than this", ça ne vous dis
rien comme chanson ? Et Roxy Music... Hé ben voilà, c'est lui !<br>
Cette chanson la est une reprise de Bob Dylan... une vraie grande reprise : une
voix fatiguée, un brin rauque, avec un simple piano. Magnifique !</dd>

<dt>Les partisans - Noir Désir et ?</dt>
<dd></dd>

<dt>Stormy weather - Lena Horne - Stormy weather (1957)</dt>
<dd></dd>

<dt>E-bow the letter - REM - <a href="http://musicmoz.org/Bands_and_Artists/R/R.E.M./Discography/New_Adventures_in_Hi-Fi/">New adventures in HiFi</a> (1996)</dt>
<dd></dd>

<dt>Country feedback - REM - <a href="http://musicmoz.org/Bands_and_Artists/R/R.E.M./Discography/Out_of_Time/">Out of time</a> (1991)</dt>
<dd></dd>

<dt>Et ils attendent - Louis Chedid - Entre nous (1994) et Ces mots sont pour toi (1992)</dt>
<dd></dd>

<dt>Something - Joe Cocker</dt>
<dd></dd>

<dt>Blue jean blues - ZZ Top - <a href="http://musicmoz.org/Bands_and_Artists/Z/ZZ_Top/Discography/Fandango/">Fandango</a> (1975)</dt>
<dd></dd>

</dl>
<!-- Rah Lovely - FIN -->



<?=writeHR()?>



<!-- Huahaha - DEBUT -->
<h2><img src="<?=$RelBasePath?>images/titres/rub2_haha.png" width="196" height="30" alt="Huahahaha"></h2>

<dl>

<dt>La jeune fille du métro - Renaud - Au p'tit Bal du Sam'di Soir et autres chansons réalistes (1989)</dt>
<dd></dd>

<dt>Psychopate - Bénabar - [concert]</dt>
<dd></dd>

<dt>Petit avec de grandes oreilles - Bill Baxter</dt>
<dd></dd>

<dt>Le coq et la pendule - Claude Nougaro - Assez (1980)</dt>
<dd></dd>

</dl>
<!-- Huahaha - FIN -->



<?=writeHR()?>



<!-- Cooool jazz - DEBUT -->
<h2><img src="<?=$RelBasePath?>images/titres/rub2_cool_jazz.png" width="252" height="39" alt="Cooooooool jaaaaaaaaaaz"></h2>

<dl>

<dt>Solitude - Duke Ellington</dt>
<dd></dd>

<dt>Moanin' - Charles Mingus - Blues and roots ()</dt>
<dd></dd>

<dt>Baby it's cold outside - Ray Charles</dt>
<dd></dd>

</dl>
<!-- Cool jazz - FIN -->



<?=writeHR()?>



<!-- Yeah - DEBUT -->
<h2><img src="<?=$RelBasePath?>images/titres/rub2_yeah.png" width="639" height="39" alt="Yeaaah yeaaaah yeaaaaaaaaaaaaaah"></h2>


<dl>

<dt>El Scorcho - Weezer - <a href="http://musicmoz.org/Bands_and_Artists/W/Weezer/Discography/Pinkerton/">Pinkerton</a> (1996)</dt>
<dd></dd>

<dt>Summertime - Big Brother & the holding company - <a href="http://musicmoz.org/Bands_and_Artists/J/Joplin,_Janis/Discography/Cheap_Thrills/">Cheap Thrills</a></dt>
<dd></dd>

<dt>Drifting along - Jamiroquai - <a href="http://musicmoz.org/Bands_and_Artists/J/Jamiroquai/Discography/Travelling_Without_Moving/">Travelling without moving</a> (1996)</dt>
<dd></dd>

<dt>Le crocodile - Camille Bazbaz - Sur le bout de la langue (2005)</dt>
<dd><q>Lui qui ne roule qu'au super, ça te change de mon ordinaire</q></dd>
<dd>Il y a d'abord cette voix : un mélange de Charlélie, Joe Cocker, et en
même temps cette douceur... Et puis, le texte ! Magnifique, ciselé, du travail
d'orfèvre ! Et... la mélodie... Du vrai grand Bazbaz !</dd>

</dl>
<!-- Yeah - FIN -->



<?=writeHR()?>



<!-- Beuargl - DEBUT -->
<h2><img src="<?=$RelBasePath?>images/titres/rub2_beuargl.png" width="173" height="39" alt="Beuragllll"></h2>

<dl>

<dt>Freedom - Rage against the machine - <a href="http://musicmoz.org/Bands_and_Artists/R/Rage_Against_the_Machine/Discography/Rage_Against_The_Machine/">Rage against the machine</a> (1992)</dt>
<dd></dd>

<dt>Forest + Atwa - System of a down - <a href="http://musicmoz.org/Bands_and_Artists/S/System_of_a_Down/Discography/Toxicity/">Toxicity</a> (2001)</dt>
<dd></dd>

</dl>
<!-- Beuargl - FIN -->



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>