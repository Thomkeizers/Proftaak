

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Spoti-Lightz</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body class="indexbody">
    
    <div class="container">
        <?php include "includes/header.php" ?>
        
        <div class="contentdiv">
            <?php include "includes/sidenav.php" ?>

            <div class="content">

            <div class="w3-bar w3-green">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="music.php" class="w3-bar-item w3-button w3-hide-small">Music</a>
  <a href="concert.php" class="w3-bar-item w3-button w3-hide-small">Concert</a>
  <a href="about.php" class="w3-bar-item w3-button w3-hide-small">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small">Contact</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small">Login</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-green w3-hide w3-hide-large w3-hide-medium">
  <a href="music.php" class="w3-bar-item w3-button">Music</a>
  <a href="concert.php" class="w3-bar-item w3-button">Concert</a>
  <a href="about.php" class="w3-bar-item w3-button">About</a>
  <a href="contact.php" class="w3-bar-item w3-button">contact</a>
  <a href="login.php" class="w3-bar-item w3-button">Login</a>
</div>

    <br>
                <div class="sitetitle">
                    <h1 class="sitetitle__title">Spoti-Lightz</h1>
                </div>
                <video class="content__video" src="videos/back.mp4" autoplay muted loop>
                </video>
              
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