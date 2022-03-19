<?php
/**
 * @package languageDefines
 * @translate German/French klartexter
 */
define('MODULE_PAYMENT_BRAINTREE_TEXT_ADMIN_TITLE', 'Braintree');

if (IS_ADMIN_FLAG === true) {
define('MODULE_PAYMENT_BRAINTREE_TEXT_ADMIN_DESCRIPTION', 'Paiement par carte de crédit via Braintree<br/><br /><img src="images/braintree-logo.jpg" alt="Braintree"/><br/><br/><a href="https://www.braintreepayments.com/" target="_blank">Braintree Info</a><br /><br/><a href="https://sandbox.braintreegateway.com/login" target="_blank">Connexion au bac à sable Braintree</a><br/><br/><a href="https://www.braintreegateway.com/login" target="_blank">Connexion en direct Braintree</a>');
}

define('MODULE_PAYMENT_BRAINTREE_TEXT_DESCRIPTION', 'Carte de crédit');
define('MODULE_PAYMENT_BRAINTREE_TEXT_TITLE', 'Carte de crédit');
define('MODULE_PAYMENT_BRAINTREE_DP_TEXT_TYPE', 'Carte de crédit (BT)');
define('MODULE_PAYMENT_BRAINTREE_PF_TEXT_TYPE', 'Carte de crédit (PF)');
define('MODULE_PAYMENT_BRAINTREE_ERROR_HEADING', 'Nous sommes désolés, mais nous n\'avons pas pu traiter votre carte de crédit.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CARD_ERROR', 'Les informations de carte de crédit que vous avez saisies contiennent une erreur. Veuillez vérifier, corriger et réessayer.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_FIRSTNAME', 'Prénom du propriétaire:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_LASTNAME', 'Nom du propriétaire:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_OWNER', 'Détenteur de carte de crédit:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_TYPE', 'Type de carte de crédit:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_NUMBER', 'Numéro de carte de crédit:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la carte:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_ISSUE', 'Date d\'émission de la carte:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Maestro Issue No.:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_CHECKNUMBER', 'Numéro CVV:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(au verso de la carte)');
define('MODULE_PAYMENT_BRAINTREE_TEXT_TRANSACTION_FOR', 'Transaction pour');
define('MODULE_PAYMENT_BRAINTREE_TEXT_DECLINED', 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.');
define('MODULE_PAYMENT_BRAINTREE_CANNOT_BE_COMPLETED', 'Nous n\'avons pas pu terminer votre commande. Veuillez choisir un autre mode de paiement ou contacter le propriétaire du magasin pour obtenir de l\'aide.');
define('MODULE_PAYMENT_BRAINTREE_INVALID_RESPONSE', 'Nous n\'avons pas pu terminer votre commande. Veuillez réessayer, choisir un autre mode de paiement ou contacter le propriétaire du magasin pour obtenir de l\'aide.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_GEN_ERROR', 'Une erreur s\'est produite lorsque nous avons essayé de contacter le fournisseur de paiement. Veuillez réessayer, choisir une autre méthode de paiement ou contacter le propriétaire du magasin.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_EMAIL_ERROR_MESSAGE', 'Cher propriétaire de magasin,' . "\n" . 'Une erreur s\'est produite lorsque vous avez essayé de lancer la transaction de validation de paiement. Seul le numéro d\'erreur a été affiché à votre client sans autre information. Les détails de l\'erreur sont énumérés ci-dessous.' . "\n\n");
define('MODULE_PAYMENT_BRAINTREE_TEXT_EMAIL_ERROR_SUBJECT', 'ALARME : Erreur de paiement Braintree');
define('MODULE_PAYMENT_BRAINTREE_TEXT_ADDR_ERROR', 'L\'adresse que vous entrez ne semble pas être valide ou ne peut pas être comparée. Veuillez sélectionner ou ajouter une autre adresse et réessayer.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INSUFFICIENT_FUNDS_ERROR', 'Braintree n\'a pas réussi à rembourser cette transaction. Veuillez sélectionner une autre option de paiement ou vérifier les options de paiement dans votre compte Braintree avant de continuer.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_ERROR', 'Une erreur s\'est produite lorsque nous avons essayé de traiter votre carte de crédit. Veuillez réessayer, choisir une autre méthode de paiement ou contacter le propriétaire du magasin.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_BAD_CARD', 'Nous vous prions de nous excuser pour cet inconvénient, mais nous n\'acceptons pas la carte de crédit que vous nous avez fournie. Veuillez utiliser une autre carte de crédit ou vérifier que les informations que vous avez saisies sont correctes, ou contactez le propriétaire du magasin.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_BAD_LOGIN', 'Il y a eu un problème pour valider votre compte. Veuillez réessayer.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_JS_CC_OWNER', '* Le nom du titulaire de la carte doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
define('MODULE_PAYMENT_BRAINTREE_TEXT_JS_CC_NUMBER', '* Le numéro de carte de crédit doit être au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
define('MODULE_PAYMENT_BRAINTREE_TEXT_JS_CC_CVV', '* Le numéro CVV à 3 ou 4 chiffres au dos de la carte de crédit doit être entré.\n');
define('MODULE_PAYMENT_BRAINTREE_ERROR_AVS_FAILURE_TEXT', 'ALARME: Erreur de validation d\'adresse. ');
define('MODULE_PAYMENT_BRAINTREE_ERROR_CVV_FAILURE_TEXT', 'ALARME: Erreur de vérification du numéro CVV. ');
define('MODULE_PAYMENT_BRAINTREE_ERROR_AVSCVV_PROBLEM_TEXT', ' La commande sera d\'abord vérifiée par le propriétaire du magasin.');

define('MODULE_PAYMENT_BRAINTREE_TEXT_STATE_ERROR', 'L\'état fédéral de votre compte client n\'est pas valide.  Veuillez modifier cela sous Mon compte.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_BT_ACCOUNT_ERROR', 'Nous nous excusons pour le dérangement. Le paiement n\'a pas pu être initié parce que le compte Braintree configuré par le propriétaire du magasin n\'est pas un compte Braintree Payments Pro ou les services Braintree Gateway n\'ont pas été achetés. Ou vous avez essayé de payer avec une carte AmEx et le commerçant n\'a pas activé le support AmEx. Veuillez choisir un autre mode de paiement pour votre commande ou un autre type de carte de crédit.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_US_BT_ACCOUNT_ERROR', 'Nous nous excusons pour le dérangement. Le paiement n\'a pas pu être initié parce que le compte Braintree créé par le propriétaire de la boutique n\'est pas un compte US Braintree Payments Pro ou que les services Braintree Gateway n\'ont pas été achetés (ou n\'ont pas été activés en acceptant l\'accord de facturation sur le site Braintree).  Veuillez choisir un autre mode de paiement pour votre commande.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_UKBT_ACCOUNT_ERROR', 'Nous nous excusons pour le dérangement. Le paiement n\'a pas pu être effectué parce que le compte Braintree créé par le propriétaire du magasin n\'est pas un compte Braintree Website Payments Pro 2.0 (UK) ou que les services Braintree Gateway n\'ont pas été achetés ou correctement activés.  Veuillez choisir un autre mode de paiement pour votre commande.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_SANDBOX_VS_LIVE_ERROR', 'Nous nous excusons pour le dérangement. Les paramètres d\'authentification Braintree ne sont pas encore définis ou les informations de sécurité de l\'API sont incorrectes. Nous ne pouvons pas compléter votre transaction. Veuillez aviser le propriétaire du magasin afin qu\'il puisse résoudre ce problème.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_BT_BAD_COUNTRY_ERROR', 'Désolé - le compte Braintree créé par l\'administrateur de la boutique est situé dans un pays qui n\'est pas actuellement pris en charge par Website Payments Pro. Veuillez choisir un autre mode de paiement pour compléter votre commande.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Désolé - la carte de crédit que vous utilisez n\'est pas compatible avec la devise que vous avez choisie pour passer à la caisse. Veuillez modifier votre sélection de devises ou choisir un autre mode de paiement pour compléter votre commande.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(REMARQUE : Le module n\'est pas encore configuré)</span>');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Vous avez essayé de payer votre achat avec une carte de crédit qui n\'est pas acceptée par ce commerçant. Nous nous excusons des inconvénients et vous invitons à essayer un autre type de carte ou à contacter le propriétaire du magasin pour d\'autres options de paiement.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_GETDETAILS_ERROR', 'Correction d\'un problème de récupération des détails des transactions. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_TRANSSEARCH_ERROR', 'Un problème est survenu lors de la localisation des transactions correspondant aux critères que vous avez spécifiés. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_ERROR', 'Il y a eu un problème pour inverser la transaction. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_ERROR', 'Il y a eu un problème avec le remboursement du montant de la transaction indiqué. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_ERROR', 'Il y a eu un problème pour autoriser la transaction. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPT_ERROR', 'Il y a eu un problème lors de la saisie de la transaction. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUNDFULL_ERROR', 'Votre demande de remboursement a été rejetée par Braintree.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_REFUND_AMOUNT', 'Vous avez demandé un remboursement partiel mais n\'avez pas précisé de montant.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Vous avez demandé un remboursement complet mais n\'avez pas coché la case Confirmer pour confirmer votre intention.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_AUTH_AMOUNT', 'Vous avez demandé l\'autorisation, mais vous n\'avez pas spécifié de montant.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_CAPTURE_AMOUNT', 'Vous avez demandé une entrée, mais vous n\'avez pas spécifié de montant.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_CONFIRM_CHECK', 'Confirmer');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_CONFIRM_ERROR', 'Vous avez demandé d\'annuler une transaction, mais vous n\'avez pas coché la case Confirmer pour confirmer votre intention.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmer');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_CONFIRM_ERROR', 'Vous avez demandé l\'autorisation, mais vous n\'avez pas coché la case Confirmer pour vérifier votre intention.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Vous avez demandé une collecte de fonds mais n\'avez pas coché la case Confirmer pour confirmer votre intention.');

