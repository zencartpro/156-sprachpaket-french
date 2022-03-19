<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: admin_page_registration.php 729 2011-08-09 15:49:16Z hugo13 $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Enregistrement des pages d\'administration');
define('TEXT_PAGE_KEY', 'Touche de page');
define('TEXT_LANGUAGE_KEY', 'Nom de page');
define('TEXT_MAIN_PAGE', 'Pages Nom de fichier');
define('TEXT_PAGE_PARAMS', 'Paramètres de page');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', 'Afficher dans le menu ?');
define('TEXT_SORT_ORDER', 'Tri');

define('TEXT_EXAMPLE_PAGE_KEY', '(par ex. monModulePageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(par ex. BOX_MY_MOD_PAGES_NOM)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(par ex. NOM_DE_FICHIER_NOM_DE_PAGE)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(ex. option=1 ou normalement laisser vide)');
define('TEXT_SELECT_MENU', 'Sélectionner le menu');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Aucune touche de page entrée. Toutes les pages d\'administration doivent avoir une clé de page unique.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'La touche page existe déjà. Les touches de page doivent être uniques.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Le code langue n\'est pas saisi. Toute page d\'administration doit avoir un code langue qui définit le texte sur n\'importe quel lien de menu.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Le code langue saisi n\'a pas été défini. Veuillez vérifier qu\'il a été correctement orthographié.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Aucun nom de fichier valide n\'a été saisi pour la page d\'administration.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'La définition de nom de fichier saisie n\'existe pas. Veuillez vérifier qu\'il a été correctement orthographié.');
define('ERROR_MENU_NOT_CHOSEN', 'Aucun menu sélectionné. Vous devez toujours affecter une page d\'administration à un menu, même si vous ne voulez pas afficher la page dans le menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Votre page d\'administration a été créée.');
