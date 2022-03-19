<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ezpages.php 629 2019-06-16 21:39:16Z webchills $
 * @translate German/French klartexter
 */
 
define('HEADING_TITLE', 'Pages EZ');
define('TABLE_HEADING_PAGES', 'Titre de page');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_VSORT_ORDER', 'Sidebox Sorting');
define('TABLE_HEADING_HSORT_ORDER', 'Tri du pied de page');
define('TEXT_PAGES_TITLE', 'Titre de page:');
define('TEXT_PAGES_HTML_TEXT', 'Contenu HTML:');
define('TABLE_HEADING_DATE_ADDED', 'Créé le:');
define('TEXT_PAGES_STATUS_CHANGE', 'Changement de statut: %s');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir effacer la page?');
define('SUCCESS_PAGE_INSERTED', 'Succès : La page a été insérée.');
define('SUCCESS_PAGE_UPDATED', 'Succès : La page a été modifiée.');
define('SUCCESS_PAGE_REMOVED', 'Succès : La page a été suppriméet.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Succès : Le statut de la page a été modifié.');
define('ERROR_PAGE_TITLE_REQUIRED', 'ERREUR : Le titre de la page est nécessaire.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'ERREUR : Drapeau d\'état inconnu.');
define('ERROR_MULTIPLE_HTML_URL', 'ERREUR : Plusieurs options sélectionnées, bien qu\'une seule soit autorisée par lien.  ...<br />Soit: Contenu HTML -ou- URL du lien interne -ou- URL du lien externe');
define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'En-tête:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sidebox:');
define('TABLE_HEADING_STATUS_FOOTER', 'Pied de page:');
define('TABLE_HEADING_STATUS_TOC', 'Table des matières:');
define('TABLE_HEADING_CHAPTER', 'Chapitres:');
define('TABLE_HEADING_VISIBLE', 'Visible:');
define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Ouvrir une nouvelle fenêtre:');
define('TABLE_HEADING_PAGE_IS_SSL', 'La page est SSL:');
define('TABLE_HEADING_PAGE_IS_VISIBLE', 'La page est visible:');
define('TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION', ' s\'affiche, même si ce n\'est pas dans l\'en-tête, le pied de page ou l\'encadré latéral.<br>
(Si tous les paramètres pour Visible, En-tête, Pied de page et Sidebox sont réglés sur OFF, les visiteurs qui consultent cette page obtiendront un message d\'introuvable.)');
define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> pages)');
define('IMAGE_NEW_PAGE', 'Nouvelle page');
define('TEXT_INFO_PAGE_IMAGE', 'Image');
define('TEXT_INFO_CURRENT_IMAGE', 'Image actuelle:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Sélectionnez une page ...');
define('TEXT_HEADER_SORT_ORDER', 'Tri:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Tri:');
define('TEXT_FOOTER_SORT_ORDER', 'Tri:');
define('TEXT_TOC_SORT_ORDER', 'Tri:');
define('TEXT_CHAPTER', 'Avant/Après chapitre:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Chapitres:&nbsp;<br />');
define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'L\'en-tête de tri doit être supérieur à 0 pour que la page soit affichée.');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Le tri de la sidebox doit être supérieur à 0 pour afficher la page, sinon il est supposé être du contenu HTML à des fins spéciales.');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Le tri du pied de page doit être supérieur à 0 pour que la page soit affichée.');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'La table des matières doit être supérieure à 0 pour que la page soit affichée.');
define('TEXT_CHAPTER_EXPLAIN', 'Les chapitres sont liés et affichés en fonction de la table des matières triée dans la table des matières.');
define('TEXT_ALT_URL', 'Lien interne URL:');
define('TEXT_ALT_URL_EXPLAIN', 'Wenn est spécifié, le contenu de la page EZ est ignoré et ce lien est utilisé <br />par exemple : Critiques : index.php?main_page=reviews<br />Mon compte : index.php?main_page=account<br /> De plus SSL est marqué');
define('TEXT_ALT_URL_EXTERNAL', 'Lien externe URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Si spécifié, le contenu de la page EZ est ignoré et ce lien est utilisé <br/>par exemple http://www.zen-cart-pro.at');
define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Afficher trier: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Chapitre/Table des matières');
define('TEXT_SORT_HEADER_TITLE', 'En-tête');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sidebox');
define('TEXT_SORT_FOOTER_TITLE', 'Pied de page');
define('TEXT_SORT_PAGE_TITLE', 'Titre de page');
define('TEXT_SORT_PAGE_ID_TITLE', 'Pages ID, Titre');
define('TEXT_PAGE_TITLE', 'Titre:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>AVERTISSEMENT : Définition des liens multiples</strong>');