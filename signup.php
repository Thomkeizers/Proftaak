<?php
 include "includes/functions.php";
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "proftaak-db";

 $dbc = mysqli_connect($servername, $username, $password, $db);
 if(!$dbc) die("Unable to connect to MySQL: " . mysqli_error($dbc));


 $errors = [];

    if (isset($_POST['submit'])) 
    {
    
        // form is submitted
        // check posted data
        $user_name     = trim($_POST['user_name']);
        $profile_picture      = trim($_POST['profile_picture']);
        $user_password  = trim($_POST['user_password']);
        
        // empty array to store errors
        // errors will be 
        $errors = [];
    
    
        if($_POST['user_name'] == "")
        {
            $errors[] =  "vul je gebruikersnaam in";
        } 
    
        if($_POST['user_password'] == "")
        {
            $errors[] =  "vul je wachtwoord in";
        } 
    
        if($_POST['user_password_repeat'] == "")
        {
            $errors[] =  "vul je hier je wachtwoord nog een keertje in";
        } 
    
        if($_POST['user_password'] != $_POST['user_password_repeat'])
        {
            $errors[] =  "weet je zeker dat je wachtwoord goed hebt ingevuld?";
        }
        else
        {
                $hash_options = ['cost' =>11];
                $password_hash = password_hash($user_password, PASSWORD_BCRYPT, $hash_options);
        }
    
        if(count($errors) == 0)
        {
            $signupSQL = "INSERT INTO signup VALUES ('', '$user_name' , '$profile_picture' , '$password_hash')"; 
            $result = mysqli_query($dbc, $signupSQL) or die($dbc->error);
    
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/logo.ico" sizes="16x16" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

<div id="id01" class="modal">
 <form class="modal-content" method="post" action="signup.php">
    <div class="container-form">

    <div>
  <?php
  // when errors occured, show them here
  // use a foreach loop for this
    if(isset($errors) && count($errors) > 0)
    {
        echo "<ul>";
        foreach($errors as $error ){
            echo "<li>";
            echo $error;
            echo "</li>";
        }
        echo "</ul>";
    }
?>

      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter your username" name="user_name">

      <label for="foto"><b>Profile Picture</b></label>
      <input type="text" placeholder="Choose your profile picture" name="profile_picture" >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="user_password" >

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="user_password_repeat" >
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
      </div>
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
