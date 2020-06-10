<?php

    session_start();
    // $_SESSION['logindetails'] = $results;
?>
       
<header class="header">
    <div class="header__logobox">
    <img src="img/logo.png" alt="The logo of Spoti-Lightz." class="header__logo">
    </div>

    <div class="header__user">
        <span class="header__username"><?php echo $_SESSION['logindetails']['user_name']; ?></span>
        <img src="img/<?php echo $_SESSION['logindetails']['profile_picture']; ?>" class="header__profilepic">
    </div>
</header>