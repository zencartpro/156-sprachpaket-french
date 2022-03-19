<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: checkout_confirmation.php 629 2012-12-07 07:05:14Z webchills $
 * @translate German/French klartexter
 */

define('NAVBAR_TITLE_1','Commande');
define('NAVBAR_TITLE_2','Confirmez votre commande');

define('HEADING_TITLE','Etape 3 de 3 : Commande avec paiement');
define('TEXT_ZUSATZ_SCHRITT3','Vérifiez votre commande et cliquez sur le bouton "ACHETER" au bas de cette page.');
define('HEADING_BILLING_ADDRESS','Adresse de facturation');
define('HEADING_DELIVERY_ADDRESS','Adresse d\'expédition');
define('HEADING_SHIPPING_METHOD','Mode d\'expédition:');
define('HEADING_PAYMENT_METHOD','Mode de paiement:');
define('HEADING_PRODUCTS','Contenu du panier');
define('HEADING_TAX','TVA');
define('HEADING_ORDER_COMMENTS','Commentaires ou remarques');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Produits marqués d\'un ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont pas en stock.<br />Ces articles seront livrés plus tard');
define('NO_COMMENTS_TEXT','Aucun');
// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Prix à l\'unité');
define('TABLE_HEADING_PRODUCTIMAGE','Image de l\'article');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','J\'ai  <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>Termes et conditions</u></a> et <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><u>Droit de retrait</u></a>  lu et accepté.');
define('TEXT_NON_EU_COUNTRIES','Note:<br/>Votre commande sera expédiée dans un pays hors UE. En outre, d\'autres droits de douane, taxes ou frais peuvent être encourus en relation avec votre commande, qui ne seront pas payés par nous ou facturés par nous.');
