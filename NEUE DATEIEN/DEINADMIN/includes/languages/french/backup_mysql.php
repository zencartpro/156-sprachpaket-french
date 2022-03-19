<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: backup_mysql.php 295 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

// define the locations of the mysql utilities.  Typical location is in '/usr/bin/' ... but not on Windows servers.
// try 'c:/mysql/bin/mysql.exe' and 'c:/mysql/bin/mysqldump.exe' on Windows hosts ... change drive letter and path as needed
define('LOCAL_EXE_MYSQL',     '/usr/bin/mysql');  // used for restores
define('LOCAL_EXE_MYSQLDUMP', '/usr/bin/mysqldump');  // used for backups

// the following are the language definitions

define('HEADING_TITLE', 'Gestionnaire de sauvegarde des bases de données - MySQL');
define('WARNING_NOT_SECURE_FOR_DOWNLOADS','<span class="errorText">REMARQUE : SSL n\'est pas activé. Tous les fichiers que vous téléchargez ne sont pas cryptés. Vous pouvez utiliser toutes les fonctions de sauvegarde sans restriction, mais l\'utilisation de cet outil sans connexion SSL sécurisée représente un risque considérable pour la sécurité.');
define('TABLE_HEADING_TITLE', 'Intitulé');
define('TABLE_HEADING_FILE_DATE', 'Date');
define('TABLE_HEADING_FILE_SIZE', 'Taille');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nouveau fusible');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restauration locale');
define('TEXT_INFO_NEW_BACKUP', 'Le processus de sauvegarde peut prendre plusieurs minutes - veuillez ne pas l\'interrompre.');
define('TEXT_INFO_UNPACK', '<br /><br />(après avoir décompressé le fichier de l\'archive)');
define('TEXT_INFO_RESTORE', 'Veuillez ne pas interrompre le processus de restauration.<br /><br />plus la sauvegarde est importante, plus elle sera longue!<br /><br />If possible, utilisez un client MySQL.<br /><br />Example:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Veuillez ne pas interrompre le processus de récupération en aucune circonstance.<br /><br />Plus le fusible est gros, plus ce processus est long!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Le fichier téléchargé doit être au format raw sql (texte).');
define('TEXT_INFO_DATE', 'Date:');
define('TEXT_INFO_SIZE', 'Taille:');
define('TEXT_INFO_COMPRESSION', 'Compression:');
define('TEXT_INFO_USE_GZIP', 'Utiliser le GZIP');
define('TEXT_INFO_USE_ZIP', 'Utiliser le ZIP');
define('TEXT_INFO_SKIP_LOCKS', 'Option de verrouillage de saut (cochez si vous obtenez une erreur d\'autorisation LOCK TABLES)');
define('TEXT_INFO_USE_NO_COMPRESSION', 'pas de compression (fichier SQL pur)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Téléchargement sans stockage sur le serveur');
define('TEXT_INFO_BEST_THROUGH_HTTPS', '(Plus sûr grâce à une connexion HTTPS sécurisée)');
define('TEXT_DELETE_INTRO', 'Voulez-vous vraiment supprimer cette sauvegarde?');
define('TEXT_NO_EXTENSION', 'aucun');
define('TEXT_BACKUP_DIRECTORY', 'Répertoire de sauvegarde:');
define('TEXT_LAST_RESTORATION', 'Dernière restauration:');
define('TEXT_FORGET', '(oubliés)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'ERREUR : le répertoire de sauvegarde n\'existe pas. Veuillez corriger l\'ERREUR dans votre fichier configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'ERREUR : Impossible d\'écrire dans le répertoire de sauvegarde.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'ERREUR : Le lien de téléchargement n\'est pas correct.');
define('ERROR_CANT_BACKUP_IN_SAFE_MODE','ERREUR : Cet outil ne fonctionne pas si safe_mode est actif ou une restriction open_basedir.<br />Si vous n\'obtenez pas de message d\'erreur pendant la sauvegarde, vérifiez la taille du fichier de sauvegarde. Si ce chiffre est inférieur à 200 Ko, le fichier n\'est probablement pas utilisable !');
define('ERROR_EXEC_DISABLED','ERREUR : Votre serveur a exec() désactivé. Cet outil ne peut pas être utilisé. Contactez votre fournisseur pour l\'activation de PHP exec().');
define('ERROR_FILE_NOT_REMOVEABLE', 'ERREUR : Le fichier n\'a pas pu être supprimé. Vous devez le supprimer par FTP.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'SUCCESSFUL : La dernière date de restauration a été supprimée.');
define('SUCCESS_DATABASE_SAVED', 'SUCCESSFUL : La base de données a été sauvegardée.');
define('SUCCESS_DATABASE_RESTORED', 'SUCCESSFUL : La base de données a été restaurée.');
define('SUCCESS_BACKUP_DELETED', 'SUCCESSFUL : La sauvegarde a été supprimée.');
define('FAILURE_DATABASE_NOT_SAVED', 'ERREUR : La base de données n\'a PAS été sauvegardée.');
define('FAILURE_DATABASE_NOT_SAVED_UTIL_NOT_FOUND', 'ERREUR : L\'utilitaire de sauvegarde MYSQLDUMP n\'a pas pu être localisé. ÉCHEC DE SAUVEGARDE.');
define('FAILURE_DATABASE_NOT_RESTORED', 'ERREUR : La base de données n\'a peut-être PAS été restaurée correctement. S\'il vous plaît, vérifiez la récupération.');
define('FAILURE_DATABASE_NOT_RESTORED_FILE_NOT_FOUND', 'ERREUR : La base de données n\'a PAS été restaurée.  ERREUR : %s FICHIER NE PEUT ÊTRE FONDU');
define('FAILURE_DATABASE_NOT_RESTORED_UTIL_NOT_FOUND', 'ERREUR : l\'utilitaire de récupération MYSQL n\'a pas pu être localisé. LA RÉCUPÉRATION A ÉCHOUÉ.');
define('FAILURE_BACKUP_FAILED_CHECK_PERMISSIONS','La sauvegarde a échoué parce que l\'outil de sauvegarde n\'a pas pu être lancé (mysqldump ou mysqldump.exe).<br />Sur un serveur Windows, vous devez définir les permissions de cmd.exe pour permettre au compte Internet Guest de lire et écrire.<br /> Sur un serveur Linux, contactez votre fournisseur pour découvrir pourquoi les commandes exec() ont échoué.');