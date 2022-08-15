<html>
 
<head>
    <title> SAVE THIERRY | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="icon" type="image/jpg" href="../../img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head> 
 
<body>

    <!-- le header de la page -->
    <?php include("../components/header.php"); ?>

    <!-- le corps de la page -->
    <div class="corps" >


        <!-- le contenu principal à droite de la page -->
        <div class="principal">

            <h2 style="font-size:50px">Contactez nous!</h2>
 
            <?php 
            if (isset($_GET['mail'])) { 
                echo('<p>Votre message a bien été envoyé.</p>'); 
            }
            ?>
                

            <form action="../services/verifMail.php" class="form" method="post" style="background : url('../../img/carte_de_visite_opacity_cut.jpg'); background-repeat: no-repeat; width:78%">

                <div class="champForm" ><p style="font-weight:bold">Nom</p><input type="text" name="nom" placeholder="Entrez votre nom" required /></div>

                <div class="champForm"><p style="font-weight:bold">Prénom</p><input type="text" name="prenom" placeholder="Entrez votre prénom" required /></div>

                <div class="champForm"><p style="font-weight:bold">Email</p><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="30" placeholder="Entrez votre adresse mail" required/></div>

                <div class="champForm"><p style="font-weight:bold">Sujet</p><input type="text" name="sujet" placeholder="Entrez le sujet de votre mail" required /></div>

                <div class="champForm"><p style="font-weight:bold">Contenu</p><input type="textarea" name="contenu" rows="5" cols="33" placeholder="Entrez le contenu de votre mail" required style="min-width : 30%; padding-left:auto%" /></div>

                <div class="champForm"><p></p><input type="submit" value="Valider" id="boutonValider" style="min-width: 200px"/></div>

            </form>

        </div>

    </div>

    <!-- le footer de la page -->
    <?php include("../components/footer.php"); ?>

</body>

</html>
