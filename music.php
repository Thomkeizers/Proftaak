
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
    <title>Music</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="musicbody">
        <div class="container">
            <?php include "includes/header.php" ?>
            
            <div class="contentdiv">
                <?php include "includes/sidenav.php" ?>
       
                <div class="content">   
                    <?php 
                        include("menu.php");
                    ?>

                    <div class="content__twoalbum">
                    <?php foreach ($bandsinfo1 as $bandinfo1)
                            {
                            ?>
                        <div class="content__album">
                        <img src="img/<?php echo $bandinfo1['bandImg'];?>" alt="" class="content__img">
                            <a href="playlist.php?bandID=<?php echo $bandinfo1['bandID']; ?>" class="content__todetail">To playlist</a>
                            <h3 class="content__albumtitle"> <?php echo $bandinfo1['bandName']; ?>
                           </h3>
                        </div>  
                        <?php
                            }
                            ?>        
                    </div>
   
                    <div class="content__fouralbum">
                    <?php foreach ($bandsinfo2 as $bandinfo2)
                            {
                            ?>
                    <div class="content__album">
                    <img src="img/<?php echo $bandinfo2['bandImg'];?>" alt="Avatar" class="content__img">                      
                            <a href="playlist.php?bandID=<?php echo $bandinfo2['bandID']; ?>" class="content__todetail">To playlist</a>
                            <h3 class="content__albumtitle"> <?php echo $bandinfo2['bandName']; ?></h1>
                           </h3>
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
