<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: currencies.php 629 2019-06-22 09:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Währungen');

define('TABLE_HEADING_CURRENCY_NAME','Devise');
define('TABLE_HEADING_CURRENCY_CODES','Codifier');
define('TABLE_HEADING_CURRENCY_VALUE','Cours de change');
define('TABLE_HEADING_ACTION','Action');

define('TEXT_INFO_EDIT_INTRO','Veuillez apporter ici les modifications nécessaires');
define('TEXT_INFO_CURRENCY_TITLE','Nom:');
define('TEXT_INFO_CURRENCY_CODE','Codifier:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT','Symbole de devise à gauche:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT','Symbole de devise à droite:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT','Séparateurs décimaux:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT','Séparateur 1000');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES','Décimales:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED','Dernière mise à jour:');

define('TEXT_INFO_CURRENCY_VALUE','Valeur:<br /><br/ ><strong>Attention, si vous saisissez ici une autre valeur que 1, le prix de l\'article correspondant est multiplié par cette valeur (voir aussi sous l\'exemple d\'édition) !</strong><br /><br />');
define('TEXT_INFO_CURRENCY_EXAMPLE','Sortie échantillon:');
define('TEXT_INFO_INSERT_INTRO','Veuillez entrer la nouvelle devise avec les données correspondantes');
define('TEXT_INFO_DELETE_INTRO','Voulez-vous vraiment supprimer cette devise?');
define('TEXT_INFO_HEADING_NEW_CURRENCY','Nouvelle monnaie');
define('TEXT_INFO_HEADING_EDIT_CURRENCY','Modifier la devise');
define('TEXT_INFO_HEADING_DELETE_CURRENCY','Effacer devise');
define('TEXT_INFO_SET_AS_DEFAULT','Définie par défaut (une mise à jour manuelle des cours de conversion est nécessaire)');


define('ERROR_REMOVE_DEFAULT_CURRENCY','ERREUR : La devise par défaut ne peut pas être supprimée. Définissez une devise autre que la devise par défaut et réessayez.');

define('ERROR_INVALID_CURRENCY_ENTRY', 'ERREUR : Vos données sont incomplètes et n\'ont pas été enregistrées. Vous devez entrer un code et un nom.');
