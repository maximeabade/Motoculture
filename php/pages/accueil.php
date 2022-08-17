<html>
 
<head>
    <title>SAVE THIERRY MOTOCULTURE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="icon" type="image/jpg" href="../../img/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../../js/myjs.js"></script>
</head> 

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- le header de la page --> 
    <?php require("../components/header.php"); ?>

    <!-- le corps de la page -->

<!-- Container (About Section) -----------------------------------------------------------------------------------PRÉSENTATION ICI  -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <h2>A propos</h2><br>
      <h4>Je suis un auto-entrepreneur avec 30 ans d'expérience dans le milieu de la réparation automobile qui effectue des réparations sur Lézignan-sur-Corbières (11200) et alentours, cela fait maintenant 6 ans que mon entreprise a vu le jour</h4><br>
      <p><strong>Activités:</strong> Entretien et réparation motoculture agricole, véhicules, achat, vente de pièces détachées et accessoires</p>
      <br><a href="#contact"><button class="btn btn-default btn-lg">Contactez-moi</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Mes valeurs</h2><br>
      <h4><strong>MISSION:</strong> Vous garantir le meilleur des réparations à taux horaire fixe, et une transparence sans faille</h4><br>
      <h5><strong>VISION:</strong> Tous les aspects de mon métier me pasionnent. Soyez acteur de la réparation de votre matériel ou de votre véhicule, et confiez-le moi! </h5>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------------------------------------------------------->

<!-- Container (Services Section) ---------------------------------------------- ICI PRÉSENTATION DES SERVICES -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>Voici mes deux principales prestations</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <h4>RÉPARATION</h4>
      <p>Je répare votre matériel de motoculture à main d'oeuvre à tarif fixe<br><a href="#prix">Cliquez ici pour voir à quel prix</a></p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>ENTRETIEN</h4>
      <p>J'effectue un entreiten régulier de votre matériel, anticipe les problèmes, et résouds ceux que je vois, et toujours à main d'oeuvre à tarif fixe<br><a href="#prix">Cliquez ici pour voir à quel prix</a></p>
    </div>
  <br><br>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------->

<!--Container Pricing--------------------------------------------------------------------------------------------------------------- ICI PRIX ------->


<!-- FIN PRICING ------------------------------------------------------------------------------------------------------------------------------------>



<!-- Container (Contact Section) ---------------------------------------------------------------------------------------------------------------------->
    <?php include("../../contact.php"); //TODO: GÉRER LENVOI DE MAIL ET LE CSS DU FORMULAIRE ?>
        

<!-- Fin container contact ---------------------------------------------------------------------------------------------------------------------------->


    <!-- le footer de la page -->
    <?php include("../components/footer.php"); ?>

</body>

</html>
