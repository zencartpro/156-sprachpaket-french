<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paypal.php 628 2013-03-01 11:05:14Z webchills $
 * @translate German/French klartexter
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA', 'PayPal Website Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>Paiements PayPal Standard</strong> (Ancien service PayPal, beaucoup moins fiable que PayPal Express!)<br /><a href="https://www.paypal.com" target="_blank">Gérer votre compte PayPal.</a><br /><br /><font color="green">Guide de configuration:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">Connectez-vous à votre compte PayPal - Cliquez ici.</a><br />2. Dans votre compte PayPal, sous "Profils", sous "Profils",<ul><li>définir un <strong>Préférences de notification de paiement instantanée </strong> URL à:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '<br />(Si une autre URL a déjà été saisie, vous devez laisser ce paramètre inchangé.)<br /><span class="alert">Assurez-vous que la case Activer IPN est cochée!</span></li><li>in <strong>Préférences Paiements sur site marchand</strong> réglez votre <strong>Automatic Return URL</strong> sur:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>... et cliquez sur "installer" ci-dessus pour activer le support PayPal... et "modifier" pour indiquer au panier Zen vos paramètres PayPal.</li>') . '</ul><font color="green"><hr /><strong>Exigences:</strong></font><br /><hr />*<strong>Compte PayPal</strong> (<a href="http://www.zen-cart.com/partners/paypal-std" target="_blank">cliquez pour vous inscrire</a>)<br />*<strong>*<strong>Port 80</strong> est utilisé pour la communication bidirectionnelle avec la passerelle, il doit donc être ouvert sur le routeur/pare-feu de votre hôte.<br />*<strong>PHP allow_url_fopen</strong> doit être activé<br />*<strong>Les réglages </strong> doivent être configurés comme décrit ci-dessus.' );
  } else {
define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/de_DE/i/logo/PayPal_mark_37x23.gif');
define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Magasiner avec PayPal');
define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Gagnez votre temps. Magasinez en toute sécurité. <br />Payer sans révéler les informations de votre compte au public.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Prénom:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Nom de société:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Rue:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'État fédéral:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code postal:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Courriel du payeur:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID du payeur:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut de payeur:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse:');

define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'En boucle d\'attente - cause:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de versement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Montant brut:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Frais de paiement:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Cours de change:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Quantité Contenu du panier:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Typ:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Commentaires sur le système: ');


define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Tous les articles de votre panier (voir détails dans le magasin et sur votre ticket de caisse).');
define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' Achat');
define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Charges non récurrentes liées à ');
define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Suppléments');
define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Frais de manutention et autres frais applicables');
define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Réductions');
define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Crédits appliqués, incluant coupons rabais, certificats-cadeaux, etc.');