<?php
/**
 * Zen Cart German Specific
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders.php 634 2018-04-15 09:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Ordres');
define('HEADING_TITLE_DETAILS', 'Détails de ordre');
define('HEADING_TITLE_SEARCH', 'ID de ordre:');
define('HEADING_TITLE_STATUS', 'Statut:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Nom ou ID de l\'article: XX ou numéro d\'article ');
define('HEADING_TITLE_SEARCH_ALL','Recherche: ');
define('HEADING_TITLE_SEARCH_PRODUCTS','Recherche d\'article: ');
define('TEXT_RESET_FILTER', 'Supprimer le filtre de recherche');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'Filtres de recherche: ');
define('TABLE_HEADING_PAYMENT_METHOD', 'Type de paiement <br />Type d\'expédition');
define('TABLE_HEADING_ORDERS_ID', 'ID');

define('TEXT_BILLING_SHIPPING_MISMATCH', 'L\'adresse de facturation et l\'adresse de livraison ne correspondent pas ');

define('TABLE_HEADING_COMMENTS', 'Commentaires:');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Ordersum');
define('TABLE_HEADING_DATE_PURCHASED', 'Date d\'ordre');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_TYPE', 'Type d\'ordre');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Morceau');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Numéro d\'article');
define('TABLE_HEADING_PRODUCTS', 'Articles');
define('TABLE_HEADING_TAX', 'TVA');
define('TABLE_HEADING_TOTAL', 'Somme');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prix (excl. TVA)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prix (TVA incl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Somme (exkl. MwSt.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Somme (TVA incl.)');
define('TABLE_HEADING_UPDATED_BY', 'mis à jour par');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Le client a été informé');
define('TABLE_HEADING_DATE_ADDED', 'Créé le');

define('ENTRY_CUSTOMER', 'Client:');
define('ENTRY_CUSTOMER_ADDRESS', 'Adresse du client:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'Vendu à:');
define('ENTRY_DELIVERY_TO', 'Livré à:');
define('ENTRY_SHIP_TO', 'Envoyé à:');
define('ENTRY_SHIPPING_ADDRESS', 'Adresse de livraison:<br><i class="fa fa-2x fa-truck"></i>');
define('ENTRY_BILLING_ADDRESS', 'Adresse de facturation:<br><i class="fa fa-2x fa-credit-card"></i>');
define('ENTRY_PAYMENT_METHOD', 'Mode de paiement:');
define('ENTRY_CREDIT_CARD_TYPE', 'Carte de crédit:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titulaire de carte:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Numéro de carte:');
define('ENTRY_CREDIT_CARD_CVV', 'Numéro CVV:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Carte valable jusqu\'au:');
define('ENTRY_SUB_TOTAL', 'Sous-total:');
define('ENTRY_TAX', 'TVA:');
define('ENTRY_SHIPPING', 'Envoi:');
define('ENTRY_TOTAL', 'Somme:');
define('ENTRY_DATE_PURCHASED', 'Date d\'ordre:');
define('ENTRY_STATUS', 'Statut:');
define('ENTRY_DATE_LAST_UPDATED', 'Date de la dernière mise à jour:');
define('ENTRY_NOTIFY_CUSTOMER', 'Le client a été informé:');
define('ENTRY_NOTIFY_COMMENTS', 'Autres commentaires:');
define('ENTRY_PRINTABLE', 'Imprimer la facture');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Effacer la commande');
define('TEXT_INFO_DELETE_INTRO', 'Voulez-vous vraiment annuler cette commande?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Les articles vendus doivent-ils retourner dans le stock?');
define('TEXT_DATE_ORDER_CREATED', 'Créé le:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Dernière modification:');
define('TEXT_INFO_PAYMENT_METHOD', 'Mode de paiement:');
define('TEXT_PAID', 'Payé');
define('TEXT_UNPAID', 'Impayé');

define('TEXT_ALL_ORDERS', 'Tous les ordres');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Statut de la commande mis à jour');
define('EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Cher Monsieur ');
define('EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Chère Madame ');
define('EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Cher ');
define('EMAIL_TEXT_UPDATEINFO', 'Nous vous informerons de l\'état d\'avancement de votre commande à l\'adresse suivante ');
define('EMAIL_TEXT_ORDER_NUMBER', 'Numéro d\'ordre:');
define('EMAIL_TEXT_INVOICE_URL', 'Facture détaillée:');
define('EMAIL_TEXT_DATE_ORDERED', 'Date d\'ordre:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<strong>Annotation:</strong> ' . "\n\n");
define('EMAIL_TEXT_STATUS_UPDATED', 'L\'état de votre commande a été mis à jour.' . "\n\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nouveau statut:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Si vous avez d\'autres questions, n\'hésitez pas à nous contacter à l\'adresse e-mail suivante <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . '</a>.<br />' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'ERREUR : L\'ordre n\'existe pas.');
define('SUCCESS_ORDER_UPDATED', 'L\'ordre a été mis à jour.');
define('WARNING_ORDER_NOT_UPDATED', 'AVERTISSEMENT : Aucun changement détecté. L\'ordre n\'a pas été mis à jour.');

define('ENTRY_ORDER_ID', 'Numéro de facture: ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATUITEMENT</span>');

define('TEXT_DOWNLOAD_TITLE', 'Statut de téléchargement');
define('TEXT_DOWNLOAD_STATUS', 'Statut');
define('TEXT_DOWNLOAD_FILENAME', 'Nom de fichier');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Jours');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Téléchargements');

define('TEXT_DOWNLOAD_AVAILABLE', 'Disponible');
define('TEXT_DOWNLOAD_EXPIRED', 'Expiré');
define('TEXT_DOWNLOAD_MISSING', 'Ne pas sur le serveur');

define('IMAGE_ICON_STATUS_CURRENT', 'Statut - Disponible');
define('IMAGE_ICON_STATUS_EXPIRED', 'Statut - Expiré');
define('IMAGE_ICON_STATUS_MISSING', 'Statut - Disparu');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Téléchargement disponible');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Téléchargement bloqué');
define('TEXT_MORE', '... plus');

define('TEXT_INFO_IP_ADDRESS', 'Adresse IP: ');
define('TEXT_DELETE_CVV_FROM_DATABASE', 'Supprimer le chiffre de contrôle de carte de crédit de la base de données');
define('TEXT_DELETE_CVV_REPLACEMENT', 'Supprimé');
define('TEXT_MASK_CC_NUMBER','Cacher ce numéro');

define('TEXT_INFO_EXPIRED_DATE', 'Date d\'expiration:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Compteur de séquences:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Clients <br />Commentaires');
define('TEXT_COMMENTS_YES', 'Commentaires des clients - OUI');
define('TEXT_COMMENTS_NO', 'Commentaires des clients - NON');
define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Afficher les clients');

define('TEXT_INVALID_ORDER_STATUS', '<span class="alert">(Statut de commande non valide)</span>');

define('BUTTON_TO_LIST', 'Liste des ordres');
define('SELECT_ORDER_LIST', 'Aller à l\'ordre:');
define('TEXT_MAP_CUSTOMER_ADDRESS', 'Carte de l\'adresse du client');
define('TEXT_MAP_SHIPPING_ADDRESS', 'Adresse de livraison de la carte');
define('TEXT_MAP_BILLING_ADDRESS', 'Carte Adresse de facturation');
