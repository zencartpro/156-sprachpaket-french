<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: geo_zones.php 628 2010-08-30 15:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Définitions de zone - Taxes, modes de paiement et modes d\'expédition');

define('TABLE_HEADING_COUNTRY','Pays');
define('TABLE_HEADING_COUNTRY_ZONE','État/zone fiscale');
define('TABLE_HEADING_TAX_ZONES','Zone fiscale');
define('TABLE_HEADING_TAX_ZONES_DESCRIPTION', 'Description de zone');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION','Action');
//define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_TAX_AND_ZONES', ': Taux et zones d\'imposition définis ');
define('TEXT_LEGEND_ONLY_ZONES', ': Zones d\'imposition, mais pas de taux d\'imposition définis ');
define('TEXT_LEGEND_NOT_CONF', ': Non configuré ');

define('TEXT_INFO_HEADING_NEW_ZONE','Nouvelle zone de fiscale');
define('TEXT_INFO_NEW_ZONE_INTRO','Veuillez entrer les informations nécessaires pour la nouvelle zone fiscale');

define('TEXT_INFO_HEADING_EDIT_ZONE','Modifier la zone de fiscale');
define('TEXT_INFO_EDIT_ZONE_INTRO','Veuillez apporter ici les modifications nécessaires');

define('TEXT_INFO_HEADING_DELETE_ZONE','Effacer la zone de fiscale');
define('TEXT_INFO_DELETE_ZONE_INTRO','Êtes-vous sûr de vouloir supprimer cette zone de fiscale?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE','Nouvelle classe de taxe');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO','Veuillez entrer les informations nécessaires pour la nouvelle classe de taxe.');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE','Traitement de la classe de taxe');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO','Veuillez apporter ici les modifications nécessaires');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE','Supprimer classe de taxe');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO','Voulez-vous vraiment supprimer ce classe de taxe?');

define('TEXT_INFO_DATE_ADDED','Créé le:');
define('TEXT_INFO_LAST_MODIFIED','Dernière modification:');
define('TEXT_INFO_ZONE_NAME','Nom de la zone fiscale');
define('TEXT_INFO_NUMBER_ZONES','Nombre de zones de fiscale:');
define('TEXT_INFO_ZONE_DESCRIPTION','Description:');
define('TEXT_INFO_COUNTRY','Pays:');
define('TEXT_INFO_COUNTRY_ZONE','État/zone fiscale:');
define('TYPE_BELOW','Toutes les zones/États fédéraux');
define('TEXT_ALL_ZONES','Toutes les zones/États fédéraux');
define('TEXT_ALL_COUNTRIES','Tous les pays');

define('TEXT_INFO_NUMBER_TAX_RATES','Nombre de taux d\'imposition:');
define('ERROR_TAX_RATE_EXISTS','ATTENTION : Les taux d\'imposition ont déjà été définis pour cet état/zone fiscale. Veuillez supprimer ces taux d\'imposition définis avant de supprimer la zone fiscale.');
