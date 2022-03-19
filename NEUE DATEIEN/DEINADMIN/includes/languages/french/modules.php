<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: modules.php 630 2014-02-18 19:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE_MODULES_PAYMENT','Modes de paiement');
define('HEADING_TITLE_MODULES_SHIPPING','Méthodes de livraison');
define('HEADING_TITLE_MODULES_ORDER_TOTAL','Résumé');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Types d\'articles Module');
define('TABLE_HEADING_MODULES', 'Module');
define('TABLE_HEADING_SORT_ORDER', 'Tri');
define('TABLE_HEADING_ORDERS_STATUS','Statut des emplois');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_MODULE_DIRECTORY', 'Répertoire du module:');
define('WARNING_MODULES_SORT_ORDER','ATTENTION : Vous avez un double tri, ce qui entraîne des erreurs dans le calcul <br />Veuillez modifier ces informations maintenant!');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERREUR : Un module n\'a pas été chargé à cause d\'un fichier langue manquant.: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ALARME : Vos paramètres d\'administration dans votre boutique ont été modifiés.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Il s\'agit d\'un courriel automatique provenant de votre boutique Zen-Cart pour vous aviser d\'un changement apporté à vos paramètres administratifs: ' . "\n\n" . 'REMARQUE : Les réglages du module[%s] ont été modifiés, le changement a été effectué par l\'utilisateur administrateur %s.' . "\n\n" . 'Si vous n\'avez pas apporté cette modification, nous vous recommandons de la vérifier immédiatement.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, ignorez ce courriel généré automatiquement.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Il s\'agit d\'un courriel automatique provenant de votre boutique Zen-Cart pour vous aviser d\'un changement apporté à vos paramètres administratifs: ' . "\n\n" . 'NOTE : Le module [%s] a été installé par l\'utilisateur %s admin.' . "\n\n" . 'Si vous n\'avez pas apporté cette modification, nous vous recommandons de la vérifier immédiatement.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, ignorez ce courriel généré automatiquement.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Il s\'agit d\'un courriel automatique provenant de votre boutique Zen-Cart pour vous aviser d\'un changement apporté à vos paramètres administratifs: ' . "\n\n" . 'NOTE : Le module [%s] a été supprimé par l\'utilisateur admin %s.' . "\n\n" . 'Si vous n\'avez pas apporté cette modification, nous vous recommandons de la vérifier immédiatement.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, ignorez ce courriel généré automatiquement.');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr de vouloir retirer ce module?');
define('TEXT_WARNING_SSL_EDIT', 'ALARME: <a href="http://www.zen-cart-pro.at/forum" target="_blank">Pour des raisons de sécurité, les modifications sont désactivées tant que le cryptage SSL n\'a pas été activé pour votre espace administrateur.</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALARME: <a href="http://www.zen-cart-pro.at/forum" target="_blank">Pour des raisons de sécurité, l\'installation de ce module est désactivée tant que le cryptage SSL n\'a pas été activé pour votre espace administrateur.</a>.');
define('WARNING_MODULES_MISSING_KEYS', '<span class="alert">Clés de configuration manquantes - Enregistrer, supprimer, installer et reconfigurer</span>');