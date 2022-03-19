<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: password_forgotten.php 629 2016-03-05 09:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Réinitialisation du mot de passe');
define('TEXT_ADMIN_EMAIL','Adresse e-mail de l\'administrateur:');
define('TEXT_BUTTON_REQUEST_RESET', 'Demander un nouveau mot de passe');
define('TEXT_BUTTON_LOGIN', 'Se connecter');
define('TEXT_BUTTON_CANCEL', 'Abandonner');
define('ERROR_WRONG_EMAIL','Vous avez saisi une adresse e-mail incorrecte.');
define('ERROR_WRONG_EMAIL_NULL','Bien essayé :-P');
define('MESSAGE_PASSWORD_SENT','Si l\'adresse e-mail donnée possède un compte administrateur dans la boutique, un nouveau mot de passe a été envoyé à l\'adresse e-mail donnée.<br />Cliquez sur LOGIN pour vous connecter avec le nouveau mot de passe temporaire.</p>');
define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Votre nouveau mot de passe temporaire');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Un nouveau mot de passe a été demandé à l\'adresse IP %s.' . "\n\n" . 'Votre nouveau mot de passe temporaire est:' . "\n\n" . '%s' . "\n\n" . 'Lorsque vous ouvrez une session, on vous demandera de créer un nouveau mot de passe.' . "\n\n" . 'Ce mot de passe temporaire devient invalide après 24 heures.' . "\n\n\n");