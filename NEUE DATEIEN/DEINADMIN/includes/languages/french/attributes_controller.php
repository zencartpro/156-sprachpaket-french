<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: attributes_controller.php 629 2019-06-25 09:21:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Catégories ');

define('HEADING_TITLE_OPT','Attributs d\'article');
define('HEADING_TITLE_VAL','Caractéristiques d\'attribut');
define('HEADING_TITLE_ATRIB','Gestionnaire d\'attributs');
define('HEADING_TITLE_ATRIB_SELECT','Veuillez sélectionner une catégorie pour voir les options d\'attribut ...');

define('TEXT_PRICES_AND_WEIGHTS', 'Prix et Poids');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Facteur prix: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Décalage: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Unique:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Facteur unique: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Décalage: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Attributs d\'escompte de quantité:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Attributs uniques d\'escompte de quantité:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Prix au mot:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Mots libres:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Prix par lettre:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Lettres libres:');

define('TABLE_HEADING_ID','ID');
define('TABLE_HEADING_PRODUCT','Nom de l\'article');
define('TABLE_HEADING_OPT_NAME','Nom d\'attribut');
define('TABLE_HEADING_OPT_VALUE','Caractéristique attributive');
define('TABLE_HEADING_OPT_PRICE','Prix');
define('TABLE_HEADING_OPT_PRICE_PREFIX','Préfixe');
define('TABLE_HEADING_ACTION','Action');
define('TABLE_HEADING_DOWNLOAD','Télécharger l\'article');
define('TABLE_TEXT_FILENAME','Nom de fichier:');
define('TABLE_TEXT_MAX_DAYS','Jours d\'expiration: (0 = illimité)');
define('TABLE_TEXT_MAX_COUNT','Nombre maximum de téléchargements:');
define('TABLE_HEADING_OPT_DISCOUNTED','Rabais');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Base');
define('TABLE_HEADING_PRICE_TOTAL', 'Somme|Réduction: une seule fois:');
define('TEXT_WARNING_OF_DELETE','Des articles et des valeurs ont été affectés à cet attribut - la suppression n\'est pas recommandée.');
define('TEXT_OK_TO_DELETE','Aucun article et aucune valeur n\'ont été affectés à cet attribut - Il peut être supprimé.');
define('TEXT_OPTION_ID','ID de l\'attribut');
define('TEXT_OPTION_NAME','Nom de l\'attribut');

define('ATTRIBUTE_WARNING_DUPLICATE','Dupliquer l\'attribut - l\'attribut n\'a pas été ajouté');
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Dupliquer l\'attribut existe - l\'attribut n\'a pas été modifié');
define('ATTRIBUTE_WARNING_INVALID_MATCH','L\'attribut n\'a pas pu être créé - l\'option d\'attribut et la caractéristique d\'attribut ne correspondent pas');
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','L\'attribut n\'a pas pu être modifié - l\'option d\'attribut et la caractéristique d\'attribut ne correspondent pas.');
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Un nom d\'attribut en double peut avoir été ajouté.');
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Une caractéristique d\'attribut en double peut avoir été ajoutée.');

define('PRODUCTS_ATTRIBUTES_EDITING','Éditer');
define('PRODUCTS_ATTRIBUTES_DELETE','EFFACER');
define('PRODUCTS_ATTRIBUTES_ADDING','AJOUTER UN NOUVEL ATTRIBUT');
define('TEXT_DOWNLOADS_DISABLED','REMARQUE: Les téléchargements sont désactivés.');

define('TABLE_TEXT_MAX_DAYS_SHORT','Jours:');
define('TABLE_TEXT_MAX_COUNT_SHORT','Maximum:');

define('TABLE_HEADING_OPTION_SORT_ORDER','Tri');
define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Tri standard');
define('TEXT_SORT','Tri:');

define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Préfixe');
define('TABLE_HEADING_OPT_WEIGHT','Poids');
define('TABLE_HEADING_OPT_SORT_ORDER','Tri');
define('TABLE_HEADING_OPT_DEFAULT','Standard');

define('TABLE_HEADING_OPT_TYPE','Type d\'option');
define('TABLE_HEADING_OPTION_VALUE_SIZE','Taille');
define('TABLE_HEADING_OPTION_VALUE_MAX','Maximum');
define('TABLE_HEADING_OPTION_VALUE_ROWS','Série');
define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commentaires');

define('TEXT_OPTION_VALUE_COMMENTS','Commentaires:');
define('TEXT_OPTION_VALUE_SIZE','Taille d\'affichage:');
define('TEXT_OPTION_VALUE_MAX','Longueur maximale:');

define('TEXT_ATTRIBUTES_IMAGE','Motif de l\'image de l\'attribut:');
define('TEXT_ATTRIBUTES_IMAGE_DIR','Répertoire de l\'image de l\'attribut:');

define('TEXT_ATTRIBUTES_FLAGS','Attribut-<br />indicateur:');
define('TEXT_ATTRIBUTES_DISPLAY_ONLY','Nécessaire uniquement pour <br />représentation:');
define('TEXT_ATTRIBUTES_IS_FREE','L\'attribut est libre <br /> si l\'item est libre:');
define('TEXT_ATTRIBUTES_DEFAULT','Attribut à sélectionner par défaut:');
define('TEXT_ATTRIBUTE_IS_DISCOUNTED','Utiliser les remises utilisées par le <br />article:');
define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Prix de base incluant <br />at "Prix par attribut":');
define('TEXT_ATTRIBUTES_REQUIRED', 'Attributs requis<br />pour le texte:');

