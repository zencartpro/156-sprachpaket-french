<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: option_name_manager.php 628 2015-12-22 16:39:16Z webchills $
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
define('TABLE_HEADING_OPT_DISCOUNTED','Réduit');
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
define('TABLE_HEADING_OPT_DEFAULT','Standard');
define('TABLE_HEADING_YES','Oui');
define('TABLE_HEADING_NO','Non');
define('TABLE_HEADING_OPT_TYPE', 'Type d\'attribut');
//CLR 031203 add option type column
define('TABLE_HEADING_OPTION_VALUE_SIZE','Taille');
define('TABLE_HEADING_OPTION_VALUE_MAX','Maximum');
define('TABLE_HEADING_OPTION_VALUE_ROWS','Chaîne');
define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Commentaires');
define('TEXT_OPTION_VALUE_COMMENTS','Commentaires: ');
define('TEXT_OPTION_VALUE_ROWS', 'Traits: ');
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

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'AVERTISSEMENT : Aucun article trouvé.... rien n\'a été mis à jour');
define('TEXT_SELECT_PRODUCT', ' Sélectionnez un article');
define('TEXT_SELECT_CATEGORY', ' Sélectionnez une catégorie');
define('TEXT_SELECT_OPTION', 'Sélectionnez un nom d\'attribut');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Sélectionnez TOUTES les caractéristiques d\'attribut pour TOUS les éléments pour les noms d\'attribut.</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Ajoutez TOUS les articles existants avec au moins UNE caractéristique d\'attribut et TOUTES les caractéristiques d\'attribut à un nom d\'attribut.');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Mise à jour réussie des options');
define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Ajouter TOUTES les caractéristiques d\'attribut à un élément pour les noms d\'attribut.</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Mettre à jour UN élément avec au moins UNE caractéristique d\'attribut et ajouter TOUTES les caractéristiques d\'attribut à un nom d\'attribut.');
define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Ajouter TOUTES les caractéristiques d\'attribut à UNE catégorie d\'éléments pour les noms d\'attributs</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Mettre à jour une catégorie d\'articles si l\'article a au moins UN attribut et ajouter TOUS les attributs à un nom d\'attribut');
define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>REMARQUE:</strong> L\'ordre de tri de ces articles est défini sur l\'ordre de tri par défaut des caractéristiques d\'attribut.');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Supprimer TOUTES les caractéristiques d\'attribut pour TOUS les éléments pour les noms d\'attribut</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Mettre à jour TOUS les articles existants avec au moins UNE caractéristique d\'attribut et supprimer TOUTES les caractéristiques d\'attribut d\'un nom d\'attribut.');
define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Supprimer TOUTES les caractéristiques d\'attribut pour UN article pour les noms d\'attribut</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Mettre à jour UN article avec au moins UNE caractéristique d\'attribut et supprimer TOUTES les caractéristiques d\'attribut d\'un nom d\'attribut.');
define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Supprimer TOUTES les caractéristiques d\'attribut pour UNE catégorie d\'articles pour les noms d\'attributs</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Mettre à jour UNE catégorie d\'éléments si l\'élément possède au moins UNE caractéristique d\'attribut et supprimer TOUTES les caractéristiques d\'attribut d\'un nom d\'attribut.');
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>REMARQUE:</strong> Toutes les caractéristiques d\'attribut d\'un nom d\'attribut sont supprimées pour les articles sélectionnés. Les options des caractéristiques d\'attribut ne sont pas supprimées.');
define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copier TOUTES les caractéristiques d\'attribut dans un autre nom d\'attribut.</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Toutes les caractéristiques d\'attribut sont copiées d\'un nom d\'attribut à un autre nom d\'option.');
define('TEXT_SELECT_OPTION_FROM', 'Copier les noms d\'attributs: ');
define('TEXT_SELECT_OPTION_TO', 'Copier toutes les caractéristiques d\'attribut dans le nom de l\'attribut: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Copié avec succès! ');
define('ERROR_OPTION_VALUES_COPIED', 'Erreur - ne peut pas copier les caractéristiques d\'attribut dans le même nom d\'attribut! ');
define('ERROR_OPTION_VALUES_NONE', 'Erreur - Aucune caractéristique d\'attribut n\'a été définie - rien n\'a été copié! ');
define('TEXT_WARNING_BACKUP', 'ATTENTION : Sauvegardez toujours la base de données AVANT tout changement global.');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Images d\'attributs par ligne: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Style d\'attribut pour les boutons radio / cases à cocher: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Longueur maximale et taille d\'affichage uniquement pour les attributs de texte:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Affichage des images:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Images sous les noms d\'attributs');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Éléments, images et caractéristiques des attributs');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Éléments, images et noms d\'attributs ci-dessous');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nom de l\'attribut sous les éléments et les images');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Éléments sous les images et les noms d\'attributs');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Éléments au-dessus des images et des noms d\'attributs');