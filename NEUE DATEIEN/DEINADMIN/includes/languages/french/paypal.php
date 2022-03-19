<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paypal.php 303 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

  // sort orders
define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Tri par affichage: ');
define('TEXT_SORT_PAYPAL_ID_DESC', 'Tri PayPal (nouveau - ancien)');
define('TEXT_SORT_PAYPAL_ID', 'Tri PayPal (ancien - nouveau)');
define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID de commande (haut - bas), tri PayPal');
define('TEXT_SORT_ZEN_ORDER_ID', 'ID de commande (faible - élevé), tri PayPal');
define('TEXT_PAYMENT_AMOUNT_DESC', 'Total de la commande (haut - bas)');
define('TEXT_PAYMENT_AMOUNT', 'Total de la commande (bas - haut)');

  //begin ADMIN text
define('HEADING_ADMIN_TITLE', 'Notifications de paiement instantanées PayPal');
define('HEADING_PAYMENT_STATUS', 'Statut de paiement');
define('TEXT_ALL_IPNS', 'Tous');
define('TABLE_HEADING_ORDER_NUMBER', 'Numéro d\'ordre');
define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
define('TABLE_HEADING_TXN_TYPE', 'Type de transaction');
define('TABLE_HEADING_PAYMENT_STATUS', 'Statut de paiement');
define('TABLE_HEADING_PAYMENT_AMOUNT', 'Somme');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_DATE_ADDED', 'Créé le');
define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Nombre d\'entrées dans l\'historique des statuts');
define('TABLE_HEADING_ENTRY_NUM', 'Nombre initial');
define('TABLE_HEADING_TRANS_ID', 'Trans. ID');
define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Montrer <strong>%d</strong> à <strong>%d</strong> (de <strong>%d</strong> IPN\'s)');

  //Details section
define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'Détails de l\'inscription du client PayPal');
define('HEADING_DETAILS_REGISTRATION_TITLE', 'Notification de paiement instantanée PayPal');
define('TEXT_INFO_ENTRY_ADDRESS', 'Adresse');
define('TEXT_INFO_ORDER_NUMBER', 'Numéro d\'ordre');
define('TEXT_INFO_TXN_TYPE', 'Type de transaction');
define('TEXT_INFO_PAYMENT_STATUS', 'Statut de paiement');
define('TEXT_INFO_PAYMENT_AMOUNT', 'Somme');
define('ENTRY_FIRST_NAME', 'Prénom');
define('ENTRY_LAST_NAME', 'Nom');
define('ENTRY_BUSINESS_NAME', 'Nom de société');
define('ENTRY_ADDRESS', 'Adresse');
  //EMAIL ALREADY DEFINED IN ORDERS
define('ENTRY_PAYER_ID', 'ID du payeur');
define('ENTRY_PAYER_STATUS', 'Statut de payeur');
define('ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse');
define('ENTRY_PAYMENT_TYPE', 'Type de paiement');
define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Statut de paiement');
define('TABLE_HEADING_PENDING_REASON', 'En file d\'attente - raison');
define('TABLE_HEADING_IPN_DATE', 'IPN Date');
define('ENTRY_INVOICE', 'Facture');
define('ENTRY_PAYPAL_IPN_TXN', 'ID de transaction');
define('ENTRY_PAYMENT_DATE', 'Date de paiement');
define('ENTRY_PAYMENT_LAST_MODIFIED', 'Dernière modification');
define('ENTRY_MC_CURRENCY', 'MC Monnaie');
define('ENTRY_MC_GROSS', 'MC Brut');
define('ENTRY_MC_FEE', 'Frais de MC');
define('ENTRY_PAYMENT_GROSS', 'Paiement brut');
define('ENTRY_PAYMENT_FEE', 'Frais de paiement');
define('ENTRY_SETTLE_AMOUNT', 'Ajustement de montant');
define('ENTRY_SETTLE_CURRENCY', 'Ajustement monétaire');
define('ENTRY_EXCHANGE_RATE', 'Cours de change');
define('ENTRY_CART_ITEMS', 'Quantité Contenu du panier');
define('ENTRY_CUSTOMER_COMMENTS', 'Commentaires des clients');
define('TEXT_NO_IPN_HISTORY', 'Pas d\'historique IPN disponible');
define('TEXT_TXN_SIGNATURE', 'Signature de la transaction');