<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: options_values_manager.php 627 2010-08-30 15:05:14Z webchills $
 * @translate German/French klartexter
 */


define('HEADING_TITLE_OPT', 'Options d\'article');
define('HEADING_TITLE_VAL', 'Caractéristiques d\'attribut');
define('HEADING_TITLE_ATRIB', 'Attributs d\'article');
define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nom d\'article');
define('TABLE_HEADING_OPT_NAME', 'Nom d\'attribut');
define('TABLE_HEADING_OPT_VALUE', 'Caractéristique attributive');
define('TABLE_HEADING_OPT_PRICE', 'Prix');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Préfixe');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_DOWNLOAD', 'Télécharger l\'article:');
define('TABLE_TEXT_FILENAME', 'Nom de fichier:');
define('TABLE_TEXT_MAX_DAYS', 'Jours de péremption:');
define('TABLE_TEXT_MAX_COUNT', 'Nombre maximum de téléchargements:');
define('TEXT_WARNING_OF_DELETE', 'Cette option est affectée aux postes et aux options - la suppression n\'est pas recommandée.');
define('TEXT_OK_TO_DELETE', 'Cette option n\'est affectée à aucun poste ou option et peut être supprimée.');
define('TEXT_OPTION_ID', 'ID de l\'option');
define('TEXT_OPTION_NAME', 'Nom d\'attribut');
define('TABLE_HEADING_OPT_DISCOUNTED', 'Réduit');
define('ATTRIBUTE_WARNING_DUPLICATE','Dupliquer l\'attribut - l\'attribut n\'a pas été ajouté');
// attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Le double attribut existe - l\'attribut n\'a pas été modifié');
// attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','L\'option d\'attribut et la caractéristique d\'attribut ne correspondent PAS - l\'attribut n\'a pas été ajouté');
// miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','L\'option d\'attribut et la caractéristique d\'attribut ne correspondent PAS - l\'attribut n\'a pas été modifié');
// miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Possibilité d\'ajouter un nom d\'attribut en double');
// Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Possibilité d\'ajouter une caractéristique d\'attribut en double');
// Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','ÉDITER');
// title
define('PRODUCTS_ATTRIBUTES_DELETE','SUPPRIMER');
// title
define('PRODUCTS_ATTRIBUTES_ADDING','AJOUTER DE NOUVEAUX ATTRIBUTS');
// title
define('TEXT_DOWNLOADS_DISABLED','REMARQUE : Les téléchargements sont désactivés.');
define('TABLE_TEXT_MAX_DAYS_SHORT', 'Jours:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Maximum:');
define('TABLE_HEADING_OPTION_SORT_ORDER','Tri');
define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Tri standard');
define('TEXT_SORT',' Tri: ');
define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Préfixe');
define('TABLE_HEADING_OPT_WEIGHT','Poids');
define('TABLE_HEADING_OPT_SORT_ORDER','Tri');
define('TABLE_HEADING_OPT_DEFAULT', 'Standard');
define('TABLE_HEADING_YES','Oui');
define('TABLE_HEADING_NO','Non');
define('TABLE_HEADING_OPT_TYPE', 'Type d\'attribut');
//CLR 031203 add option type column
define('TABLE_HEADING_OPTION_VALUE_SIZE','Taille');
define('TABLE_HEADING_OPTION_VALUE_MAX','Maximum');
define('TABLE_HEADING_OPTION_VALUE_ROWS','Chaîne');
define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commentaires');
define('TEXT_OPTION_VALUE_COMMENTS','Commentaires: ');
define('TEXT_OPTION_VALUE_SIZE','Taille d\'affichage: ');
define('TEXT_OPTION_VALUE_MAX','Longueur maximale: ');
define('TEXT_ATTRIBUTES_IMAGE','Motif d\'écran des attributs:');
define('TEXT_ATTRIBUTES_IMAGE_DIR','Répertoire d\'images des attributs:');
define('TEXT_ATTRIBUTES_FLAGS','Attributs <br />Indicateur:');
define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Utilisé uniquement pour <br />view:');
define('TEXT_ATTRIBUTES_IS_FREE', 'L\'attribut est gratuit <br />si l\'article est gratuit:');
define('TEXT_ATTRIBUTES_DEFAULT', 'Attributs standard <br />sélectionnés pour la sélection:');
define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Utiliser la même remise <br />qu\'à partir de l\'article:');
define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Inclus dans le prix de base <br />si le prix est déterminé par les attributs');
define('TEXT_PRODUCT_OPTIONS_INFO','Options d\'édition d\'éléments pour les paramètres avancés');

