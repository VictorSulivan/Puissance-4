<<<<<<< HEAD
=======
<?php

if(!empty($_POST['tri'])){
    $selected = $_POST['Fruit'];
    echo 'You have chosen: ' . $selected;
} else {
    echo 'Please select the value.';
}






?>

>>>>>>> Lucas
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="chat.html">
    <title>Scores</title>
</head>
<body>
    <!--Barre de navigation avec les different lien vers les autres pages-->
    <nav class="topnav">
        <a href="memory.html" class="nomSite">The Tower Of Mermory</a>
        <div>
            <!--Different lien vers les pages-->
            <a href="index.html">ACCUEIL</a>
            <a href="memory.html">JEU</a><!--Class active represente la page sur laquelle on est dans la barre de navigation donc si dans autre page que main a change de plavce@-->
            <a href="scores.html" class="active">SCORES</a>
            <a href="contact.html">NOUS CONTACTER</a>
            <a href="myaccount.html">MON ESPACE</a>
        </div>
    </nav>
=======
    <title>Scores</title>
</head>
<body>
    <?php
    require_once 'view/header.inc.php';
    include 'assets/includes/database.inc.php';
    include 'init_session.php';

    $id_user = $_SESSION['user']['Identifiant'];

    function PseudoExiste($conn, $pseudo){
        $functionPseudo = $conn -> prepare('SELECT Utilisateur.* FROM Utilisateur INNER JOIN Score ON Score.Identifiant_du_joueur = Utilisateur.Identifiant WHERE Utilisateur.Pseudo = ? AND Score.Identifiant_du_joueur = Utilisateur.Identifiant');
        $functionPseudo -> execute([$pseudo]);
        $functionPseudoExiste = $functionPseudo-> fetch();
        
        if(empty($functionPseudoExiste)){
            return false;
        }else{
            return true;
        }
    }
    function scoreExiste($conn, $id_user){
        $functionScore = $conn -> prepare('SELECT * FROM Score WHERE Score.Identifiant_du_joueur = ?');
        $functionScore -> execute([$id_user]);
        $functionScoreExiste = $functionScore-> fetch();
        
        if(empty($functionScoreExiste)){
            return false;
        }else{
            return true;
        }
    }


    


    ?>
>>>>>>> Lucas

     <!--Titre de la pages avec sous titre et lien vers le jeu-->
     <header class="headScores">
        <h1 class="TitreAccueilScores">Les Scores !</h1> 
    </header>   

    <main class="corpPincipalScores">

        <div class="BarreOutilsUtilisateurScores">
<<<<<<< HEAD
            <div class="SearchBarScores">
                <label for="searchScores">
                    <img src="assets/Images/SearchBar.svg" class="iconSearchBar">
                </label>
                <input type="text" id="searchScores" placeholder="Search for a player">
            </div>

            <div class="dropdownScore">
                <div class="dropdown-contentScore">
                    <select name="Trier par" class="triage">
                        <option value="NomJeuScores">Nom de jeu</option>
                        <option value="psuedoScore">Pseudo</option>
=======
            <form method="POST" action="" class="SearchBarScores">
                <label for="searchScores">
                <img src="assets/Images/SearchBar.svg" class="iconSearchBar">
                </label>
                <input type="text" id="searchScores" name="search" placeholder="Search for a player">
            </form>
                
            <div class="dropdownScore">
                <form>
                    <select name="tri" class="triage" id="dropdown-contentScore">
                        <option value="NomJeuScores">Nom de jeu</option>
                        <option value="pseudoScore">Pseudo</option>
>>>>>>> Lucas
                        <option value="DifficultyScore">Difficulté</option>
                        <option value="TempsScore">Temps</option>
                        <option value="dateScore">Date</option>
                    </select>
<<<<<<< HEAD
                </div>
                <div class="dropdown-contentScore">
                    <select name="Ordre" class="triage">
                        <option value="CroissantScore">Croissant</option>
                        <option value="DecroissantScore">Décroissant</option>
                    </select>
                </div>
=======
                </form>
                <form>
                    <select name="Ordre" class="triage" id="dropdown-contentScore">
                        <option name="CroissantScore">Croissant</option>
                        <option name="DecroissantScore">Décroissant</option>
                    </select>
                </form>
                    
