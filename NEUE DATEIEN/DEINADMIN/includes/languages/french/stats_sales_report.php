<?php
/**
 * @package admin
 * SALES REPORT 3.3.0
 *
 * The language file contains all the text that appears on the report. The first set of
 * configuration defines actually impact the report's output and behavior.
 *
 * @author     Frank Koehl (PM: BlindSide)
 * @author     Conor Kerr <conor.kerr_zen-cart@dev.ceon.net>
 * @updated by stellarweb to work with version 1.5.0 02-29-12 
 * @updated by lat9 for continued operation under zc155/zc156, 20190622
 * @copyright  Portions Copyright 2003-2019 Zen Cart Development Team
 * @copyright  Portions Copyright 2003 osCommerce
 * @license    http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 * @translation by webchills 2019-07-08
 * @translate German/French klartexter
*/

//////////////////////////////////////////////////////////
// DISPLAY EMPTY TIMEFRAME LINES
// Setting this define to true will disable displaying
// a timeframe line if that timeframe is empty.  By
// default, an empty timeframe displays the value of the
// define TEXT_NO_DATA.

//////////////////////////////////////////////////////////
// Zeige leere Zeiträume an
// Wenn Sie diese Einstellunge auf true setzen,
// dann werden keine leeren Zeiträume mehr angezeigt
//
// Standardeinstellung ist false
//
// Bedenken Sie, sollte der von Ihnen angegebene Zeitraum
// keinerlei Daten enthalten, dann erscheint es, als ob keine
// Suche durchgeführt worden sei
//
define('DISPLAY_EMPTY_TIMEFRAMES', false);

//////////////////////////////////////////////////////////
// REPORTING A SUBSET OF CUSTOMERS / PRODUCTS
// By checking the boxes to 'Only Include Specific customers
// or Products (SEARCH_SPECIFIC_CUSTOMERS/PRODUCTS),
// only orders for those customers / products will be
// included in the result. By default, the included customers/
// products will be printed above the results table. If this
// gets too long, this printout can be disabled with
// the DISPLAY booleans below.
//
// If you often want a specific product, you can set a 
// default here, e.g.:
// define('INCLUDE_PRODUCTS', '10, 15');
//
define('INCLUDE_PRODUCTS', '');
define('INCLUDE_CUSTOMERS', '');
define('DISPLAY_TABLE_HEADING_CUSTOMERS', true);
define('DISPLAY_TABLE_HEADING_PRODUCTS', true);
define('TEXT_CUSTOMER_TABLE_HEADING', ' Commandes pour: ');  //Prefix used to print before customer name(s) when filtering by customer


//////////////////////////////////////////////////////////
// Hersteller im Bericht anzeigen
// 
// Beim Setzen dieser Einstellung auf true erfolgt bei jedem Artikel
// im Report die Angabe des Herstellers.
//
// Standard ist false
//
define('DISPLAY_MANUFACTURER', false);


//////////////////////////////////////////////////////////
// ONE-TIME FEES COLUMN
// If your store does not have *any* one-time fees on its
// products, you can disable displaying the column.
//
// Note that this switch does not affect math calculations,
// so if you happen to have a product with fees attached,
// they will still be accounted for and appear in the total.
//
define('DISPLAY_ONE_TIME_FEES', false);


//////////////////////////////////////////////////////////
// Nachkommastellen bei den Durchschnittswerten
//
// Stellen Sie hier die gewünschen Nachkommastellen ein
//
define('NUM_DECIMAL_PLACES', 2);


//////////////////////////////////////////////////////////
// Einstellung Anzeigeformat Zeitraum
//
// Note:  Other constants moved to the main processing file for v3.2.1.
//
define('DATE_SPACER', ' à<br />&nbsp;&nbsp;&nbsp;');


