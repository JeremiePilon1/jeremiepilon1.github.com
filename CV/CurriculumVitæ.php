<!DOCTYPE html>
<!--
	Fichier 	: CurriculumVitæ.html
	Description     : Curriculum Vitæ
	Date 		: 07/02/2018	
	Auteur 		: Jeremie Pilon
	Groupe		: 117hi
-->
<html lang="fr">

<head>
    <meta name=”revised” content="Techno Technic, 5/02/2018" />
    <title>Curriculum Vitæ</title>
    <link rel="icon" href="../images/ico/favicon.ico" type="image/gif" sizes="16x16">
    <meta name="author" content="Jeremie Pilon">
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/w3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
</head>

<body>
    <header>
        <div class="menuBar">
            <script src="js/w3.js"></script>
            <div w3-include-html="menu.php"></div>
            <script>
                w3.includeHTML();
            </script>
        </div>
        <div class="topTitle">
            <h3>Mon Curriculum Vitæ</h3>
            <div class='line'></div>
        </div>
    </header>
    <div class="ref">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#JérémiePilon">Jérémie Pilon</a></li>
            <li><a data-toggle="tab" href="#Compétences">Profil de métier</a></li>
        </ul>
        <div class="tab-content">
            <div id="JérémiePilon" class="tab-pane fade in active">
                <hr>
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'Presentation')" id="defaultOpen">Présentation</button>
                    <button class="tablinks" onclick="openTab(event, 'Information')">Information Personnel</button>
                    <button class="tablinks" onclick="openTab(event, 'Joindre')">Me joindre</button>
                </div>
                <div id="Presentation" class="tabcontent">
                    <h3>Présentation</h3>
                    <hr>
                    <p class='prezCentered'>Je me présente, je m'apelle Jérémie. Je suis dans le domaine de l'informatique depuis 2006 et passionné du domaine et je suis toujours à prêt a de noveau défi.</p>
                    <p class='prezCentered'>Je travail dans le domain par moi même. Je suis présentement étudiant à l'école Centre de formation des Nouvelle-Technologie de Sainte-Thérèse avec pour but d'obtenir un DEP et de voir dans quelle domaine de l'informatique je me situe
                        le plus.</p>
                    <p class='prezCentered'>Par la suite je vais voir si je vais faire un DEC (diplône d'étude colégial) ou un AEC (attestation d'étude colégial) en programmeur analyste.</p>
                    <hr>
                </div>
                <div id="Information" class="tabcontent">
                    <h3>Information Personnel</h3>
                    <hr>
                    <table id="InfoTab">
                        <tr>
                            <th>Nom</th>
                            <td>Jérémie Pilon</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>Canada</td>
                        </tr>
                        <tr>
                            <th>Province</th>
                            <td>Québec </td>
                    </table>
                    <hr>
                </div>
                <div id="Joindre" class="tabcontent">
                    <h3>Me joindre</h3>
                    <hr>
                    <table id="ContactTab">
                        <tr>
                            <th>Mobile Personnel</th>
                            <td>(450) 530 - 5699</td>
                        </tr>
                        <tr>
                            <th>Courriel</th>
                            <td><a href="mailto:jeremie.pilon@outlook.com?Subject=Je%20vous%20contact%20depuis%20votre%20CV" target="_top">jeremie.pilon@outlook.com</a></td>
                        </tr>
                    </table>
                    <hr>
                </div>
            </div>
            <div id="Compétences" class="tab-pane fade">
                <hr>
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'Competences')">Compétences</button>
                    <button class="tablinks" onclick="openTab(event, 'Connaissances')">Connaissances</button>
                    <button class="tablinks" onclick="openTab(event, 'Domaine')">Domaine d'application</button>
                </div>
                <div id="Competences" class="tabcontent">
                    <h3>Compétences</h3>
                    <hr>
                    <table id="CompetencesTab">
                        <tr>
                            <th rowspan='3'>Technicien Informatique</th>
                            <td>Réparation & maintenance</td>
                            <td>Composantes d’un ordinateur</td>
                        </tr>
                        <tr>
                            <td>Diagnostique</td>
                            <td>Débogage</td>
                        </tr>
                        <tr>
                            <td>Assemblage d’un ordinateur</td>
                            <td>Assemblage d’un portable</td>
                        </tr>
                        <tr>
                            <th rowspan='2'>Réseau</th>
                            <td>Gestion réseau</td>
                            <td>Switch Cisco</td>
                        </tr>
                        <tr>
                            <td colspan='2'>Réseau et gestion de l’accès</td>
                        </tr>
                        <tr>
                            <th rowspan='3'>Édition</th>
                            <td>Suite Office 2010 – 2016</td>
                            <td>Batch files</td>
                        </tr>
                        <tr>
                            <td>MS-DOS</td>
                            <td>HTML</td>
                        </tr>
                        <tr>
                            <td colspan='2'>Base de données</td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div id="Connaissances" class="tabcontent">
                    <h3>Connaissances</h3>
                    <hr>
                    <table id="ConnaissancesTab">
                        <tr>
                            <th rowspan='2'>Système d'éxploitation</th>
                            <td>Windows 7, 8 et 10</td>
                            <td>LINUX</td>
                        </tr>
                        <tr>
                            <td colspan='2'>Apple</td>
                        </tr>
                        <tr>
                            <th rowspan='2'>Édition</th>
                            <td>Photoshop</td>
                            <td>After Effect</td>
                        </tr>
                        <tr>
                            <td colspan='2'>Illustrator</td>
                        </tr>
                        <tr>
                            <th>Appareil portable</th>
                            <td>Mobile</td>
                            <td>Tablette</td>
                        </tr>
                        <tr>
                            <th rowspan='2'>Configurer des périphériques externes</th>
                            <td>Télévision</td>
                            <td>Système de son</td>
                        </tr>
                        <tr>
                            <td>Console de jeux vidéo</td>
                            <td>Et plus...</td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div id="Domaine" class="tabcontent">
                    <h3>Domaine d'application</h3>
                    <hr>
                    <table id="DomaineTab">
                        <tr>
                            <td>Soutiens technique</td>
                        </tr>
                        <tr>
                            <td>Diagnostique</td>
                        </tr>
                        <tr>
                            <td>Débogage</td>
                        </tr>
                        <tr>
                            <td>Assemblage d'ordinateur et portable</td>
                        </tr>
                        <tr>
                            <td>Réparation</td>
                        </tr>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
        <div>
            <script src="js/w3.js"></script>
            <div w3-include-html="../nav/footer.php"></div>
            <script>
                w3.includeHTML();
            </script>
        </div>
    </div>
</body>

</html>