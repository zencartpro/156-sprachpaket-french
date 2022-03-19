<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: coupon_restrict.php 699 2019-04-13 16:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Coupon promotionnel - Articles/Catégories Restrictions');
define('HEADING_TITLE_CATEGORY','Restrictions de catégorie');
define('HEADING_TITLE_PRODUCT','Restrictions sur l\'article');
define('HEADER_COUPON_ID','ID du bon d\'action');
define('HEADER_COUPON_NAME','Action coupon Nom');
define('HEADER_CATEGORY_ID','Catégorie ID');
define('HEADER_CATEGORY_NAME','Nom de catégorie');
define('HEADER_PRODUCT_ID','ID de l\'article');
define('HEADER_PRODUCT_NAME','Nom de l\'article');
define('HEADER_RESTRICT_ALLOW','Autorisation');
define('HEADER_RESTRICT_DENY','Ne permettez pas');
define('HEADER_RESTRICT_REMOVE','Supprimer');
define('IMAGE_ALLOW','Autorisation');
define('IMAGE_DENY','Ne permettez pas');
define('IMAGE_REMOVE','Supprimer');
define('TEXT_ALL_CATEGORIES', 'Toutes les catégories');
define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Ajouter tous les articles à cette catégorie');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Supprimer tous les articles de cette catégorie');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Si vous sélectionnez "Ajouter tous les articles à la catégorie", seuls les articles pour lesquels aucune restriction n\'a encore été définie seront ajoutés.<br />
Lorsque vous sélectionnez "Supprimer tous les éléments de la catégorie", seuls les éléments marqués Autorisé ou Non autorisé seront supprimés.</strong>');

define('TEXT_MANUFACTURER', 'Fabricant: ');
define('TEXT_CATEGORY', 'Catégorie: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Catégorie non défini');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Article non défini');
define('HEADER_MANUFACTURER_NAME', '<br> -- OU -- <br>' . 'Fabricant: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Ajouter tous les articles du fabricant');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Retirer tous les articles du fabricant');

define('HEADER_PRODUCT_STATUS', 'Statut');
define('HEADER_PRODUCT_MODEL', 'Numéro d\'article');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Réinitialisation des filtres par catégorie et par fabricant. Utilisez les filtres individuellement.');

define('TEXT_PULLDOWN_ALLOW', 'Permission');
define('TEXT_PULLDOWN_DENY', 'Serrure');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Ajouter');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Mise à jour');