//////////////////////////////////////////////////////////
// Ausschließen bestimmter Produkte
//
// Alle angegebenen Produkte erscheinen nicht im Bericht.
// Diese Einstellung beeinflußt die Summenwerte
//
// Der Wert des Produkts wird aus den Summen
// gc_sold, gc_sold_qty, goods, num_products, und diff_products ausgeschlossen
//
// Die Werte für gc_used, gc_used_qty, discount,
// discount_qty, tax, and shipping kommen direkt aus der orders_total Tabelle
// und können nicht aufgrund der Produkt ID ausgeschlossen werden
//
// Wenn ein Auftrag nur aus ausgeschlossenen Produkten besteht
// keine Versandkosten, Rabatte, Steuern oder Gutscheine hat,
// dann erscheint dieser nicht im Verkaufsbericht.
//
// Beispiel: define('EXCLUDE_PRODUCTS', serialize(array(25, 14, 43)) );
//
define('EXCLUDE_PRODUCTS', serialize(array( )));



/*
** LANGUAGE DEFINES
*/
// Search menu heading
define('PAGE_HEADING', 'Rapport de vente');
define('HEADING_TITLE_SEARCH', '1. Recueillir des données');
define('HEADING_TITLE_SORT', '2. Trier et filtrer les résultats');
define('HEADING_TITLE_PROCESS', '3. Créer un rapport');
define('SEARCH_TIMEFRAME', 'Période');
define('SEARCH_TIMEFRAME_DAY', 'Tous les jours');
define('SEARCH_TIMEFRAME_WEEK', 'Hebdomadaire');
define('SEARCH_TIMEFRAME_MONTH', 'Mensuel');
define('SEARCH_TIMEFRAME_YEAR', 'Annuel');
define('SEARCH_TIMEFRAME_SORT', 'Trier par période');
define('SEARCH_DATE_PRESET', 'Périodes de temps prédéfinies');
define('SEARCH_DATE_CUSTOM', 'Période définie par l\'utilisateur');
define('SEARCH_DATE_TODAY', 'Aujourd\'hui (%s)');
define('SEARCH_DATE_YESTERDAY', 'Hier (%s)');
define('SEARCH_DATE_LAST_MONTH', 'Le mois dernier (%s)');
define('SEARCH_DATE_THIS_MONTH', 'Mois en cours (%s)');
define('SEARCH_DATE_LAST_YEAR', 'L\'année dernière (%s)');
define('SEARCH_DATE_YTD', 'Année en cours (%s)');
define('SEARCH_START_DATE', 'Date de début');
define('SEARCH_END_DATE', 'Date de fin (inclus)');
define('SEARCH_DATE_FORMAT', 'mm/dd/yyyy');
define('SEARCH_DATE_TARGET', 'Tenir compte de...');
define('SEARCH_PAYMENT_METHOD', 'Mode de paiement');
define ('SEARCH_PAYMENT_METHOD_OMIT','Omettre le mode de paiement suivant');
define('SEARCH_CURRENT_STATUS', 'Etat actuel de la commande');
define('SEARCH_EXCLUDED_STATUS', 'Statut de commande exclue');
define('SEARCH_SPECIFIC_CUSTOMERS', 'N\'enregistrez que certains numéros de clients (ID séparés par des virgules)');
define('SEARCH_SPECIFIC_PRODUCTS', 'N\'inclure que certains ID d\'article (ID séparés par des virgules)');
define('SEARCH_MANUFACTURER', 'Fabricant');
define('SEARCH_DETAIL_LEVEL', 'Informations affichées');
define('SEARCH_OUTPUT_FORMAT', 'Format de sortie');
define('SEARCH_SORT_PRODUCT', 'Trier les articles par...');
define('SEARCH_SORT_ORDER', 'Trier les commandes par...');
define('SEARCH_SORT_THEN', 'Puis trier par...');
define('BUTTON_SEARCH', 'Afficher le rapport!');
define('BUTTON_DEFAULT_SEARCH', 'Recherche rapide');
define('SEARCH_WAIT_TEXT', 'Le rapport est en cours de génération... Veuillez patienter....');


// Form element text
// radio buttons
define('RADIO_DATE_TARGET_PURCHASED', 'Date de commande');
define('RADIO_DATE_TARGET_STATUS', 'Statut de la commande (veuillez sélectionner)');
define('RADIO_TIMEFRAME_SORT_ASC', 'Top le plus ancien');
define('RADIO_TIMEFRAME_SORT_DESC', 'Dernier top');
define('RADIO_LI_SORT_ASC', 'Ascendant');
define('RADIO_LI_SORT_DESC', 'Descendant');

