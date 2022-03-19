<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: admin_activity.php 732 2016-03-05 09:49:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE', 'Gestionnaire de journaux des activités d\'administration');
define('HEADING_SUB1', 'Affichage ou exportation d\'entrées de protocole');
define('HEADING_SUB2', 'Effacer l\'historique du journal');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Exporter en tant que:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Nom du fichier d\'exportation:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Enregistrer le fichier sur le serveur ? (sinon le fichier sera téléchargé directement depuis cette fenêtre)');
define('TEXT_ACTIVITY_EXPORT_DEST','Emplacement de stockage: ');
define('TEXT_PROCESSED', ' Traités.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exportation terminée. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ATTENTION : L\'exportation a échoué. Il n\'a pas pu être sauvegardé dans le fichier ');

define('TEXT_INSTRUCTIONS','<u>INSTRUCTIONS</u><br />
Vous pouvez utiliser cette page pour exporter votre activité Zen Cart&reg ; Admin User Access vers un fichier CSV pour archivage.<br />>
Vous devriez conserver ces données pour les utiliser dans le cadre d\'enquêtes pour fraude au cas où votre site serait compromis. Il s\'agit d\'une exigence de conformité PCI.<br />.
<ol>
<li>Choisir d\'afficher ou d\'exporter vers un fichier.</li>.
<li>Entrer un nom de fichier. (doit se terminer dans l\'un des formats suivants : .csv.txt.htm.html.html.xml)</li>.
<li>Cliquer sur Enregistrer pour continuer.</li>.
<li>Choisir s\'il faut enregistrer ou ouvrir le fichier, selon ce que votre navigateur offre.</li></ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Admin activity log table in the database empty<br />ATTENTION : Créer une sauvegarde de la base de données avant de vider la table!</strong><br />Le journal des activités d\'administration enregistre toutes les activités dans votre zone d\'administration afin que vous puissiez les suivre au besoin. <br />Par conséquent, la table peut rapidement devenir très grande et doit être vidée de temps en temps. <br />Un avertissement concernant une table trop grande s\'affiche automatiquement si la table contient plus de 50 000 entrées ou plus de 60 jours, selon ce qui est atteint en premier.<br /><span class="alert"> NOTE : La conformité PCI exige que vous conserviez les journaux d\'activité de l\'administrateur pendant 12 mois.<br />Il est donc préférable d\'archiver vos journaux en sélectionnant EXPORTER AU CSV ci-dessus et en cliquant sur GO BEFORE AVANT de supprimer les entrées du journal.</ span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">ATTENTION : Vous êtes sur le point de supprimer *importants* enregistrements journaux de votre base de données.</span></strong><br />Vous devez AVANT de procéder à une sauvegarde de votre base de données avant de continuer.<br />En continuant (suppression des données) vous confirmez que vous comprenez l\'importance des données et votre responsabilité légale pour ces données.<br /><br />je suis conscient de ma responsabilité concernant ces données et que vous voulez les supprimer sciemment:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Complète </forte> Le journal d\'activité de l\'administrateur s\'est vidé avec succès');
define('TEXT_NO_RECORDS_FOUND', 'Aucun enregistrement trouvé en utilisant le filtre que vous avez sélectionné.');

define('TEXT_EXPORTFORMAT0', 'Exportation au format HTML (idéal pour l\'édition d\'écran)');
define('TEXT_EXPORTFORMAT1', 'Exportation au format CSV (idéal pour l\'édition dans Open Office ou Excel)');
define('TEXT_EXPORTFORMAT2', 'Exporter comme fichier TXT');
define('TEXT_EXPORTFORMAT3', 'Exporter sous forme de fichier XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Quelles données de journal souhaitez-vous consulter?');
define('TEXT_EXPORTFILTER0', 'Tous, quel que soit leur degré d\'importance');
define('TEXT_EXPORTFILTER1', 'INFO - Informations générales sur les accès');
define('TEXT_EXPORTFILTER2', 'AVIS - Renseignements importants sur les activités qui devraient faire l\'objet d\'un examen régulier');
define('TEXT_EXPORTFILTER3', 'AVERTISSEMENT - activité qui doit être vérifiée quotidiennement');
define('TEXT_EXPORTFILTER4', 'AVIS et AVERTISSEMENT (combinaison courante pour une analyse).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interprétation des données du journal</strong></p><ul>
<li><strong>Sévérité</strong> - Les normes d\'exploitation forestière décrivent généralement les degrés de gravité de la façon suivante:<ul>>.
<li><strong>INFO</strong> renvoie à l\'activité générale. Il peut contenir ou non des détails remarquables. </li>
<li><strong>NOTICE</strong> fait référence à une activité qui indique que des privilèges plus élevés ont été utilisés, et peut inclure des choses comme la création de nouveaux utilisateurs administrateurs ou l\'ajout de nouveaux modules de paiement. Il met également en évidence lorsque des données soumises sur la page Web incluent un contenu potentiellement risqué tel que des balises de script ou des iframes intégrés, lorsque du contenu malveillant est ajouté à vos produits/catégories/pages par des employés insatisfaits ou un intrus sur votre site. Ces derniers doivent être examinés régulièrement pour déceler toute anomalie telle qu\'une activité non autorisée.</li>.
<li><strong>AVERTISSEMENT</strong> est assigné à des choses CRITIQUES telles que la suppression de modules de paiement ou la suppression d\'utilisateurs administrateurs. Il s\'agit d\'activités qui, si elles ne sont pas détectées rapidement, peuvent laisser présager des problèmes imminents. Il est recommandé de les revoir très fréquemment ; recommandé tous les jours.</li>
</ul>
</li>
<li><strong>admin_user</strong> - Ceci affichera le numéro d\'identification de l\'utilisateur administrateur suivi de son nom d\'utilisateur administrateur. Si vous n\'êtes pas connecté, il affichera 0.</li>.
<li><strong>page_accessed</strong> - Ceci indiquera le nom de la page visitée, donnant ainsi des indications sur le type d\'activité en cours.
<li><strong>paramètres</strong> - Ceci est le reste de l\'URI de la page visitée, et donne une indication supplémentaire du type d\'activité tentée par le visiteur.</li>.
<li><strong>flagged</strong>> - Si cette valeur est fixée à 1, cela indique que vous devez inspecter le contenu enregistré dans le champ "postdata" pour détecter toute entrée non autorisée de script, iframe ou autre contenu potentiellement dangereux. Une explication des contenus suspects sera listée dans le champ "attention".</li>.
<li><strong>attention</strong> - Cette section contiendra des suggestions relatives au type d\'activité suspecte qui devrait être examinée dans le champ "postdata" si elle est marquée. </li>
<li><strong>logmessage</strong>> - Contient tous les messages enregistrés par le système au sujet de l\'activité en cours, tels que l\'installation d\'un certain module.</li>.
<li><strong>postdata</strong> - Contient les données brutes de POST (avec quelques informations sensibles nettoyées) pour un examen facile en cas de soupçon d\'activité malveillante.</li>
</ul>');