define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_INITIATED', 'Remboursement de l\'arbre Braintree pour les % entamés. ID de transaction : %s. Rafraîchissez l\'écran pour voir les détails de confirmation dans la section Historique de l\'état de la commande/Commentaires.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_INITIATED', 'L\'autorisation de Braintree pour les %s a commencé. Rafraîchissez l\'écran pour voir les détails de confirmation dans la section Historique de l\'état des travaux/Commentaires.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPT_INITIATED', 'La capture de l\'arbre Braintree pour les %s a commencé. ID de réception : %s. Rafraîchissez l\'écran pour voir les détails de confirmation dans la section Historique de l\'état des travaux/Commentaires.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_INITIATED', 'La demande d\'annulation de Braintree a commencé. ID de transaction : %s. Rafraîchissez l\'écran pour voir les détails de confirmation dans la section Historique de l\'état de la commande/Commentaires.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_GEN_API_ERROR', 'Il y a eu une erreur dans la tentative de transaction. Pour plus d\'informations, reportez-vous au Guide de référence de l\'API ou aux journaux des transactions.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_ZONE_ERROR', 'Nous vous prions de nous excuser pour cet inconvénient, mais pour le moment, nous ne pouvons pas traiter les commandes de la région géographique que vous avez choisie comme adresse de votre compte en utilisant cette méthode.  Veuillez retourner à la caisse et choisir un autre mode de paiement parmi ceux disponibles pour compléter votre commande.');


