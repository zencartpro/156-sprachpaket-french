<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: email_extras.php 632 2016-04-06 20:05:14Z webchills $
 * @translate German/French klartexter
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //ce fichier doit se trouver dans le dossier email
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', '');
  
// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
define('OFFICE_FROM','Expéditeur:');
define('OFFICE_EMAIL','Courriel:');
define('OFFICE_SENT_TO','Pour:');
define('OFFICE_EMAIL_TO','Courriel:');
define('OFFICE_USE','Pour usage interne uniquement:');
define('OFFICE_LOGIN_NAME','Intitulé de compte:');
define('OFFICE_LOGIN_EMAIL','Adresse de courriel:');
define('OFFICE_LOGIN_PHONE','<strong>Téléphone:</strong>');
define('OFFICE_IP_ADDRESS','Adresse IP:');
define('OFFICE_HOST_ADDRESS','Nom d\'hôte:');
define('OFFICE_DATE_TIME','Date et heure:');

// email disclaimer
define('EMAIL_DISCLAIMER','');
define('EMAIL_SPAM_DISCLAIMER', '-');
define('EMAIL_FOOTER_COPYRIGHT','Droits d\'auteur (c) ' . date('Y') . ' '  . STORE_NAME . '');
define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[COUPON ADMIN ENVOYÉ]');
define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[COUPON D\'ACTION]');
define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[STATUT DE COMMANDE]');
define('TEXT_UNSUBSCRIBE', ' "\n\nSi vous ne souhaitez plus recevoir notre lettre d\'information à l\'avenir, cliquez simplement sur le lien suivant: \n")');

// for whos_online when gethost is off
define('OFFICE_IP_TO_HOST_ADDRESS', 'Désactivé');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Alarme administrateur: Un nouvel utilisateur administrateur a été ajouté.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Alarme administrative: L\'utilisateur admin (%s) a été ajouté à votre boutique par %s.' . "\n\n" . 'Si vous ou un administrateur autorisé n\'avez pas initié cette modification, il est recommandé de vérifier immédiatement la sécurité de votre boutique.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Alarme administrateur: Un utilisateur administrateur a été supprimé.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Alarme administrative: L\'utilisateur admin (%s) a été supprimé de votre boutique par %s.' . "\n\n" . 'Si vous ou un administrateur autorisé n\'avez pas initié cette modification, il est recommandé de vérifier immédiatement la sécurité de votre boutique.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Alarme administrateur: Un utilisateur administrateur a été modifié.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Alarme administrateur: L\'adresse e-mail de l\'utilisateur admin (%s) a été modifiée de (%s) à (%s) de (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Alarme administrateur: Le nom d\'utilisateur de l\'utilisateur administrateur (%s) a été changé de (%s) à (%s) par (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Alarme administrateur: Le profil d\'autorisation de l\'utilisateur Admin (%s) est passé de (%s) à (%s) de (%s)');