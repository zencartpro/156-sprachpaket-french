<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: category_product_listing.php 3 2019-07-20 10:09:16Z webchills $
 * @translate German/French klartexter
 */
define('HEADING_TITLE', 'Catégories / Articles');
define('HEADING_TITLE_GOTO', 'Aller à:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Catégories et articles');
define('TABLE_HEADING_MODEL', 'Numéro d\'article');

define('TABLE_HEADING_PRICE', 'Prix/Offre spéciale/Ventes');
define('TABLE_HEADING_QUANTITY', 'Nombre');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Tri');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' de ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' activement');
define('TEXT_CATEGORIES', 'Catégories:');
define('TEXT_PRODUCTS', 'Articles:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Supprimer catégorie');
define('TEXT_DELETE_CATEGORY_INTRO', 'Voulez-vous vraiment supprimer cette catégorie?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Avertissement:</strong> Les postes associés dont l\'ID de catégorie de base est supprimé ne définissent pas le prix correct. Avant de supprimer une catégorie, vous devez d\'abord vous assurer que la catégorie que vous voulez supprimer ne contient aucun élément associé. Les postes liés encore contenus doivent être affectés à un autre ID de catégorie de base.');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Déplacer catégorie');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Veuillez sélectionner la catégorie dans laquelle vous souhaitez vous déplacer <b>%s</b>.');
define('TEXT_MOVE', 'Déplacer <b>%s</b> sur:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Supprimer l\'article');
define('TEXT_DELETE_PRODUCT_INTRO', 'Êtes-vous sûr de vouloir supprimer définitivement cet élément ? <br /><br /><strong>NOTE:</strong> pour les éléments liés <br />1 Assurez-vous que la catégorie principale a changé lorsque vous supprimez le produit de la catégorie principale <br />2 Cochez la case pour supprimer le produit de cette catégorie');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Déplacer l\'article');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Veuillez sélectionner la catégorie dans laquelle vous souhaitez vous déplacer <b>%s</b>.');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Catégories actuelles: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Copier dans');
define('TEXT_INFO_COPY_TO_INTRO', 'Veuillez sélectionner la catégorie dans laquelle vous souhaitez copier l\'article.');
define('TEXT_INFO_CURRENT_PRODUCT', 'Article actuel: ');
define('TEXT_HOW_TO_COPY', 'Méthode de copie:');
define('TEXT_COPY_AS_LINK', 'Lien vers l\'article');
define('TEXT_COPY_AS_DUPLICATE', 'Dupliquer l\'article');
define('TEXT_COPY_METATAGS','Copier les métabalises en duplicatas?');
define('TEXT_COPY_LINKED_CATEGORIES','Copier les catégories liées en duplicata?');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metatags pour l\'ID de langue#%u copié avec succès de l\'ID d\'article#%u vers l\'ID d\'article dupliqué#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Catégorie liée ID#%u copié avec succès de l\'article ID#%u vers l\'article dupliqué ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Escomptes copiés avec succès de l\'article ID#%u vers l\'article dupliqué ID#%u');
define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Modifications d\'attribut pour le numéro d\'article ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Caractéristiques des attributs pour:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Téléchargements: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Supprimer les <strong>TOUS</ strong> attributs de l\'article pour:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copier les attributs dans un autre <strong>Article</strong> de:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copier les attributs dans une autre <strong>Catégorie</strong> de:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Comment les attributs d\'article existants doivent-ils être traités?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Effacer</strong> - Les attributs existants sont supprimés, puis les nouveaux attributs sont copiés..');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Mise à jour</strong> Les attributs existants sont mis à jour avec les nouveaux paramètres/prix, puis les nouveaux attributs sont copiés.');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorer</strong> Les attributs existants sont conservés et seuls les nouveaux attributs sont ajoutés.');
define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Insérer de nouveaux attributs à partir de </strong>');
define('ICON_ATTRIBUTES', 'Caractéristiques des attributs');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES_ONLY', 'n\'est utilisé que pour les articles dupliqués ...');
define('TEXT_COPY_ATTRIBUTES', 'Copier les attributs d\'article en double?');
define('TEXT_COPY_ATTRIBUTES_YES', 'Oui');
define('TEXT_COPY_ATTRIBUTES_NO', 'Non');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'utilisé uniquement pour les articles dupliqués avec remises de quantité ...');
define('TEXT_COPY_DISCOUNTS', 'Copier les remises sur quantité de l\'article à dupliquer?');
define('TEXT_COPY_DISCOUNTS_YES', 'Oui');
define('TEXT_COPY_DISCOUNTS_NO', 'Non');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Modifier le statut de catégorie pour:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Changer le statut de la catégorie après: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'OFF');
define('TEXT_CATEGORIES_STATUS_ON', 'ON');
define('TEXT_PRODUCTS_STATUS_INFO', 'Changez CHAQUE statut d\'article après: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'OFF');
define('TEXT_PRODUCTS_STATUS_ON', 'ON');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Inchangé');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>ATTENTION ...</strong><br />REMARQUE: Si vous désactivez une catégorie, vous désactivez également TOUS les éléments inclus dans cette catégorie. Les éléments liés dans cette catégorie qui sont liés à d\'autres catégories seront également désactivés.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Changez le statut de TOUTES les sous-catégories en:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Désactivé');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Activé');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Inchangé');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'ATTENTION: Vous avez des produits dans la catégorie principale. Cela entraînera une mauvaise affectation des prix dans le magasin. Les produits suivants ont été trouvés: ');
define('TEXT_COPY_MEDIA_MANAGER', 'Supports de copie?');
