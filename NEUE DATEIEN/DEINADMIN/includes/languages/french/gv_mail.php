<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_mail.php 634 2019-06-16 17:39:16Z webchills $
 * @translate German/French klartexter
 */

require 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' envoyer aux clients');

define('TEXT_CUSTOMER', 'Client:');
define('TEXT_SUBJECT', 'Thème:');
define('TEXT_FROM', 'Expéditeur:');
define('TEXT_TO', 'Courriel à l\'adresse:');
define('TEXT_AMOUNT', 'Somme');
define('TEXT_MESSAGE', 'Texte seulement <br />message:');
define('TEXT_RICH_TEXT_MESSAGE', 'Texte riche <br />message:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Utilisez ce champ pour envoyer un seul email, sinon utilisez le menu déroulant ci-dessus</span>');
define('TEXT_SELECT_CUSTOMER', 'Sélectionner un client');
define('TEXT_ALL_CUSTOMERS', 'Tous les clients');
define('TEXT_NEWSLETTER_CUSTOMERS', 'À tous les abonnés du bulletin d\'information');

define('NOTICE_EMAIL_SENT_TO', 'REMARQUE : Un courriel a été envoyé à l\'adresse suivante: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'ERREUR : Aucun client n\'a été sélectionné.');
define('ERROR_NO_AMOUNT_SELECTED', 'ERREUR : Aucun montant sélectionné.');
define('ERROR_NO_SUBJECT', 'ERREUR : Aucun sujet n\'a été spécifié.');
define('ERROR_GV_AMOUNT', 'Veuillez entrer la valeur sans symboles. Exemple : 25.00');

define('TEXT_GV_ANNOUNCE', '<font color="#0000ff">Nous sommes heureux de vous offrir un ' . TEXT_GV_NAME . ' comme cadeau.</font>');
define('TEXT_GV_WORTH', 'Le ' . TEXT_GV_NAME . ' a une valeur de ');
define('TEXT_TO_REDEEM', 'Pour échanger le ' . TEXT_GV_NAME . ', veuillez cliquer sur le lien ci-dessous.');
define('TEXT_WHICH_IS', ' veuillez noter ce numéro de bon d\'achat: ');
define('TEXT_IN_CASE', ' Cliquez maintenant sur le lien ci-dessous: ');
define('TEXT_OR_VISIT', 'Vous pouvez également nous contacter à l\'adresse suivante ');
define('TEXT_ENTER_CODE', ' et entrez le numéro du bon d\'achat pendant le processus de commande.');
define('TEXT_CLICK_TO_REDEEM', 'Pour l\'échanger, veuillez cliquer ici.');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Vous avez un ' . TEXT_GV_NAME . ' ont été acquis. Pour des raisons de sécurité, le montant du ' . TEXT_GV_NAME . ' n\'a pas été publié immédiatement. Le propriétaire du magasin a maintenant débloqué ce montant.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Le montant du ' . TEXT_GV_NAME . ' était de %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Vous pouvez maintenant visiter notre boutique, vous inscrire et le montant de ' . TEXT_GV_NAME . ' envoyez le.');

define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");