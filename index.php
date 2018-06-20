<?php include "php/class_restaurant.php";
$dw = menuDuJour::getDay(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>C'est quoi qu'on mange ?</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">C'est quoi qu'on mange ?</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="https://galek.spyzone.fr/">Votez</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/tasteofparis.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>C'est quoi qu'on mange aujourd'hui ?</h1>
              <span class="subheading">Les plats du jour autour de Netapsys ce <?php echo strtolower(menuDuJour::getDay());?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="https://www.google.fr/maps/dir/48.6144167,7.7087412/March%C3%A9+Frais+de+St%C3%A9phane+Biot,+51+Rue+de+Strasbourg,+67206+Mittelhausbergen/@48.6120922,7.7009841,17z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x4796b7e8b96b27a5:0x5629eff44b35cd22!2m2!1d7.6987196!2d48.6097677!3e3!5m1!1e1" target="_blank">
              <h2 class="post-title">
                <?php echo "Marché Biot : " . menuDuJour::marcheBiotPrice();?>
              </h2>
              <h3 class="post-subtitle">
                <?php echo menuDuJour::marcheBiot()[0];
                if(menuDuJour::marcheBiotVege()[0]){
                    echo "<br/><p style='color:#00cc66'>Vege friendly : " . menuDuJour::marcheBiotVege() . "</p>" ;}?>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php
              echo "ce " . strtolower(menuDuJour::getDay()) . " à 8h03";?></p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="https://www.google.fr/maps/dir/48.6144167,7.7087412/Le+K,+2+Avenue+de+l'Europe,+67300+Schiltigheim/@48.6128001,7.709134,17z/data=!3m1!4b1!4m17!1m6!3m5!1s0x4796b7e35e6cb0bd:0xacbe350ad43d37cb!2sLe+K!8m2!3d48.6119471!4d7.7135983!4m9!1m1!4e1!1m5!1m1!1s0x4796b7e35e6cb0bd:0xacbe350ad43d37cb!2m2!1d7.7135983!2d48.6119471!3e3!5m1!1e1" target="_blank">
              <h2 class="post-title">
                Au "K" : 13€
              </h2>
              <h3 class="post-subtitle">
                <?php echo menuDuJour::leK() ;?>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php echo "ce " . strtolower(menuDuJour::getDay()) . " à 8h02";?>
            </p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="https://www.google.fr/maps/dir/48.6144167,7.7087412/La+Petite+Pause+Schiltigheim,+Rue+Alfred+Kastler,+Schiltigheim/@48.6124495,7.7124531,17z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x4796c81d207fde15:0x47ddda0880f8dd3!2m2!1d7.720553!2d48.610507!3e3!5m1!1e1" target="_blank">
              <h2 class="post-title">
                <?php echo "La Petite Pause : " . menuDuJour::laPetitePausePrice();?>
              </h2>
              <h3 class="post-subtitle">
                <?php echo menuDuJour::laPetitePause()[0] ;?>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php echo "ce " . strtolower(menuDuJour::getDay()) . " à 8h02";?></p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="https://www.google.fr/maps/dir/48.6144167,7.7087412/Papa+Ciccio,+Route+du+G%C3%A9n%C3%A9ral+de+Gaulle,+Schiltigheim/@48.6095721,7.7147292,15z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x4796c814f00a4191:0x8c4b5b01a1ce1582!2m2!1d7.7378317!2d48.603201!3e3!5m1!1e1" target="_blank">
              <h2 class="post-title">
                Chez Papa Ciccio : 6,50€
              </h2>
              <h3 class="post-subtitle">

                      <span>Les pâtes :</span><p>Farfale, Fusilli, Penne, Spaghetti</p><br/><br/>

                      <span>Les sauces :</span>
                      <p>3 fromages<br/>
                      Arrabiatta<br/>
                      Aurora<br/>
                      Bolognaise<br/>
                      Carbonara Thon / Boeuf / Lardons / Pesto Verde<br/>
                      Champignon crème<br/>
                      Olive (sauce tomate)<br/>
                      Pesto Verde / Rosso<br/>
                      Piccantina<br/>
                      Poulet Curry / Oignon / Poivre / Moutarde<br/>
                      Poulet Méditerranéene (don't ask) / Champignons noirs<br/>
                      Saumon crème</p><br/><br/>

                      <span>Les fromages :</span><p> emmental, parmigiano</p><br/><br/>

                      67 route du général de Gaulle, 67300 Schiltigheim -<br/> 03 88 83 20 08
                  </p>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php echo "et ce tous les jours de la semaine";?></p>
          </div>
          <hr>
          <!-- Pager -->
          <!-- <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div> -->
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">

              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
                    <i class="sr-only"></i>
                  </span>
                </a>
              </li>

            </ul>
            <p class="copyright text-muted">Copyright &copy; Netapsys / Sodifrance / Antéo / On ne sait plus...</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