define('LEGEND_BOX', 'Légende:');
define('LEGEND_KEYS', 'OFF/ON');
define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Afficher seulement');
define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratuit');
define('LEGEND_ATTRIBUTES_DEFAULT', 'Standard');
define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Réduit');
define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED', 'Prix d\'exercice');
define('LEGEND_ATTRIBUTES_REQUIRED', 'Requis');
define('LEGEND_ATTRIBUTES_IMAGES', 'Images');
define('LEGEND_ATTRIBUTES_DOWNLOAD', 'Valid/Invalid<br />Nom de fichier');

define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','Tri standard');
define('TEXT_PRODUCTS_LISTING','Liste d\'articles pour:');
define('TEXT_NO_PRODUCTS_SELECTED','Aucun article sélectionné');
define('TEXT_NO_ATTRIBUTES_DEFINED','Aucun attribut pour le numéro d\'article sélectionné');

define('TEXT_PRODUCTS_ID','Numéro d\'identification de l\'article');
define('TEXT_ATTRIBUTES_DELETE','EFFACER TOUT');
define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Copier à l\'article');
define('TEXT_ATTRIBUTES_COPY_CATEGORY','Copier dans la catégorie');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Attribut pour l\'article ID# modifié');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','<strong>TOUTES</strong> supprimer les attributs d\'article pour cet article:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copier les attributs d\'un autre poste ou d\'une catégorie entière:<br />');

define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','ARTICLE');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copier les attributs d\'un ID# vers un autre <strong>article </strong>.');
define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Sélectionnez l\'article dans lequel vous voulez copier tous les attributs.:');

define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','CATÉGORIE');
define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Sélectionnez la catégorie dans laquelle vous voulez copier tous les attributs:');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copier les attributs de tous les articles dans la catégorie <strong>Catégorie </strong> de l\'article ID#.');

define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Comment gérer les attributs d\'article existants?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Effacer</strong> Les attributs existants sont supprimés, puis les nouveaux attributs sont copiés.');
define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Mise à jour</strong> Les attributs existants sont mis à jour avec les nouveaux paramètres/prix, de nouveaux attributs sont ajoutés.');
define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorer</strong> Les attributs existants sont conservés, seuls les nouveaux attributs sont ajoutés.');

define('SUCCESS_PRODUCT_UPDATE_SORT','Le tri des attributs a été mis à jour pour l\'ID#.');
define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Aucun attribut pour la mise à jour de l\'ordre disponible pour l\'ID#.');
define('SUCCESS_ATTRIBUTES_DELETED','Les attributs ont été supprimés');
define('SUCCESS_ATTRIBUTES_UPDATE','Les attributs ont été mis à jour');

define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Aucune catégorie sélectionnée pour la copie');
define('TEXT_PRODUCT_IN_CATEGORY_NAME','- dans la catégorie:');

define('TEXT_DELETE_ALL_ATTRIBUTES','Êtes-vous sûr de vouloir supprimer tous les attributs pour ID#?');

define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Sauter un nouvel attribut </strong>');
define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Ajouter un nouvel attribut à partir de </strong>');
define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Mettre à jour l\'attribut existant de </strong>');

// preview
define('TEXT_ATTRIBUTES_PREVIEW','PRÉVISUALISATION DES ATTRIBUTS');
define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','PRÉVISUALISER L\'AFFICHAGE DE L\'ATTRIBUT ID#.');
define('TEXT_PRODUCT_OPTIONS','<strong>Veuillez sélectionner:</strong>');

define('TEXT_ATTRIBUTES_INSERT_INFO','<strong>Définissez les paramètres des attributs, puis cliquez sur "Insérer" pour enregistrer les modifications.</strong> (plusieurs caractéristiques d\'attribut peuvent également être sélectionnées)');
define('TEXT_PRICED_BY_ATTRIBUTES','Prix déterminé par les attributs');
define('TEXT_PRODUCTS_PRICE','Prix de l\'article:');
define('TEXT_SPECIAL_PRICE','Prix spécial:');
define('TEXT_SALE_PRICE','Prix de vente:');
define('TEXT_FREE','GRATUITEMENT');
define('TEXT_CALL_FOR_PRICE','Veuillez demander le prix');
define('TEXT_SAVE_CHANGES', 'METTRE À JOUR ET ENREGISTRER LES MODIFICATIONS:');

define('TEXT_INFO_ID', 'ID#');
define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Non ajouté au panier d\'achat');

define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Voulez-vous vraiment supprimer TOUTES les caractéristiques d\'attribut du nom de l\'attribut ...');
define('TEXT_INFO_PRODUCT_NAME', '<strong>Nom du produit: </strong>');
define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Nom d\'attribut: </strong>');
define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'TOUTES les caractéristiques d\'attribut pour les noms d\'attribut ont été supprimées: ');

define('BUTTON_ADDITITONAL_ACTIONS', 'Autres actions possibles');
define('TEXT_UPDATE_DEFAULTE_SORT_ORDER', 'Réinitialisation de la séquence de tri sur Standard');
define('TEXT_DELETE_ALL_OPTIONS_FROM_PRODUCT', 'Supprimer tous les attributs de cet article');
define('TEXT_COPY_ALL_OPTIONS_TO_PRODUCT', 'Copie d\'attributs dans un autre article');
define('TEXT_COPY_ALL_OPTIONS_TO_CATEGORY', 'Copier Attibute dans une catégorie entière');
define('TEXT_SAVE_PRODUCT_FIRST', 'Veuillez d\'abord enregistrer le nouvel article. Un product_id est nécessaire avant de pouvoir affecter des attributs.');
