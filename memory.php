<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Memory</title>
</head>
<body>

    <!--Barre de navigation avec les different lien vers les autres pages-->
    <nav class="topnav">
        <a href="memory.html" class="nomSite">The Tower Of Mermory</a>
        <div>
            <!--Different lien vers les pages-->
            <a href="index.html">ACCUEIL</a>
            <a href="memory.html" class="active">JEU</a><!--Class active represente la page sur laquelle on est dans la barre de navigation donc si dans autre page que memory a change de plavce@-->
            <a href="scores.html">SCORES</a>
            <a href="contact.html">NOUS CONTACTER</a>
            <a href="myaccount.html">MON ESPACE</a>

        </div>
    </nav>
        
    <!--Titre de la pages avec sous titre et lien vers le jeu-->
    <header class="headMemory">
        <h1 class="TitreAccueilMemory">THE TOWER OF <br>MEMORY !</h1> 
    </header>    


    <main class="corpPincipalMemory">

        <div class="BarreOutilsUtilisateurMemory">
            <div class="DifficultyButtonMemory">
                <button type="button" onclick="">Facile</button><!--Affiche grille 5x5-->
                <button type="button" onclick="">Intermédiaire</button><!--Affiche grille 8x8-->
                <button type="button" onclick="">Expert</button><!--Affiche grille 12x12-->
                <button type="button" onclick="">Impossible</button><!--Affiche grille 20x20-->
            </div>
            <div class="AffichageScoresMemory">
                <p>TIMER SCORES</p>
            </div>
        </div>
    

        <div class="chatcontainer">
            <div class="contentChat">
                <div class="bandeauChat">
                    <img src="assets/Images/chat-118.svg">
                    <h1 class="titreChat">Chat Général</h1>
                </div>
    
    
                <div class="messageChat">
                    <div class="Mymessage">
                        <p class="sendBy">Moi</p>
                        <p class="meChat">Hello</p>
                        <p class="dateChat">Aujourd'hui à 18h</p>
                    </div>
                    <div class="sentByOthers">
                        <div class="containerImage">
                            <img src="assets/Images/PhotoProfilProv.jpg">
                        </div>
                        <div class="message">
                            <p class="sendBy">Arthur</p>
                            <p class="otherChat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, nulla quo? Neque a facere sunt? Aspernatur in aut totam, quaerat laudantium dolorem cum earum sed, id quia illo ducimus odio.</p>
                            <p class="dateChat">Aujourd'hui à 18h</p>
                        </div>   
                    </div>
                    <div class="sentByOthers">
                        <div class="containerImage">
                            <img src="assets/Images/PhotoProfilProv.jpg">
                        </div>
                        <div class="message">
                            <p class="sendBy">Arthur</p>
                            <p class="otherChat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, nulla quo? Neque a facere sunt? Aspernatur in aut totam, quaerat laudantium dolorem cum earum sed, id quia illo ducimus odio.</p>
                            <p class="dateChat">Aujourd'hui à 18h</p>
                        </div>   
                    </div>
                    
                </div>
    
                <div>
                    <form action="/action_page.php" class="form-container">
                        <input placeholder="Votre Message..." name="msg" required class="MessageBarChat"></input>
                        <button type="submit" class="buttonSendChat">Envoyez</button>
                      </form>
                </div>
                
            </div>
            <div class="buttonOpen">
                <img src="assets/Images/chat-118.svg" class="LogoOpenChat">
            </div>
        </div>

        <div class="TableauDeJeuMemory">
            <div class="TableauFacileMemory">
                <table>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                </table>
            </div>
            <div class="TableauIntermediaireMemory">
                <table>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                </table>
            </div>
            <div class="TableauExpertMemory">
                <table>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                </table>

            </div>
            <div class="TableauImpossibleMemory">
                <table>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                        <td><img src="assets/Images/MemoryVerso.png"></td>
                    </tr>
                </table>

            </div>



        </div>

        
    </main>





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
</body>
</html>