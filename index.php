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
            <a href="http://sbiot.fr/accueil/plats-jour-de-semaine/">
              <h2 class="post-title">
                Marché Biot :
              </h2>
              <h3 class="post-subtitle">
                <?php echo menuDuJour::marcheBiot() ?>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php echo "ce " . strtolower(menuDuJour::getDay()) . " à 8h01";?></p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="https://www.restaurant-le-k.com/a-table/">
              <h2 class="post-title">
                Au "K" :
              </h2>
              <h3 class="post-subtitle">
                <?php echo menuDuJour::leK() ?>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php echo "ce " . strtolower(menuDuJour::getDay()) . " à 8h02";?>
            </p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="http://www.lapetitepause.fr/">
              <h2 class="post-title">
                La Petite Pause
              </h2>
              <h3 class="post-subtitle">
                <?php echo menuDuJour::laPetitePause() ?>
              </h3>
            </a>
            <p class="post-meta">Cuisiné par
              <a href="#">Hungry bot</a>
              <?php echo "ce " . strtolower(menuDuJour::getDay()) . " à 8h02";?></p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="https://www.facebook.com/Papaciccio2007/">
              <h2 class="post-title">
                Les classiques de chez Papa Ciccio
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