// Option Names/Values copier from one to another
define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copier TOUS les attributs pour lesquels le nom et la valeur de l\'option...</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Sélectionnez un nom d\'option et une valeur qui existe déjà dans un (ou plusieurs) élément(s), puis utilisez-le pour copier un autre nom d\'option et une autre valeur dans TOUS les éléments avec le nom et la valeur existants.');
define('TEXT_SELECT_OPTION_FROM', 'Nom de l\'option correspondante:');
define('TEXT_SELECT_OPTION_VALUES_FROM', 'Valeur de l\'option de réglage:');
define('TEXT_SELECT_OPTION_TO', 'Nom de l\'option à ajouter:');
define('TEXT_SELECT_OPTION_VALUES_TO', 'Ajouter une valeur d\'option:');
define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'champ vide = TOUS les éléments, ou<br /> entrer un ID de catégorie pour les éléments à mettre à jour');

// Option Name/Value to Option Name for Category with Product defaults
define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copier le nom et la valeur de l\'option dans l\'article avec un nom d\'option spécifique ...</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Sélectionnez un nom et une valeur d\'option actuellement affectés à un produit/produit afin de pouvoir affecter ces informations à une catégorie ou à tous les éléments qui ont un nom d\'option spécifique.
                                                 <br /><strong>p. ex.:</strong> Ajouter le nom de l\'option : Couleur, valeur de l\'option : Rouge, à tous les articles avec le nom de l\'option : Taille
                                                 <br /><strong>p. ex.:</strong> Ajouter le nom de l\'option : Couleur, valeur de l\'option : Rouge, avec les valeurs par défaut de l\'ID article : 34 à tous les articles avec le nom de l\'option : Taille
                                                 <br /><strong>p. ex.:</strong> Ajouter le nom de l\'option : Couleur, valeur de l\'option : Rouge, avec les valeurs par défaut de l\'ID article : 34 à tous les articles avec le nom de l\'option : Taille pour la catégorie ID : 65
      ');
define('TEXT_SELECT_OPTION_TO_ADD_TO', 'avec le nom de l\'option:');
define('TEXT_SELECT_OPTION_FROM_ADD', 'Ajouter le nom de l\'option:');
define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Ajouter de la valeur à l\'option:');
define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Par défaut Reprendre les valeurs d\'option du numéro d\'article ou laisser le champ vide:');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Comment gérer les attributs d\'article existants?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', 'Attributs existants <strong>supprimer</strong>, puis copiez-les');
define('TEXT_COPY_ATTRIBUTES_UPDATE', 'Attributs existants avec de nouvelles valeurs <strong>actualiser</strong>.');
define('TEXT_COPY_ATTRIBUTES_IGNORE', 'Attributs existants <strong>ignore</strong> et en ajouter de nouveaux');
define('TEXT_INFO_FROM', ' de: ');
define('TEXT_INFO_TO', ' à: ');
define('ERROR_OPTION_VALUES_COPIED', 'ERREUR : Dupliquer le nom de l\'option et la valeur de l\'option');
define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'ERREUR : Le nom et la valeur de l\'option sélectionnée ne correspondent pas.');
define('ERROR_OPTION_VALUES_NONE', 'ERREUR : Rien trouvé à copier');
define('SUCCESS_OPTION_VALUES_COPIED', 'Copie réussie! ');
define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'ERREUR : pas de nom/valeur d\'option pour le numéro d\'article.:');
define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Supprimer TOUS les attributs pour lesquels le nom et la valeur de l\'option...</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Sélectionnez un nom d\'option et une valeur qui existe déjà dans un (ou plusieurs) élément(s) que vous voulez supprimer de TOUS les éléments ou de TOUS les éléments dans une catégorie.n');
define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nom de l\'option correspondante:');
define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Valeur de l\'option de réglage:');
define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'ERREUR : Le nom et la valeur de l\'option sélectionnée ne correspondent pas.');
define('SUCCESS_OPTION_VALUES_DELETE', 'Supprimé avec succès: ');
