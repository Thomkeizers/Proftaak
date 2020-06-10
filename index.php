

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.ico" sizes="16x16" />
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

                <?php 
                    include("menu.php");
                ?>
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