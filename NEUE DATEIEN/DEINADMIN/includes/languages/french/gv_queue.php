<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_queue.php 630 2019-06-16 17:39:16Z webchills $
 * @translate German/French klartexter
 */
require 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' File');
define('TABLE_HEADING_CUSTOMERS','Clientes');
define('TABLE_HEADING_ORDERS_ID','Numéro de commande');
define('TABLE_HEADING_VOUCHER_VALUE',TEXT_GV_NAME . ' Somme');
define('TABLE_HEADING_DATE_PURCHASED','Date de commande');
define('TABLE_HEADING_ACTION','Action');
define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Vous avez récemment reçu un ' . TEXT_GV_NAME . ' à '. STORE_NAME . ' acheté.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Pour des raisons de sécurité, les bons ne seront pas disponibles immédiatement. Le montant pouvait maintenant être débloqué. Vous pouvez maintenant visiter notre boutique en ligne et télécharger le ' . TEXT_GV_NAME . ' Transmettez la valeur à la personne désirée ou rachetez-la vous-même.');
define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Le ' . TEXT_GV_NAME . ' que vous avez acheté a une valeur de %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Merci de magasiner avec nous!');
define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Achetant');
define('TEXT_REDEEM_GV_SUBJECT_ORDER', ' Ordre #');
define('TEXT_EDIT_ORDER','Modifier l\'ID# d\'ordre');
define('TEXT_GV_NONE','Kein ' . TEXT_GV_NAME . ' disponible pour publication');