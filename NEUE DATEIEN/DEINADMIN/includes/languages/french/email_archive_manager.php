<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: email_archive_manager.php 730 2015-12-22 15:49:16Z webchills $
 * @translate German/French klartexter
 */
define('SUBJECT_SIZE_LIMIT', 25);
define('MESSAGE_SIZE_LIMIT', 550);
define('MESSAGE_LIMIT_BREAK', '...');
define('HEADING_TITLE', 'Gestionnaire d\'archives de courriels');
define('HEADING_SEARCH_INSTRUCT', 'Vous pouvez rechercher n\'importe quelle combinaison des critères suivants...');

define('HEADING_MODULE_SELECT', 'Filtrer par module');
define('HEADING_SEARCH_TEXT', 'Recherche par texte');
define('HEADING_SEARCH_TEXT_FILTER', 'Filtre de recherche actuel: ');
define('HEADING_START_DATE', 'Date de début');
define('HEADING_END_DATE', 'Date de fin');
define('HEADING_PRINT_FORMAT', 'Afficher les résultats en vue d\'impression');
define('HEADING_TRIM_INSTRUCT', 'Supprimer les courriels plus anciens que...');

define('TABLE_HEADING_EMAIL_DATE', 'envoyé le');
define('TABLE_HEADING_CUSTOMERS_NAME', 'Nom du client');
define('TABLE_HEADING_CUSTOMERS_EMAIL', 'Adresse de courriel');
define('TABLE_HEADING_EMAIL_FORMAT', 'Format');
define('TABLE_HEADING_EMAIL_SUBJECT', 'Thème');
define('TABLE_FORMAT_TEXT', 'TEXTE');
define('TABLE_FORMAT_HTML', 'HTML');

define('TEXT_TRIM_ARCHIVE', 'Réduire la taille des archives...');
define('TEXT_ARCHIVE_ID', 'Archives #');
define('TEXT_ALL_MODULES', 'Tous les modules');
define('TEXT_DISPLAY_NUMBER_OF_EMAILS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> emails)');
define('TEXT_EMAIL_MODULE', 'Module: ');
define('TEXT_EMAIL_TO', 'à: ');
define('TEXT_EMAIL_FROM', 'de: ');
define('TEXT_EMAIL_DATE_SENT', 'Envoyé: ');
define('TEXT_EMAIL_SUBJECT', 'Thème: ');
define('TEXT_EMAIL_EXCERPT', 'Extrait du message:');
define('TEXT_EMAIL_NUMBER', 'Émail #');

define('RADIO_1_MONTH', ' 1 mois');
define('RADIO_6_MONTHS', ' 6 mois');
define('RADIO_1_YEAR', ' 12 mois');
define('TRIM_CONFIRM_WARNING', 'Attention : Ceci supprimera définitivement les emails de l\'archive.<br />Vous êtes en sécurité?');
define('POPUP_CONFIRM_RESEND', 'Voulez-vous vraiment renvoyer cet email?');
define('POPUP_CONFIRM_DELETE', 'Voulez-vous vraiment supprimer cet e-mail?');
define('SUCCESS_TRIM_ARCHIVE', 'Succès : Les courriels plus anciens que <strong>%s</strong> ont été supprimés.');
define('SUCCESS_EMAIL_RESENT', 'Succès : Le courriel #%s a été envoyé de nouveau à %s');

define('IMAGE_ICON_HTML', ' Voir le courriel HTML ');
define('IMAGE_ICON_TEXT', ' Voir le texte de l\'email ');
define('IMAGE_ICON_RESEND', ' Renvoyer l\'email ');
define('IMAGE_ICON_EMAIL', ' Destinataire du courriel ');
define('IMAGE_ICON_DELETE', ' Supprimer le message ');

define('BUTTON_SEARCH', 'Rechercher dans les archives');
define('BUTTON_TRIM_CONFIRM', 'Supprimer l\'email');
define('BUTTON_CANCEL', 'abandonner');