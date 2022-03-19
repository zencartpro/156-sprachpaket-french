<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: developers_tool_kit.php 619 2016-03-05 15:50:27Z webchills $
 * @translate German/French klartexter
 */
define('HEADING_TITLE', 'Trousse d\'outils pour les développeurs');
define('TABLE_CONFIGURATION_TABLE', 'CONSTANT Définition de la recherche');
define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Succès</strong> Mettre à jour le tri du prix des articles');
define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Erreur:</strong> Aucune clé de configuration correspondante n\'a été trouvée ...');
define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Erreur:</strong> Aucune touche de configuration ou texte saisi... Recherche annulée');
define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Mettre à jour TOUS les prix des articles Triage</strong><br />pour qu\'il soit trié d\'après le prix affiché: ');
define('TEXT_CONFIGURATION_CONSTANT', '<strong>CONSTANTS et LANGUE Recherche de définition</strong>');
define('TEXT_CONFIGURATION_KEY', 'Clé ou nom:');
define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Annotation:</strong> CONSTANTS en majuscules!<br />Les fichiers ne sont recherchés que si rien n\'a pu être trouvé dans la base de données.');
define('TABLE_TITLE_KEY', '<strong>Clé:</strong>');
define('TABLE_TITLE_TITLE', '<strong>Titre:</strong>');
define('TABLE_TITLE_DESCRIPTION', '<strong>Description:</strong>');
define('TABLE_TITLE_GROUP', '<strong>Groupe:</strong>');
define('TABLE_TITLE_VALUE', '<strong>Valeur:</strong>');
define('TEXT_LOOKUP_NONE', 'Aucun');
define('TEXT_INFO_SEARCHING', 'Recherche ');
define('TEXT_INFO_FILES_FOR', ' Fichiers .... après: ');
define('TEXT_INFO_MATCHES_FOUND', 'Nombre de lignes trouvées: ');
define('TEXT_INFO_FILENAME', 'NOM DU FICHIER: ');
define('TEXT_LANGUAGE_LOOKUPS', 'Fichiers de langue de recherche:');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Tous les fichiers de langue pour ' . strtoupper($_SESSION['language']) . ' - Boutique en ligne/Admin');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Tous les fichiers en langue principale - Boutique en ligne (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Tous les fichiers de langue - Boutique en ligne ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Tous les fichiers en langue principale - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Tous les fichiers de langue -Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Tous les fichiers de langue - Boutique en ligne/Admin');
define('TEXT_FUNCTION_CONSTANT', '<strong>Fichiers de fonction de recherche de fonctions et de textes</strong>');
define('TEXT_FUNCTION_LOOKUPS', 'Fichiers de la fonction Parcourir:');
define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Tous les fichiers de fonction - Boutique en ligne/Admin');
define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Tous les fichiers de fonction - Boutique en ligne');
define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Tous les fichiers de fonction - Admin');
define('TEXT_CLASS_CONSTANT', '<strong>Recherche dans les fichiers de classes pour les classes et les textes</strong>');
define('TEXT_CLASS_LOOKUPS', 'Rechercher dans les fichiers de classe:');
define('TEXT_CLASS_LOOKUP_CURRENT', 'Tous les fichiers de classe - Boutique en ligne/Admin');
define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Tous les fichiers de classe - Boutique en ligne');
define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Tous les fichiers de classe - Admin');
define('TEXT_TEMPLATE_CONSTANT', '<strong>Recherche dans les fichiers modèles</strong>');
define('TEXT_TEMPLATE_LOOKUPS', 'Recherche dans les fichiers modèles:');
define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Tous les fichiers modèles - /templates sideboxes /pages etc.');
define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Tous les fichiers modèles - /templates');
define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Tous les fichiers modèles - /sideboxes');
define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Tous les fichiers modèles - /pages');
define('TEXT_ALL_FILES_CONSTANT', '<strong>Parcourir tous les fichiers</strong>');
define('TEXT_ALL_FILES_LOOKUPS', 'Parcourir tous les fichiers:');
define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Tous les fichiers - Boutique en ligne/Admin');
define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Tous les fichiers - Boutique en ligne');
define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Tous les fichiers - Admin');
define('TEXT_INFO_NO_EDIT_AVAILABLE', 'Édition non disponible');
define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ou, caché');
define('TEXT_SEARCH_ALL_FILES', 'Rechercher TOUS les fichiers pour: ');
define('TEXT_SEARCH_DATABASE_TABLES', 'Rechercher dans les tables de configuration de la base de données pour: ');
define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Type de fichier');
define('TEXT_ALL_FILES_LOOKUP_PHP', '.php seulement');
define('TEXT_ALL_FILES_LOOKUP_PHPCSS', 'seulement .php et .css');
define('TEXT_ALL_FILES_LOOKUP_CSS', 'seulement .css');
define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', 'seulement .html et .txt');
define('TEXT_ALL_FILES_LOOKUP_JS', 'seulement .js');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Tous');
define('TEXT_CASE_SENSITIVE', 'Notez les majuscules/minuscules?');
  define('TEXT_CONTEXT_LINES', 'Lignes de contexte: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Entrer le terme de recherche');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Saisissez le terme ou l\'expression de recherche pour la recherche');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Entrer le terme de recherche');
  define('TEXT_BUTTON_SEARCH', 'Rechercher');
  define('TEXT_BUTTON_SEARCH_ALT', 'Effectuer une recherche');
  define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Recherche avec motif Regex');
  define('TEXT_ERROR_REGEX_FAIL', 'REMARQUE : Une erreur s\'est produite pendant la recherche. Si vous avez effectué une recherche Regex/Grep, vérifiez votre Regex Pattern pour les erreurs de syntaxe.');
  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Recherche dans Configuration Settings/Configuration Keys</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Terme de recherche:</strong> (Les noms et les descriptions des paramètres de configuration et des clés de configuration sont recherchés s\'ils correspondent exactement au terme de recherche.)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Portée');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Groupe');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Titre');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Description');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Valeur');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Nom de la clé');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Éditer');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Aucune clé de configuration trouvée.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'Clé de configuration trouvée');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Entrer le terme de recherche pour les paramètres');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Rechercher');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Recherche (triée par clé)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Tout afficher');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Remise à l\'état initial');
  define('TEXT_RESET_BUTTON_ALT', 'Effacer tous les champs de recherche pour recommencer à zéro');
