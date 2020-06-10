<?php include "includes/functions.php" ?>

<?php

 $bandParameter = $_GET['bandID'];

 $dbc = connection();

 $songsinfo = array();

 $songdata = "SELECT * FROM `songs-info` WHERE `bandID` = $bandParameter ";

 $songdataResult = mysqli_query($dbc, $songdata) or die (mysqli_error);

 //loop through results
 //and add any item to the  array
 while ($songdata = mysqli_fetch_assoc($songdataResult))
 {
 $songsinfo[] = $songdata;
 }

 $bandsinfo = array();

 $banddata = "SELECT * FROM `bands-info` WHERE `bandID` = $bandParameter ";

 $banddataResult = mysqli_query($dbc, $banddata) or die (mysqli_error);


 //loop through results
 //and add any item to the  array
 while ($banddata = mysqli_fetch_assoc($banddataResult))
 {
 $bandsinfo[] = $banddata;
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.ico" sizes="16x16" />
    <title>Playlist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

                <?php foreach ($bandsinfo as $bandinfo)
                        {
                        ?>
                    <div class="content__playlistphoto">
                        <img class="content__artistphoto" src="img/<?php echo $bandinfo['bandImg'];?>" alt="">
                        <h3 class="content__artistheading"><?php echo $bandinfo['bandName']; ?></h3>
                        <a href="" class="content__artistheadingplay"><div class="content__tabledata__wrapper">
                                        <div class="content__tabledata__wrapper-line1"></div>
                                        <div class="content__tabledata__wrapper-line2"></div>
                                        <div class="content__tabledata__wrapper-line3"></div>
                                        <div class="content__tabledata__wrapper-line4"></div>
                                        <div class="content__tabledata__wrapper-line5"></div>
                                        <div class="content__tabledata__wrapper-line6"></div>
                                        <div class="content__tabledata__wrapper-line7"></div>
                                    </div></a>
                        <?php
                        }
                        ?>
                </div>

                <div class="content__searchdiv">
                    <img class="content__searchicon" src="https://img.icons8.com/windows/32/000000/search.png"/>
                    <input type="text" class="content__searchinput" placeholder="Search">
                </div>

                <div class="content__songs">
                    <table class="content__songstable">
                    <!-- INSERT PHP. Hier loop je steeds een tr met table data. -->
                    <?php foreach ($songsinfo as $songinfo)
                    {
                    ?>
                        <tr class="content__tablerow">
                            <td class="content__tabledata"><?php echo $songinfo['songName']; ?></td>
                            <td class="content__tabledata"><?php echo $songinfo['songTime']; ?></td>
                            <td class="content__tabledata"> 
                                                                    
                            <button onclick="play(this)" id="<?php echo $songinfo['songID']; ?>" songname="<?php echo $songinfo['songLink']; ?>" type="button">Play</button></td>

<!--
                            <td class="content__tabledata"><button onclick="pause()"   id="pausebutton" type="button">Pause Audio</button></td></td>
                            <td class="content__tabledata"><button onclick="stop()"    id="stopbutton"  type="button">Stop Audio</button></td></td>
-->                            
                            <td class="content__tabledata">
                                <div id="half-stars-example">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                        <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                        <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                        <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                        <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </table>
                </div>

                    <div class="playbar">
                        <audio id="audio" onpause="pauzeren()"  onplay="resume()" class="playbar__control" controls="controls">
                            <source id="playbarmusic" type="audio/mpeg" src="audio/godzilla.mp3">
                        </audio>
                    </div>
            </div>

        </div> 
        <div id="footer">
            <?php
                include("includes/footermobile.php");
            ?>
        </div>
    </div>


    <!-- dit is link naar ons js file -->
    <script type="text/javascript" src="js/main.js"></script>
    <!-- dit jquery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

