<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: customers_without_order.php 3 2019-08-18 16:33:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Clients qui n\'ont jamais rien commandé');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_FIRSTNAME', 'Prénom');
define('TABLE_HEADING_LASTNAME', 'Nom de famille');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Compte créé');
define('TABLE_HEADING_LOGIN', 'Dernière connexion');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_PRICING_GROUP', 'Groupe de prix');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorisé');
define('TABLE_HEADING_GV_AMOUNT', 'Crédits sous forme de bons d\'achat');

define('TEXT_DATE_ACCOUNT_CREATED', 'Compte créé:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Dernière modification:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Dernière connexion:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Nombre d\'inscriptions:');
define('TEXT_INFO_COUNTRY', 'Pays:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Nombre d\'évaluations:');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer ce client?');
define('TEXT_DELETE_REVIEWS', 'Supprimer %s note(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Supprimer le client');
define('TYPE_BELOW', 'Entrez ci-dessous');
define('PLEASE_SELECT_ONE', 'Sélectionner un');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Nombre de commandes:');
define('TEXT_INFO_LIFETIME_VALUE', 'Valeur totale de la commande:');
define('TEXT_INFO_LAST_ORDER', 'Dernier ordre:');
define('TEXT_INFO_ORDERS_TOTAL', 'Somme:');
define('CUSTOMERS_REFERRAL', 'Référence client (Referal)<br />Premier coupon promotionnel');
define('TEXT_INFO_GV_AMOUNT', 'Crédits sous forme de bons d\'achat');
define('ENTRY_NONE', 'Aucun');
define('TABLE_HEADING_COMPANY', 'Société');
define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Modifier le mot de passe client');
define('TEXT_PWDRESET_INTRO', 'Pour réinitialiser le mot de passe de ce client, entrez un nouveau mot de passe et confirmez-le dans le champ ci-dessous. Le nouveau mot de passe doit correspondre aux règles de mot de passe pour les mots de passe clients configurés dans la boutique.');
define('TEXT_CUST_NEW_PASSWORD', 'Nouveau mot de passe:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Confirmer le mot de passe:');
define('ERROR_PWD_TOO_SHORT', 'Erreur : Le mot de passe est plus court que le nombre minimum de caractères configuré pour cette boutique.');
define('SUCCESS_PASSWORD_UPDATED', 'Mot de passe mis à jour.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Votre mot de passe a été modifié par l\'administrateur de la boutique. Votre nouveau mot de passe est: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Changer votre mot de passe');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Vous avez changé le mot de passe d\'un client: ' . "\n" . '%s' . "\n\n" . 'ID administrateur: %s');
define('CUSTOMERS_AUTHORIZATION', 'Clients - Statut d\'autorisation');
define('CUSTOMERS_AUTHORIZATION_0', 'Examiné');
define('CUSTOMERS_AUTHORIZATION_1', 'Autorisation à venir - Doit être autorisé à naviguer dans la boutique');
define('CUSTOMERS_AUTHORIZATION_2', 'Autorisation à venir - permet de naviguer dans la boutique, mais pas de voir les prix.');
define('CUSTOMERS_AUTHORIZATION_3', 'Prochaine autorisation - Peut naviguer dans la boutique et voir les prix, mais ne peut pas acheter');
define('CUSTOMERS_AUTHORIZATION_4', 'Verrouillé - Pas autorisé à se connecter ou à faire des achats');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'ATTENTION : Votre boutique est réglée sur "Autorisation sans navigation". Le client a été réglé sur "en attente d\'autorisation - doit être autorisé à naviguer dans la boutique".');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'ATTENTION : Votre boutique est réglée sur "Autorisation avec navigation sans affichage des prix". Le client a été réglé sur "Autorisation à venir - Peut naviguer dans la boutique, mais ne peut pas voir les prix".');
define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Votre statut client a été mis à jour. Merci beaucoup pour votre achat ! Nous nous réjouissons de votre prochaine visite.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Le statut du client est mis à jour.');
define('ADDRESS_BOOK_TITLE', 'Entrées du carnet d\'adresses');
define('PRIMARY_ADDRESS', '(Adresse par défaut)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>Annotation:</strong></span> Un maximum de %s d\'entrées dans le carnet d\'adresses est autorisé.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | <a href="%s">%s Rubriques</a>');
define('TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE', '');