// These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_BRAINTREE_ENTRY_FIRST_NAME', 'Prénom:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_LAST_NAME', 'Nom:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_BUSINESS_NAME', 'Nom de société:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_NAME', 'Nom de l\'adresse:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_STREET', 'Rue:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_CITY', 'Ville:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_STATE', 'État ou code postal:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_ZIP', 'Code postal:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_COUNTRY', 'Pays:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_EMAIL_ADDRESS', 'Adresse de courriel:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_EBAY_ID', 'ID Ebay:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYER_ID', 'Identification de l\'acheteur:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYER_STATUS', 'Statut d\'acheteur:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_TYPE', 'Mode de paiement:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_STATUS', 'Statut du paiement:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PENDING_REASON', 'Raison du retard:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_INVOICE', 'Facture:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_DATE', 'Date de versement:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CURRENCY', 'Devise:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_GROSS_AMOUNT', 'Total:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_FEE', 'Frais de paiement:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_EXCHANGE_RATE', 'Cours de change:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CART_ITEMS', 'Articles dans le panier:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_TXN_TYPE', 'Type de transaction:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_TXN_ID', 'ID de transaction:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TITLE', '<strong>Remboursements</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_FULL', 'Si vous souhaitez rembourser intégralement cette commande, cliquez ici:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Remboursement complet');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Remboursement partiel');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TEXT_FULL_OR', '<br />... ou entrez  ');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_PAYFLOW_TEXT', '');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_PARTIAL_TEXT', 'entrez le montant partiel ici et cliquez sur Remboursement partiel');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_SUFFIX', '*Un remboursement complet ne peut être effectué après qu\'un remboursement partiel ait été demandé...<br />*Les remboursements partiels multiples sont permis jusqu\'à concurrence du solde non remboursable restant.');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note affichée au client:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire du magasin.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_FULL_CONFIRM_CHECK','Confirmer: ');


