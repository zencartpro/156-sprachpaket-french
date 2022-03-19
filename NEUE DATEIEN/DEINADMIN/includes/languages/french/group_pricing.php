<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: group_pricing.php 298 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Tarifs de groupe');
define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nom de groupe');
define('TABLE_HEADING_GROUP_AMOUNT', '% Rabais');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nouveau groupe de prix');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Modifier groupe de prix');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Supprimer groupe de prix');
define('TEXT_NEW_INTRO', 'Veuillez entrer les informations suivantes pour le nouveau groupe de prix');
define('TEXT_EDIT_INTRO', 'Veuillez apporter ici les modifications nécessaires');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer ce groupe de prix?');
define('TEXT_DELETE_PRICING_GROUP', 'Supprimer groupe de prix');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS', '<b>ATTENTION:</b> Il y a des % de clients qui sont encore associés à cette catégorie!');
define('TEXT_GROUP_PRICING_NAME', 'Nom de groupe: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Rabais en pourcentage: ');
define('TEXT_DATE_ADDED', 'Créé le:');
define('TEXT_LAST_MODIFIED', 'Dernière modification:');
define('TEXT_CUSTOMERS', 'Clients du Groupe:');
define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST', 'ERREUR : Il y a encore des clients dans ce groupe.  Veuillez confirmer que vous voulez supprimer tous les membres du groupe et les supprimer.');
define('ERROR_MODULE_NOT_CONFIGURED', 'REMARQUE : Vous utilisez la tarification de groupe, mais vous n\'avez pas activé le module Remise de groupe.<br />Allez dans Admin->Modules->Sommaire->Réduction de groupe (ot_group_pricing) et installez/configurez le module.');