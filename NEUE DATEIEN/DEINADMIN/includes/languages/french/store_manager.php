<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: store_manager.php 727 2011-07-28 10:36:31Z webchills $
 * @translate German/French klartexter
 */
define('HEADING_TITLE', 'Gérant de boutique');
define('TABLE_CONFIGURATION_TABLE', 'Rechercher les définitions CONSTANTES');

define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', 'Le tri des attributs a été mis à jour <strong>successful</strong>.');
define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'Les valeurs de tri pour les prix d\'article ont été mises à jour <strong>succès</strong>.');
define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', 'Les éléments les plus visités étaient <strong>succès>succès</strong>réinitialisation à 0');
define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', 'Les articles les plus achetés ont été remis à 0.');
define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', 'Toutes les catégories principales pour les éléments liés ont été <strong>réussies</strong>réinitialisées.');
define('SUCCESS_UPDATE_COUNTER', 'Le compteur a été mis à jour avec <strong>successfully</strong>avec succès.: ');

define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Erreur:</strong> Aucune clé de configuration correspondante trouvée ...');
define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Erreur:</strong> Aucune touche de configuration ou texte n\'a été spécifié pour la recherche .... la recherche a été interrompue');

define('TEXT_INFO_COUNTER_UPDATE', '<strong> Mettre à jour le compteur </ strong> <br /> à une nouvelle valeur: ');
define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Mettre à jour TOUS les assortiments de prix d\'articles </strong><br />pour activer les annonces triées par prix: ');
define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Retourne tous les éléments les plus consultés </strong><br />Retourne le nombre d\'éléments consultés à 0: ');
define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>remettre à zéro TOUS les articles les plus achetés </strong><br />remettre le nombre d\'articles commandés à 0: ');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Configurer TOUS les ID de type d\'article principal </strong><br />pour l\'utilisation avec les articles liés et le retour de prix: ');

  define('TEXT_NEW_ORDERS_ID', 'Nouveau numéro de commande');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Définissez ici votre prochain numéro de commande</strong><br />NOTE : Votre nouveau numéro de commande doit être plus grand que les commandes existantes dans votre base de données.');
  define('TEXT_MSG_NEXT_ORDER', 'Votre prochain numéro de commande est %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Sur la base des commandes existantes, votre prochain numéro de commande est actuellement: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'En raison de la limite de la base de données, vous ne pouvez pas définir un numéro d\'ordre supérieur à 200000000000. Veuillez sélectionner une valeur plus petite.');

define('TEXT_CONFIGURATION_CONSTANT', '<strong>Rechercher des définitions de fichiers CONSTANT ou de fichiers de langue</strong>');
define('TEXT_CONFIGURATION_KEY', 'Clé ou nom:');
define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTE:</strong> CONSTANTS sont toujours écrits en majuscules.<br />La recherche dans les fichiers de langue peut être une alternative si rien n\'a été trouvé dans les tables de la base de données.');


define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Recherche dans les définitions de fichiers de langue</strong>');
define('TEXT_CONFIGURATION_KEY_FILES', 'Recherche de texte:');
define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTE:</strong> La recherche dans les fichiers de langue peut être sensible à la casse.');

define('TABLE_TITLE_KEY', '<strong>Clé:</strong>');
define('TABLE_TITLE_TITLE', '<strong>Titre:</strong>');
define('TABLE_TITLE_DESCRIPTION', '<strong>Description:</strong>');
define('TABLE_TITLE_GROUP', '<strong>Groupe:</strong>');
define('TABLE_TITLE_VALUE', '<strong>Valeur:</strong>');

define('TEXT_LANGUAGE_LOOKUPS', 'Recherche de fichiers vocaux:');
define('TEXT_LANGUAGE_LOOKUP_NONE', 'Aucun');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Tous les fichiers de langue pour ' . strtoupper($_SESSION['language']) . ' - Boutique en ligne/Admin');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Tous les fichiers en langue principale - boutique en ligne (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /german.php etc.)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Tous les fichiers de langue actuellement sélectionnés - boutique en ligne' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Tous les fichiers en langue principale - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /german.php etc.)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Tous les fichiers de langue actuellement sélectionnés - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Tous les fichiers de langue actuellement sélectionnés - Boutique en ligne/Admin');

define('TEXT_INFO_NO_EDIT_AVAILABLE', 'Pas d\'usinage disponible');
define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ou Caché ');

define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimiser la base de données </strong> pour supprimer l\'espace perdu dans les enregistrements supprimés.<br/>Ceci peut être requis mensuellement ou hebdomadairement sur une base de données fréquentée.<br/>(Il est préférable d\'exécuter l\'optimisation pendant les périodes d\'inactivité.)');
define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Optimisation de la table de base de données en cours d\'exécution. Cela peut prendre quelques minutes, veuillez patienter. Le menu précédent apparaîtra dès que ce processus sera terminé. ... ');
define('SUCCESS_DB_OPTIMIZE', 'Optimisation de bases de données - Tables de processus: ');

define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Supprimer les fichiers journaux de débogage</strong><br /><strong>ATTENTION: </strong>Zen-Cart écrit les messages d\'erreur PHP dans le dossier cache pour le débogage. De plus, de nombreux modules de paiement (par exemple PayPal) peuvent être configurés pour écrire des fichiers journaux.<br />Si vous appuyez sur ce bouton de suppression, TOUS les fichiers journaux de débogage situés dans le dossier de cache ou dans les dossiers de cache des modules de paiement respectifs seront définitivement supprimés.');
define('SUCCESS_CLEAN_DEBUG_FILES', 'Suppression des fichiers journaux de débogage');