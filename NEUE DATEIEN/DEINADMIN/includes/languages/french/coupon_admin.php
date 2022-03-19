<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: coupon_admin.php 634 2019-06-17 17:18:08Z webchills $
 * @translate German/French klartexter
 */

define('TOP_BAR_TITLE','Statistique');
define('HEADING_TITLE','Bons d\'action');
define('HEADING_TITLE_STATUS','Statut:');
define('TEXT_CUSTOMER','Client:');
define('TEXT_COUPON','Nom du coupon action');
define('TEXT_COUPON_ALL','Tous les coupons');
define('TEXT_COUPON_ACTIVE','Coupons d\'action actifs');
define('TEXT_COUPON_INACTIVE','Coupons d\'action inactifs');
define('TEXT_SUBJECT','Thème:');
define('TEXT_UNLIMITED','illimité');
define('TEXT_FROM','De:');
define('TEXT_FREE_SHIPPING','Livraison gratuite');
define('TEXT_MESSAGE','Message:');
define('TEXT_RICH_TEXT_MESSAGE', 'Message texte riche:');
define('TEXT_SELECT_CUSTOMER','Sélectionner un client');
define('TEXT_ALL_CUSTOMERS','Tous les clients');
define('TEXT_NEWSLETTER_CUSTOMERS','À tous les abonnés du bulletin d\'information');
define('TEXT_CONFIRM_DELETE','Voulez-vous vraiment supprimer ce coupon action?');
define('TEXT_SEE_RESTRICT','Restriction d\'utilisation:');

define('TEXT_COUPON_ANNOUNCE', 'Nous nous permettons de vous offrir un coupon action.');

define('TEXT_TO_REDEEM','Vous pouvez échanger ce coupon promotionnel au cours du processus de commande. Il vous suffit d\'entrer le numéro du coupon promotionnel dans le champ de saisie correspondant et de cliquer sur "Échanger".');
define('TEXT_IN_CASE','si vous avez des problèmes.');
define('TEXT_VOUCHER_IS','Le numéro du coupon action est le suivant');
define('TEXT_REMEMBER','Conservez le numéro du coupon promotionnel en lieu sûr afin de pouvoir bénéficier de cette offre spéciale.');
define('TEXT_VISIT','Visitez-nous à %s');
define('TEXT_ENTER_CODE', ' et entrez le numéro de votre coupon action.');
define('TEXT_COUPON_HELP_DATE', '<p>Le coupon action est valable du %s au %s.</p>');
define('HTML_COUPON_HELP_DATE', '<p>Le coupon action est valable du %s au %s.</p>');

define('TABLE_HEADING_ACTION','Aktion');

define('CUSTOMER_ID','Identifiant client');
define('CUSTOMER_NAME','Nom de client');
define('REDEEM_DATE','Rachetés le');
define('IP_ADDRESS','Adresse IP');

define('TEXT_REDEMPTIONS','Encaissements');
define('TEXT_REDEMPTIONS_TOTAL','Somme');
define('TEXT_REDEMPTIONS_CUSTOMER','Pour ce client');
define('TEXT_NO_FREE_SHIPPING','Non exempt de frais d\'expédition');

define('NOTICE_EMAIL_SENT_TO','NOTE: Courriel envoyé à: %s');
define('ERROR_NO_CUSTOMER_SELECTED','ERREUR: Aucun client n\'a été sélectionné.');
define('ERROR_NO_SUBJECT', 'ERREUR : Aucun sujet n\'a été saisi.');

