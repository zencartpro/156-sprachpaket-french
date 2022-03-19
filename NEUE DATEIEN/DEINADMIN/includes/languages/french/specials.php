<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: specials.php 628 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Offres spéciales et ventes');

define('TABLE_HEADING_PRODUCTS','Articles');
define('TABLE_HEADING_PRODUCTS_MODEL','Numéro d\'article');
define('TABLE_HEADING_PRODUCTS_PRICE','Prix d\'article | Prix spécial | Vente');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Pourcentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible auprès de');
define('TABLE_HEADING_EXPIRES_DATE','Date de péremption ');
define('TABLE_HEADING_STATUS','Statut');
define('TABLE_HEADING_ACTION','Action');

define('TEXT_SPECIALS_PRODUCT','Articles:');
define('TEXT_SPECIALS_SPECIAL_PRICE','Tarif spécial:');
define('TEXT_SPECIALS_EXPIRES_DATE','Date de péremption:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Disponible auprès de:');
define('TEXT_SPECIALS_PRICE_TIP','<b>Remarque à des prix spéciaux::</b><ul><li>Pour réduire le prix, vous pouvez saisir un pourcentage dans le champ "Prix spécial", par ex..: <b>20%</b></li><li>Si vous saisissez un prix, le séparateur décimal doit être un point (pas de virgule) ! Exemple: <b>49.99</b></li><li>Si vous ne voulez pas utiliser de date d\'expiration, laissez simplement le champ vide.</li></ul>');

define('TEXT_INFO_DATE_ADDED','Créé le:');
define('TEXT_INFO_LAST_MODIFIED','Dernière modification:');
define('TEXT_INFO_NEW_PRICE','Nouveau prix:');
define('TEXT_INFO_ORIGINAL_PRICE','Prix original:');
define('TEXT_INFO_DISPLAY_PRICE', 'Prix affiché:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible auprès de:');
define('TEXT_INFO_EXPIRES_DATE','Date de péremption:');
define('TEXT_INFO_STATUS_CHANGE','Dernière modification de statut:');
define('TEXT_IMAGE_NONEXISTENT','L\'image n\'existe pas');

define('TEXT_INFO_HEADING_DELETE_SPECIALS','Supprimer le prix spécial');
define('TEXT_INFO_DELETE_INTRO','Voulez-vous vraiment supprimer ce prix spécial?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Succès : Ajout d\'une offre spéciale... Veuillez ajuster le prix et la date ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Attention : Aucun ID d\'article donné... rien n\'a été ajouté ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Attention : Article ID est déjà une offre spéciale... rien n\'a été ajouté ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'AVERTISSEMENT : L\'identification de l\'article n\'est pas valide... rien n\'a été ajouté ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Ajouter une offre spéciale par ID d\'article');
define('TEXT_INFO_PRE_ADD_INTRO', 'Pour les grandes bases de données, il est conseillé d\'ajouter des offres spéciales directement via l\'ID de l\'article.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Veuillez entrer l\'ID de l\'article: ');
define('TEXT_INFO_MANUAL', 'Ajout de l\'identification de l\'article en tant qu\'offre spéciale');