<?php

class GepapirChangelog {
    /**
     * Should be a constant, but expressions in constants are only allowed since PHP 5.6.0
     * see https://www.php.net/manual/en/migration56.new-features.php#migration56.new-features.const-scalar-exprs)
     * @var ChangelogEntry[]
     */
    public static function getChangelogEntries()
    {
        return [
            new ChangelogEntry('2025-08-07', '8.5.1', [
                "Changelog : ajout d'un lien sur chaque entrée rss",
                'Musiques : déplacement des liens musicaux depuis la rubrique Moi',
                "Informatique : CSS biclasse ajout d'un codepen exemple",
                'Menu : affichage de la rubrique en cours',
                "Accueil : ajout d'un badge site.io pour la version",
            ]),
            new ChangelogEntry('2025-04-25', '8.4.1', [
                'Musiques : lien vers les images des Journées de la Flute à Bec 2025',
                'Informatique : correction du titre "pro"'
            ]),
            new ChangelogEntry('2025-04-06', '8.4.0', [
                "Musiques : ajout captation vidéo Jazz'Alp",
                "Musiques : passage des émoji au début des titres",
                "Musiques : lien High Fidelity",
                "CSS : corrigé la taille de police dans les listes imbriquées",
            ]),
            new ChangelogEntry('2025-04-06', '8.3.3', [
                "Musiques : ajout lien album Fanfaronnades 2025",
            ]),
            new ChangelogEntry('2025-02-16', '8.3.2', [
                'Accueil : déplacement du lien GitHub de GEPApiR vers Introduction',
                'Informatique : déplacement des liens Pro depuis la rubrique Moi',
                'Moi : ajout du lien Deezer',
                "Musiques : ajout lien album Brass'tille avril 2024",
                'Highlight.js : switch theme from monokai to monokai-sublime',
            ]),
            new ChangelogEntry('2024-11-02', '8.3.1', [
                'Changelog : corrections pour le vieux PHP de Free, plus quelques oublis',
            ]),
            new ChangelogEntry('2024-11-02', '8.3.0', [
                'Changelog : passage en dynamique',
                "Changelog : rss généré maison pour remplacer le service Feed43 qui n'existe plus",
            ]),
            new ChangelogEntry('2024-09-06', '8.2.7', [
                'Musiques : ré-ordonné par ordre anté chronologique',
            ]),
            new ChangelogEntry('2024-09-06', '8.2.6', [
                'ToC : suppression icone ouverture/fermeture, amélioration responsive, petites modifications esthétiques',
                'Ajout permalink sur headings',
                "Balise nav déplacé en haut de page (lecteurs d'écran)",
                'Mise à jour des favicons',
                "Informatique / Responsive : actualisation sur l'attribut srcset",
                'Musiques photo : lien Valdingues 2024',
            ]),
            new ChangelogEntry('2024-08-20', '8.2.5', [
                "Moi : modification de l'emoji pro",
                "Musiques : maj des liens des vidéos de l'Harmonie de Grenoble",
            ]),
            new ChangelogEntry('2024-08-16', '8.2.4', [
                "Menu : amélioration responsive, ajout d'une transition background",
                'Informatique / GEPApiR / Suivi de version et publication : création de la page',
                'Informatique / GEPApiR : mise à jour des pages parlant du menu',
                "Informatique / GEPApiR / CSS : technique d'échappement du HTML",
            ]),
            new ChangelogEntry('2024-08-14', '8.2.0', [
                "Musiques : mise à jour complète du contenu",
                "Menu : changement d'apparence",
            ]),
            new ChangelogEntry('2024-08-13', '8.0.0', [
                'Publication avec la GitHub action "FTP Deploy"',
                "Renommage des fichiers communs",
                'Résolution des alertes et blocages "mixed content"',
                "Mise à jour de la librairie Hightlight.js et changement de style",
                "Modification du rendu des citations",
                "Musiques : actualisation et réorganisation des liens",
                "Moi : actualisation et réorganisation des liens",
                "Liens : actualisation",
            ]),
            new ChangelogEntry('2018-10-02', '7.11.1', [
                "Moi : ajout de mon compte Open Hub",
            ]),
            new ChangelogEntry('2018-07-25', '7.11.0', [
                "Moi : actualisation de la rubrique, ajout de liens",
                "Musiques : actualisation des groupes et enregistrements",
            ]),
            new ChangelogEntry('2015-01-24', '7.10.4', [
                "Informatique / IDE, principaux raccourcis : petites corrections et compléments",
                "Moi / CV : mise à jour",
            ]),
            new ChangelogEntry('2014-10-22', '7.10.2', [
                "Menu : modification de la bordure",
                "Accueil : adaptations du texte",
                "Informatique / HTML ou XHTML : actualisation du document",
                "Informatique / IDE, principaux raccourcis : création",
            ]),
            new ChangelogEntry('2014-10-12', '7.9.5', [
                "Accueil : modification du texte",
                "Correction de la couleur des liens de la barre de navigation",
                "Informatique / CSS mises en forme diverses : complément sur la compatibilité navigateurs",
                "Informatique / Menu de navigation : complément sur la bordure",
                "Informatique / Développement Notes / Domino et doctype HTML : maj suite à constatation que le DarkBlog n'est plus accessible ",
            ]),
            new ChangelogEntry('2014-09-02', '7.8.1', [
                "Informatique / responsive design : introduction plus complète",
                "Informatique / responsive design : ajout d'exemples sur les marges en %",
                "Informatique / responsive design : précision sur le border-radius du menu",
            ]),
            new ChangelogEntry('2014-08-30', '7.8.0', [
                "Marges horizontales en %",
                "Passage de l'arrondi du menu en % pour la composante horizontale",
                "Informatique / responsive design : mise à jour des captures du menu et de la fonction writeCSSRespImg(), ajout d'un paragraphe sur les unités CSS relatives",
                "Ajout de box-shadow, border-radius et border outset sur les blockquote ",
            ]),
            new ChangelogEntry('2014-08-29', '7.7.5', [
                "ajout du gzip sur les pages du site",
                "minification et ajout du gzip sur la css et le javascript du site,",
                "informatique / performances : renommage de la page (anciennement CSS Sprites) et ajout d'info sur les autres techniques utilisées (concaténation, minification, gzip, ...)",
                "ajout d'arrondis sur la bordure du menu",
                "ajout d'une marge sous les images des H1",
                "informatique / mises en forme diverses : compléments supplémentaires sur CSS Shapes",
                "informatique / outils pour le concepteur de site personnel : ajout d'outils de test responsive design",
                "mini corrections diverses dans des articles ",
            ]),
            new ChangelogEntry('2014-08-23', '7.6.1', [
                "musiques : création d'une page sur Finale",
                "informatique / mises en forme diverses : ajout de compléments sur CSS Shapes",
            ]),
            new ChangelogEntry('2014-08-22', '7.5.0', [
                "ajout d'un flux RSS sur le changelog",
                "informatique : fait disparaitre les articles pas encore prêts",
                "informatique / internationalisation pour le concepteur web : mise à jour",
                "informatique / responsive design : compléments sur les attributs HTML 5 data-*",
            ]),
            new ChangelogEntry('2014-08-15', '7.4.3', [
                "informatique : ajout au besoin d'un système de TOC automatique (merci WhitSoftDev)",
                'informatique : ajout d\'une sous rubrique "La GepapiR côté technique"',
                "informatique : ajout d'une page outils des concepteurs de site personnel",
                "informatique / css groupement : changement titre, ajout préproc et variables CSS",
                "informatique : mise en place des nouvelles footnotes",
                "bascule sur la web font Satisfy chez Google fonts, afin de profiter de leur CDN et polices optimisées !",
                "moi : ajout d'un lien IMDB",
            ]),
            new ChangelogEntry('2014-08-13', '7.3.5', [
                "responsive design : gestion des images d'entête (petit oubli oops) via un JS qui se débrouille au chargement",
                "ajout d'un clear: left manquant sur les séparateurs",
                "musiques : ajout liens pour écouter les démo JeudiSoir et IYB",
            ]),
            new ChangelogEntry('2014-08-09', '7.3.2', [
                "pour une meilleure expérience sur mobiles et tablettes, responsive design sur les séparateurs et le menu de navigation (via Media Queries conjuguée à la balise meta viewport)",
                "menu de navigation : basculé sur le nouvel élément nav",
                "menu de navigation : ajout de :before avec U+27A6 pour les séparations",
                "remise à jour de la rubrique Liens (reste encore pas mal de rédaction)",
                "mise à jour contenu de la page Musiques",
                "corrections sur la lettre pi dans la description ci-dessus",
            ]),
            new ChangelogEntry('2014-08-05', '7.1.9', [
                "modif de l'image dans musiques (border, box-shadow et transform rotate)",
                "ajout d'un box-shadow sur les images de titre et les séparateurs",
                'ajout d\'une image de titre pour la rubrique "moi"',
                "ajout explications titre du site",
            ]),
            new ChangelogEntry('2014-08-01', '7.1.5', [
                "mise en sprites de certaines images (icones du menu de navigation, séparateurs)",
                "menu de navigation : changement de certaines icones",
                "menu de navigation : modif du :hover, suppression d'un léger bug de décalage",
                "séparateurs : maintenant tirés au sort (un petit F5 pour voir ?)",
                "séparateurs : ajout d'un séparateur X11",
                "séparateurs : ré-ordonnés différemment",
            ]),
            new ChangelogEntry('2014-07-30', '7.0.5', [
                "Ouf enfin ! Reprise de ce site... Bon, rien de trop visible mais c'est un début de remise à niveau, avant d'attaquer le contenu...",
                "doctype HTML5",
                "ajout de liens vers la home sur les titres de rubriques",
                "suppression des hacks IE (nous sommes - et ça fait du bien ! - dans une autre époque)",
                "fusion des CSS (objectif moins de resources à télécharger)",
                "remplacement des images des titres de 2eme niveau par du texte (vive les web fonts !)",
                "ré-écriture contenu page d'accueil",
                "ajout d'un favicon (oui, ça change tout ! ;) ) (et merci http://realfavicongenerator.net/)",
                "musiques : mini modif sur l'image",
                "musiques : ré-écriture et actualisation des groupes",
                "divers : ajout de liens",
                "liens : suppression du bookmark",
            ]),
            new ChangelogEntry('2009-04-19', '6.1.0', [
                'Correction et compléments dans l\'article "HTML ou XHTML ?" à propos de l\'attribut id',
            ]),
            new ChangelogEntry('2009-02-26', null, [
                'Suite aux remarques de Olivier Miakinen et parce que le temps passe :), quelques corrections sur l\'article "HTML ou XHTML ?"',
            ]),
            new ChangelogEntry('2009-02-22', null, [
                "suppression rubrique Copains",
                "mise à jour CV",
            ]),
            new ChangelogEntry('2007-08-08', null, [
                "Ouf ! repris enfin un peu de temps pour ce site...",
                '"anonymisé" mon CV',
                "mis en ligne les premières ébauches des documents web & charset plus complets",
                "terminé le document Notes/Domino et Doctype",
            ]),
            new ChangelogEntry('2006-12-19', null, [
                "Quelques mini modifications de quelques rédactionnels...",
            ]),
            new ChangelogEntry('2005-12-21', null, [
                "On a été sacrément occupé par le site de Ping Machine ces dernier temps, mais ça y est... à peu près !",
                "Rajouté en section musique un petit barratin sur moi, et des pointeurs vers les coups de coeur blogés sur Ping Machine",
                "Lien vers le site de Ping Machine (encore) dans la page des liens",
            ]),
            new ChangelogEntry('2005-09-22', null, [
                "Ajout de Laetitia & Martial dans la page des copains",
                'Corrections des articles "HTML ou XHTML ?", "i18n Outils & doc" et "Web, codages et jeux de caractères"',
                "modif de la CSS (en particulier prb sur les blockquote)",
            ]),
            new ChangelogEntry('2005-08-24', null, [
                "Modifications d'importance de la feuille de style principale, en espérant que les pages soient maintenant plus lisibles",
                "Passage en ligne de la 1ere version complète de HTML ou XHTML ?",
                "Et toujours en informatique, un nouveau document : CSS groupement de déclarations",
            ]),
            new ChangelogEntry('2005-08-08', null, [
                "1ere version non en travaux de web et codages",
            ]),
            new ChangelogEntry('2005-08-05', null, [
                "Quelques petits mots pour se présenter sur la page d'accueil",
                "une rubrique informatique qui se remplit doucement (et même quelques articles terminés !!)",
                "la section liens qui évolue doucement",
                "la page copains qui se complète (tout aussi doucement... oui bon)",
                "et pleins d'idées pour la rubrique musique !",
            ]),
            new ChangelogEntry('2005-07-14', null, [
                "Après quelques modifs très techniques (CSS, balises LINK, ...) ou mineures tout au long de la semaine dernière, passage en ligne d'une version finale (pour la mise en page uniquement, chaque chose en son temps...) de la page les copains (d'abord)",
            ]),
            new ChangelogEntry('2005-06-22', null, [
                "prb du lien vers l'accueil dans le menu corrigé",
                "page d'erreur 404 personnalisée",
                "maquette compil 2001",
                "Mise en place de IE7",
            ]),
            new ChangelogEntry('2005-06-17', null, [
                'Mise en place de la majorité des images titres manquantes ("alors ça, c\'est fait !")',
                '"Liens dans nouvelle fenêtre" en position:fixed',
            ]),
            new ChangelogEntry('2005-05-22', null, [
                "1ere mise à jour avec Sitecopy !",
                "Quelques modifs dans la page de liens, dans l'accueil, et ajout de quelques images de titres niveau 2",
            ]),
            new ChangelogEntry('2005-05-16', null, [
                "Page de liens presque finale...",
            ]),
            new ChangelogEntry('2005-05-07', null, [
                "Bon j'avoue, perdre tout ce que j'avais réalisé jusqu'à maintenant dans mon crash disque... Ca ne m'a pas aidé à m'y remettre. Après plusieurs mois de mise en silence, nous y revoilà !! On a la gniaaak !! Bon, pour l'instant ce n'est que l'accueil qui est à peu près OK. Par contre, les anciens auront remarqué que les entrées du menu ont changées... car j'ai pleins d'idées !! Aller, j'y retourne :))",
            ]),
        ];
    }

