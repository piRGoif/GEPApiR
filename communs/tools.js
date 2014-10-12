/*-------------------------------------------------------------------------------------------
 Fonctions utilitaires CSS
   /!\ à insérer en tête de page /!\
 Version 20140813
-------------------------------------------------------------------------------------------*/




/******************************
 Modifie les images avec l'attribut "data-responsive-img" :
	 - ajoute le dimensionnement en css
	 - supprime les attributs width / height du tag img
	 - ajoute du css pour basculer en width: 98% si le max-device-width est > width + 5
******************************/
function writeCSSRespImg()
{
	var elements = document.getElementsByTagName("img"),
		image,
		width,
		height,
		cssClassName,
		cssClasses,
		cssCode,
		style,
		maxWidth;
	for (i = 0; i <= elements.length - 1; i++) {
		image = elements[i];
		if (image.hasAttribute("data-responsive-img")) {
			// Récup width / height
			width = parseInt(image.getAttribute("width"));
			height = parseInt(image.getAttribute("height"));

			// Ajoute classe
			cssClassName = "responsive-img-" + i;
			cssClasses = image.className;
			if (cssClasses != "") {
				cssClasses += " ";
			} else {
				cssClasses = "";
			}
			cssClasses += cssClassName;
			image.className = cssClasses;

			// Ecriture du CSS
			cssCode = "";
			style = document.createElement("style");
			maxWidth = width + 5;
			cssCode = "\nimg." + cssClassName + "\n\
{\n\
width: " + width + "px;\n\
height: " + height + "px;\n\
}\n\
@media screen and (max-device-width: " + maxWidth + "px)\n\
{\n\
	img." + cssClassName + "\n\
	{\n\
	width: 98%;\n\
	height: auto;\n\
	}\n\
}\n";
			style.appendChild(document.createTextNode(cssCode));
			document.head.appendChild(style);

			// Suppression des attributs du tag img
			image.removeAttribute("width");
			image.removeAttribute("height");
		}
	}
}
