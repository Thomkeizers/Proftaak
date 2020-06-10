<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="music.php">Music</a>
  <a href="concert.php">Concert</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <a style="float:right" href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="hamburger()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function hamburger() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>