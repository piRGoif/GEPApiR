/*-------------------------------------------------------------------------------------------
 Fonctions utilitaires CSS
   /!\ à insérer en tête de page /!\
-------------------------------------------------------------------------------------------*/




/******************************
 Modifie les images avec l'attribut "data-responsive-img" :
	 - ajoute le dimensionnement en css
	 - supprime les attributs width / height du tag img
	 - ajoute du css pour basculer en width: 98% si le max-device-width est > width + 5
******************************/
function writeCSSRespImg() {
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
		if (!image.hasAttribute("data-responsive-img")) {
			continue;
		}
		
		// Récup width / height
		width = parseInt(image.getAttribute("width"));
		height = parseInt(image.getAttribute("height"));
		
		if (isNaN(width) || isNaN(height)) {
			continue;
		}

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
		cssCode = `
img${cssClassName}
{
	width: ${width}px;
	height: ${height}px;
}
@media screen and (max-device-width: ${maxWidth}px)
{
	img.${cssClassName}

	{
		width: 98%;
		height: auto;
	}
}
`;
		style.appendChild(document.createTextNode(cssCode));
		document.head.appendChild(style);

		// Suppression des attributs du tag img
		image.removeAttribute("width");
		image.removeAttribute("height");
	}
}




function addPermalinkToHeadings() {
	if (document.querySelector(".permalink")) {
		return;
	}

	const HEADINGS_SELECTOR = "h1[id], h2[id], h3[id], h4[id], h5[id], h6[id]";
	let headingNodes = document.querySelectorAll(HEADINGS_SELECTOR);

	for (let i = 0; i < headingNodes.length; i++) {
		let headingNodeCurrent = headingNodes[i];
		let nodeId = headingNodeCurrent.getAttribute("id");
		headingNodeCurrent.insertAdjacentHTML("beforeend", `<span class="permalink">&nbsp;<a href="#${nodeId}">#</a></span>`);
	}
}

