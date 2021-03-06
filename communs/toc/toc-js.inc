<?
/****************************************************************************************
 Génération automatique de la Table Of Contents
 /!\ Nécessite un élément #toc dans le document /!\
 Utilisation script http://www.whitsoftdev.com/articles/toc.html
 Version 20140830
****************************************************************************************/
?>
<script src="<?=$RelBasePath?>communs/toc/toc.js"></script>
<script>
var HIDE_CLASS = "hide";

function getTocElement() {
	return document.getElementById("toc").getElementsByTagName("ul")[0];
}

// Affiche ou masque la TOC à chaque appel
function toggleToc() {
	var ul = getTocElement();
	var newDispValue = (ul.className == HIDE_CLASS) ? "" : HIDE_CLASS;

	if (newDispValue == HIDE_CLASS) {
		// on ferme la TOC
		document.getElementById("toc-open").style.display = "";
		document.getElementById("toc-close").style.display = "none";
	} else {
		// on ouvre la TOC
		document.getElementById("toc-open").style.display = "none";
		document.getElementById("toc-close").style.display = "";
	}
	ul.className = newDispValue;
}

onDomReady(function() {
	generateTOC(document.getElementById("toc"));
	getTocElement().className = HIDE_CLASS;
	document.getElementById("toc-close").style.display="none";
});
</script>