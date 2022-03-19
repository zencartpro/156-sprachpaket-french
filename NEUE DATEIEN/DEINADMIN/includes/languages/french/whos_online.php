<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: whos_online.php 629 2016-04-09 09:28:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Qui est en ligne');
define('TABLE_HEADING_ONLINE','en ligne');
define('TABLE_HEADING_CUSTOMER_ID','ID');
define('TABLE_HEADING_FULL_NAME','Nom');
define('TABLE_HEADING_IP_ADDRESS','Adresse IP');
define('TABLE_HEADING_SESSION_ID', 'Session');
define('TABLE_HEADING_ENTRY_TIME','Temps d\'accès');
define('TABLE_HEADING_LAST_CLICK','Dernier clic');
define('TIME_PASSED_LAST_CLICKED', '<strong>Temps écoulé depuis le dernier clic:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL','Dernière URL');
define('TABLE_HEADING_ACTION','Action');
define('TABLE_HEADING_SHOPPING_CART','Panier d\'achat des utilisateurs');
define('TEXT_SHOPPING_CART_SUBTOTAL','Sous-total');
define('TEXT_NUMBER_OF_CUSTOMERS','Actuellement, les clients %s sont en ligne');

define('WHOS_ONLINE_REFRESH_LIST_TEXT','MISE À JOUR LISTE');
define('WHOS_ONLINE_LEGEND_TEXT','Légende:');
define('WHOS_ONLINE_ACTIVE_TEXT','Panier d\'achat actif');
define('WHOS_ONLINE_INACTIVE_TEXT','Panier inactif');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Actif sans panier d\'achat');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inactif sans panier d\'achat');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inactif est le dernier clic >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactif depuis l\'arrivée >');
define('WHOS_ONLINE_REMOVED_TEXT','sera supprimée');

define('TEXT_SESSION_ID', '<strong>ID de session:</strong> ');
define('TEXT_HOST', '<strong>Hôte:</strong> ');
define('TEXT_USER_AGENT', '<strong>Agent utilisateur:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Panier vide</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Exclure les araignées');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Exclure les adresses IP d\'administration?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default

define('TEXT_DUPLICATE_IPS', 'Dupliquer des adresses IP: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Utilisateurs uniques au total: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Mise à jour ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'toutes %s secondes.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manuellement');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14 min');