>>>>>>> Lucas
                
            </div>
        </div>

<<<<<<< HEAD
=======
        <h2 class="TitleScores">Vos Scores</h2>

        <div class="TableScore">
            <h3 class="tableTitleScores">Nom du jeu</h3>
            <h3 class="tableTitleScores">Pseudo</h3>
            <h3 class="tableTitleScores">Niveau de difficulté</h3>
            <h3 class="tableTitleScores">Scores</h3>
            <h3 class="tableTitleScores">Date et heure</h3>
        </div>

        <?php

        $requeteUserscore= 'SELECT Jeu.Nom_du_jeu, Utilisateur.Pseudo, Score.Difficulte_de_la_partie, Score.Score_de_la_partie, Score.Date_et_heure_de_la_partie
        FROM Score
        INNER JOIN Jeu ON Score.Identifiant_du_jeu = Jeu.Identifiant 
        INNER JOIN Utilisateur ON Utilisateur.Identifiant = Score.Identifiant_du_joueur
        WHERE Utilisateur.Identifiant = ?
        ORDER BY Jeu.Nom_du_jeu, Score.Difficulte_de_la_partie, Score.Score_de_la_partie';
        $userScore = $conn -> prepare($requeteUserscore);
        $userScore -> execute([$id_user]);
        $uScore = $userScore -> fetch();

        $requeteAllScore= 'SELECT Jeu.Nom_du_jeu, Utilisateur.Pseudo, Score.Difficulte_de_la_partie, Score.Score_de_la_partie, Score.Date_et_heure_de_la_partie
        FROM Score
        INNER JOIN Jeu ON Score.Identifiant_du_jeu = Jeu.Identifiant 
        INNER JOIN Utilisateur ON Utilisateur.Identifiant = Score.Identifiant_du_joueur';
        $Score = $conn -> prepare($requeteAllScore);
        $Score -> execute();



        if(scoreExiste($conn, $id_user)){
        ?>

        <div class="table-resultUserScores">
            <div class="container-UseritemScore">
                <p><?= $uScore['Nom_du_jeu'] ?></p>
                <p><?= $uScore['Pseudo'] ?></p>
                <p><?= $uScore['Difficulte_de_la_partie']  ?></p>
                <p><?= $uScore['Score_de_la_partie']  ?></p>
                <p><?= date_create($uScore['Date_et_heure_de_la_partie'])->format('d/m/Y')  ?></p>
            </div>
        </div>

        <?php 
        
        }else{
        ?>
         <div class="table-resultUserScores">
            <div class="container-UseritemScore">
                <p> None </p>
                <p> None </p>
                <p> None </p>
                <p> None </p>
                <p> None </p>
            </div>
        </div>
        <?php
        }
        ?>

>>>>>>> Lucas
        <h2 class="TitleScores">Les Meilleurs Scores</h2>

        <div class="TableScore">
            <h3 class="tableTitleScores">Nom du jeu</h3>
            <h3 class="tableTitleScores">Pseudo</h3>
            <h3 class="tableTitleScores">Niveau de difficulté</h3>
            <h3 class="tableTitleScores">Scores</h3>
            <h3 class="tableTitleScores">Date et heure</h3>
        </div>
<<<<<<< HEAD
        
        <div class="table-resultScores">
            <div class="container-itemScore">
                <p class="GameNameScore">test</p>
                <p class="pseudoitemScore">test</p>
                <p class="DifficultyitemScore">test</p>
                <p class="GameScores">test</p>
                <p class="DateScore">test</p>
