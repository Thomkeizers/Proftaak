<?php

function connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "proftaak-db";

    $dbc = mysqli_connect($servername, $username, $password, $db);
    if(!$dbc) die("Unable to connect to MySQL: " . mysqli_error($dbc));

    return $dbc;
}

function getSongData()
{
    $dbc = connection();

    $songsinfo = [];
    $bandParameter = $_GET['bandID'];

    $songdata = "SELECT * FROM `songs-info` WHERE `bandID` = $bandParameter ";

    $songdataResult = mysqli_query($dbc, $songdata) or die (mysqli_error);


    if ($songdataResult)
    {
        echo "true";
    }

    // loop through results
    // and add any item to the  array
    // while ($songdata = mysqli_fetch_assoc($songdataResult))
    // {
	// $songsinfo[] = $songdata;
    // }



    // print_r($songsinfo);
    // echo $songsinfo['songName'];
}

?>