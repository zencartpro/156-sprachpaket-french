<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: sqlpatch.php 216 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'SQL Query Executor');
define('HEADING_WARNING', 'Assurez-vous d\'avoir SÉCURISÉ ENTIÈREMENT VOTRE BASE DE DONNÉES AVANT D\'EXÉCUTER CE SCRIPT!');
define('HEADING_WARNING2', 'Si vous installez des contributions de tiers, veuillez garder à l\'esprit que vous le faites à vos propres risques. <br />Zen Cart&reg ; ne garantit pas la sécurité ou la fonctionnalité des contributions de tiers. Testez les contributions avant de les utiliser sur un système vivant!');
define('HEADING_WARNING_INSTALLSCRIPTS', 'NOTE: Les scripts de mise à jour de la base de données Zen Cart ne doivent PAS être exécutés à partir de cette page.<br />Veuillez télécharger le nouveau dossier <strong>zc_install</strong> et y effectuer la mise à jour pour obtenir un meilleur résultat.');
define('TEXT_QUERY_RESULTS', 'Résultats des requêtes:');
define('TEXT_ENTER_QUERY_STRING', 'Exécuter la ou les commandes SQL:&nbsp;&nbsp;<br />(Fermer <br />avec ;)');
define('TEXT_QUERY_FILENAME', '<br />ou fichier:');
define('ERROR_NOTHING_TO_DO', 'ERREUR : Aucune commande SQL ou fichier sélectionné.');
define('TEXT_CLOSE_WINDOW', '<br />[ Fermer la fenêtre ]');
define('SQLPATCH_HELP_TEXT', 'L\'outil "SQLPATCH" permet de saisir les codes SQL directement dans le champ texte, ' .
     'ou téléchargez vos propres fichiers (.SQL).<br />' .
     'Les scripts SQL pour cet outil <strong>ne doivent pas contenir de préfixe de table </strong>, par exemple "zen_", car le préfixe est automatiquement ' .
     'est ajouté pour la base de données utilisée, en fonction des paramètres du fichier ' .
     'admin/includes/configure.php (DB_PREFIX Definition).<br /><br />' .
     'Seules les commandes SQL suivantes sont supportées (veuillez utiliser les majuscules):' .
     '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>ALTER TABLE</li>' .
     '<li>UPDATE (just a single table)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
     '<br /><li>SELECT </li></ul>' .
    '<h2>Fonctions étendues</h2>Pour que des commandes SQL individuelles puissent être exécutées dans un bloc de MySQL, la ligne suivante doit être au début d\'un bloc "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>".  L\'analyseur interprétera alors les lignes X suivantes comme une commande.<br />
Si ce script est exécuté dans phpMyAdmin ou d\'autres programmes, la ligne "#NEXT..." est ignorée.<br />
<br /><strong>Annotation: </strong>SELECT....... FROM..... et LEFT JOIN supposent que "FROM" ou "LEFT JOIN" sont sur une ligne séparée.<br /><br />
<em><strong>Exemples:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>');
define('REASON_TABLE_ALREADY_EXISTS', 'Table(Table) %s ne peut pas être créé car il existe déjà.');
define('REASON_TABLE_DOESNT_EXIST', 'Table(Table) %s ne peut pas être supprimée car elle n\'existe pas.');
define('REASON_TABLE_NOT_FOUND', 'Ne peut pas être exécuté car Table(Table) %s n\'existe pas.');
define('REASON_CONFIG_KEY_ALREADY_EXISTS', 'Impossible d\'insérer la touche configuration_key "%s" car elle existe déjà.');
define('REASON_COLUMN_ALREADY_EXISTS', 'Impossible d\'ajouter des % de colonne parce qu\'elle existe déjà.');
define('REASON_COLUMN_DOESNT_EXIST_TO_DROP', 'Impossible de laisser tomber les %s de colonne parce qu\'il n\'existe pas.');
define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE', 'Impossible de mettre à jour la colonne %s car elle n\'existe pas.');
define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS', 'Impossible d\'insérer configuration_key_key %s de la mise en page de type prod parce qu\'elle existe déjà.');
define('REASON_INDEX_DOESNT_EXIST_TO_DROP', 'Impossible de laisser tomber l\'indice %s dans le tableau %s parce qu\'il n\'existe pas.');
define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP', 'Impossible de déposer la clé primaire sur la table %s car elle n\'existe pas.');
define('REASON_INDEX_ALREADY_EXISTS', 'Impossible d\'ajouter des % d\'index dans la table %s car elle existe déjà.');
define('REASON_PRIMARY_KEY_ALREADY_EXISTS', 'Impossible d\'ajouter la clé primaire dans la table %s car elle existe déjà.');
define('REASON_NO_PRIVILEGES', 'Usager ' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' n\'a pas les permissions %s pour la base de données ' . DB_DATABASE . '.');