<?php
/**
 * @package admin
 * @translate German/French klartexter
 */
define('IH_VERSION_VERSION', 'Version');
define('IH_VERSION_NOT_FOUND', 'Aucun numéro de version de Gestionnaire d\'images trouvé.');
define('IH_VIEW_CONFIGURATION', 'Afficher la configuration du gestionnaire d\'images');
define('IH_CLEAR_CACHE', 'Supprimer le cache de l\'image');
define('IH_CACHE_CLEARED', 'Suppression du cache d\'image.');
define('IH_SOURCE_TYPE', 'Type d\'image (original)');
define('IH_SOURCE_IMAGE', 'Image originale');
define('IH_SMALL_IMAGE', 'Avant-première');
define('IH_MEDIUM_IMAGE', 'Image du produit');
define('IH_ADD_NEW_IMAGE', 'Ajouter une nouvelle image');
define('IH_NEW_NAME_DISCARD_IMAGES', 'Nouveau nom de l\'image, supprimer les images de produits supplémentaires');
define('IH_NEW_NAME_COPY_IMAGES', 'Nouveau nom d\'image, emportez d\'autres images de produits avec vous');
define('IH_KEEP_NAME', 'Utiliser d\'anciens noms d\'images, conserver des images de produits supplémentaires');
define('IH_DELETE_FROM_DB_ONLY', 'Supprimer seulement la référence de l\'image de la base de données');
define('IH_HEADING_TITLE', 'Gestionnaire d\'images 5');
define('IH_HEADING_TITLE_PRODUCT_SELECT','Veuillez sélectionner un produit pour éditer ses images.');
define('TABLE_HEADING_PHOTO_NAME', 'Nom de l\'image');
define('TABLE_HEADING_BASE_SIZE', 'Image de base');
define('TABLE_HEADING_SMALL_SIZE','Petite image');
define('TABLE_HEADING_MEDIUM_SIZE', 'Image du milieu');
define('TABLE_HEADING_LARGE_SIZE','Grande image');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_FILETYPE', 'Type de fichier');
define('TEXT_PRODUCT_INFO', 'Articles');
define('TEXT_PRODUCTS_MODEL', 'Numéro d\'article');
define('TEXT_IMAGE_BASE_DIR', 'Répertoire des images');
define('TEXT_NO_PRODUCT_IMAGES', 'Il n\'y a pas de photos pour cet article');
define('TEXT_CLICK_TO_ENLARGE', 'Agrandir'); 
define('TEXT_INFO_IMAGE_INFO', 'Information sur l\'image');
define('TEXT_INFO_NAME', 'Nom');
define('TEXT_INFO_FILE_TYPE', 'Type de fichier');
define('TEXT_INFO_EDIT_PHOTO', 'Editer <em>Image principale </em>Maintenant');
define('TEXT_INFO_EDIT_ADDL_PHOTO', 'Modifier <em>Image supplémentaire </em>');
define('TEXT_INFO_NEW_PHOTO', 'Nouveau <em>Image principale </em>');
define('TEXT_INFO_NEW_ADDL_PHOTO', 'Nouveau <em>Image supplémentaire </em>');
define('TEXT_INFO_IMAGE_BASE_NAME', 'Nom de l\'image (facultatif)');
define('TEXT_INFO_AUTOMATIC_FROM_DEFAULT', ' Automatiquement (après l\'image principale)');
define('TEXT_INFO_MAIN_DIR', 'Répertoire principal');
define('TEXT_INFO_BASE_DIR', 'Répertoire principal des images');
define('TEXT_INFO_NEW_DIR', 'Sélectionnez un nouveau répertoire ou définissez un nouveau répertoire pour les images.');
define('TEXT_INFO_IMAGE_DIR', 'Répertoire des images');
define('TEXT_INFO_OR', 'ou');
define('TEXT_INFO_AUTOMATIC', 'Automatique');
define('TEXT_INFO_IMAGE_SUFFIX', 'Suffixe de l\'image (facultatif)');
define('TEXT_INFO_USE_AUTO_SUFFIX','Saisissez le suffixe requis ou laissez la zone vide pour utiliser la génération automatique de suffixe.');
define('TEXT_INFO_DEFAULT_IMAGE', 'Image principale');
define('TEXT_INFO_DEFAULT_IMAGE_HELP', 'Un écran principal doit être défini. L\'image principale est considérée comme la plus petite si des images moyennes et grandes sont spécifiées.');
define('TEXT_INFO_CLICK_TO_ADD_MAIN', 'Cliquez ici pour ajouter une nouvelle image <em>image principale </em> pour cet article.');
define('TEXT_INFO_CLICK_TO_ADD_ADDL', 'Cliquez ici pour ajouter un nouvel article <em>additional article image</em> pour cet article');
define('TEXT_INFO_CONFIRM_DELETE', 'Confirmer Effacer');
define('TEXT_MAIN', 'majeurs');
define('TEXT_ADDITIONAL', 'additionnelles');
define('TEXT_INFO_CONFIRM_DELETE_SURE', 'Êtes-vous sûr de vouloir supprimer cette image dans toutes les tailles différentes?');
define('TEXT_INFO_SELECT_ACTION', 'Sélectionnez une action');
define('TEXT_MSG_FILE_NOT_FOUND', 'Ce fichier n\'existe pas.');
define('TEXT_MSG_ERROR_RETRIEVING_IMAGESIZE', 'La taille de l\'image n\'a pu être déterminée');
define('TEXT_MSG_AUTO_BASE_ERROR', 'Erreur : Vous avez sélectionné le nommage automatique des images, mais aucune image principale n\'existe.');
define('TEXT_MSG_INVALID_BASE_ERROR', 'Erreur : Le nom de l\'image n\'est pas valide, ou aucune image principale n\'a pu être trouvée.');
define('TEXT_MSG_AUTO_REPLACE',  'Les caractères gênants ont été automatiquement remplacés dans le nom de l\'image, le nouveau nom: ');
define('TEXT_MSG_INVALID_SUFFIX', 'Erreur : Le suffixe de l\'image n\'est pas valide.');
define('TEXT_MSG_IMAGE_TYPES_NOT_SAME_ERROR', 'Les types d\'images ne sont pas les mêmes.');
define('TEXT_MSG_DEFAULT_REQUIRED_FOR_RESIZE', 'Erreur : Une image principale est nécessaire pour le réglage automatique de la taille.');
define('TEXT_MSG_NO_DEFAULT', 'Erreur : Aucune image principale n\'a été spécifiée.');
define('TEXT_MSG_NO_DEFAULT_ON_NAME_CHANGE', 'Vous devez spécifier un écran de base si vous voulez mettre à jour l\'écran principal et modifier son nom.');
define('TEXT_MSG_INVALID_EXTENSION', 'Le type de fichier (%2$s) chargé pour l\'image "%1$s" n\'est pas supporté.  Le type de fichier doit être l\'un des suivants (%3$s).');
define('TEXT_BASE', 'base');
define('TEXT_MEDIUM', 'moyen');
define('TEXT_LARGE', 'grand');
define('TEXT_MSG_FILE_EXISTS', 'Erreur : Le fichier existe déjà ! Veuillez changer le nom de l\'image ou le suffixe.');
define('TEXT_MSG_INVALID_SQL', 'Erreur : La requête SQL n\'a pas pu être exécutée.');
define('TEXT_MSG_NOCREATE_IMAGE_DIR', 'Erreur : Le répertoire d\'images n\'a pas pu être créé.');
define('TEXT_MSG_NOCREATE_MEDIUM_IMAGE_DIR', 'Erreur : Le répertoire d\'images pour les images du milieu n\'a pas pu être créé.');
define('TEXT_MSG_NOCREATE_LARGE_IMAGE_DIR', 'Erreur : le répertoire d\'images pour les grandes images n\'a pas pu être créé.');
define('TEXT_MSG_NOPERMS_IMAGE_DIR', 'Erreur : Les permissions du répertoire d\'images n\'ont pas pu être définies.');
define('TEXT_MSG_NOPERMS_MEDIUM_IMAGE_DIR', 'Erreur : Les permissions du répertoire d\'images pour les images du milieu n\'ont pas pu être définies.');
define('TEXT_MSG_NOPERMS_LARGE_IMAGE_DIR', 'Erreur : Les permissions du répertoire d\'images pour les grandes images n\'ont pas pu être définies.');
define('TEXT_MSG_NAME_TOO_LONG_ERROR', 'Le nom de fichier "%1$s" est trop long et ne peut pas être stocké dans la base de données.  Changez pour un nom de fichier avec un caractère %2$u ou moins.');
define('TEXT_MSG_NO_SUFFIXES_FOUND', 'Impossible de trouver un suffixe non utilisé pour l\'image de l\'article supplémentaire dans la plage de _01 à _99.');
define('TEXT_MSG_NOUPLOAD_DEFAULT', 'L\'image principale n\'a pas pu être téléchargée!');
define('TEXT_MSG_NORESIZE', 'La taille de l\'image n\'a pas pu être modifiée!');
define('TEXT_MSG_NOCOPY_LARGE', 'L\'image en grand format n\'a pas pu être copiée!');
define('TEXT_MSG_NOCOPY_MEDIUM', 'L\'image du milieu n\'a pas pu être copiée!');
define('TEXT_MSG_NOCOPY_DEFAULT', 'L\'écran principal n\'a pas pu être copié.!');
define('TEXT_MSG_NOPERMS_LARGE', 'Les permissions pour la grande image n\'ont pas pu être définies!');
define('TEXT_MSG_NOPERMS_MEDIUM', 'Les permissions pour l\'écran du milieu n\'ont pas pu être définies!');
define('TEXT_MSG_NOPERMS_DEFAULT', 'Les autorisations pour l\'écran principal n\'ont pas pu être définies!');
define('TEXT_MSG_IMAGE_SAVED', 'Image enregistrée avec succès.');
define('TEXT_MSG_LARGE_DELETED', 'Agrandir l\'image supprimée.');
define('TEXT_MSG_NO_DELETE_LARGE', 'L\'image en grand format n\'a pas pu être supprimée.');
define('TEXT_MSG_MEDIUM_DELETED', 'L\'image du milieu a été supprimée.');
define('TEXT_MSG_NO_DELETE_MEDIUM', 'L\'image du milieu n\'a pas pu être supprimée.');
define('TEXT_MSG_DEFAULT_DELETED', 'L\'écran principal a été supprimé.');
define('TEXT_MSG_NO_DELETE_DEFAULT', 'L\'écran principal n\'a pas pu être supprimé.');
define('TEXT_MSG_NO_DEFAULT_FILE_FOUND', 'Aucun écran principal de suppression n\'a été trouvé.');
define('TEXT_MSG_IMAGE_DELETED', 'Image supprimée avec succès.');
define('TEXT_MSG_IMAGE_NOT_FOUND', 'L\'image n\'a pas pu être trouvée.');
define('TEXT_MSG_IMAGE_NOT_DELETED', 'L\'image n\'a pas pu être supprimée.');
define('TEXT_MSG_IMPORT_SUCCESS', 'Importé avec succès: ');
define('TEXT_MSG_IMPORT_FAILURE', 'Erreur d\'importation: ');
define('IH_IMAGE_NEW_FILE', 'Cliquez ici pour ajouter une nouvelle image');
define('IH_IMAGE_EDIT', 'Cliquez ici pour éditer une image');
define('TEXT_MEDIUM_FILE_IMAGE', 'fichier image du milieu (facultatif)');
define('TEXT_LARGE_FILE_IMAGE', 'grand fichier image (optionnel)');
define('IH_MENU_MANAGER', 'Gestionnaire d\'images');
define('IH_MENU_ADMIN', 'Outils d\'administration');
define('IH_MENU_ABOUT', 'Aide');
define('IH_MENU_PREVIEW', 'Avant-première');