define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_TITLE', '<strong>Autorisations</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_PARTIAL_TEXT', 'Si vous voulez autoriser une partie de cette commande, entrez le montant ici:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Exécuter l\'autorisation');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_SUFFIX', '');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note affichée au client:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_DEFAULT_MESSAGE', 'Remboursé par le propriétaire du magasin.');

define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_TITLE', '<strong>Autorisations d\'enregistrement</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_FULL', 'Si vous souhaitez capturer tout ou partie des montants autorisés en suspens pour cet ordre, saisissez le montant de la capture et choisissez s\'il s\'agit de la capture finale pour cet ordre.  Cochez la case de confirmation avant d\'envoyer votre demande de capture.<br />');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Exécuter la saisie de données');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_AMOUNT_TEXT', 'Montant pour l\'entrée:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_FINAL_TEXT', 'S\'il s\'agit de la dernière entrée?');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_SUFFIX', '');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Note affichée au client:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Merci pour votre commande.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmer: ');

define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_TITLE', '<strong>Invalider les autorisations de commande</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID', 'Si vous voulez révoquer une autorisation, saisissez l\'ID d\'autorisation ici et confirmez votre saisie.:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_TEXT_COMMENTS', '<strong>Note affichée au client:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_DEFAULT_MESSAGE', 'Merci beaucoup pour votre soutien. S\'il vous plaît, revenez nous voir.');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_BUTTON_TEXT_FULL', 'Démarrer la révocation');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_SUFFIX', '');

define('MODULE_PAYMENT_BRAINTREE_ENTRY_TRANSSTATE', 'Trans. Statut:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTHCODE', 'Auth. Code:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AVSADDR', 'Correspondance d\'adresse AVS:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AVSZIP', 'Conformité au code postal AVS:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CVV2MATCH', 'Conformité CVV2:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_DAYSTOSETTLE', 'Jours jusqu\'au règlement:');

define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Honoraires ponctuels liés à');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_SURCHARGES_SHORT', 'Surtaxes');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_SURCHARGES_LONG', 'Frais de manutention et autres frais');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabais');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_DISCOUNTS_LONG', 'Réductions appliquées, y compris coupons de réduction, chèques-cadeaux, etc.');

define('MODULES_PAYMENT_BRAINTREE_TEXT_EMAIL_FMF_SUBJECT', 'Paiement en vérification de fraude de statut: ');
define('MODULES_PAYMENT_BRAINTREE_TEXT_EMAIL_FMF_INTRO', 'Il s\'agit d\'une notification automatisée pour vous informer que Braintree a signalé le paiement d\'une nouvelle commande comme étant une vérification de paiement requise par son équipe de fraude. Habituellement, la vérification est effectuée dans les 36 heures. Il est fortement recommandé de NE PAS expédier la commande tant que la vérification du paiement n\'a pas été effectuée. Vous pouvez consulter l\'état actuel de l\'évaluation de la commande en vous connectant à votre compte Braintree et en vérifiant les dernières transactions.');
define('MODULES_PAYMENT_BRAINTREE_AGGREGATE_CART_CONTENTS', 'Tous les articles dans votre panier (détails dans la boutique et facture visible).');

