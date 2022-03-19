<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: layout_controller.php 576 2019-04-13 09:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Colonnes du tableau');

define('TABLE_HEADING_LAYOUT_BOX_NAME','Nom du fichier de la boîte');
define('TABLE_HEADING_LAYOUT_BOX_STATUS','Colonne gauche/droite <br />Statut');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE','Colonne simple<br />Statut');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION','Gauche ou Droite <br />Colonne');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER','Colonne gauche/droite <br />Triage');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE','Colonne simple <br />Triage');
define('TABLE_HEADING_ACTION','Action');

define('TEXT_INFO_EDIT_INTRO','Veuillez apporter ici les modifications nécessaires');
define('TEXT_INFO_LAYOUT_BOX','Boîte sélectionnée:');
define('TEXT_INFO_LAYOUT_BOX_NAME','Nom de la boîte:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Gauche/Droite <br /><br />Si vous n\'affichez qu\'une seule colonne dans le modèle, ce paramètre est ignoré.<br /><br />');
define('TEXT_INFO_LAYOUT_BOX_STATUS','Colonne gauche/droite<br /><br />La sidebox doit-elle être affichée dans la colonne de gauche ou de droite du modèle?<br /><br />');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE','État d\'une seule colonne<br /><br />Vous ne devez effectuer ce paramétrage que si vous souhaitez afficher une seule colonne dans votre modèle.<br /><br />');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','MARCHE= 1 ARRÊT=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER','Colonne gauche/droite Triage<br /><br />Une entrée ne doit être effectuée que si vous affichez la colonne de gauche ET la colonne de droite dans le schéma type.<br /><br />');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE','Tri sur une seule colonne<br /><br />Vous ne devez effectuer une saisie que si vous affichez UNE SEULE COLONNE dans le modèle.<br /><br />');
define('TEXT_INFO_INSERT_INTRO','Veuillez remplir la nouvelle case avec les données nécessaires');
define('TEXT_INFO_DELETE_INTRO','Vous êtes sûr de vouloir effacer cette boîte?');
define('TEXT_INFO_HEADING_NEW_BOX','Nouvelle boîte');
define('TEXT_INFO_HEADING_EDIT_BOX','Boîte d\'édition');
define('TEXT_INFO_HEADING_DELETE_BOX','Effacer la boîte');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Supprimer la case manquante de la liste des modèles: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','REMARQUE : Cette procédure ne supprime aucun fichier et vous pouvez ajouter à nouveau la boîte en copiant les fichiers nécessaires dans le répertoire prévu à cet effet.<br /><br /><strong>Effacer la boîte: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Réinitialisez le tri de toutes les boîtes de ce modèle aux VALEURS STANDARD.:');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Cette opération ne supprime aucune de ces cases. Seul l\'ordre de tri actuel est réinitialisé.');
define('TEXT_INFO_BOX_DETAILS','Détails de la boîte:');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE','Modèle de mise en page');

define('TABLE_HEADING_LAYOUT_TITLE','Titre');
define('TABLE_HEADING_LAYOUT_VALUE','Valeur');

define('TABLE_HEADING_BOXES_PATH', 'Chemin de la boîte latérale: ');
define('TEXT_WARNING_NEW_BOXES_FOUND', 'AVERTISSEMENT : Nouveaux sideboxes trouvés: ');
define('TEXT_MODULE_DIRECTORY','Répertoire de la mise en page:');
define('TEXT_INFO_DATE_ADDED','Créé le:');
define('TEXT_INFO_LAST_MODIFIED','Dernière modification:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT','Disposition');
define('BOX_LAYOUT_COLUMNS','Paramètres de mise en page des colonnes');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>ÉCHOUÉ</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Le gabarit de la boîte a été enlevé:');
define('SUCCESS_BOX_RESET','Tous les réglages ont été réinitialisés aux réglages par défaut:');
define('SUCCESS_BOX_UPDATED','Les paramètres de la boîte ont été mis à jour:');

define('TEXT_ON','MARCHE ');
define('TEXT_OFF','ARRÊT ');
define('TEXT_LEFT','GAUCHE ');
define('TEXT_RIGHT','DROITE ');