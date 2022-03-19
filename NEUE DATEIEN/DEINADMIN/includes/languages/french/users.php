<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: users.php 731 2016-04-09 09:49:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Utilisateur administrateur');

define('IMAGE_ADD_USER', 'Ajouter un utilisateur');


define('TEXT_ID', 'ID');
define('TEXT_NAME', 'Nom');
define('TEXT_EMAIL', 'Courriel');
define('TEXT_PROFILE', 'Profil');
define('TEXT_CHOOSE_PROFILE', 'Sélectionner un profil');
define('TEXT_PASSWORD', 'Mot de passe');
define('TEXT_CONFIRM_PASSWORD', 'Confirmer le mot de passe');
define('TEXT_NO_USERS_FOUND', 'Aucun utilisateur admin trouvé');
define('TEXT_CONFIRM_DELETE', 'Suppression demandée, veuillez confirmer: ');

define('ERROR_NO_USER_DEFINED', 'L\'action que vous voulez effectuer ne peut pas être exécutée sans spécifier un utilisateur.');
define('ERROR_USER_MUST_HAVE_PROFILE', 'Un profil doit être affecté à l\'utilisateur.');
define('ERROR_DUPLICATE_USER', 'Un utilisateur avec ce nom existe déjà, veuillez choisir un autre nom.');
define('ERROR_ADMIN_NAME_TOO_SHORT', 'Le nom d\'utilisateur doit avoir au moins les caractères %s.');
define('ERROR_PASSWORD_TOO_SHORT', 'Le mot de passe doit comporter au moins % de caractères. ');
define('SUCCESS_NEW_USER_ADDED', 'Un nouvel utilisateur a été ajouté');
define('SUCCESS_USER_DETAILS_UPDATED', 'Mise à jour des détails de l\'utilisateur');
define('SUCCESS_PASSWORD_UPDATED', 'Mot de passe mis à jour');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', 'L\'adresse e-mail spécifiée contient des caractères non valides.');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', 'Le nom d\'utilisateur spécifié contient des caractères non valides.');
