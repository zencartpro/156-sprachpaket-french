<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: products_to_categories.php 627 2010-08-30 15:05:14Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Afficher les articles dans plusieurs catégories - Gestionnaire de liens ...');
define('HEADING_TITLE2', 'Catégories / Articles');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Catégories avec articles liés ...');
define('TABLE_HEADING_PRODUCTS_ID', 'ID de l\'article');
define('TABLE_HEADING_PRODUCT', 'Nom de l\'article');
define('TABLE_HEADING_MODEL', 'Désignation');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'L\'ARTICLE À LA CATÉGORIE ÉDITER L\'INFORMATION');
define('TEXT_PRODUCTS_ID', 'ID de l\'article ');
define('TEXT_PRODUCTS_NAME', 'Article: ');
define('TEXT_PRODUCTS_MODEL', 'Numéro d\'article: ');
define('TEXT_PRODUCTS_PRICE', 'Prix: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Mettre à jour les liens des catégories');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Lien articles');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Définir les articles - Liens de catégorie pour: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Nombre actuel de catégories liées: ');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
    'Afficher les articles dans plusieurs catégories - Le gestionnaire de liens est conçu pour lier rapidement un article à une ou plusieurs autres catégories.<br />Tous les articles dans une catégorie peuvent également être liés à une autre catégorie. Bien sûr, les liens existants peuvent être supprimés avec cet outil. (voir information point suivant)');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
    'Pour le calcul du prix, chaque article doit être affecté à une catégorie principale, quel que soit le nombre de catégories auxquelles il est lié. Pour ce faire, utilisez le champ déroulant "Catégorie principale". <br />L\'article est actuellement affecté aux catégories suivantes (voir case à cocher). Il suffit de sélectionner ou de désélectionner la case à cocher en regard du nom de la catégorie pour ajouter ou supprimer le lien.<br />Appuyez sur le bouton ' . BUTTON_UPDATE_CATEGORY_LINKS . ' pour enregistrer. <br />');
define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Modifications des liens de catégorie globale et réinitialisation de l\'ID de catégorie principale');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>ATTENTION:</strong> Modifier l\'ID de catégorie principale avant de modifier les catégories liées!');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copier TOUS les articles d\'une catégorie comme articles LINKED dans une autre catégorie ...</strong><br />p. ex. 8 et 22 signifie que TOUS les articles de la catégorie 8 seront liés à la catégorie 22.');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Sélectionner TOUS les articles d\'une catégorie: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Lien vers la catégorie: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copier des articles comme articles liés ');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'ATTENTION: l\'article a été réinitialisé et ne fait plus partie de cette catégorie.  ...');
define('WARNING_COPY_LINKED', 'ATTENTION: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Catégorie invalide pour lier les éléments de la catégorie: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Catégorie invalide pour lier les éléments de la catégorie: ');
define('WARNING_NO_CATEGORIES_ID', 'AVERTISSEMENT : Aucune catégorie sélectionnée .... Aucun changement n\'a été apporté');
define('SUCCESS_COPY_LINKED', 'Mise à jour réussie des articles liés ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lien vers les articles de la catégorie suivante: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Liez les articles à la catégorie suivante: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'AVERTISSEMENT: Catégorie invalide/manquante pour lier les éléments des catégories: ');
define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>AVERTISSEMENT: Aucune modification apportée - article déjà lié ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Supprimer TOUS les éléments LINKED d\'une catégorie ...</strong><br />p. ex. à 8 et 22, TOUS les liens vers la catégorie 22 seront supprimés dans la catégorie 8.');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Sélectionner tous les articles d\'une catégorie: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Supprimer le lien vers la catégorie: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Supprimer les articles liés');
define('WARNING_REMOVE_LINKED', 'AVERTISSEMENT: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Il n\'est pas possible de lier les articles de la catégorie suivante: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Impossible de lier les articles de cette catégorie: ');
define('SUCCESS_REMOVE_LINKED', 'Les articles liés ont été supprimés avec succès ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Supprimer les postes liés de la catégorie: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Supprimer les éléments liés dans cette catégorie: ');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>AVERTISSEMENT : Aucune modification apportée, aucun article lié ... </strong>');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ATTENTION: CONFLIT PRINCIPAL DE CATÉGORIE-ID!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>L\'ID de catégorie principale est: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'Note : La catégorie principale est utilisée pour calculer le prix des articles liés, par exemple les offres spéciales. <br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Pour résoudre ce problème, vous serez redirigé vers le premier article qui a causé le problème. Attribuez un nouvel ID de catégorie maître pour que la catégorie que vous essayez de supprimer ne soit pas la catégorie maître pour cet élément. Ce n\'est que lorsque tous les conflits sont résolus que la suppression peut être effectuée.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Catégorie de source contradictoire: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Catégorie cible contradictoire: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Mise à jour réussie des articles pour la catégorie Liens ...');
define('WARNING_MASTER_CATEGORIES_ID', 'AVERTISSEMENT: Aucune catégorie principale!');
define('TEXT_PRODUCTS_ID_INVALID', 'AVERTISSEMENT: ID ARTICLE NON VALIDE OU AUCUN ARTICLE SÉLECTIONNÉ');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Remarque : Un ID d\'article n\'est pas nécessairement nécessaire pour lier tous les articles d\'une catégorie à une autre catégorie.<br />Toutefois, si l\'ID d\'article est défini, toutes les catégories disponibles et leur ID sont affichées.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>TOUS les éléments de la catégorie sélectionnée doivent l\'utiliser comme catégorie principale. ...</strong><br />Par exemple : Réinitialiser la catégorie 22 signifie que TOUS les produits de la catégorie 22, l\'utilisent comme ID de catégorie principale.');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Réinitialiser l\'ID de catégorie principale pour TOUS les articles de la catégorie: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Réinitialiser l\'ID de catégorie principale');
define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'AVERTISSEMENT : Catégorie non valide sélectionnée ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Mise à jour réussie de l\'ID de catégorie principale pour tous les éléments de la catégorie: ');

define('TEXT_CATEGORIES_NAME', 'Nom de la catégorie');