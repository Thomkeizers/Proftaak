
<?php include "includes/functions.php" ?>

<?php

 $dbc = connection();


 $bandsinfo1 = array();

 $banddata1 = "SELECT * FROM `bands-info`limit 2 ";

 $banddataResult1 = mysqli_query($dbc, $banddata1) or die (mysqli_error);


 //loop through results
 //and add any item to the  array
 while ($banddata1 = mysqli_fetch_assoc($banddataResult1))
 {
 $bandsinfo1[] = $banddata1;
 }



 $bandsinfo2 = array();

 $banddata2 = "SELECT * FROM `bands-info` WHERE `bandID` in ( 3, 4) ";

 $banddataResult2 = mysqli_query($dbc, $banddata2) or die (mysqli_error);


 //loop through results
 //and add any item to the  array
 while ($banddata2 = mysqli_fetch_assoc($banddataResult2))
 {
 $bandsinfo2[] = $banddata2;
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" type="image/png" href="img/favicon.ico" sizes="16x16" />
    <title>Concert</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="musicbody">
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

                <div class="content__twoalbum">
                <?php foreach ($bandsinfo1 as $bandinfo1)
                            {
                            ?>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">                   
                            <img src="img/<?php echo $bandinfo1['bandImg'];?>" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $bandinfo1['bandName']; ?></h1>
                  
                            <h4><b>20% OFF YOUR PURCHASE</b></h4> 
<h5 class="discount"> Gebruik deze code voor een discount
    <br>
    <br>
<span class="promo"><?php echo $bandinfo1['discountcode']; ?></span>
    <br>
    <br>
 Expires: Jan 21, 2021</h5>
                            <a href="<?php echo $bandinfo1['buyticket']; ?>">Tickets</a> 
                            </div>            
                        </div>
                    </div>
                    <?php
                    }
                    ?>
      
                </div>

                <div class="content__fouralbum">
                <?php foreach ($bandsinfo2 as $bandinfo2)
                            {
                            ?>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">                   
                            <img src="img/<?php echo $bandinfo2['bandImg'];?>" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $bandinfo2['bandName']; ?></h1>
                            
    <h4><b>20% OFF YOUR PURCHASE</b></h4> 
<h5 class="discount"> Gebruik deze code voor een discount
    <br>
    <br>
    <span class="promo"><?php echo $bandinfo2['discountcode']; ?></span>
    <br>
    <br>
 Expires: Jan 21, 2021</h5>   
                            <a href="<?php echo $bandinfo2['buyticket']; ?>">Tickets</a> 
                            </div>            
                        </div>
                    </div>
                    <?php
                    }
                    ?>              
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