// dropdown menus
define('SELECT_DETAIL_TIMEFRAME', 'Période Total des totaux');
define('SELECT_DETAIL_PRODUCT', '&nbsp;+ Liste des produits');
define('SELECT_DETAIL_ORDER', '&nbsp;+ Liste des commandes');
define('SELECT_DETAIL_MATRIX', 'Matrice des statistiques de période');
define('SELECT_OUTPUT_DISPLAY', 'Sortie de l\'écran');
define('SELECT_OUTPUT_PRINT', 'Sortie imprimée');
define('SELECT_OUTPUT_CSV', 'Exportation CSV');
define('SELECT_PRODUCT_ID', 'Numéro d\'article');
define('SELECT_QUANTITY', 'Quantité');
define('SELECT_LAST_NAME', 'Nom de famille du client');

// checkboxes
define('CHECKBOX_AUTO_PRINT', 'Impression automatique du rapport');
define('CHECKBOX_CSV_HEADER', 'En-têtes de colonne dans la première ligne');
define('CHECKBOX_NEW_WINDOW', 'Ouvrir le rapport dans une nouvelle fenêtre');
define('CHECKBOX_VALIDATE_TOTALS', ' Colonne d\'édition pour le contrôle des totaux');

// Report Column Headings
// Timeframe
define('TABLE_HEADING_TIMEFRAME', 'Époque');
define('TABLE_HEADING_NUM_ORDERS', 'Nombre de commandes');
define('TABLE_HEADING_NUM_PRODUCTS', 'Nombre de produits');
define('TABLE_HEADING_TOTAL_GOODS', 'Valeur du contrat');
define('TABLE_HEADING_TAX', 'Impôts');
define('TABLE_HEADING_GOODS_TAX', 'Impôt');
define('TABLE_HEADING_ORDER_RECORDED_TAX', 'Contrôle des commandes');
define('TABLE_HEADING_SHIPPING', 'Frais d\'expédition');
define('TABLE_HEADING_DISCOUNTS', 'Rabais');
define('TABLE_HEADING_GC_SOLD', 'Bons vendus');
define('TABLE_HEADING_GC_USED', 'Bons encaissés');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_FOOTER_TIMEFRAMES', ' Périodes de temps');

// Order Line Items
define('TABLE_HEADING_ORDERS_ID', 'Numéro de commande');
define('TABLE_HEADING_CUSTOMER', 'Client');
define('TABLE_HEADING_ORDER_TOTAL', 'Valeur de commande');
define('TABLE_HEADING_ORDER_TOTAL_VALIDATION', 'Total valable');

// Product Line Items
define('TABLE_HEADING_PRODUCT_ID', 'ID de produit');
define('TABLE_HEADING_PRODUCT_NAME', 'Nom de l\'article');
define('TABLE_HEADING_PRODUCT_ATTRIBUTES', 'Attributs');
define('TABLE_HEADING_MANUFACTURER', 'Fabricant');
define('TABLE_HEADING_MODEL', 'Numéro d\'article');
define('TABLE_HEADING_BASE_PRICE', 'Tarif à l\'unité');
define('TABLE_HEADING_FINAL_PRICE', 'Prix final');
define('TABLE_HEADING_QUANTITY', 'Quantité');
define('TABLE_HEADING_ONETIME_CHARGES', 'frais ponctuels');
define('TABLE_HEADING_PRODUCT_TOTAL', 'Total de l\'article');

// Data Matrix
define('MATRIX_GENERAL_STATS', 'Statistiques générales');
define('MATRIX_ORDER_REVENUE', 'Total');
define('MATRIX_ORDER_PRODUCT_COUNT', 'Total des produits vendus');
define('MATRIX_LARGEST', 'Ordre le plus grand: ');
define('MATRIX_SMALLEST', 'Commande la plus petite: ');
define('MATRIX_AVERAGES', 'Chiffres moyens');
define('MATRIX_AVG_ORDER', '&nbsp;Montant du contrat');
define('MATRIX_AVG_PROD_ORDER', '&nbsp;Produits par commande');
define('MATRIX_AVG_PROD_ORDER_DIFF', '&nbsp;différents produits par commande');
define('MATRIX_AVG_ORDER_CUST', '&nbsp;Commandes par client');
define('MATRIX_ORDER_STATS', 'Statistiques de commande');
define('MATRIX_TOTAL_PAYMENTS', 'Modes de paiement');
define('MATRIX_TOTAL_CC', 'Cartes de crédit');
define('MATRIX_TOTAL_SHIPPING', 'Méthodes d\'expédition');
define('MATRIX_TOTAL_CURRENCIES', 'Monnaies');
define('MATRIX_TOTAL_CUSTOMERS', 'Utilisateurs uniques');
define('MATRIX_PRODUCT_STATS', 'Statistiques sur les produits');
define('MATRIX_PRODUCT_SPREAD', 'Distribution des produits');
define('MATRIX_PRODUCT_REVENUE_RATIO', 'Part du chiffre d\'affaires total en %');
define('MATRIX_PRODUCT_QUANTITY_RATIO', 'Part de la quantité totale en %');


