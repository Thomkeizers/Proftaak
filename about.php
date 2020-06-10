<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="indexbody">
    <div class="container">
        <?php include "includes/header.php" ?>
        
        <div class="contentdiv">
            <?php include "includes/sidenav.php" ?>
 
            <div class="content">
                <?php 
                    include("menu.php");
                ?>
               <div class="about_team_project">
                    <h1>The spoti-lightz project</h1>
                    <div class="project_text">
                        <p>Welcome to Spoti-Lightz. This is a school project for ROC ter AA. We are working on this project with four people and we are currently in the last stage of our first year in the course application programming. Then what is it all about? This project is made by four people with different expertises. We have webdeveloping and embedded systems skills in our work force. The idea is a website where you can listen to music and upload your own music to play. As soon as you hit that play button the embedded systems part comes in. We will send the music data to an arduino that will lighten up his display of LED-lights. Also the music will get played through a soundbox that's attached to the arduino. We wish you all the fun. <br> Greetz from Spoti-Lightz!</p>
                    </div>
               </div>
               <div class="about_team_members">
                   <h1>The spoti-lightz</h1>
                   <div class="members">
                        <div class="member">
                            <h3>thom keizers</h3>
                            <div class="img__wrap">
                                <img class="img__img" src="img/thom.jpg" />
                                <p class="img__description">Web development</p>
                            </div>
                        </div>
                        <div class="member">
                            <h3>Xander Janse</h3>
                            <div class="img__wrap">
                                <img class="img__img" src="img/xander.jpg" />
                                <p class="img__description">Web development</p>
                            </div>
                        </div>
                        <div class="member">
                            <h3>Simon Tilburgs</h3>
                            <div class="img__wrap">
                                <img class="img__img" src="img/simon.jpg" />
                                <p class="img__description">Web development</p>
                            </div>
                        </div>
                        <div class="member">
                            <h3>Maria Voor den Dag</h3>
                            <div class="img__wrap">
                                <img class="img__img" src="img/maria.jpg" />
                                <p class="img__description">Embedded systems</p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div> 
        <div id="footer">
            <?php
                include("includes/footermobile.php");
            ?>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>