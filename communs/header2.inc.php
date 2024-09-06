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

</head>

<body>



<?
require_once($RelBasePath . 'communs/menu.inc.php');
?>
