<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: coupon_admin_export.php 1 2019-06-17 17:18:08Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Coupon d\'action Exporter');
define('HEADING_SUB1', 'Analyse ou exportation d\'un bon d\'action');
define('HEADING_SUB2', 'Historique du journal de purge');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Exporter le format de fichier:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Exporter le nom de fichier:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Enregistrer le fichier sur le serveur? (sinon un téléchargement démarre directement dans le navigateur)');
define('TEXT_ACTIVITY_EXPORT_DEST','Cible: ');
define('TEXT_PROCESSED', ' traitées.');
define('SUCCESS_EXPORT_DISCOUNT_COUPON_LOG', 'Exportation terminée. ');
define('FAILURE_EXPORT_DISCOUNT_COUPON_LOG', 'L\'exportation a échoué. Impossible de créer le fichier avec succès. ');

define('TEXT_INSTRUCTIONS','<u>INSTRUCTIONS</u><br />Sur cette page, vous pouvez exporter vos coupons d\'action vers un fichier csv.<br />
<ol><li>Sélectionnez si vous voulez simplement afficher ou exporter dans un fichier.<li>Spécifiez un nom de fichier. (doit se terminer par l\'une des extensions de fichier suivantes: .csv .txt .htm .html .xml)<li>Cliquez sur Go pour continuer.<li>Choisissez si vous voulez enregistrer ou ouvrir le fichier, selon ce que votre navigateur vous offre.</ol>');
