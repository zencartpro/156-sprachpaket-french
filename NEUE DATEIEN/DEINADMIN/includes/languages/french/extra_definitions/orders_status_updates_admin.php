<?php
/**
 * Zen Cart German Specific
 * Constants used by the zen_update_orders_history function.
 *
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php 2 2019-06-23 16:05:14Z webchills $
 * @translate German/French klartexter
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Statut de la commande mis à jour');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Cher Monsieur ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Chère Madame ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Cher ');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'Nous vous informerons de l\'état de votre commande ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Numéro de commande:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Facture détaillée:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Date de commande:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<strong>Annotation:</strong> ' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'L\'état de votre commande a été mis à jour.' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'L\'état de votre commande n\'a pas changé:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Nouveau statut:</strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Ancien statut:</strong> %1$s, <strong>Nouveau statut:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Si vous avez des questions, veuillez répondre à ce courriel.' . "\n");