=======
        <div class="table-resultScores">
            <div class="container-itemScore">
                <?php
                
                if(isset($_POST['search'])){

                    if(PseudoExiste($conn, $_POST['search'])){
                        $SearchUser= 'SELECT Jeu.Nom_du_jeu, Utilisateur.Pseudo, Score.Difficulte_de_la_partie, Score.Score_de_la_partie, Score.Date_et_heure_de_la_partie FROM Score INNER JOIN Jeu ON Score.Identifiant_du_jeu = Jeu.Identifiant  INNER JOIN Utilisateur ON Utilisateur.Identifiant = Score.Identifiant_du_joueur WHERE Utilisateur.Pseudo = ?';
                        $Search = $conn -> prepare($SearchUser);
                        $Search -> execute([$_POST['search']]);
                        $tabSearch = $Search -> fetch();
                        ?>
                            <p><?= $tabSearch['Nom_du_jeu'];  ?></p>
                            <p><?= $tabSearch['Pseudo'] ?></p>
                            <p><?= $tabSearch['Difficulte_de_la_partie']  ?></p>
                            <p><?= $tabSearch['Score_de_la_partie']  ?></p>
                            <p><?= date_create($tabSearch['Date_et_heure_de_la_partie'])->format('d/m/Y')  ?></p>
                        <?php
                    }else{
                        while($AllScore = $Score -> fetch()){
                            ?>
                                <p><?= $AllScore['Nom_du_jeu'];  ?></p>
                                <p><?= $AllScore['Pseudo']; ?></p>
                                <p><?= $AllScore['Difficulte_de_la_partie'];  ?></p>
                                <p><?= $AllScore['Score_de_la_partie'];  ?></p>
                                <p><?= date_create($AllScore['Date_et_heure_de_la_partie'])->format('d/m/Y');  ?></p>
                            <?php
                        }
                    }

                }else{
                    while($AllScore = $Score -> fetch()){
                    ?>
                        <p><?= $AllScore['Nom_du_jeu'];  ?></p>
                        <p><?= $AllScore['Pseudo']; ?></p>
                        <p><?= $AllScore['Difficulte_de_la_partie'];  ?></p>
                        <p><?= $AllScore['Score_de_la_partie'];  ?></p>
                        <p><?= date_create($AllScore['Date_et_heure_de_la_partie'])->format('d/m/Y');  ?></p>
                    <?php
                    }
                    }
                    
                    ?>
                
>>>>>>> Lucas
            </div>
        </div>



<<<<<<< HEAD
        <div class="table-resultUserScores">
            <div class="container-UseritemScore">
                <p class="GameNameScoreUser">User</p>
                <p class="pseudoScoreUser">User</p>
                <p class="DifficultyScoreUser">User</p>
                <p class="GameScoresUser">User</p>
                <p class="DateScoreUser">User</p>
            </div>
        </div>
=======
       
>>>>>>> Lucas

    </main>


<<<<<<< HEAD










    <!--Footer de la page-->
    <footer> 
        <div class="contentFooter">
            <div class="flex-parentFooter">
                <div class="informationFooter">
                    <h2 class="TitreFooter">Information</h2>
                    <p>Quisque commodo facilisis purus, interdum voluptat arcu viverra sed.</p>
                    <p><strong class="OrangeCharacter">Tèl</strong> : 06 00 00 00 00</p>
                    <p><strong class="OrangeCharacter">Email</strong> : addressmail@gmail.com</p>
                    <p><strong class="OrangeCharacter">Location</strong> : Paris</p>


                    <!--Images Reseaux sociaux-->
                    <div class="reseauSociauxLogo">
                        <a href="https://fr-fr.facebook.com/"><img src="assets/Images/facebook.svg" class="Lfacebook"></a>
                        <a href="https://twitter.com/?lang=fr"><img src="assets/Images/twitter.svg" class="Ltwitter"></a>
                        <a href="https://www.google.fr/"><img src="assets/Images/google.svg"class="Lgoogle"></a>
                        <a href="https://www.pinterest.fr/"><img src="assets/Images/pinterest.svg" class="Lpinterest"></a>
                        <a href="https://www.instagram.com/?hl=fr"><img src="assets/Images/instagram.svg" class="Linstagram"></a>
                    </div>
                </div>
                <div class="TowerMemoryFooter">
                    <h2 class="TitreFooter">Power Of Memory</h2>
                    <ul class="ListeGeneralFooter">
                        <li class="listeFooter"><a href="memory.html">Jouez !</a></li>
                        <li class="listeFooter"><a href="scores.html">Les scores</a></li>
                        <li class="listeFooter"><a href="contact.html">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="copyright">Copyright © 2022 Tous droits réservés</p>
    </footer>
=======
    <?php
    require_once 'view/footer.inc.php';
    ?>
>>>>>>> Lucas

</body>
</html>