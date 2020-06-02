
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
    <title>Concerts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="musicbody">
    <div class="container">
        <?php include "includes/header.php" ?>
        
        <div class="contentdiv">
            <?php include "includes/sidenav.php" ?>

            <div class="content">
                <div class="content__twoalbum">
                <?php foreach ($bandsinfo1 as $bandinfo1)
                            {
                            ?>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">                   
                            <img class="frontimg" src="img/<?php echo $bandinfo1['bandImg'];?>" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $bandinfo1['bandName']; ?></h1>
                            <p>Come See us</p>
                            <a href="https://www.songkick.com/artists/2847-kings-of-leon">Tickets</a>
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
                            <img class="frontimg" src="img/<?php echo $bandinfo2['bandImg'];?>" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $bandinfo2['bandName']; ?></h1>
                            <p>Come See us</p>
                            <a href="https://www.songkick.com/artists/2847-kings-of-leon">Tickets</a>
                            </div>            
                        </div>
                    </div>
                    <?php
                    }
                    ?>              
                </div>
                
            </div>
        </div> 
    </div>
</body>
</html>