<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: checkout_success.php 628 2016-02-29 15:05:14Z webchills $
 * @translate German/French klartexter
 */

define('NAVBAR_TITLE_1','caisse ');
define('NAVBAR_TITLE_2','Succès - Merci beaucoup!');

define('HEADING_TITLE','Je vous remercie beaucoup. Nous avons reçu votre commande.');

define('TEXT_SUCCESS','Votre commande sera expédiée immédiatement après réception du paiement, sauf si vous avez commandé contre remboursement. Pour les commandes contre remboursement, l\'expédition quitte généralement nos locaux dans un délai de 2 à 3 jours ouvrables.');
define('TEXT_NOTIFY_PRODUCTS','Veuillez m\'informer des mises à jour de cet article:');
define('TEXT_SEE_ORDERS','Vous pouvez consulter l\'historique de vos commandes sous <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">\'Mon compte\'</a> vue.');
define('TEXT_CONTACT_STORE_OWNER','Si vous avez des questions, n\'hésitez pas à communiquer avec notre   <a href="' . zen_href_link(FILENAME_CONTACT_US) . '"> service à la clientèle.</a>.');
define('TEXT_THANKS_FOR_SHOPPING','<strong>Merci beaucoup pour votre commande en ligne.!</strong>');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD','Vous pouvez également télécharger vos articles à une date ultérieure sous \'%s\'.');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Votre numéro de commande est:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '<p><strong> NOTE:</strong> Un compte temporaire a été créé pour compléter votre commande. Vous pouvez fermer ce compte en cliquant sur Déconnexion. La déconnexion permet également de s\'assurer que les informations relatives à votre séjour dans notre boutique ne sont pas visibles pour la prochaine personne utilisant cet ordinateur. Si vous souhaitez continuer vos achats, n\'oubliez pas de cliquer sur Déconnexion avant de quitter notre magasin.</p>');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Merci beaucoup pour votre achat ! Veuillez vous déconnecter avant de quitter la boutique pour vous assurer que les informations concernant votre séjour dans notre boutique ne sont pas visibles pour la prochaine personne utilisant cet ordinateur.');
define('HEADING_ORDER_NUMBER', 'Numéro de commande %s');
define('HEADING_ORDER_DATE', 'Date de commande:');
define('HEADING_ORDER_TOTAL', 'Total:');

define('HEADING_DELIVERY_ADDRESS', 'Adresse d\'expédition');
define('HEADING_SHIPPING_METHOD', 'Mode d\'expédition');

define('HEADING_PRODUCTS', 'Articles');
define('HEADING_TAX', 'Fiscal');
define('HEADING_TOTAL', 'Total');
define('HEADING_QUANTITY', 'Quantité');

define('HEADING_BILLING_ADDRESS', 'Adresse de facturation');
define('HEADING_PAYMENT_METHOD', 'Mode de paiement');

define('HEADING_ORDER_HISTORY', 'Historique des commandes et commentaires');
define('TEXT_NO_COMMENTS_AVAILABLE', 'aucun commentaire');
define('TABLE_HEADING_STATUS_DATE', 'Date');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Statut de commande');
define('TABLE_HEADING_STATUS_COMMENTS', 'Commentaires');
define('QUANTITY_SUFFIX', '&nbsp;  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
