<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: banner_statistics.php 628 2013-07-17 08:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Statistiques bannières');
define('TABLE_HEADING_SOURCE','Source');
define('TABLE_HEADING_VIEWS','Publicité');
define('TABLE_HEADING_CLICKS','Clics');

define('TEXT_BANNERS_DATA','D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS','%s statistiques quotidiennes pour %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS','%s statistiques mensuelles pour %s');
define('TEXT_BANNERS_YEARLY_STATISTICS','%s statistique annuelle');

define('STATISTICS_TYPE_DAILY','Quotidien');
define('STATISTICS_TYPE_MONTHLY','Mensuel');
define('STATISTICS_TYPE_YEARLY','Annuel');

define('TITLE_TYPE','Type:');
define('TITLE_YEAR','Année:');
define('TITLE_MONTH','Mois:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST','Attention! Le répertoire graphique n\'existe pas. Veuillez créer l\'annuaire <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE','Attention! Le répertoire des graphiques n\'est pas accessible en écriture. Il est situé ici: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');