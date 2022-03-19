<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: login.php 632 2019-04-13 16:50:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Connexion administrateur');
define('HEADING_TITLE_EXPIRED', 'Connexion Admin - Mot de passe expiré');
define('TEXT_LOGIN','Connexion');
define('TEXT_SUBMIT','Envoyer');
define('TEXT_ADMIN_NAME', 'Nom d\'utilisateur Admin');
define('TEXT_ADMIN_PASS', 'Mot de passe administrateur');
define('TEXT_ADMIN_OLD_PASSWORD', 'Ancien mot de passe');
define('TEXT_ADMIN_NEW_PASSWORD', 'Nouveau mot de passe');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Confirmer le mot de passe');
define('ERROR_WRONG_LOGIN', 'Nom d\'utilisateur et / ou mot de passe incorrect.');
define('ERROR_SECURITY_ERROR', 'Il y avait une faille de sécurité quand vous avez essayé de vous connecter.');
define('TEXT_PASSWORD_FORGOTTEN', 'Oublié votre mot de passe?');

define('LOGIN_EXPIRY_NOTICE', '');
define('ERROR_PASSWORD_EXPIRED', 'REMARQUE : La validité de votre mot de passe a expiré. Veuillez choisir un nouveau mot de passe. Votre mot de passe <strong>doit contenir des chiffres et des lettres et comporter au moins 7 caractères.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Pour des raisons de sécurité, votre mot de passe temporaire doit être modifié. Veuillez choisir un nouveau mot de passe.<br />votre mot de passe <strong>doit contenir des chiffres et des lettres et comporter au moins 7 caractères.</strong>');
define('SUCCESS_PASSWORD_UPDATED', 'Mot de passe mis à jour');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Notification de l\'échec de plusieurs tentatives de connexion Admin');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'REMARQUE importante : Plusieurs tentatives de connexion ont échoué pour votre compte d\'utilisateur administratif. Pour votre sécurité et celle de la boutique, votre compte sera bloqué pendant au moins 30 minutes après 6 tentatives de connexion infructueuses. Pendant ce temps, aucune connexion n\'est possible, même si vous souhaitez vous connecter avec le mot de passe correct. D\'autres tentatives de connexion infructueuses bloqueront votre compte pendant 30 minutes supplémentaires. Pendant ce temps, vous ne pourrez pas réinitialiser votre mot de passe. Nous nous excusons pour cet inconvénient.' . "\n\nLa dernière tentative de connexion est venue de cette adresse IP: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'REMARQUE : La validité de votre mot de passe a expiré parce que la boutique a été convertie au cryptage SSL (sécurité supérieure). Changer votre mot de passe sous SSL est une étape importante vers une plus grande sécurité. Désolé pour le dérangement. Les règles de mot de passe définies pour la boutique s\'appliquent.');
