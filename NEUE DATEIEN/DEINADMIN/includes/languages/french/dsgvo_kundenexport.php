<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: dsgvo_export.php 2018-05-19 09:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Exportation des enregistrements de données clients DSGVO');
define('DSGVO_KUNDENEXPORT_OVERVIEW', 'Conformément à l\'art. 20 OSDGVO, les clients ont le droit de recevoir leurs données personnelles, qu\'ils ont fournies à l\'exploitant du magasin, dans un format structuré, commun et lisible par machine <br/>Si le client en fait la demande, il peut créer pour chaque client un fichier à jour qui contient également les commandes précédentes et les évaluations de produits soumises par ce dernier.<br/>Fichier csv avec point-virgule séparateur et jeu de caractères utf-8.<br/>Sélectionner un client et cliquer sur le bouton Exporter pour créer et télécharger un fichier csv depuis la base de données courante.<br/>');
define('IMAGE_DSGVOEXPORT','Exportation des données clients DSGVO');
define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_FIRSTNAME', 'Prénom');
define('TABLE_HEADING_LASTNAME', 'Nom de famille');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Compte créé');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_DATE_ACCOUNT_CREATED', 'Compte créé:');
define('ENTRY_NONE', 'Aucun');
define('TABLE_HEADING_COMPANY', 'Société');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');
define('TABLE_HEADING_LOGIN', 'Dernière connexion');
define('TABLE_HEADING_ACTION', 'Action');
define('ADDRESS_BOOK_TITLE', 'Entrées du carnet d\'adresses');
define('PRIMARY_ADDRESS', '(Adresse par défaut)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>Annotation:</strong></span> Un maximum de %s d\'entrées dans le carnet d\'adresses est autorisé.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');
define('CSV_HEADING_TITLE_SALUTATION','Salutation');
define('CSV_HEADING_TITLE_GENDER','Herr/Frau');
define('DSGVO_CUSTOMERDATA_HEADING','KUNDENDATEN');
define('DSGVO_CUSTOMERS_GENDER','Salutation');
define('DSGVO_CUSTOMERS_FIRSTNAME','Prénom');
define('DSGVO_CUSTOMERS_LASTNAME','Nom de famille');
define('DSGVO_CUSTOMERS_DOB','Date de naissance');
define('DSGVO_CUSTOMERS_EMAIL_ADDRESS','Adresse de courriel');
define('DSGVO_ENTRY_COMPANY','Nom de société');
define('DSGVO_ENTRY_STREET_ADDRESS','Rue et numéro de rue');
define('DSGVO_ENTRY_POSTCODE','POSTCODE');
define('DSGVO_ENTRY_CITY','Ville');
define('DSGVO_COUNTRIES_NAME','Pays');
define('DSGVO_CUSTOMERS_TELEPHONE','Téléphone');
define('DSGVO_CUSTOMERS_FAX','Fax');
define('DSGVO_CUSTOMERS_INFO_DATE_ACCOUNT_CREATED','Client depuis');
define('DSGVO_CUSTOMERS_INFO_DATE_OF_LAST_LOGON','dernière connexion');
define('DSGVO_REVIEWS_HEADING','ÉVALUATIONS');
define('DSGVO_REVIEW_HEADING','Évaluation');
define('DSGVO_DATE','Date');
define('DSGVO_PRODUCT_NAME','Produit');
define('DSGVO_REVIEWS_TEXT','Texte');
define('DSGVO_ORDERS_HEADING','COMMANDES');
define('DSGVO_ORDER_HEADING','Commande');
define('DSGVO_ORDER_ID','Numéro de commande');
define('DSGVO_ORDER_DATE','Date de commande');
define('DSGVO_ORDER_IP_ADDRESS','Adresse IP');
define('DSGVO_CUSTOMER_ADDRESS','Adresse client');
define('DSGVO_SHIPPING_ADDRESS','Adresse de livraison');
define('DSGVO_BILLING_ADDRESS','Adresse de facturation');
define('DSGVO_PAYMENT_METHOD','Mode de paiement');
define('DSGVO_PRODUCT_NUMBER','Numéro d\'article');