    /**
     * @return string
     */
    public static function getCurrentVersion() {
        $latestEntry = static::getChangelogEntries()[0];
        $currentVersion = $latestEntry->entryVersion;
        return (is_null($currentVersion)) ? 'N/A' : $currentVersion;
    }
}



class ChangelogEntry
{
    /** @var string date in the ISO-8601 format */
    public $entryDate;
    /** @var ?string date version, might be null (wasn't present in the GEPApiR early days) */
    public $entryVersion;
    /** @var string[] list of entry content */
    public $aEntryContent;

    /**
     * @param string $entryDate
     * @param ?string $entryVersion
     * @param string[] $aEntryContent
     */
    function __construct($entryDate, $entryVersion, $aEntryContent)
    {
        $this->entryDate = $entryDate;
        $this->entryVersion = $entryVersion;
        $this->aEntryContent = $aEntryContent;
    }
}



/**
 * @uses GepapirChangelog
 */
abstract class AbstractChangelogRenderer {
    /**
     * @param ?int $numberOfEntriesToReturn
     * @return string
     */
    public static function getContent($numberOfEntriesToReturn = null)
    {
        $htmlChangelog = static::getHeader();
        $changelogEntries = GepapirChangelog::getChangelogEntries();
        $numberOfEntriesReturned = 0;

        foreach ($changelogEntries as $changelogEntry) {
            if ((!is_null($numberOfEntriesToReturn)) && ($numberOfEntriesReturned >= $numberOfEntriesToReturn)) {
                break;
            }

            $entryDate = $changelogEntry->entryDate;
            $entryVersion = $changelogEntry->entryVersion;
            $entryTitle = $entryDate;
            if (!is_null($entryVersion)) {
                $entryTitle .= ', v' . $entryVersion;
            }

            $htmlChangelog .= static::getEntryBefore($entryTitle, $entryDate);

            $entryContent = $changelogEntry->aEntryContent;
            foreach ($entryContent as $entryContentItem) {
                $htmlChangelog .= static::getEntryContentItem($entryContentItem);
            }

            $htmlChangelog .= static::getEntryAfter();
            $numberOfEntriesReturned++;
        }

        $htmlChangelog .= static::getFooter();

        return $htmlChangelog;
    }

