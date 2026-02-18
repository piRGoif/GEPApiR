<?php
/*******************************************************************************
Entête commun pages
*******************************************************************************/
?>



<script src="<?= $RelBasePath ?>communs/tools.jz"></script>
<script>
<? // Utilisation onDomReady https://github.com/tubalmartin/ondomready ?>
onDomReady(writeCSSRespImg);
onDomReady(addPermalinkToHeadings);
</script>


<?php
if (isset($date_maj)) {
    //@link https://developers.google.com/search/docs/appearance/publication-dates?hl=fr
    echo <<<HTML
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "datePublished": "{$date_creation}",
      "dateModified": "{$date_maj}"
    }
    </script>
    HTML;
}
?>


</head>

<body>



<?
require_once($RelBasePath . 'communs/menu.inc.php');
?>
