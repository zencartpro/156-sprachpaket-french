<?php
/**
 * @package languageDefines
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: german.php 666 2019-07-28 17:37:04Z webchills $
 * @translate German/French klartexter
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

define('CONNECTION_TYPE_UNKNOWN', '\'%s\' n\'est pas un type de connexion valide pour générer des URLs' . PHP_EOL . '%s' . PHP_EOL);

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin powered by Zen-Cart 1.5.6 - Version française');
define('HEADER_LOGO_WIDTH', '240px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');
define('TEXT_PASSWORD_LAST_CHANGE', 'Dernière modification du mot de passe:&nbsp;');
define('TEXT_LAST_LOGIN_INFO', 'Dernière connexion[IP]:&nbsp;');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8','fr_FR@euro', 'fr_FR', 'fr', 'fr', 'fra.fra');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d.%m.%Y'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd.m.Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
// for now both defines are needed until Spiffy is completely removed.
define('DATE_FORMAT_SPIFFYCAL', 'dd.MM.yyyy'); //Use only 'dd', 'MM' and 'yyyy' here in any order
define('DATE_FORMAT_DATE_PICKER', 'yy-mm-dd');  //Use only 'dd', 'mm' and 'yy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false){
    if ($reverse){
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
        }else{
        // edit by cyaneo for german Date support - thx to hugo13
        // return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
        }
    }


// // include template specific meta tags defines
//   if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
//     $template_dir_select = $template_dir . '/';
//   } else {
//     $template_dir_select = '';
//   }
//   require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// used for prefix to browser tabs in admin pages
define('TEXT_ADMIN_TAB_PREFIX', 'Admin ');
// if you have multiple stores and want the Store Name to be part of the admin title (ie: for browser tabs), swap this line with the one above
//define('TEXT_ADMIN_TAB_PREFIX', 'Admin ' . STORE_NAME);
// meta tags
define('ICON_METATAGS_ON', 'Balises méta définies');
define('ICON_METATAGS_OFF', 'Balises méta non définies');
define('TEXT_LEGEND_META_TAGS', 'Balises méta définies:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>Indice:</strong> Site/Tagline est votre paramètre pour votre page dans le fichier meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="fr"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Admin Accueil');
define('HEADER_TITLE_SUPPORT_SITE', 'Forum de support (allemand)');
define('HEADER_TITLE_ONLINE_CATALOG', 'Page d\'accueil de la boutique');
define('HEADER_TITLE_VERSION', 'Version');
define('HEADER_TITLE_ACCOUNT', 'Compte');
define('HEADER_TITLE_LOGOFF', 'Déconnexion');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
define('TEXT_GV_NAME', 'Bon d\'échange');
define('TEXT_GV_NAMES', 'Bons d\'échange');
define('TEXT_DISCOUNT_COUPON', 'Coupon action');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM', 'Numéro de bon');

// text for gender
define('MALE', 'Monsieur');
define('FEMALE', 'Madame');

define('TEXT_CHECK_ALL', 'Sélectionner tout');
define('TEXT_UNCHECK_ALL', 'Tout désélectionner');
define('NONE', 'Aucun');

define('TEXT_UNKNOWN', 'Inconnu');
// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Configuration');
define('BOX_CONFIGURATION_MY_STORE', 'Ma boutique - Paramètres de base');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Valeurs minimales');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Valeurs maximales');
define('BOX_CONFIGURATION_IMAGES', 'Images');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Coordonnées du client');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Options de livraison');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Liste des articles');
define('BOX_CONFIGURATION_STOCK', 'Gestion d\'entrepôt et panier d\'achat');
define('BOX_CONFIGURATION_LOGGING', 'Enregistrement / fichiers journaux');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Options de courriel');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Paramètres des attributs');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'Compression GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Réunions / Séances');
define('BOX_CONFIGURATION_REGULATIONS', 'Termes & Confidentialité');
define('BOX_CONFIGURATION_GV_COUPONS', 'Chèques et bons d\'action');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Cartes de crédit');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Page de détail de l\'article');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Paramètres de disposition');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Maintenance des boutique');
define('BOX_CONFIGURATION_NEW_LISTING', 'Liste - Nouveaux articles');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Liste - Articles recommandés');
define('BOX_CONFIGURATION_ALL_LISTING', 'Liste - Tous les articles');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Liste - Index des articles');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Définir les paramètres des pages');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Paramètres d\'EZ-Pages');

// modules box text
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Modes de paiement');
define('BOX_MODULES_SHIPPING', 'Méthodes de livraison');
define('BOX_MODULES_ORDER_TOTAL', 'Résumé');
define('BOX_MODULES_PRODUCT_TYPES', 'Types d\'articles');

// categories box text
define('BOX_HEADING_CATALOG', 'Boutique en ligne');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Catégories et articles');
define('BOX_CATALOG_PRODUCT_TYPES', 'Types d\'articles');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Les noms d\'attributs');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Caractéristiques des attributs');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricant');
define('BOX_CATALOG_REVIEWS', 'Notations');
define('BOX_CATALOG_SPECIALS', 'Offres spéciales');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Article Nouvelles publications');
define('BOX_CATALOG_SALEMAKER', 'Directeur commercial');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gestionnaire des prix des articles');
define('BOX_CATALOG_PRODUCT', 'Article');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Articles dans les catégories');
define('BOX_CATALOG_CATEGORY', 'Catégorie');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Clientèle');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientèle');
define('BOX_CUSTOMERS_ORDERS', 'Ordres');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Tarifs de groupe');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Facture');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Bon de livraison');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Pays & Taxes');
define('BOX_TAXES_COUNTRIES', 'Pays');
define('BOX_TAXES_ZONES', 'Zones / États fédéraux');
define('BOX_TAXES_GEO_ZONES', 'Zones de contrôle');
define('BOX_TAXES_TAX_CLASSES', 'Catégories fiscales');
define('BOX_TAXES_TAX_RATES', 'Taux fiscaux');

// reports box text
define('BOX_HEADING_REPORTS', 'Statistiques');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Articles visités');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Articles achetés');
define('BOX_REPORTS_ORDERS_TOTAL', 'Chiffre d\'affaires par client');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'stock d\'articles');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Références');

// tools text
define('BOX_HEADING_TOOLS', 'Outils');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Modèles');
define('BOX_TOOLS_BACKUP', 'Sauvegarde de base de données');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestionnaire de bannières');
define('BOX_TOOLS_CACHE', 'Contrôle du cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Langues');
define('BOX_TOOLS_FILE_MANAGER', 'Gestionnaire de fichiers');
define('BOX_TOOLS_MAIL', 'Circulaire');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gestionnaire des bulletins d\'information et des notifications d\'articles');
define('BOX_TOOLS_SERVER_INFO', 'Info Serveur/Version');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui est en ligne?');
define('BOX_TOOLS_STORE_MANAGER', 'Gérant de boutique');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Trousse d\'outils pour les développeurs');
define('BOX_TOOLS_SQLPATCH','Installer les correctifs SQL');
define('BOX_TOOLS_EZPAGES','Pages EZ');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR', 'Éditeur de page');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Page d\'accueil');
define('BOX_TOOLS_DEFINE_CONTACT_US', 'Contacter');
define('BOX_TOOLS_DEFINE_PRIVACY', 'Dispositions relatives à la protection des données');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO', 'Prix et livraison');
define('BOX_TOOLS_DEFINE_CONDITIONS', 'Conditions');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS', 'Confirmation des ordres');
define('BOX_TOOLS_DEFINE_PAGE_2', 'Page 2');
define('BOX_TOOLS_DEFINE_PAGE_3', 'Page 3');
define('BOX_TOOLS_DEFINE_PAGE_4', 'Page 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Localisation');
define('BOX_LOCALIZATION_CURRENCIES', 'Monnaies');
define('BOX_LOCALIZATION_LANGUAGES', 'Langues');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'État de commande');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Réductions');
define('BOX_GV_ADMIN_QUEUE', TEXT_GV_NAMES . ' Boucle d\'attente');
define('BOX_GV_ADMIN_MAIL', TEXT_GV_NAME . ' envoyer ');
define('BOX_GV_ADMIN_SENT', 'Déjà envoyé ');
define('BOX_COUPON_ADMIN', 'Coupon d\'action Admin');
define('BOX_COUPON_RESTRICT','Restrictions relatives aux bons d\'action');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Administratrices');
define('BOX_ADMIN_ACCESS_USERS',  'Utilisateur administrateur');
define('BOX_ADMIN_ACCESS_PROFILES', 'Profil administrateur');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Enregistrement des pages d\'administration');
define('BOX_ADMIN_ACCESS_LOGS', 'Journaux d\'activité de l\'administrateur');

define('IMAGE_RELEASE', TEXT_GV_NAME . ' indemne');

// javascript messages
define('JS_ERROR', 'Attention! Une erreur s\'est produite!\nVeuillez modifier ce qui suit:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Le nouvel attribut article nécessite une offre de prix\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Le nouvel attribut article nécessite une offre de prix\n');

define('JS_PRODUCTS_NAME', '* Veuillez entrer un nom d\'article');
define('JS_PRODUCTS_DESCRIPTION', '* Veuillez entrer une description du produit');
define('JS_PRODUCTS_PRICE', '* Veuillez entrer le prix');
define('JS_PRODUCTS_WEIGHT', '* Veuillez entrer le poids');
define('JS_PRODUCTS_QUANTITY', '* Veuillez entrer la quantité');
define('JS_PRODUCTS_MODEL', '* Veuillez entrer le numéro d\'article');
define('JS_PRODUCTS_IMAGE', '* Le nouvel article a besoin d\'une photo');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Le nouvel article a besoin d\'un prix\n');

define('JS_GENDER', '* Le \'sexe\' doit être sélectionné.\n');
define('JS_FIRST_NAME', '* Le \'prénom\' doit être composé d\'au moins ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères.\n');
define('JS_LAST_NAME', '* Le \'nom de famille\' doit être composé d\'au moins ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères.\n');
define('JS_DOB', '* La date de naissance doit ressembler à ceci : xx/xx/xxxx (jour/mois/année).\n');
define('JS_EMAIL_ADDRESS', '* Le \'adresse e-mail\' doit au moins provenir de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères.\n');
define('JS_ADDRESS', '* Le \'adresse\' doit comprendre au moins ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères.\n');
define('JS_POST_CODE', '* Le \'code postal\' doit comprendre au moins  ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères.\n');
define('JS_CITY', '* La \'ville\' doit avoir au moins  ' . ENTRY_CITY_MIN_LENGTH . ' caractères.\n');
define('JS_STATE', '* Le \'état\' doit être enregistré.\n');
define('JS_STATE_SELECT', '-- Veuillez sélectionner --');
define('JS_ZONE', '* Le \'état\' doit être sélectionné.');
define('JS_COUNTRY', '* Le \'pays\' doit être sélectionné.\n');
define('JS_TELEPHONE', '* Le \'numéro de téléphone\' doit être d\'au moins  ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères.\n');
define('JS_PASSWORD', '* Le \'mot de passe\' doit être composé d\'au moins  ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.\n');
define('JS_ERROR_SUBMITTED', 'Ce formulaire a déjà été soumis. Veuillez appuyer sur OK et attendre que ce processus soit terminé.');
define('JS_ORDER_DOES_NOT_EXIST', 'Ce numéro d\'ordre %s n\'existe pas!');
define('TEXT_NO_ORDER_HISTORY', 'Historique des commandes disponible');

define('CATEGORY_PERSONAL', 'Personnellement');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Téléphone');
define('CATEGORY_COMPANY', 'Société');
define('CATEGORY_OPTIONS', 'Additif');

define('ENTRY_GENDER', 'Sexe:');
define('ENTRY_GENDER_ERROR', '<span class="errorText">nécessaire</span>');
define('ENTRY_FIRST_NAME', 'Prénom:');
define('ENTRY_FIRST_NAME_ERROR', '<span class="errorText">du moins ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères</span>');
define('ENTRY_LAST_NAME', 'Nom de famille:');
define('ENTRY_LAST_NAME_ERROR', '<span class="errorText">du moins ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '<span class="errorText">Votre date de naissance doit avoir la forme suivante: JJ.MM.AAAA (par exemple 21.02.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresse de courriel:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '<span class="errorText">du moins ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '<span class="errorText">L\'adresse e-mail ne semble pas correcte!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '<span class="errorText">Cette adresse e-mail existe déjà!</span>');
define('ENTRY_COMPANY', 'Société:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Groupe de réduction de prix');
define('ENTRY_STREET_ADDRESS', 'Rue:');
define('ENTRY_STREET_ADDRESS_ERROR', '<span class="errorText">du moins ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères</span>');
define('ENTRY_SUBURB', 'Additif:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Code postal:');
define('ENTRY_POST_CODE_ERROR', '<span class="errorText">du moins ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères</span>');
define('ENTRY_CITY', 'Localisation:');
define('ENTRY_CITY_ERROR', '<span class="errorText">du moins ' . ENTRY_CITY_MIN_LENGTH . ' caractères</span>');
define('ENTRY_STATE', 'Ville:');
define('ENTRY_STATE_ERROR', '<span class="errorText">benötigt</span>');
define('ENTRY_COUNTRY', 'Pays:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Numéro de téléphone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '<span class="errorText">du moins ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères</span>');
define('ENTRY_FAX_NUMBER', 'Numéro de fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Bulletin d\'information:');
define('ENTRY_NEWSLETTER_YES', 'Commander');
define('ENTRY_NEWSLETTER_NO', 'Se désabonner');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Le mot de passe et la confirmation du mot de passe doivent être identiques');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Désolé, votre nouveau mot de passe a été rejeté.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Les mots de passe doivent contenir à la fois des lettres et des chiffres et comporter au moins % de caractères. De plus, votre nouveau mot de passe ne doit être identique à aucun des 4 derniers mots de passe utilisés. Les mots de passe perdent leur validité tous les 90 jours. Vous serez alors automatiquement invité à changer votre mot de passe.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERREUR : Désolé, une erreur s\'est produite lors du traitement de vos données. Veuillez retransmettre vos données.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Retour');
define('IMAGE_BACKUP', 'Sauvegarder');
define('IMAGE_CANCEL', 'Annuler');
define('IMAGE_CONFIRM', 'Confirmer');
define('IMAGE_COPY', 'Copier');
define('IMAGE_COPY_TO', 'Copier dans');
define('IMAGE_DETAILS', 'Détails');
define('IMAGE_DELETE', 'Effacer');
define('IMAGE_EDIT', 'Éditer');
define('IMAGE_EMAIL', 'Courriel');
define('IMAGE_GO', 'Aller');
define('IMAGE_FILE_MANAGER', 'Gestionnaire de fichiers');
define('IMAGE_ICON_STATUS_GREEN', 'Activement');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activer');
define('IMAGE_ICON_STATUS_RED', 'Désactivé');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Désactiver');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'ERREUR -- Trop d\'URL ou de types de contenu appelés');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Erreur');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insérer');
define('IMAGE_LOCK', 'Serrure');
define('IMAGE_MODULE_INSTALL', 'Installer le module');
define('IMAGE_MODULE_REMOVE', 'Désinstaller le module');
define('IMAGE_MOVE', 'Déménagement');
define('IMAGE_NEW_BANNER', 'Nouvelle bannière');
define('IMAGE_NEW_CATEGORY', 'Nouvelle catégorie');
define('IMAGE_NEW_COUNTRY', 'Nouveau pays');
define('IMAGE_NEW_CURRENCY', 'Nouvelle monnaie');
define('IMAGE_NEW_FILE', 'Nouveau fichier');
define('IMAGE_NEW_FOLDER', 'Nouveau dossier');
define('IMAGE_NEW_LANGUAGE', 'Nouvelle langue');
define('IMAGE_NEW_NEWSLETTER', 'Nouveau bulletin');
define('IMAGE_NEW_PRODUCT', 'Nouvel article');
define('IMAGE_NEW_SALE', 'Nouvelle vente');
define('IMAGE_NEW_TAX_CLASS', 'Nouvelle classe d\'imposition');
define('IMAGE_NEW_TAX_RATE', 'Nouveau taux d\'imposition');
define('IMAGE_NEW_TAX_ZONE', 'Nouvelle zone de contrôle');
define('IMAGE_NEW_ZONE', 'Nouvelle zone');
define('IMAGE_OPTION_NAMES', 'Noms des attributs');
define('IMAGE_OPTION_VALUES', 'Valeurs des options');
define('IMAGE_ORDERS', 'Ordres');
define('IMAGE_ORDERS_INVOICE', 'Facture');
define('IMAGE_ORDERS_PACKINGSLIP', 'Bon de livraison');
define('IMAGE_PERMISSIONS', 'Traiter les autorisations');
define('IMAGE_PREVIEW', 'Avant-première');
define('IMAGE_RESTORE', 'Restaurer');
define('IMAGE_RESET', 'Remise à l\'état initial');
define('IMAGE_RESET_PWD', 'Réinitialisation du mot de passe');
define('IMAGE_SAVE', 'Sauvegarder');
define('IMAGE_SEARCH', 'Rechercher');
define('IMAGE_SELECT', 'Sélectionnez');
define('IMAGE_SEND', 'Envoyer');
define('IMAGE_SEND_EMAIL', 'Envoyer un e-mail');
define('IMAGE_SUBMIT', 'Soumettre');
define('IMAGE_UNLOCK', 'Relâchez');
define('IMAGE_UPDATE', 'Mise à jour');
define('IMAGE_UPDATE_CURRENCIES', 'Mise à jour du taux de change');
define('IMAGE_UPLOAD', 'Télécharger');
define('IMAGE_TAX_RATES', 'Taux d\'imposition');
define('IMAGE_DEFINE_ZONES', 'Zone');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gestionnaire des prix des articles');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Mise à jour du changement de prix');
define('IMAGE_ADD_BLANK_DISCOUNTS', 'Ajout de ' . DISCOUNT_QTY_ADD . ' remises sur quantités vides');
define('IMAGE_CHECK_VERSION', 'Vérifier la nouvelle version de Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gestionnaire de liens à catégories multiples');

define('IMAGE_ICON_STATUS_ON', 'Statut - activé');
define('IMAGE_ICON_STATUS_OFF', 'Statut - désactivé');
define('IMAGE_ICON_LINKED', 'L\'article est lié');

define('IMAGE_REMOVE_SPECIAL', 'Supprimer l\'information pour la réduction de prix');
define('IMAGE_REMOVE_FEATURED', 'Supprimer l\'information pour les articles recommandés');
define('IMAGE_INSTALL_SPECIAL', 'Ajouter des informations pour une réduction de prix');
define('IMAGE_INSTALL_FEATURED', 'Ajouter des informations sur les articles recommandés');

define('TEXT_VERSION_CHECK_BUTTON', 'Vérifier la nouvelle version');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'Afficher le journal des activités');
define('ICON_PRODUCTS_PRICE_MANAGER', 'Gestionnaire des prix des articles');
define('ICON_COPY_TO', 'Copier dans');
define('ICON_CROSS', 'Faux');
define('ICON_CURRENT_FOLDER', 'Dossier courant');
define('ICON_DELETE', 'Supprimer');
define('ICON_EDIT', 'Éditer');
define('ICON_ERROR', 'Erreur');
define('ICON_FILE', 'Fichier');
define('ICON_FILE_DOWNLOAD', 'Télécharger');
define('ICON_FOLDER', 'Fichier');
define('ICON_MOVE', 'Déménagement');
define('ICON_PERMISSIONS', 'Permissions');
define('ICON_PREVIOUS_LEVEL', 'Niveau précédent');
define('ICON_PREVIEW', 'Avant-première');
define('ICON_RESET', 'Remise à l\'état initial');
define('ICON_STATISTICS', 'Statistiques');
define('ICON_SUCCESS', 'Réussir');
define('ICON_TICK', 'Droite');
define('ICON_WARNING', 'Mise en garde');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Seite %s von %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Administrateurs)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> bannières))');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> catégories)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> pays)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> clients)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Afficher <b>% d </ b> à <b>% d </ b> (à partir des devises <b>% d </ b>)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> produits marqués)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> langues)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> fabricant)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Bulletin d\'information)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Ordres)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Statut de l\'ordre)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> groupes de prix)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> article)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Types d\'articles)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> éléments attendus)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> ratings)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> ventes)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> offres spéciales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b>classes fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> assignations de modèle)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b>Zones témoins)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> taux d\'imposition)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Zones)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Première page');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Page précédente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Page suivante');
define('PREVNEXT_TITLE_LAST_PAGE', 'Dernière page');
define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Précédent de %d pages');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Suivant parmi les pages %d');
define('PREVNEXT_BUTTON_FIRST', '&laquo;PREMIER');
define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Précédent]');
define('PREVNEXT_BUTTON_NEXT', '[Suivant&nbsp;&raquo;]');
define('PREVNEXT_BUTTON_LAST', 'DERNIER&raquo;');

define('TEXT_DEFAULT', 'Standard');
define('TEXT_SET_DEFAULT', 'Définir comme valeur par défaut');
define('TEXT_FIELD_REQUIRED', '<span class="Feld">* nécessaire</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'ERREUR : Aucune devise par défaut n\'a été définie. Vous pouvez les définir dans le menu administrateur sous Localisation->Devises.');

define('TEXT_NONE', '--aucun--');
define('TEXT_TOP', 'Haut');
define('PLEASE_SELECT', 'Veuillez sélectionner ...');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'ERREUR : le répertoire de destination %s n\'existe pas');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'ERREUR : le répertoire cible %s est protégé en écriture');
define('ERROR_FILE_NOT_SAVED', 'ERREUR : Le téléchargement de fichier n\'a pas été sauvegardé.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'ERREUR : Le type de fichier %s n\'est pas autorisé');
define('ERROR_FILE_TOO_BIG', 'Attention : Le fichier est plus grand que la taille autorisée. Voir Paramètres de configuration de l\'image.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Réussi : Le %s de téléchargement de fichier a été sauvegardé');
define('WARNING_NO_FILE_UPLOADED', 'ATTENTION: Aucun fichier téléchargé.');
define('WARNING_FILE_UPLOADS_DISABLED', 'ATTENTION : L\'option "Téléchargement de fichier" est désactivée dans php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'ATTENTION: Votre login administrateur n\'est pas sécurisé... soit toujours les paramètres de connexion par défaut : Admin admin ou non supprimé : démo demoonly<br />Login(s) doit être changé dès que possible pour des raisons de sécurité.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Votre base de données semble avoir besoin d\'un patch. Voir aussi Outils->Informations sur le serveur pour voir les niveaux de patch.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ATTENTION:</strong> La boutique est actuellement fermée pour maintenance...<br />NOTE : Vous ne pouvez pas vérifier la plupart des modules de paiement et d\'expédition en mode maintenance');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'ATTENTION: Ces fichiers doivent être supprimés pour empêcher tout accès non autorisé: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'ATTENTION: Le répertoire d\'installation existe toujours: ' . DIR_FS_CATALOG . 'zc_install. Veuillez supprimer ce répertoire pour des raisons de sécurité.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'ATTENTION: Votre fichier de configuration : %s est inscriptible. Il s\'agit d\'un risque potentiel pour la sécurité - veuillez changer les droits d\'accès pour ce fichier avec votre programme FTP en lecture seule (CHMOD 644 ou 444).');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ATTENTION: Le fichier langue n\'a pas pu être trouvé:');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERREUR : Ce module ne peut pas être supprimé: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ALARME : Veuillez vérifier s\'il y a des activités XSS possibles:');

define('ERROR_FILE_NOT_REMOVEABLE', 'ERREUR : Le fichier spécifié n\'a pas pu être supprimé. Vous devez supprimer ce fichier manuellement via FTP.');
define('WARNING_SESSION_AUTO_START', 'ATTENTION: session.auto_start est activé - veuillez désactiver ce paramètre PHP dans php.ini et redémarrer le serveur web.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'ATTENTION: DLe répertoire de téléchargement des fichiers n\'existe pas: ' . DIR_FS_DOWNLOAD . '. Le téléchargement des articles ne fonctionnera pas tant que ce répertoire ne sera pas disponible.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'ATTENTION: Le répertoire pour la mise en cache SQL n\'existe pas: ' . DIR_FS_SQL_CACHE . '. La mise en cache SQL ne fonctionnera pas tant que ce répertoire n\'existera pas.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'ATTENTION: Vous ne pouvez pas écrire dans le répertoire pour SQL Caching: ' . DIR_FS_SQL_CACHE . '. Changez les permissions d\'écriture de ce dossier, sinon la mise en cache ne fonctionnera pas.');
define('ERROR_UNABLE_TO_DISPLAY_SERVER_INFORMATION', 'Malheureusement, votre configuration PHP ne peut pas être affichée, car votre fournisseur a spécifié que[phpinfo] doit être désactivé dans le cadre de[disable_functions] dans les paramètres php.ini.');
define('_JANUARY', 'Janvier');
define('_FEBRUARY', 'Février');
define('_MARCH', 'Mars');
define('_APRIL', 'Avril');
define('_MAY', 'Mai');
define('_JUNE', 'Juin');
define('_JULY', 'Juillet');
define('_AUGUST', 'Août');
define('_SEPTEMBER', 'Septembre');
define('_OCTOBER', 'Octobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'Décembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> bons)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Afficher <b>%d</b> à <b>%d</b> (de <b>%d</b> Coupons action)');

define('TEXT_VALID_PRODUCTS_LIST', 'Liste d\'articles');
define('TEXT_VALID_PRODUCTS_ID', 'ID de l\'article');
define('TEXT_VALID_PRODUCTS_NAME', 'Description de l\'article');
define('TEXT_VALID_PRODUCTS_MODEL', 'Numéro d\'article');

define('TEXT_VALID_CATEGORIES_LIST', 'Liste des catégories');
define('TEXT_VALID_CATEGORIES_ID', 'Catégorie ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom de catégorie');

define('DEFINE_LANGUAGE', 'Choisir la langue:');

define('BOX_ENTRY_COUNTER_DATE', 'Démarrage du compteur de visiteurs:');
define('BOX_ENTRY_COUNTER', 'Compteurs de visites:');

// not installed
define('NOT_INSTALLED_TEXT', 'Non installé');

// Product Options Values Sort Order - option_values.php
define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES', 'Tri des caractéristiques d\'attribut');

define('TEXT_UPDATE_SORT_ORDERS_OPTIONS', '<strong>Attribut - Mise à jour du tri "Standard Attribute Characteristics"</strong>');
define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES', '<strong>Mise à jour du tri des "attributs article"</strong><br />et comparaison avec les "caractéristiques d\'attribut standard"');

// Product Options Name Sort Order - option_values.php
define('BOX_CATALOG_PRODUCT_OPTIONS_NAME', 'Tri des noms d\'attributs');

// Attributes only
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER', 'Gestionnaire des attributs');

// generic model
define('TEXT_MODEL', 'Numéro d\'article:');

// column controller
define('BOX_TOOLS_LAYOUT_CONTROLLER', 'Disposition des cases');

// check GV release queue and alert store owner
define('SHOW_GV_QUEUE', true);
define('TEXT_SHOW_GV_QUEUE', '%s attend d\'être libéré');
define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Boucle d\'attente');
define('IMAGE_ORDER', 'Ordre');

define('IMAGE_DISPLAY', 'D\'affichage');
define('IMAGE_UPDATE_SORT', 'Mettre à jour l\'ordre de tri');
define('IMAGE_EDIT_PRODUCT', 'Modifier l\'article');
define('IMAGE_EDIT_ATTRIBUTES', 'Modifier les attributs');
define('TEXT_NEW_PRODUCT', 'Articles dans la catégorie: "%s"');
define('IMAGE_OPTIONS_VALUES', 'Noms des options et caractéristiques des attributs');
define('TEXT_PRODUCTS_PRICE_MANAGER', 'GESTIONNAIRE DE PRIX D\'ARTICLE');
define('TEXT_PRODUCT_EDIT', 'ÉDITER L\'ARTICLE');
define('TEXT_ATTRIBUTE_EDIT', 'ATTRIBUTS DE MODIFICATION');
define('TEXT_PRODUCT_DETAILS','Voir les détails');

// sale maker
define('DEDUCTION_TYPE_DROPDOWN_0', 'Déduire le montant');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Pourcent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Nouveau prix');

// Min and Units
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING', 'Minimum:');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Unité:');
define('PRODUCTS_QUANTITY_IN_CART_LISTING', 'Dans le panier d\'achat:');
define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING', 'Ajouter plus:');

define('TEXT_PRODUCTS_MIX_OFF', '*Pas d\'options mixtes');
define('TEXT_PRODUCTS_MIX_ON', '*Options mixtes');

// search filters
define('TEXT_INFO_SEARCH_DETAIL_FILTER', 'Filtres de recherche: ');
define('HEADING_TITLE_SEARCH_DETAIL', 'Rechercher: ');
define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Recherche par article(s) - séparés par des virgules');
define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Recherche par nom/numéro d\'article');

define('PREV_NEXT_PRODUCT', 'Article: ');
define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*La catégorie est désactivé</span>');
define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*L\'article est désactivé</span>');

// admin demo
define('ADMIN_DEMO_ACTIVE', 'Vous êtes en mode Admin "Demo". Certains paramètres sont désactivés.');
define('ADMIN_DEMO_ACTIVE_EXCLUSION', 'Vous êtes en mode Admin "Demo". Certains paramètres sont désactivés - <strong>Message : Remplacer les paramètres d\'administration activés</strong>');
define('ERROR_ADMIN_DEMO', 'Vous êtes en mode Admin "Demo"... cette(ces) option(s) est (sont) désactivé et ne peuvent pas être exécuté');

// Version Check notices
define('TEXT_VERSION_CHECK_NEW_VER', '<span class="alertVersionNew">Une nouvelle version est disponible:</span> v');
define('TEXT_VERSION_CHECK_NEW_PATCH', '<span class="alertVersionNew">Un nouveau PATCH est disponible:</span> v');
define('TEXT_VERSION_CHECK_PATCH', 'Patch');
define('TEXT_VERSION_CHECK_DOWNLOAD', 'Télécharger ici');
define('TEXT_VERSION_CHECK_CURRENT', 'Vous utilisez la dernière version de Zen Cart allemand (avec fichier en français)');
define('ERROR_CONTACTING_PROJECT_VERSION_SERVER','Erreur : Impossible de se connecter au serveur de version');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Afficher de <b>% d </ b> à <b>% d </ b> (à partir de <b>% d </ b> téléchargements)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gestionnaire de téléchargement');

define('BOX_CATALOG_FEATURED', 'Articles recommandés');

define('ERROR_NOTHING_SELECTED', 'Rien n\'a été sélectionné... Aucun changement n\'a été apporté');
define('TEXT_STATUS_WARNING', '<strong>NOTE:</strong> L\'état est réglé sur "auto enabled/disabled" si les dates sont disponibles');

define('TEXT_LEGEND_LINKED', 'Lien vers l\'article');
define('TEXT_MASTER_CATEGORIES_ID', 'Articles Catégorie principale:');
define('TEXT_LEGEND', 'LÉGENDE: ');
define('TEXT_LEGEND_STATUS_OFF', 'Statut OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Statut ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>REMARQUE : La catégorie principale est utilisée pour la détermination du prix, où les catégories <br/>article influencent les prix des articles liés, par exemple les ventes</strong>');
define('TEXT_YES', 'Oui');
define('TEXT_NO', 'Non');
define('TEXT_CANCEL', 'Abandonner');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Erreur dans la configuration d\'expédition!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>ATTENTION:</strong> Le code postal de la boutique en ligne n\'est pas défini. (Paramètres dans Configuration -> Options d\'expédition)');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>ATTENTION:</strong> Un poids de 0 kg est configuré pour la livraison gratuite et le module <strong> Livraison gratuite </strong> est désactivé.');
define('ERROR_USPS_STATUS', '<strong>ATTENTION:</strong> Il manque à USPS le nom d\'utilisateur et / ou le mot de passe ou ... est défini sur TEST et ne fonctionne pas en mode de production. <br /> Si vous ne recevez toujours aucune valeur, veuillez contacter USPS et activer votre compte à cet emplacement.');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'REMARQUE : Vous n\'avez activé aucun module d\'expédition. Modifiez ceci dans Module->Types d\'expédition.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'REMARQUE : Vous n\'avez activé aucun module de paiement. S\'il vous plaît changer ceci à Modules->Modes de paiement.');

// text pricing
define('TEXT_CHARGES_WORD', 'Frais calculés:');
define('TEXT_PER_WORD', '<br />Prix au mot: ');
define('TEXT_WORDS_FREE', ' Mot(s) libre ');
define('TEXT_CHARGES_LETTERS', 'Frais calculés:');
define('TEXT_PER_LETTER', '<br />Prix par lettre: ');
define('TEXT_LETTERS_FREE', ' Lettre(s) gratuite ');
define('TEXT_ONETIME_CHARGES', '*Frais uniques = ');
define('TEXT_ONETIME_CHARGES_EMAIL', '*Frais uniques = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Option de remise sur quantité');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY', 'Pièce.');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE', 'Prix');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Option de frais uniques pour les rabais de volume');
define('TEXT_CATEGORIES_PRODUCTS', 'Sélectionnez une catégorie d\'articles ...');
define('TEXT_PRODUCT_TO_VIEW', 'Sélectionnez un article et cliquez sur Afficher ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID de catégorie de fiche non valable');
define('TEXT_INFO_ID', ' ID ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>Attention:</strong> Cet article est lié à plusieurs catégories, mais la catégorie maître n\'a pas été définie!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Prix sur demande');
define('PRODUCTS_PRICE_IS_FREE_TEXT', 'L\'article est gratuit');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Maximal:');

// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX', 'Vous économisez&nbsp;');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '%');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT', '&nbsp;un');
// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE', 'Soldes:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Prix contrôlé par attributs');
// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED', 'Si aucun éditeur HTML n\'est défini ou si JavaScript est désactivé, le texte HTML peut être saisi manuellement ici.');
define('TEXT_WARNING_HTML_DISABLED', '<span class = "main">REMARQUE : Vous utilisez "TEXTE seulement" comme méthode d\'envoi d\'e-mail. Si vous voulez envoyer des e-mails au format HTML, vous devez activer "Utiliser MIME HTML" dans les options d\'e-mail</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML', '<span class = "main">REMARQUE : Vous utilisez "TEXTE seulement" comme méthode d\'envoi d\'e-mail. Si vous voulez envoyer des e-mails au format HTML, vous devez activer "Utiliser MIME HTML" dans les options d\'e-mail.</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML', 'Vous pouvez lire ce texte car nous vous avons envoyé un e-mail au format HTML. Cependant, votre programme de messagerie ne peut pas afficher les messages au format HTML.');
define('ENTRY_EMAIL_PREFERENCE', 'Paramètres du format de courriel:');
define('ENTRY_EMAIL_FORMAT_COMMENTS', 'La sélection "Jamais" ou "Ne pas vouloir de newsletters" désactive TOUS les emails, y compris les confirmations de commande.');
define('ENTRY_EMAIL_HTML_DISPLAY', 'HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY', 'Texte seulement');
define('ENTRY_EMAIL_NONE_DISPLAY', 'Non');
define('ENTRY_EMAIL_OPTOUT_DISPLAY', 'Ne souhaite pas recevoir de bulletins d\'information');
define('ENTRY_NOTHING_TO_SEND', 'Votre message n\'a pas de contenu');
define('EMAIL_SEND_FAILED', 'ERREUR : Envoyer l\'e-mail à : "%s" <%s> avec sujet : "%s" échoué');

define('EDITOR_NONE', 'Texte normal');
define('TEXT_EDITOR_INFO', 'Éditeur HTML interne');
define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Vous avez présélectionné l\'éditeur HTML interne dans Configuration -> Ma boutique. Le dossier ne peut pas être localisé. Veuillez vérifier si le dossier a été déplacé ou désactiver le réglage que vous avez effectué  \''.DIR_WS_CATALOG.'éditeur/\' fichier');
define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Tri d\'articles: ');
define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Tri d\'articles, nom de l\'article');
define('TEXT_SORT_PRODUCTS_NAME', 'nom de l\'article');
define('TEXT_SORT_PRODUCTS_MODEL', 'Modèle d\'article');
define('TEXT_SORT_PRODUCTS_QUANTITY', 'Quantité de l\'article+, nom de l\'article');
define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Quantité de l\'article-, nom de l\'article');
define('TEXT_SORT_PRODUCTS_PRICE', 'Prix de l\'article+, nom de l\'article');
define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Prix de l\'article-, nom de l\'article');
define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Tri des catégories, Nom de la catégorie');
define('TEXT_SORT_CATEGORIES_NAME', 'Nom de la catégorie');

  define('TEXT_SELECT_MAIN_DIRECTORY', 'Répertoire racine des images');

define('TABLE_HEADING_YES', 'Oui');
define('TABLE_HEADING_NO', 'Non');
define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Ou sélectionnez une image existante dans le serveur, nom de fichier:</strong>');
define('TEXT_IMAGES_OVERWRITE', 'Remplacer une image existante ? Utiliser "Non" pour entrer manuellement le nom');
define('TEXT_IMAGE_OVERWRITE_WARNING', 'ATTENTION: FILENAME a été mis à jour mais pas écrasé ');
define('TEXT_IMAGES_DELETE', 'Supprimer l\'image?<br />(le fichier image ne sera pas supprimé du serveur)');
define('TEXT_IMAGE_CURRENT', 'Nom de l\'image: ');

define('ERROR_DEFINE_OPTION_NAMES', 'ATTENTION: Aucun nom d\'attribut n\'a été défini');
define('ERROR_DEFINE_OPTION_VALUES', 'ATTENTION: Aucune valeur d\'option n\'a été définie');
define('ERROR_DEFINE_PRODUCTS', 'ATTENTION: Aucun article n\'a été défini');
define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'ATTENTION: Aucune catégorie n\'a été assignée à ce produit');

define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON', 'Ajouter les sous-catégories suivantes');
define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF', 'Ajouter sans sous-catégories');

define('BUTTON_PREVIOUS_ALT', 'Article précédent');
define('BUTTON_NEXT_ALT', 'Article suivant');

define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Gestionnaire de liens à catégories multiples');
define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copier des éléments dans plusieurs catégories');

define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Toutes les propriétés globales de copie, d\'ajout et de suppression sont actuellement désactivés');
define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Afficher les propriétés globales - ON');
define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Afficher les propriétés globales - OFF');

// moved from categories and all product type language files
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'ERREUR : Impossible de lier un produit dans la même catégorie.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'ERREUR : Le répertoire d\'images n\'a pas de droits d\'écriture: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'ERREUR : Le répertoire d\'images n\'existe pas: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'ERREUR : la catégorie ne peut pas être déplacée dans une sous-catégorie.');
define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'ERREUR : Le produit existe déjà dans cette catégorie.');
define('ERROR_CATEGORY_HAS_PRODUCTS', 'ERREUR : La catégorie contient des produits!<br /><br /><br />Cette action est temporairement autorisée pendant que vous réorganisez les catégories. Néanmoins, le principe s\'applique : une catégorie peut contenir soit d\'autres catégories, soit des produits, mais jamais les deux!');
define('SUCCESS_CATEGORY_MOVED', 'Succès ! Catégorie déplacée avec succès ...');
define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'ERREUR : La catégorie ne peut pas être déplacée en elle-même! ID#');

// EZ-PAGES Alerts
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Attention: EZ-PAGES HEADER - Activé uniquement pour l\'administrateur IP');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Attention: EZ-PAGES FOOTER - Activé uniquement pour l\'administrateur IP');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Attention: EZ-PAGES SIDEBOX - Activé uniquement pour l\'administrateur IP');

// moved from product types
// warnings on Virtual and Always Free Shipping
define('TEXT_VIRTUAL_PREVIEW','Attention : Article virtuel - Livraison gratuite &amp ; pas d\'adresse de livraison nécessaire!<br />Livraison sans frais d\'expédition seulement si tous les articles dans le panier d\'achat sont des articles virtuels.');
define('TEXT_VIRTUAL_EDIT','Attention : Article virtuel - Livraison gratuite &amp ; pas d\'adresse de livraison nécessaire!<br />Livraison sans frais d\'expédition seulement si tous les articles dans le panier d\'achat sont des articles virtuels.');
define('TEXT_FREE_SHIPPING_PREVIEW','Attention : Article virtuel - Livraison gratuite & aucune adresse de livraison nécessaire!<br />Le module de livraison "Toujours gratuit" doit être installé si tous les articles d\'une commande sont gratuits');
define('TEXT_FREE_SHIPPING_EDIT','Attention : Article virtuel - Livraison gratuite & aucune adresse de livraison nécessaire!<br />Le module de livraison "Toujours gratuit" doit être installé si tous les articles d\'une commande sont gratuits');

// admin activity log warnings
define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'Attention : La table de protocole admin a des entrées de plus de 2 mois et doit donc être archivée ... ');
define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'Attention : La table de protocole admin contient plus de 50000 entrées et doit donc être archivée ... ');
define('RESET_ADMIN_ACTIVITY_LOG', 'Sie können im Menü Administratoren > Les journaux d\'activités d\'administration affichent et archivent les activités d\'administration si vous avez accès à cette zone de l\'administration de la boutique.');
define('TEXT_ACTIVITY_LOG_ACCESSED', 'Le journal d\'activité de l\'administrateur est appelé. Format de sortie : %s. Filtre: %s. %s');
define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Échec du login administrateur: ');
define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'On a tenté d\'ouvrir une session avec un compte verrouillé:');
define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Une tentative a été faite pour se connecter sans jetons CSRF.');
define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Une tentative a été faite pour se connecter sans nom d\'utilisateur.');
define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Mot de passe erroné lors de la définition d\'un nouveau mot de passe pour: ');

define('CATEGORY_HAS_SUBCATEGORIES', 'Attention : La catégorie a des sous-catégories <br />Les articles ne peuvent pas être ajoutés');

define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ATTENTION! Le coupon action "Cadeau de bienvenue" expire en %s jours.');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'MISE EN GARDE <a href="http://www.zen-cart-pro.at/zcvb/forum/vbglossar.php?do=showentry&id=6" target="_blank">Vous devriez renommer le dossier /admin/ en quelque chose de moins visible </a> pour le protéger des accès non autorisés.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'ATTENTION: Le système de messagerie est désactivé. Aucun email ne sera envoyé depuis la boutique tant que vous ne l\'aurez pas activé sous Admin->Configuration->Email Options..');
define('TEXT_CURRENT_VER_IS', 'Ils utilisent: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERREUR : Les données transférées étaient vides. VOS MODIFICATIONS N\'ONT PAS ÉTÉ *ENREGISTRÉES*. Vous avez peut-être un problème avec votre navigateur ou votre connexion Internet.');
define('TEXT_HIDDEN', 'Caché');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Cacher');
define('TEXT_EMAIL', 'Courriel');
define('TEXT_NOEMAIL', 'Pas de courriel');

define('BOX_HEADING_PRODUCT_TYPES', 'Types d\'articles');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart-pro.at/forum" target="_blank">ERREUR 0071 : Il semble y avoir un problème avec la base de données. Les fonctions de gestion de la base de données doivent être exécutées.</a>');
// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'Le taux de change pour %s (%s) a été mis à jour avec succès en %s via  %s.');
define('ERROR_CURRENCY_INVALID', 'Erreur : Le taux de change pour %s (%s) n\'a pas été mis à jour via %s. Le code de la devise est-il vraiment correct ?');
define('WARNING_PRIMARY_SERVER_FAILED', 'ATTENTION: Le serveur de taux de change primaire (%s) a échoué pour %s (%s) - essayez le serveur de taux de change secondaire.');
///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));

// Additional Localisation - Languages - Phone Country Code
define('TEXT_INFO_LANGUAGE_ID', 'Entrez l\'indicatif du téléphone SANS 0 (l\'anglais DOIT être 1, l\'allemand DOIT être 43, le français DOIT être 33):');
define('TEXT_INFO_LANGUAGE_CODE', 'Code:<br />(en = anglais, de = allemand, fr = français)');

// Keepalive Module
define('TEXT_TIMEOUT_WARNING', '**ATTENTION**');
define('TEXT_TIMEOUT_TIME_REMAINING', ' durée résiduelle:');
define('TEXT_TIMEOUT_SECONDS', 'Secondes!');
define('TEXT_TIMEOUT_ARE_YOU_STILL_THERE', 'Tu es toujours là ?');
define('TEXT_TIMEOUT_WILL_LOGOUT_SOON', 'Vous étiez inactif et vous serez bientôt déconnecté automatiquement.');
define('TEXT_TIMEOUT_STAY_LOGGED_IN', 'Poursuite des travaux');
define('TEXT_TIMEOUT_LOGOUT_NOW', 'Se désabonner maintenant');
define('TEXT_TIMEOUT_TIMED_OUT_TITLE', 'Désenregistré.');
define('TEXT_TIMEOUT_LOGIN_AGAIN', 'Connectez-vous à nouveau');
define('TEXT_TIMEOUT_TIMED_OUT_MESSAGE', 'Votre session a expiré. Vous étiez inactif, donc vous avez été déconnecté automatiquement.');