define('COUPON_NAME','Nom du coupon action');
define('COUPON_AMOUNT','Action coupon Montant');
define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', 'par ordre');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', 'par article qualifié');
define('COUPON_CODE','Numéro de coupon d\'action');
define('COUPON_STARTDATE','Valable à partir de');
define('COUPON_FINISHDATE','Valable jusqu\'au');
define('COUPON_RESTRICTIONS', 'Contraintes');
define('COUPON_FREE_SHIP','Livraison gratuite');
define('COUPON_DESC','Action coupon Description<br />Ce coupon est affiché au client.');
define('COUPON_MIN_ORDER','Valeur minimum de commande pour ce coupon promotionnel');
define('COUPON_TOTAL', 'Coupon minimum calculé à partir de: ');
define('TEXT_COUPON_TOTAL_PRODUCTS', 'articles autorisés');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(repose sur la valeur totale des postes autorisés conformément aux règles de restriction.)');
define('TEXT_COUPON_TOTAL_ORDER', 'Tous les articles');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(est basée sur la valeur totale de tous les articles, indépendamment de toute règle de restriction applicable.)');
define('COUPON_USES_COUPON','Utilisation par coupon action');
define('COUPON_USES_USER','Utilisation par client');
define('COUPON_PRODUCTS','Liste d\'articles valide');
define('COUPON_CATEGORIES','Liste des catégories valides');
define('VOUCHER_NUMBER_USED','Nombre d\'utilisations');
define('DATE_CREATED','Créé le');
define('DATE_MODIFIED','Modifié');
define('TEXT_HEADING_NEW_COUPON','Créer un nouveau coupon action');
define('TEXT_NEW_INTRO','Veuillez entrer les informations suivantes pour le nouveau coupon action.<br>');
define('COUPON_ZONE_RESTRICTION', 'Coupon promotionnel Zone de validité: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Le coupon promotionnel Zone de validité est facultatif.');
define('COUPON_ORDER_LIMIT', 'Commandes précédentes du client moins de: ');
define('COUPON_ORDER_LIMIT_HELP', 'Le client doit avoir des commandes antérieures inférieures à, laisser en blanc pour illimité');

define('COUPON_IS_VALID_FOR_SALES', 'Coupon valable pour les offres spéciales?');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'Coupon valable pour les offres spéciales');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Coupon valable pour les offres spéciales');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'Coupon N\'EST PAS autorisé pour les offres spéciales');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Le coupon n\'est pas permis pour les offres spéciales.');
define('ERROR_NO_COUPON_AMOUNT','Aucun montant n\'a été inscrit pour le coupon action.');
define('ERROR_NO_COUPON_NAME','Aucun nom n\'a été entré pour le coupon action.');
define('ERROR_COUPON_EXISTS','Un coupon action avec ce numéro existe déjà.');

define('COUPON_NAME_HELP','Un nom court pour le coupon action.');
define('COUPON_AMOUNT_HELP','Saisissez un nombre pour un montant fixe ou la valeur correspondante en pourcentage (par exemple, 10 %).');
define('COUPON_CODE_HELP','Vous pouvez utiliser votre propre code ou laisser le champ vide pour que le code soit généré automatiquement.');
define('COUPON_STARTDATE_HELP','Date à partir de laquelle le coupon promotionnel sera valide.');
define('COUPON_FINISHDATE_HELP','Date à partir de laquelle le coupon action sera invalide.');
define('COUPON_FREE_SHIP_HELP','Ce coupon promotionnel inclut les frais d\'expédition d\'une commande. Ce paramètre ignore le montant du coupon promotionnel, mais tient compte de la valeur minimale de commande. <br/><b>Mise en garde : Un coupon promotionnel crédite les frais d\'expédition ou accorde une remise. Les deux en même temps ne fonctionne pas ! Si vous cochez ici sans frais d\'expédition, alors aucun montant ne peut être supérieur!</b>');
define('COUPON_DESC_HELP','Une description du coupon promotionnel pour le client');
define('COUPON_MIN_ORDER_HELP','Quantité minimum de commande avant que le coupon promotionnel puisse être échangé.');
define('COUPON_TOTAL_HELP', 'Si vous spécifiez une quantité minimale de commande pour ce coupon promotionnel, vous voulez alors que le montant minimal soit basé sur les produits admissibles selon les règles de restriction de coupon ou le nombre total de commandes lorsque vous déterminez que la quantité minimale de commande de coupon a été atteinte?<br/>NOTE : Tous les articles signifie qu\'au moins un des articles limités admissibles doit être dans le panier pour que le coupon de remise fonctionne.');
define('COUPON_SALE_HELP', 'Si vous choisissez <i>NON autorisé</i>, les articles de l\'offre spéciale ou de la vente ne seront pas réduits ou utilisés pour la valeur minimale de commande.');
define('COUPON_USES_COUPON_HELP','Fréquence avec laquelle ce coupon action peut être utilisé. Pas d\'entrée = illimitée');
define('COUPON_USES_USER_HELP','Fréquence avec laquelle un client peut régler ses achats via ce coupon promotionnel. Pas d\'entrée = illimitée');
define('COUPON_PRODUCTS_HELP','Fichier texte contenant les articles (champs de données séparés par des virgules) qui peuvent être utilisés avec ce coupon action. Si vous laissez ce champ vide, il n\'y a aucune restriction.');
define('COUPON_CATEGORIES_HELP','Fichier texte contenant les catégories (champs de données séparés par des virgules) dans lesquelles les bons d\'action peuvent être calculés. Si ce champ reste vide, il n\'y a aucune restriction.');
define('COUPON_BUTTON_PREVIEW', 'Avant-première');
define('COUPON_BUTTON_CONFIRM', 'Confirmer');
define('COUPON_BUTTON_BACK', 'Retour');

