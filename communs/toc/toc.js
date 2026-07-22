/*
 * Dynamic Table of Contents script
 * by Matt Whitlock <http://www.whitsoftdev.com/>
 * modified by piR
 */

function createLink(href, innerHTML) {
	var a = document.createElement("a");
	a.setAttribute("href", href);
	a.innerHTML = innerHTML;
	return a;
}

function setNodeId(node, suggestedId) {
	if (node.id) {
		return node.id;
	}
	
	node.id = suggestedId;
	return suggestedId;
}

function generateTOC(toc) {
	setCss();
	
	var i2 = 0, i3 = 0, i4 = 0;
	tocList = toc.appendChild(document.createElement("ul"));
	for (var i = 0; i < document.body.childNodes.length; ++i) {
		var node = document.body.childNodes[i];
		var tagName = node.nodeName.toLowerCase();
		var tocParentNode, sectionNumber, headingId;
		var isHeadingNode = false;
		
		if (tagName == "h4") {
			isHeadingNode = true;
			++i4;
			if (i4 == 1) {
				tocList.lastChild.lastChild.lastChild.appendChild(document.createElement("ul"));
			}
			sectionNumber = i2 + "." + i3 + "." + i4;
			headingId = "section" + sectionNumber;
			tocParentNode = tocList.lastChild.lastChild.lastChild.lastChild;
		}
		else if (tagName == "h3") {
			isHeadingNode = true;
			++i3, i4 = 0;
			if (i3 == 1) {
				tocList.lastChild.appendChild(document.createElement("ul"));
			}
			sectionNumber = i2 + "." + i3;
			headingId = "section" + sectionNumber;
			tocParentNode = tocList.lastChild.lastChild;
		}
		else if (tagName == "h2") {
			isHeadingNode = true;
			++i2, i3 = 0, i4 = 0;
			sectionNumber = i2;
			headingId = "section" + sectionNumber;
			tocParentNode = tocList;
		}
		
		if (isHeadingNode) {
			var sectionHeadingId = setNodeId(node, headingId);
			node.insertBefore(document.createTextNode(sectionNumber + ". "), node.firstChild);
			tocParentNode.appendChild(document.createElement("li")).appendChild(createLink("#" + sectionHeadingId, node.innerHTML));
		}
	}
	
	tocList.addEventListener("click", function(e) {
		if (e.target.closest("a")) {
			toc.removeAttribute("open");
		}
	});
}

/**
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/scroll-behavior MDN documentation on scroll-behavior
 */
function setCss() {
	try {
		var html = document.documentElement || document.getElementsByTagName('html')[0];
		if (html && html.style) {
			html.style.scrollBehavior = 'smooth';
		}
	}
	catch (e) {
		// fail silently on older browsers
	}
}