define('CENTINEL_AUTHENTICATION_ERROR', 'Échec de l\'authentification - Votre institution financière a indiqué qu\'elle ne pouvait pas authentifier avec succès cette transaction. Pour vous protéger contre toute utilisation non autorisée, cette carte ne peut être utilisée pour compléter votre achat. Vous pouvez compléter l\'achat en choisissant un autre mode de paiement.');
define('CENTINEL_PROCESSING_ERROR', 'Il y a eu un problème pour obtenir l\'autorisation de votre transaction. Veuillez saisir à nouveau vos informations de paiement et/ou sélectionner un autre mode de paiement.');
define('CENTINEL_ERROR_CODE_8000', '8000');
define('CENTINEL_ERROR_CODE_8000_DESC', 'Protocole non reconnu, doit être http:// ou https://.');
define('CENTINEL_ERROR_CODE_8010', '8010');
define('CENTINEL_ERROR_CODE_8010_DESC', 'ne peut pas communiquer avec le serveur MAPS');
define('CENTINEL_ERROR_CODE_8020', '8020');
define('CENTINEL_ERROR_CODE_8020_DESC', 'Erreur lors de l\'analyse de la réponse XML');
define('CENTINEL_ERROR_CODE_8030', '8030');
define('CENTINEL_ERROR_CODE_8030_DESC', 'Délai d\'attente survenu pendant la communication');
define('CENTINEL_ERROR_CODE_1001', '1001');
define('CENTINEL_ERROR_CODE_1001_DESC', 'Problème de configuration de compte avec Cardinal Centinel. Veuillez contacter votre représentant Cardinal à implement@cardinalcommerce.com immédiatement. Vos transactions ne seront pas protégées par une obligation de rétrofacturation tant que ce problème n\'aura pas été résolu. Il y a 3 étapes pour configurer correctement votre service Cardinal 3D Secure : 1. connectez-vous via l\'URL Cardinal Dealer Admin inclus dans votre Welcome Pack (PAS l\'URL de test) et acceptez le contrat de licence. 2. définir un mot de passe de transaction. Copiez votre ID Cardinal Merchant et votre mot de passe de transaction Cardinal dans votre module Zen Cart Braintree.');
define('CENTINEL_ERROR_CODE_4243', '4243');
define('CENTINEL_ERROR_CODE_4243_DESC', 'Problème de configuration de compte avec Cardinal Centinel. Veuillez contacter immédiatement votre représentant Cardinal à implement@cardinalcommerce.com et l\'informer que vous recevrez le numéro d\'erreur 4243 si vous tentez d\'utiliser 3D Secure avec votre site Zen Cart et votre compte Braintree et que vous devez avoir activé le module processeur dans votre compte. Vos transactions ne seront pas protégées par une obligation de rétrofacturation tant que ce problème n\'aura pas été résolu.');

