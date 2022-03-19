<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: storepickup.php 657 2019-06-25 07:45:57Z webchills $
 * @translate German/French klartexter
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE','Collecte par le client');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION','Collecte par le client');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY','Vous venez chercher la marchandise chez nous');

//Vous avez ici la possibilité de définir les détails de localisation de la collection en fonction de la langue. Le paramétrage de l\'auto-collecte dans l\'administration ne s\'applique qu\'à la langue standard de la boutique.
//Beispiele:
// Demogasse 17 in 1010 Wien;Beispielweg 15 in 8020 Graz<br/>
// Demogasse 17 in 1010 Wien,4.00;Beispielweg 15 in 8020 Graz,5.00<br/>
// Demogasse 17 in 1010 Wien,4.00;Beispielweg 15 in 8020 Graz,0.00<br/>
// Si vous laissez l\'entrée vide, les valeurs entrées sous Modules > Méthodes d\'expédition > Auto-enlèvement seront utilisées.
// REMARQUE : Si vous n\'utilisez qu\'une seule langue, ou si vous n\'avez pas besoin d\'une représentation multilingue de ces informations de localisation, n\'entrez rien ici, sinon les paramètres administrateur ne seront jamais utilisés. Ce que vous saisissez ici écrase votre configuration dans l\'auto-collecte du module d\'expédition !
define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', "");