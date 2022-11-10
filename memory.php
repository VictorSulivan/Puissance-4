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

    <?php
    require_once 'view/header.inc.php';
    include 'assets/includes/database.inc.php';
    include 'init_session.php';

    $id_user = $_SESSION['user']['Identifiant'];

    if(isset($_POST['buttonChat'])){

        $message = $_POST['messageInput'];

        $requeteSendMesage = 'INSERT INTO `Message` (`Identifiant_du_jeu`, `Identifiant_de_expediteur`, `Message`, `Date_et_heure_du_message`) VALUES (2, ?, ?, NOW());';
        $requeteSendMessageStatment = $conn->prepare($requeteSendMesage);
        $requeteSendMessageStatment->execute([$id_user, $message]);

        header('Location: memory.php'); 
        exit();
    }


    ?>
        
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
                    <?php
                    
                    $requeteallMessages = 'SELECT Utilisateur.Pseudo, Utilisateur.Identifiant , Message.Message, Message.Date_et_heure_du_message
                    FROM Message 
                    INNER JOIN Utilisateur ON Utilisateur.Identifiant = Message.Identifiant_de_expediteur
                    WHERE Message.Date_et_heure_du_message >= NOW() - INTERVAL 1 DAY;';
                    $allMessages = $conn -> prepare($requeteallMessages);
                    $allMessages -> execute();


                    while($msg = $allMessages -> fetch()){
                        if($msg['Identifiant'] == $id_user){                           
                    ?>
                            <p class="sendBy"><?php echo $msg['Pseudo']?> </p>
                            <p class="meChat"><?php echo $msg['Message']?> </p>
                    <?php
                    if(date_create($msg['Date_et_heure_du_message'])->format('d') ==  date("d", time())){
                    ?>
                            <p class="dateChat"><?php echo "Aujourd'hui à " . date_create($msg['Date_et_heure_du_message'])->format('H') . " heures." ?></p>
                    <?php
                    }else{
                    ?>
                            <p class="dateChat"><?php echo "Hier à " . date_create($msg['Date_et_heure_du_message'])->format('H') . " heures." ?></p>
                    <?php
                    }                   
                    ?>
                    <?php
                        }else{
                        ?>
                            <div class="message">
                                <p class="sendBy"><?php echo $msg['Pseudo']?></p>
                                <p class="otherChat"><?php echo $msg['Message']?></p>
                                <p class="dateChat"><?php echo date_create($msg['Date_et_heure_du_message'])->format('H:i:s')?> </p>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>    
                <div>
                    <form action="" class="form-container" method="POST">
                        <input placeholder="Votre Message..." name="messageInput" required class="MessageBarChat"></input>
                        <button type="submit" class="buttonSendChat" name="buttonChat">Envoyez</button>
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
    <?php
    require_once 'view/footer.inc.php';
    ?>
</body>
</html>