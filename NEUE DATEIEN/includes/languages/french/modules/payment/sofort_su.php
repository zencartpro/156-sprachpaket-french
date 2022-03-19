<?php
/**
 * @package languageDefines
 * @translate German/French klartexter
 */
define('MODULE_PAYMENT_SOFORT_SU_TEXT_TITLE', 'Sofort.');
define('MODULE_PAYMENT_SOFORT_SU_TEXT_LOGO', '<br /> <img src="https://cdn.klarna.com/1.0/shared/image/generic/badge/de_de/pay_now/descriptive/pink.svg" height="30px" alt="Sofort."/>');

define('MODULE_PAYMENT_SOFORT_SU_DESCRIPTION', 'Paiement simple et direct avec Sofort Überweisung<br/><br/><img src="images/klarna_sofort.png" alt="Sofort."/><br/><br/><a href="https://www.klarna.com/sofort/business/mit-sofort-verkaufen/" target="_blank"><u>S\'inscrire auprès de Sofort</u></a>, pour pouvoir proposer ce mode de paiement.<br/><br/>Déjà inscrit? <a href="https://www.sofort.com/payment/users/login" target="_blank"><u>Connexion revendeur Klarna</u></a>');

define('MODULE_PAYMENT_SOFORT_SU_STATUS_TITLE', 'Sofort. Activer le module');
define('MODULE_PAYMENT_SOFORT_SU_STATUS_DESC', 'Active/désactive le module complet');

define('MODULE_PAYMENT_SOFORT_SU_CONFIGURATION_KEY_TITLE', 'Touche de configuration');
define('MODULE_PAYMENT_SOFORT_SU_CONFIGURATION_KEY_DESC', 'Clé de configuration attribuée par SOFORT AG');

define('MODULE_PAYMENT_SOFORT_SU_RECOMMENDED_PAYMENT_TITLE', 'Mode de paiement recommandé');
define('MODULE_PAYMENT_SOFORT_SU_RECOMMENDED_PAYMENT_DESC', 'Marquez ce type de paiement comme "type de paiement recommandé". Sur la page de paiement, il y a une note directement après le type de paiement.');

define('MODULE_PAYMENT_SOFORT_SU_REASON_ONE_TITLE', 'Utilisation prévue 1');
define('MODULE_PAYMENT_SOFORT_SU_REASON_ONE_DESC', 'Dans le but 1, les options suivantes peuvent être sélectionnées');

define('MODULE_PAYMENT_SOFORT_SU_REASON_TWO_TITLE', 'Utilisation prévue 2');
define('MODULE_PAYMENT_SOFORT_SU_REASON_TWO_DESC', 'Les caractères de remplissage suivants sont remplacés dans le but prévu (maximum 27 caractères):<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}} <br />Veuillez noter : si la commande est créée après transfert, le caractère de remplissage {{order_id}} ne pourra être utilisé si la commande est!');

define('MODULE_PAYMENT_SOFORT_SU_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_SOFORT_SU_ZONE_DESC', 'Si une zone est sélectionnée, le mode de paiement n\'est valable que pour cette zone. <br/>Par défaut : none<br/><br/>br/>Laisser ce paramètre à none et définir ci-dessous les pays pour lesquels vous voulez offrir immédiatement.');

define('MODULE_PAYMENT_SOFORT_PROF_SETTINGS_TITLE', '<span style="font-weight:bold; text-decoration:underline; font-size:1.4em;"><br />Contextes professionnels</span> ');
define('MODULE_PAYMENT_SOFORT_PROF_SETTINGS_DESC', 'Les réglages suivants ne nécessitent normalement aucun réglage et doivent déjà être préréglés avec les valeurs correctes.');

define('MODULE_PAYMENT_SOFORT_SU_ORDER_STATUS_ID_TITLE', 'Statut de commande temporaire');
define('MODULE_PAYMENT_SOFORT_SU_ORDER_STATUS_ID_DESC', 'Statut de commande pour les transactions incomplètes. L\'ordre a été créé mais la transaction n\'a pas encore été confirmée par SOFORT AG.');

define('MODULE_PAYMENT_SOFORT_SU_ABORTED_STATUS_ID_TITLE', 'Statut de la commande pour paiement annulé');
define('MODULE_PAYMENT_SOFORT_SU_ABORTED_STATUS_ID_DESC', 'Statut de commande pour les commandes d\'achat qui ont été annulées pendant le processus de paiement.'); 

define('MODULE_PAYMENT_SOFORT_SU_PEN_NOT_CRE_YET_STATUS_ID_TITLE', 'Statut de la commande confirmé');
define('MODULE_PAYMENT_SOFORT_SU_PEN_NOT_CRE_YET_STATUS_ID_DESC', 'Statut de commande confirmé <br /> statut de la commande après la transaction terminée.'); 

