<?php

  session_start();
 
?>

<div class="header">
    <div class="topnav" id="myTopnav">
        <img src="../../img/logo.jpg" alt="logo" style="width: 100px;"/> 
        <a href="../pages/accueil.php">Accueil</a>
        <a href="../pages/horaires.php">Horaires</a>
        <a href="../pages/contact.php">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