// BRAINTREE ERROR CODES
define('BRAINTREE_ERROR_CODE_2000', 'Ne pas honorer');
define('BRAINTREE_ERROR_CODE_2001', 'Solde créditeur insuffisant');
define('BRAINTREE_ERROR_CODE_2002', 'Limite dépassée');
define('BRAINTREE_ERROR_CODE_2003', 'Dépassement de la limite d\'activité du titulaire de la carte');
define('BRAINTREE_ERROR_CODE_2004', 'Carte expirée');
define('BRAINTREE_ERROR_CODE_2005', 'Numéro de carte de crédit invalide');
define('BRAINTREE_ERROR_CODE_2006', 'Date d\'expiration non valide');
define('BRAINTREE_ERROR_CODE_2007', 'pas de compte');
define('BRAINTREE_ERROR_CODE_2008', 'Erreur de longueur de compte de carte');
define('BRAINTREE_ERROR_CODE_2009', 'aucun bureau émetteur n\'est connu');
define('BRAINTREE_ERROR_CODE_2010', 'L\'office émetteur rejette le CVV');
define('BRAINTREE_ERROR_CODE_2011', 'Autorisation vocale requise');
define('BRAINTREE_ERROR_CODE_2012', 'Refusé - la carte peut être perdue');
define('BRAINTREE_ERROR_CODE_2013', 'Refusé - carte éventuellement volée');
define('BRAINTREE_ERROR_CODE_2014', 'Rejeté - soupçonné de fraude');
define('BRAINTREE_ERROR_CODE_2015', 'Transaction non autorisée');
define('BRAINTREE_ERROR_CODE_2016', 'Double transaction');
define('BRAINTREE_ERROR_CODE_2017', 'Le titulaire de la carte a arrêté le débit');
define('BRAINTREE_ERROR_CODE_2018', 'Le titulaire de la carte a arrêté tous les frais');
define('BRAINTREE_ERROR_CODE_2019', 'Transaction non valide');
define('BRAINTREE_ERROR_CODE_2020', 'Violation');
define('BRAINTREE_ERROR_CODE_2021', 'Faille de sécurité');
define('BRAINTREE_ERROR_CODE_2022', 'Rejeté - Nouveau titulaire de carte disponible');
define('BRAINTREE_ERROR_CODE_2023', 'Cette fonction n\'est pas prise en charge');
define('BRAINTREE_ERROR_CODE_2024', 'Type de carte non activé');
define('BRAINTREE_ERROR_CODE_2025', 'Erreur de configuration - Concessionnaire');
define('BRAINTREE_ERROR_CODE_2026', 'ID Marchand invalide');
define('BRAINTREE_ERROR_CODE_2027', 'Erreur de configuration - Montant');
define('BRAINTREE_ERROR_CODE_2028', 'Erreur de configuration - Hiérarchie');
define('BRAINTREE_ERROR_CODE_2029', 'Erreur de configuration - Carte');
define('BRAINTREE_ERROR_CODE_2030', 'Erreur de configuration - Terminal');
define('BRAINTREE_ERROR_CODE_2031', 'Erreur de chiffrement');
define('BRAINTREE_ERROR_CODE_2032', 'Supplément non autorisé');
define('BRAINTREE_ERROR_CODE_2033', 'Données incohérentes');
define('BRAINTREE_ERROR_CODE_2034', 'Pas de jeu d\'actions');
define('BRAINTREE_ERROR_CODE_2035', 'Approbation partielle dans le groupe III Version');
define('BRAINTREE_ERROR_CODE_2036', 'L\'autorisation d\'annulation n\'a pu être trouvée.');
define('BRAINTREE_ERROR_CODE_2037', 'déjà annulé');
define('BRAINTREE_ERROR_CODE_2038', 'Rejeté');
define('BRAINTREE_ERROR_CODE_2039', 'Code d\'autorisation non valide');
define('BRAINTREE_ERROR_CODE_2040', 'Magasin non valide');
define('BRAINTREE_ERROR_CODE_2041', 'Rejeté - demande d\'approbation');
define('BRAINTREE_ERROR_CODE_2043', 'Erreur - Ne réessayez pas, communiquez avec le bureau émetteur.');
define('BRAINTREE_ERROR_CODE_2044', 'Rejeté - Communiquer avec le bureau émetteur');
define('BRAINTREE_ERROR_CODE_2045', 'Numéro de concessionnaire non valide');
define('BRAINTREE_ERROR_CODE_2046', 'Rejeté');
define('BRAINTREE_ERROR_CODE_2047', 'Communiquez avec le bureau émetteur. Insérez la carte.');
define('BRAINTREE_ERROR_CODE_2048', 'Montant non valable');
define('BRAINTREE_ERROR_CODE_2049', 'Numéro de référence invalide');
define('BRAINTREE_ERROR_CODE_2050', 'Plan de crédit invalide');
define('BRAINTREE_ERROR_CODE_2051', 'Le numéro de carte de crédit ne correspond pas au mode de paiement');
define('BRAINTREE_ERROR_CODE_2052', 'Achat de niveau III non valide');
define('BRAINTREE_ERROR_CODE_2053', 'Carte déclarée perdue ou volée');
define('BRAINTREE_ERROR_CODE_2054', 'Le montant de contre-passation ne correspond pas au montant de l\'autorisation.');
define('BRAINTREE_ERROR_CODE_2055', 'Numéro de domaine de transaction non valable');
define('BRAINTREE_ERROR_CODE_2056', 'Le montant de la transaction dépasse la limite.');
define('BRAINTREE_ERROR_CODE_2057', 'L\'émetteur ou le titulaire de la carte a restreint l\'utilisation de la carte.');
define('BRAINTREE_ERROR_CODE_2058', 'Marchands non activés pour MasterCard SecureCode.');
define('BRAINTREE_ERROR_CODE_2059', 'Échec de la vérification de l\'adresse');
define('BRAINTREE_ERROR_CODE_2060', 'Échec de la vérification des adresses et du code de sécurité');
define('BRAINTREE_ERROR_CODE_2061', 'Données de mouvement non valides');
define('BRAINTREE_ERROR_CODE_2062', 'Montant de taxe non valable');