// CSV Export
define('CSV_FILENAME_PREFIX', 'sales_');
define('CSV_HEADING_START_DATE', 'Date de début');
define('CSV_HEADING_END_DATE', 'Date de fin');
define('CSV_HEADING_LAST_NAME', 'Nom de famille');
define('CSV_HEADING_FIRST_NAME', 'Prénom');
define('CSV_SEPARATOR', ',');
define('CSV_NEWLINE', "\n");


// Print Format
define('PRINT_DATE_TO', ' jusqu\'à ce que ');
define('PRINT_DATE_TARGET', 'Commandes enregistrées selon ');
define('PRINT_TIMEFRAMES', '%s %s trié (asc = ascendant, desc = descendant)');
define('PRINT_DATE_PURCHASED', 'Date de commande');
define('PRINT_DATE_STATUS', 'Statut de commande');
define('PRINT_ORDER_STATUS', '%s [%s]');
define('PRINT_PAYMENT_METHOD', 'Modes de paiement:');
define('PRINT_CURRENT_STATUS', 'Etat actuel de la commande:');
define('PRINT_DETAIL_LEVEL', 'Ecran d\'affichage: ');

// javascript pop-up alert window
define('ALERT_JS_HIGHLIGHT', '#FF40CF');
define('ALERT_MSG_START', 'Il y a une ou plusieurs erreurs dans vos paramètres de recherche:');
define('ALERT_DATE_INVALID_LENGTH', '> Une date saisie n\'est pas valide');
define('ALERT_DATE_INVALID', '> Vous devez choisir l\'un des paramètres par défaut ou spécifier une période (date de début et date de fin).');
define('ALERT_CSV_CONFLICT', '> La sortie CSV n\'est pas disponible pour le ' . SELECT_DETAIL_MATRIX . ' Ecran d\'affichage');
define('ALERT_MSG_FINISH', 'Veuillez corriger l\'erreur et régénérer le rapport.');

// Other text defines
define('ERROR_MISSING_REQ_INFO', 'ERREUR : Les champs obligatoires sont vides');
define('ERROR_CSV_CONFLICT', 'La sortie CSV n\'est pas disponible pour <em>' . SELECT_DETAIL_MATRIX . '</em> Veuillez sélectionner à nouveau les options du rapport.');
define('ALT_TEXT_SORT_ASC', 'Trier par ordre ascendant');
define('ALT_TEXT_SORT_DESC', 'Trier par ordre décroissant');
define('TEXT_REPORT_TIMESTAMP', 'Heure du rapport: ');
define('TEXT_PARSE_TIME', 'Temps de lecture: %s sec.');
define('TEXT_EMPTY_SELECT', '(pas de limitation)');
define('TEXT_QTY', '| Quantité: ');
define('TEXT_DIFF', '| différer: ');
define('TEXT_SAME', '| (pareil)');
define('TEXT_SAME_ONE', '| --');
define('TEXT_PRINT_FORMAT', 'Afficher le rapport dans un format imprimable');
define('TEXT_PRINT_FORMAT_TITLE', 'CONSEIL : Cliquez sur le bouton \'' . PAGE_HEADING . '\' pour revenir à l\'affichage');
define('TEXT_NO_DATA', '-- Aucune commande dans la période spécifiée --');
// Buttons
define('BUTTON_TIMEFRAME_PRESET', 'Sélectionner par défaut');
define('BUTTON_TIMEFRAME_CUSTOM', 'Sélectionner Défini par l\'utilisateur');
