<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: time_out.php 628 2013-04-13 12:05:14Z webchills $
 * @translate German/French klartexter
 */

define('NAVBAR_TITLE','Temps de connexion dépassé');
define('HEADING_TITLE','Oups ! Votre session a expiré.');
define('HEADING_TITLE_LOGGED_IN', 'Excusez-moi, mais vous n\'êtes pas autorisé à faire ce travail. ');
define('TEXT_INFORMATION','Nous sommes désolés, mais pour des raisons de sécurité, nous avons dû couper votre connexion,
pour empêcher les personnes non autorisées d\'accéder à vos données d\'accès.
  <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Connexion</a>
  Votre panier d\'achat sera restauré'.
  (DOWNLOAD_ENABLED == 'true' ? ', Vous avez téléchargé des articles et souhaitez les recevoir' : '') . ',
  Allez à <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mon compte</a> pour visualiser votre commande.');
define('TEXT_INFORMATION_LOGGED_IN', 'Vous êtes connecté à votre compte et vous pouvez maintenant continuer vos achats. Sélectionnez un élément de menu.');
define('HEADING_RETURNING_CUSTOMER', 'Se connecter');
define('TEXT_PASSWORD_FORGOTTEN', 'Oublié votre mot de passe?');