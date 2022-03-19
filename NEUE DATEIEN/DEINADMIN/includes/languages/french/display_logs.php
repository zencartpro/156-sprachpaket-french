<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: display_logs.php 732 2019-06-16 17:49:16Z webchills $
 * @translate German/French klartexter
 */
define('HEADING_TITLE', 'Afficher les fichiers journaux');
define('TABLE_HEADING_FILENAME', 'Nom de fichier');
define('TABLE_HEADING_MODIFIED', 'modifié le');
define('TABLE_HEADING_FILESIZE', 'Taille du fichier (octets)');
define('TABLE_HEADING_DELETE', 'Effacer?');
define('TABLE_HEADING_ACTION', 'Action');
define('BUTTON_DELETE_SELECTED', 'button_delete_selected.gif');
define('DELETE_SELECTED_ALT', 'Supprimer tous les fichiers sélectionnés');
define('BUTTON_DELETE_ALL', 'button_delete_all.gif');
define('DELETE_ALL_ALT', 'Supprimer tous les fichiers de la vue courante');
define('ICON_INFO_VIEW', 'Afficher le contenu de ce fichier');
define('DISPLAY_DEBUG_LOGS_ONLY', 'Afficher uniquement les journaux de débogage?');
define('LOG_SORT_ASC', 'ascendant');
define('LOG_SORT_DESC', 'descendant');
define('TEXT_HEADING_INFO', 'Contenu du dossier');
// -----
// Sort-order descriptions, used in the instructions' display.
//
define('TEXT_MOST_RECENT', 'à la pointe');
define('TEXT_OLDEST', 'aînée');
define('TEXT_SMALLEST', 'le plus petit');
define('TEXT_LARGEST', 'le plus grand');
// -----
// The TEXT_INSTRUCTIONS string is passed into sprintf to produce the instructions given on the plugin's main display,
// using the following variables:
//
// %1$u ... The maximum size of a fully-displayed file.
// %2$s ... Contains a descriptive string identifying the current sort order
// %3$u ... The number of log files currently being displayed.
// %4$u ... The number of log files currently present in the log-related directories.
// %5$s ... The "included" prefixes for the log-files displayed.
// %6$s ... The "excluded" prefixes for the log-files displayed.
//
$imageName = zen_image(DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />Les fichiers peuvent être triés par ordre croissant ou décroissant selon la date de la dernière modification en cliquant sur l\'icône <em>' . TABLE_HEADING_MODIFIED . '</em> Cliquez sur le lien Cliquez sur le bouton ' . $imageName . ' Info pour afficher le contenu du fichier.  Seuls les premiers octets %u du fichier sont lus; si le fichier journal est très volumineux, sa taille <span class="bigfile">red</span> est en surbrillance.<br /><br /> Cliquez sur le bouton <strong>Effacer tout</strong> supprime tous les fichiers journal de la vue courante. Cliquer sur le bouton <strong>Supprimer Sélectionné </strong> supprime uniquement les fichiers journaux sélectionnés.<br /><br />Les réglages pour l\'affichage des fichiers journaux sur cette page peuvent être effectués sous Configuration Logging.<br/><br/>Vue courante : %s %u des fichiers journaux %u.<br />');
define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Voulez-vous vraiment effacer ces fichiers \'+n+\'?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Voulez-vous vraiment supprimer les fichiers sélectionnés?');
define('WARNING_NOT_SECURE','<span class="errorText">REMARQUE : Vous n\'avez pas activé SSL. Le contenu des fichiers journaux que vous affichez sur cette page n\'est pas crypté, cela représente un risque de sécurité.!</span>');
define('WARNING_NO_FILES_SELECTED', 'Aucun fichier sélectionné pour suppression!');
define('WARNING_SOME_FILES_DELETED', 'Attention : Seulement %u des fichiers journaux %u ont été supprimés ; vérifiez les permissions des fichiers.');
define('SUCCESS_FILES_DELETED', '%u Les fichiers journaux ont été supprimés.');