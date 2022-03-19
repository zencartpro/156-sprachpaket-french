<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: salemaker_info.php 628 2015-12-22 16:39:16Z webchills $
 * @translate German/French klartexter
 */

define('HEADING_TITLE','Directeur des ventes');
define('SUBHEADING_TITLE','Conseils d\'utilisation pour le directeur des ventes:');
define('INFO_TEXT','<ul>
                      <li>
                        Utilisez toujours \'.\' comme séparateur pour les décimales.
                      </li>
                      <li>
                        Saisissez toujours les montants dans la devise dans laquelle vous avez créé le poste..
                      </li>
                      <li>
                        Dans la zone de réduction, vous pouvez spécifier la valeur en pourcentage ou en prix réduit. (Exemple : &euro ; 5.00 de réduction sur tous les prix, 10% de réduction
                        de tous les prix ou réduire tous les prix à &euro ; 25.00)
                      </li>
                      <li>
                        Si vous spécifiez une fourchette de prix, cela affectera tous les articles qui s\'inscrivent dans cette fourchette. (par exemple
                        tous les articles de &euro ; 50.00 à &euro ; 150.00)
                      </li>
                      <li>
                        Choisissez cette promotion si un article est une offre spéciale <i>et</i> est affecté par les ventes créées:
                                                <ul>
                          <li>
                            <strong>Ignorer le prix spécial - Mettre à jour le prix de l\'article et remplacer le prix spécial par le prix de vente</strong><br>
                                                        La réduction de prix s\'applique au prix régulier de l\'article.
                            (par exemple, le prix normal est &euro ; 10.00, le prix spécial est &euro ; 9.50, le rabais sur les ventes est de 10%.
                                                        Le prix final de l\'article sera de &euro ; 9.00 pour une vente. Le prix spécial sera ignoré.)
                          </li>
                          <li>
                            <strong>Ignorer la remise sur ventes - une vente ne prend pas effet tant qu\'un prix spécial existe.</strong><br>
                            La remise sur les ventes n\'affectera pas les prix spéciaux. Le prix spécial est toujours affiché comme si aucune vente n\'avait lieu. (par exemple, le prix régulier est &euro ; 10.00, le prix spécial est &euro ; 9.50.)
                            la réduction du chiffre d\'affaires est la suivante 10%. Le prix final de l\'article sera de &euro ; 9,50 lors d\'une vente.
                            Le prix spécial sera ignoré.)
                          </li>
                          <li>
                            <strong>Appliquer la réduction des ventes au prix spécial - sinon appliquer au prix de l\'article</strong><br>
                            La réduction de prix s\'appliquera aux prix spéciaux. Un prix mixte est affiché.
                            (p. ex. Le prix régulier est &euro ; 10.00, le prix spécial est &euro ; 9.50, la remise est de 10%.
                            Le prix final de l\'article sera de &euro ; 8,55 pour une vente.
                            Donc un rabais supplémentaire de 10% sur le prix spécial.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Si vous laissez la zone Date de début vide, les ventes commencent immédiatement.
                      </li>
                      <li>
                        Laissez le champ Date de fin vide si vous voulez que la période de vente soit illimitée.</li>
                      <li>
                        La sélection d\'une catégorie comprend automatiquement toutes les sous-catégories.
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW','[ Fermer la fenêtre ]');