define('MODULE_PAYMENT_SOFORT_SU_LOS_NOT_CRE_STATUS_ID_TITLE', 'Statut de la commande si aucune somme d\'argent n\'est arrivée');
define('MODULE_PAYMENT_SOFORT_SU_LOS_NOT_CRE_STATUS_ID_DESC', 'Statut de la commande si aucune somme d\'argent n\'a été reçue sur votre compte. (Condition préalable : compte à la Deutsche Handelsbank).'); 

define('MODULE_PAYMENT_SOFORT_SU_REC_CRE_STATUS_ID_TITLE', 'Rentrée de fonds');
define('MODULE_PAYMENT_SOFORT_SU_REC_CRE_STATUS_ID_DESC', 'Statut des commandes lorsque l\'argent est arrivé sur le compte de la Deutsche Handelsbank.'); 

define('MODULE_PAYMENT_SOFORT_SU_REF_COM_STATUS_ID_TITLE', 'Remboursement partiel');
define('MODULE_PAYMENT_SOFORT_SU_REF_COM_STATUS_ID_DESC', 'Statut des commandes pour lesquelles un montant partiel a été remboursé à l\'acheteur.'); 

define('MODULE_PAYMENT_SOFORT_SU_REF_REF_STATUS_ID_TITLE', 'Remboursement complet');
define('MODULE_PAYMENT_SOFORT_SU_REF_REF_STATUS_ID_DESC', 'Statut pour les commandes dont le montant total a été remboursé à l\'acheteur.'); 

define('MODULE_PAYMENT_SOFORT_SU_CREATE_ORDER_TITLE', 'Créer une commande avant le transfert:');
define('MODULE_PAYMENT_SOFORT_SU_CREATE_ORDER_DESC', 'Réglage par défaut: False<br/><br/><b>Laissez ce paramètre à False!<br/> sinon une commande sera créée immédiatement après avoir sélectionné le mode de paiement. Ceci n\'est pas recommandé dans la pratique, car cela conduit à des commandes multiples inutiles si le client n\'effectue pas le paiement. <br/>Avec l\'option Faux, la commande n\'est générée que lorsque l\'opération de paiement a été effectivement effectuée./b><br/>');

define('MODULE_PAYMENT_SOFORT_SU_LOGO_TITLE', 'Bannière ou texte lors de la sélection des options de paiement');
define('MODULE_PAYMENT_SOFORT_SU_LOGO_DESC', 'Réglage par défaut : Banner<br/>><br/>>Si vous sélectionnez du texte, un court texte d\'indication sera affiché en plus du logo Instant..');

define('MODULE_PAYMENT_SOFORT_SU_CUSTOMER_PROTECTION_TITLE', 'Protection de l\'acheteur activée');
define('MODULE_PAYMENT_SOFORT_SU_CUSTOMER_PROTECTION_DESC', 'Activez la protection de l\'acheteur pour une protection immédiate.');

define('MODULE_PAYMENT_SOFORT_SU_SORT_ORDER_TITLE', 'Séquence d\'affichage');
define('MODULE_PAYMENT_SOFORT_SU_SORT_ORDER_DESC', 'Séquence d\'affichage. Le plus petit chiffre est affiché en premier.');

define('MODULE_PAYMENT_SOFORT_SU_COUNTRIES_TITLE', 'Pays');
define('MODULE_PAYMENT_SOFORT_SU_COUNTRIES_DESC', 'Pour quels pays souhaitez-vous proposer Sofort. ? Codes ISO à deux chiffres séparés par des virgules!');

define('MODULE_PAYMENT_SOFORT_SU_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '     <table border="0" cellspacing="0" cellpadding="0">      <tr>        <td valign="bottom">
	<a onclick="javascript:window.open(\'https://www.klarna.com/de/\',\'Information client\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto; cursor:pointer;">
		{{image}}
	</a>
	</td>      </tr>      <tr> <td class="main">{{text}}</td>      </tr>      </table>');

define('MODULE_PAYMENT_SOFORT_SU_RECOMMENDED_PAYMENT_CHECKOUT', '(Mode de paiement recommandé)');

define('MODULE_PAYMENT_SOFORT_SU_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'SOFORT par virement bancaire');

define('MODULE_PAYMENT_SOFORT_SU_CHECKOUT_TEXT', 'Paiement facile et direct');
define('MODULE_PAYMENT_SOFORT_SU_CHECKOUT_TEXT_KS', 'Paiement facile et direct');
define('MODULE_PAYMENT_SOFORT_SU_CHECKOUT_INFOLINK_KS', 'https://www.klarna.com/de/');

define('MODULE_PAYMENT_SOFORT_SU_TEXT_ERROR_MESSAGE', 'Le mode de paiement choisi n\'est malheureusement pas possible ou a été annulé à la demande du client. Veuillez choisir un autre mode de paiement.');