    /**
     * @return string
     */
    abstract protected static function getHeader();
    /**
     * @param string $entryTitle
     * @param string $entryId
     * @return string
     */
    abstract protected static function getEntryBefore($entryTitle, $entryId);
    /**
     * @param string $entryContentItem
     * @return string
     */
    abstract protected static function getEntryContentItem($entryContentItem);
    /**
     * @return string
     */
    abstract protected static function getEntryAfter();
    /**
     * @return string
     */
    abstract protected static function getFooter();
}



class HtmlChangelogRenderer extends AbstractChangelogRenderer {
    protected static function getHeader()
    {
        return '<dl id="changelog-ul">';
    }

    protected static function getEntryBefore($entryTitle, $entryId) {
        return <<<HTML
            <dt>{$entryTitle}</dt>
            <dd>
HTML;
    }

    protected static function getEntryContentItem($entryContentItem) {
        return '- ' . $entryContentItem . '<br>';
    }

    protected static function getEntryAfter()
    {
        return '</dd>';
    }

    protected static function getFooter()
    {
        return '</dl>';
    }
}



/**
 * @link https://validator.w3.org/feed/ W3C feed validator service
 * @link https://en.wikipedia.org/wiki/RSS
 * @link https://www.wakdev.com/fr/more/wiki/php-mysql/generation-dun-flux-rss-en-php.html Créer en php son propre flux RSS dynamique
 */
class RssChangelogRenderer extends AbstractChangelogRenderer
{
    protected static function getHeader()
    {
        return <<<XML
<?xml version="1.0"?>
<rss version="2.0">
  <channel>
    <title>GEPApiR</title>
    <link>http://pgoiffon.free.fr/</link>
    <description>Le site personnel de Pierre Goiffon</description>

XML;
    }

    protected static function getEntryBefore($entryTitle, $entryId)
    {
        $entryTitleEscaped = htmlspecialchars($entryTitle);
        return <<<XML
 <item>
  <title>{$entryTitleEscaped}</title>
  <link>http://pgoiffon.free.fr/#changelog-title</link>
  <guid>{$entryId}</guid>
  <description>

XML;
    }

    protected static function getEntryContentItem($entryContentItem)
    {
        return '- ' . htmlspecialchars($entryContentItem) . "\n";
    }

    protected static function getEntryAfter()
    {
        return <<<XML
            </description>
        </item>
XML;
    }

    protected static function getFooter()
    {
        return <<<XML
    </channel>
</rss>
XML;
    }
}
