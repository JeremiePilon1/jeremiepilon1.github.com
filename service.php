<!DOCTYPE html>
<!--
	Fichier 	: service.php
	Description     : Demande de services et autres
	Date 		: 07/02/2018	
	Auteur 		: Jeremie Pilon
	Groupe		: 117hi
-->
<html lang="fr">

<head>
    <meta name=”revised” content="Techno Technic, 5/02/2018" />
    <title>Services et autres</title>
    <link rel="icon" href="images/ico/favicon.ico" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jeremie Pilon">
    <script src="js/w3.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    <script>
        function toggleDiv(divId) {
                $("#" + divId).toggle();
            }
    </script>
</head>

<body>
    <!-- Contenu de la page -->
    <header>
        <div class="menuBar">
            <script src="js/w3.js"></script>
            <div w3-include-html="nav/menu.php"></div>
            <script>
                w3.includeHTML();
            </script>
        </div>
        <div class="topTitle">
            <h1>Techno Technic</h1>
            <h3>Demande de services ou autres</h3>
            <div class='line'></div>
        </div>
    </header>
    <div id='corps'>
        <div id="prof" class="ref">
            <h5>
                Veuillez nous faire parvenir vos information et la raison concernant la demande de service.
            </h5>
        </div>
        <section>
            <h2>&nbsp;</h2>
            <form action="mailto:jeremie.pilon@outlook.com" method="post" enctype="text/plain">
                <fieldset>
                    <legend>Profil de l'utilisateur</legend>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" size="15" id="nom" required><br>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" size="15" id="prenom" required><br>
                    <label for="phone">Téléphone :</label>
                    <input type="tel" name="phone" size="15" id="phone" placeholder='(450) 848 - 4069'><br>
                    <label for="courriel">Courriel :</label>
                    <input type="email" size="15" name="courriel" id="courriel" required><br>
                    <label for="age">Âge :</label>
                    <input type="number" size="3" name="age" id="age" min="1" max="130" required><br>
                    <br>
                    <label for="sexe">Sexe :</label> homme <input type="radio" id="sexe" name="sexe" value="m"> femme <input type="radio" name="sexe" value="f"><br><br>
                    <label for="fonction">Fonction</label>
                    <select id="fonction" name="fonction">
                        <option value="1">Étudiant</option>
                        <option value="2">Travailleur</option>
                        <option value="3">Aucun</option>
                    </select>
                    <br>
                    <label for="emplois">Emplois :</label>
                    <input type="text" name="emplois" size="20" id="emplois"><br>
                </fieldset>
                <div id="req"></div>
                <fieldset>
                    <legend>Type de requête</legend>
                    <input type="checkbox" name="req" value="reparation">Réparation
                    <input type="checkbox" name="req" value="nettoyage">Nettoyage
                    <input type="checkbox" name="req" value="achat">Achat
                    <input type="checkbox" name="req" value="vente">Vente
                    <input type="checkbox" name="req" value="vente">Suggestion
                </fieldset>
                <div id="com"></div>
                <fieldset>
                    <legend>Commentaires</legend>
                    <textarea rows="3" name="commentaires" placeholder="Inscrivez ici vos commentaires"></textarea>
                </fieldset>
                <br>
                <div style="text-align:center">
                    <input type="reset" value="Effacer">
                    <input type="submit" value="Soumettre">
                    <input type="button" value="Imprimer" onclick="window.print()">
                </div>
            </form>
        </section>
    </div>
    <div>
        <script src="js/w3.js"></script>
        <div w3-include-html="nav/footer.php"></div>
        <script>
            w3.includeHTML();
        </script>
    </div>
</body>

</html>