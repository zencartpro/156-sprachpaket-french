<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: product.php 2019-06-17 16:58:04Z webchills $
 * @translate German/French klartexter
 */


define('TEXT_PRODUCTS_STATUS', 'Statut de l\'article:');
define('TEXT_PRODUCTS_VIRTUAL', 'Article virtuel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Toujours sans frais d\'envoi:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Afficher la zone de saisie de la quantité:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Date de publication:');
define('TEXT_PRODUCT_AVAILABLE', 'Activé');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Désactivé');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Oui, ne demandez pas d\'adresse de livraison');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Non, l\'adresse de livraison est nécessaire');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Oui, toujours sans frais d\'expédition');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Non, les frais d\'expédition normaux s\'appliquent.');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Offres spéciales, article/téléchargement nécessite une adresse de livraison');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Oui, afficher la zone de saisie de la quantité pour le nombre de pièces');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Non, ne pas afficher le champ de saisie de la quantité pour le nombre de pièces');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Attention : le champ de saisie de la quantité n\'est pas affiché, la quantité 1 est prédéfinie.');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Attention : le champ de saisie de la quantité n\'est pas affiché, la quantité 1 est prédéfinie.');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricants d\'articles:');
define('TEXT_PRODUCTS_NAME', 'Nom de l\'article:');
define('TEXT_PRODUCTS_MERKMALE', 'Caractéristiques pour Button Solution:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Description de l\'article:');
define('TEXT_PRODUCTS_QUANTITY', 'Stock:');
define('TEXT_PRODUCTS_MODEL', 'Numéro d\'article:');
define('TEXT_PRODUCTS_IMAGE', 'Image de l\'article:');
define('TEXT_IMAGE_NONEXISTENT', 'L\'image n\'existe pas');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Répertoire de téléchargement:');
define('TEXT_PRODUCTS_URL', 'Lien du fabricant:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(Sans diriger http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Prix net:');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Prix brut:');
define('TEXT_PRODUCTS_WEIGHT', 'Poids d\'expédition:');
define('TEXT_PRODUCT_IS_FREE', 'L\'article est gratuit:');
define('TEXT_PRODUCTS_IS_FREE_PREVIEW', '*L\'article est marqué GRATUITEMENT ');
define('TEXT_PRODUCTS_IS_FREE_EDIT', '*L\'article est marqué GRATUITEMENT');

define('TEXT_PRODUCT_IS_CALL', 'L\'article est en appel de prix:');
define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '*L\'article est marqué CALL FOR PRICE');
define('TEXT_PRODUCTS_IS_CALL_EDIT', '*L\'article est marqué CALL FOR PRICE');

define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'Prix de l\'article déterminé par les attributs:');
define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE', 'Oui');
define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE', 'Non');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '*Le prix affiché contient le prix d\'attribut de groupe le plus bas plus le prix de base.');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '*Le prix affiché contient le prix d\'attribut de groupe le plus bas plus le prix de base.');

define('TEXT_PRODUCTS_TAX_CLASS', 'Catégorie fiscale:');

define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Article Quantité minimale d\'achat:');
define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Article Unités:');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Article Quantité maximale d\'achat:');

define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', '0 = Illimité, 1 = Aucune zone de saisie de quantité');

define('TEXT_PRODUCTS_MIXED', 'Article Nombre minimum de commande/numéro de commande Mélange:');

define('TEXT_PRODUCTS_SORT_ORDER', 'Tri:');

define('TEXT_PRODUCT_MORE_INFORMATION', 'Pour de plus amples renseignements, veuillez consulter le site Web suivant <a href="http://%s" target="blank">page web</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Cet article a été ajouté sur %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'L\'article est proposé de nouveau à partir de %s.');



// meta tags
define('TEXT_META_TAG_TITLE_INCLUDES', '<strong>Sélectionnez les informations à inclure dans les métabalises de l\'article:</strong>');
define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS', '<strong>Nom de l\'article:</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS', '<strong>Titre:</strong>');
define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS', '<strong>Numéro d\'article:</strong>');
define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS', '<strong>Prix:</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS', '<strong>Vedette de titre:</strong>');
define('TEXT_META_TAGS_TITLE', '<strong>Titre de la balise Meta:</strong>');
define('TEXT_META_TAGS_KEYWORDS', '<strong>Meta Tag Mots-clés:</strong>');
define('TEXT_META_TAGS_DESCRIPTION', '<strong>Meta Tag Description:</strong>');
define('TEXT_META_EXCLUDED', '<span class="alert">EXCLUS</span>');
define('TEXT_TITLE_PLUS_TAGLINE', 'Titre du magasin + titre d\'appel'); // this refers to whatever rules the storeowner has built into customizing their catalog /includes/modules/meta_tags.php and its lang file.

define('TEXT_PRODUCTS_PRICE_INFO', 'Prix:');
