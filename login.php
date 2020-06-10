<?php

// get the functions file
include "includes/functions.php";

$dbc = connection();

// empty string, will be filled after login or logout
$message = "";

if (isset($_POST['myLogout'])){
  // someone used a logout form

  // wipe session data completely
  session_destroy();
  // reload
  header("location: login.php");
}

// if key 'loggedin' NOT exists
if(!isset($_SESSION['loggedin']))
{
  // then create it and set to false (default: user is not logged in)
  $_SESSION['loggedin'] = false;
}

// get data from a posted (login) form
if (isset($_POST['myLogin'])){

  // start session or resume existing one
  session_start();

  // get posted data from user from login form
  $username = $_POST['user_name'];
  $password = $_POST['user_password'];
/*
  if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
*/

  // query
  $q = "SELECT * FROM signup WHERE user_name = '$username' AND user_password = '$password' ";
  $qResult = mysqli_query($dbc, $q);

  $row = mysqli_fetch_assoc($qResult);
  
  $user_id = $row['UserID'];

  
  $insertTimeQuery = "INSERT INTO signin VALUES ('', '$user_id', '$username', NOW())";
  $insertTimeQueryResult = mysqli_query($dbc, $insertTimeQuery);


  // run query

  $result = mysqli_query($dbc, $q) or die (mysqli_error($dbc));

  // fetch data

  $results = mysqli_fetch_assoc($result);
  $count = mysqli_num_rows($result);

  if($count == 1)
  {

    $_SESSION['loggedin'] = true;
    $_SESSION['logindetails'] = $results;

  }
  else {
    ("deze gegevens zijn al bekend in de database graag andere gegevens kiezen");
  }

  // compare with from input

    //Check username and password submitted by the user against stored username and password

  if($username == $_POST['user_name'] && $password == $_POST['user_password']) 
  {
    // correct username and password
    // user will be logged in
    $_SESSION['loggedin'] = true;
    // optional, reload the page
    header("Location: login.php");

  }
  else
  {
    $message = "Wrong login!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/logo.ico" sizes="16x16" />
    <title>Spoti-Lightz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">


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


</head>
<body>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <img src="img/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container-form">

    <?php
    // if message is NOT empty, then print it
    if($message != "")
    {
      echo $message;
    }
    ?>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user_name" required>
<br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="user_password" required>
        
      <button class="login" input type="submit" name="myLogin" value="Login!" >Login</button>
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div style="background-color:#f1f1f1">
      <button  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="signup.php">password?</a></span>
    </div>
  </form>
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
