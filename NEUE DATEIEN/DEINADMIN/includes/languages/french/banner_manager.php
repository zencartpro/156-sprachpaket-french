<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: banner_manager.php 628 2013-07-17 08:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Gestionnaire de bannière');

define('TABLE_HEADING_BANNERS', 'Bannières publicitaires');
define('TABLE_HEADING_GROUPS', 'Groupements');
define('TABLE_HEADING_STATISTICS', 'Affichage / Clics');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS', 'Nouvelle fenêtre');
define('TABLE_HEADING_BANNER_ON_SSL', 'Afficher sur les pages SSL');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Sort<br />séquence');

define('TEXT_BANNERS_TITLE', 'Nom de la bannière:');
define('TEXT_BANNERS_URL', 'URL de la bannière:');
define('TEXT_BANNERS_GROUP', 'Groupe de bannières:');
define('TEXT_BANNERS_NEW_GROUP', ', ou entrez un nouveau groupe de bannières ci-dessous');
define('TEXT_BANNERS_IMAGE', 'Image:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', ou entrez un fichier local ci-dessous');
define('TEXT_BANNERS_IMAGE_TARGET', 'Répertoire cible de l\'image (Enregistrer sous):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Répertoire cible proposé:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>NOTE : Les bannières HTML n\'enregistrent pas les clics.</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'Texte HTML:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Tri - bannière_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Note : L\'encadré latéral bannières_box_all affiche les bannières dans l\'ordre de tri spécifié.</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'La bannière sera affichée jusqu\'à ce que:');
define('TEXT_BANNERS_OR_AT', ', ou après');
define('TEXT_BANNERS_IMPRESSIONS', 'Désactivation automatique des superpositions.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Prévu pour:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Indice de bannière:</b><ul><li>Utilisez une image ou un texte HTML, mais pas les deux.</li><li>Le texte HTML a une priorité supérieure à celle d\'une image</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Référence de l\'image:</b><ul><li>Vous devez avoir les droits d\'écriture dans le répertoire de téléchargement!</li><li>Si vous ne souhaitez pas télécharger une image sur le serveur, laissez le champ de saisie "Enregistrer sous" vide (par exemple, si vous utilisez une image locale (côté serveur)).</li><li>Dans le champ de saisie "Enregistrer sous", il faut entrer un répertoire déjà existant et un "Slash" de conclusion (par ex. bannières/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>"La bannière sera affichée jusqu\'à ce que" Note:</b><ul><li>Un seul des deux champs doit être rempli.</li><li>Si vous ne voulez pas que la bannière se termine automatiquement, laissez ces champs vides.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Note sur l\'horaire:</b><ul><li>Si un calendrier a été créé, la bannière sera activée à cette date.</li><li>Toutes les bannières planifiées sont marquées comme inactives jusqu\'à ce que l\'horaire soit créé. Après cela, ils seront activés automatiquement</li></ul>');
define('TEXT_BANNERS_STATUS', 'Statut de bannière:');
define('TEXT_BANNERS_ACTIVE', 'Activement');
define('TEXT_BANNERS_NOT_ACTIVE', 'Non actif');
define('TEXT_INFO_BANNER_STATUS', '<strong>Allusion:</strong> L\'état de la bannière est mis à jour en fonction de l\'horaire existant et des paramètres des fenêtres contextuelles.');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Bannière dans une nouvelle fenêtre');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Allusion:</strong> La bannière s\'ouvre dans une nouvelle fenêtre');
define('TEXT_BANNERS_ON_SSL', 'Bannière avec SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Allusion:</strong> La bannière peut être affichée sur les pages SSL sans erreurs');

define('TEXT_BANNERS_DATE_ADDED', 'Ajouté le:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Commence le: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Finit: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Fin après : <b>%s</b> fondu enchaîné');
define('TEXT_BANNERS_STATUS_CHANGE', 'Modifier l\'état: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', '3 derniers jours');
define('TEXT_BANNERS_BANNER_VIEWS', 'Insertions de bannières');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clics de bannière');

define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer cette bannière?');
define('TEXT_INFO_DELETE_IMAGE', 'Supprimer l\'image de la bannière');

define('SUCCESS_BANNER_INSERTED', 'Succès : La bannière a été insérée.');
define('SUCCESS_BANNER_UPDATED', 'Succès : Le statut de la bannière a été mis à jour.');
define('SUCCESS_BANNER_REMOVED', 'Succès : La bannière a été retirée.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Succès : Le statut de la bannière a été mis à jour.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Attention! Un nom de bannière est requis.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Attention! Un groupe de bannières est requis.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Attention! Le répertoire cible n\'existe pas: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Attention! Le répertoire cible ne peut pas être écrit dans: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Attention! L\'image n\'existe pas.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Attention! L\'image ne peut pas être supprimée.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Attention! Statut inconnu.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'ERREUR : L\'image pour la bannière est obligatoire.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Attention! Le répertoire graphique n\'existe pas. Veuillez créer le répertoire \'graphs\' dans le dossier \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Attention! Le répertoire des graphiques n\'est pas accessible en écriture. Il est situé ici: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Afficher SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Nouvelle fenêtre');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON', 'Ouvrir une nouvelle fenêtre - ON');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF', 'Ouvrir une nouvelle fenêtre - OFF');
define('IMAGE_ICON_BANNER_ON_SSL_ON', 'Affichage sur les pages SSL - ON');
define('IMAGE_ICON_BANNER_ON_SSL_OFF', 'Affichage sur les pages SSL - OFF');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Succès : Le statut de la bannière à ouvrir dans une nouvelle fenêtre a été mis à jour.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Succès : Le statut de la bannière à afficher sur les pages SSL a été mis à jour.');