define('COUPON_ACTIVE', 'Statut');
define('COUPON_START_DATE', 'Date de début');
define('COUPON_EXPIRE_DATE', 'Date d\'expiration');
define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>Gestion des coupons d\'action Gestion des multiples</strong><br /><br />Cliquez sur le coupon de réduction pour lequel vous voulez faire des promotions <br/>ou utilisez le coupon sélectionné: <strong>%s</strong>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'Le coupon action ne peut pas être désactivé car il s\'agit du coupon action "Cadeau de bienvenue" <br /><br />Utiliser un autre coupon action comme cadeau de bienvenue pour qu\'il puisse être supprimé.');
define('SUCCESS_COUPON_DISABLED', 'Succès ! Le coupon action a été désactivé. ...');
define('TEXT_COUPON_NEW', 'Utilisez le numéro de coupon d\'action suivant:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'Attention, il existe un coupon double action... Processus de copie interrompu pour: ');
define('TEXT_CONFIRM_COPY', 'Si vous voulez copier ce coupon d\'action?');
define('SUCCESS_COUPON_DUPLICATE', 'Coupon d\'action copié avec succès ...<br /><br />Veuillez vérifier le nom et la date ...');
define('WARNING_COUPON_DUPLICATE', 'Attention ! Aucun coupon d\'action créé ! Le nombre de coupons à créer n\'a pas été précisé. ... ');

define('TEXT_COUPON_COPY_INFO', 'Créer des doublons');
define('TEXT_COUPON_COPY_DUPLICATE', 'Créez plusieurs coupons basés sur: ');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', 'Combien de doublons voulez-vous créer? ');

define('TEXT_CONFIRM_DELETE_DUPLICATE', 'Supprimer tous les coupons de réduction correspondant au coupon de base <br />Exemple : <strong>%s</strong> supprimerait tous les coupons action commençant par: <strong>%s</strong>');
define('TEXT_COUPON_DELETE_DUPLICATE', 'Supprimer tous les coupons qui correspondent à ce code: ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'Coupon promotionnel par courriel');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', 'Confirmer Effacer');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', 'Confirmer Restaurer');

define('TEXT_DISCOUNT_COUPON_EDIT', 'Modifier le coupon d\'action');
define('TEXT_DISCOUNT_COUPON_DELETE', 'Supprimer le coupon d\'action');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'Coupon d\'action de restauration');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'Restreindre le coupon d\'action');
define('TEXT_DISCOUNT_COUPON_REPORT', 'Rapport sur les bons d\'action');
define('TEXT_DISCOUNT_COUPON_COPY', 'Copier le coupon d\'action');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'Clones pour coupons d\'action multiples');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'Supprimer plusieurs coupons d\'action');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'Rapport sur les coupons d\'actions multiples');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'Télécharger/Exporter des coupons d\'action multiples');
define('REDEEM_ORDER_ID', 'Numéro d\'ordre');
define('SUCCESS_COUPON_REACTIVATE', 'Réactivation réussie');
define('TEXT_CONFIRM_REACTIVATE', 'Voulez-vous vraiment restaurer ce coupon action? <br />NOTE : Une restauration n\'affecte pas la date de début/expiration.<br />Une restauration n\'affecte pas les restrictions sur le nombre d\'utilisations par coupon ou client si le coupon a déjà été utilisé.');

define('SUCCESS_COUPON_FOUND', 'Coupon d\'action trouvé !');
define('ERROR_COUPON_NOT_FOUND', 'Coupon d\'action non trouvé !');
define('ERROR_NO_COUPON_CODE', 'Code de bon d\'action non entré !');