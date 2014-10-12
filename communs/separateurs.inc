<?php
/*-------------------------------------------------------------------------------------------
 Fonction writeHR()
   Permet d'écrire un HR comme il faut (cycle entre n image différentes)
   Ini -> $tab_sep[] contenant les classes des séparateurs
       -> $cpt_sepindice du dernier séparateur imprimé
   /!\ à insérer en tête de page /!\
 Version 20140813
-------------------------------------------------------------------------------------------*/




/******************************
 Déclaration des classes des séparateurs
   Ainsi les chemins des images ne sont contenus que dans la CSS
******************************/
$tab_sep = array(
"sep1"
,"sep2"
,"sep3"
,"sep4"
,"sep5"
,"sep6"
);

// Ini compteur
$cpt_sep = rand(0, count($tab_sep)) - 1;



/******************************
 Fonction writeHR()
******************************/
function writeHR()
{
	// récup var globales
	global $tab_sep;
	global $cpt_sep;

	$cpt_sep++;
	// Si dernier sep atteind, on repart à 0
	if ($cpt_sep >= count($tab_sep))
		{ $cpt_sep = 0;}

	return '<hr class="sep ' . $tab_sep[$cpt_sep] . '">';
}
?>
