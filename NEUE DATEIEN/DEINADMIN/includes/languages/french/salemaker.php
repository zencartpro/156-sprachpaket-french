<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: salemaker.php 628 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Directeur commercial');
define('TABLE_HEADING_SALE_NAME','Dénomination de vente');
define('TABLE_HEADING_SALE_DEDUCTION','Réduction');
define('TABLE_HEADING_SALE_DATE_START','Date de début');
define('TABLE_HEADING_SALE_DATE_END','Date de fin');
define('TABLE_HEADING_STATUS','Statut');
define('TABLE_HEADING_ACTION','Action');
define('TEXT_SALEMAKER_NAME','Dénomination de vente:');
define('TEXT_SALEMAKER_DEDUCTION','Réduction:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE','     Typ:  ');
define('TEXT_SALEMAKER_PRICERANGE_FROM','Article Gamme de prix:');
define('TEXT_SALEMAKER_PRICERANGE_TO','     à       ');
define('TEXT_SALEMAKER_SPECIALS_CONDITION','En cas d\'offre spéciale:');
define('TEXT_SALEMAKER_DATE_START','Date de début:');
define('TEXT_SALEMAKER_DATE_END','Date de fin:');
define('TEXT_SALEMAKER_CATEGORIES','<b>ou</b> cochez les catégories auxquelles s\'applique cette vente:');
define('TEXT_SALEMAKER_POPUP','<a href="javascript:session_win();"><span class="errorText"><b>Cliquez ici pour obtenir des conseils sur l\'utilisation du directeur des ventes.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1','<a href="javascript:session_win1();"><span class="errorText"><b>(Plus d\'informations)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY','Immédiatement');
define('TEXT_SALEMAKER_NEVER','Jamais');
define('TEXT_SALEMAKER_ENTIRE_CATALOG','Activez cette case si vous voulez appliquer les ventes à <b>tous les articles</b>.:');
define('TEXT_SALEMAKER_TOP','Boutique complète');
define('TEXT_INFO_DATE_ADDED','Créé le:');
define('TEXT_INFO_DATE_MODIFIED','Dernière modification:');
define('TEXT_INFO_DATE_STATUS_CHANGE','Dernière modification de statut:');
define('TEXT_INFO_SPECIALS_CONDITION','Tarifs spéciaux:');
define('TEXT_INFO_DEDUCTION','Réduction:');
define('TEXT_INFO_PRICERANGE_FROM','Gamme de prix:');
define('TEXT_INFO_PRICERANGE_TO',' à ');
define('TEXT_INFO_DATE_START','Commence:');
define('TEXT_INFO_DATE_END','Finit:');
define('SPECIALS_CONDITION_DROPDOWN_0','Ignorer les prix spéciaux - Appliquer au prix de l\'article et remplacer le prix spécial par le prix de vente');
define('SPECIALS_CONDITION_DROPDOWN_1','Ignorer les options de vente - Ne pas appliquer un prix de vente s\'il existe un prix spécial.');
define('SPECIALS_CONDITION_DROPDOWN_2','Ajouter le prix de vente à un prix spécial - sinon s\'appliquer au prix de l\'article');
define('TEXT_INFO_HEADING_COPY_SALE','Vente de copies');
define('TEXT_INFO_COPY_INTRO','Veuillez entrer un nom pour la copie de <br>"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE','Supprimer les ventes');
define('TEXT_INFO_DELETE_INTRO','Voulez-vous vraiment supprimer cette vente?');
define('TEXT_MORE_INFO', '(Plus d\'informations)');
define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;ATTENTION : %s Il y a déjà des ventes pour cette catégorie');