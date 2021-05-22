<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>It4girls</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link href="gondo-style.css" rel="stylesheet">

  <style type="text/css">
    .text-primary-icon{
      color: rgb(215, 11, 82);
    }

    .btn-primary{
      background-color: rgb(215, 11, 82);
    }

    .list-styled li::before{
      background: rgb(215, 11, 82);
    }
  </style>

</head>

<body>
<?php
 include "menu.php";
?>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/img-essai/bg-parcour-flutter.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item">
            <a class="h2 font-secondary text-rose" href="courses.html">Parcours</a>
          </li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Développeur Flutter</li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <!-- course thumb -->
        <img src="images/img-essai/img-parcour-flutter.jpg" class="img-fluid w-100" style="height: 370px">
      </div>
    </div>
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Flutter</h2>
      </div>
      <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
        <ul class="list-inline text-xl-center">
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-book text-primary-icon icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">COURS</h6>
                <p class="mb-0">01 Mois</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-alarm-clock text-primary-icon icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DUREE</h6>
                <p class="mb-0">120 Heures</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary-icon icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">PAYANT</h6>
                <p class="mb-0">Prix: 75 000 fcfa</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
        <a href="#" class="btn btn-primary">S'inscrire Maintenant</a>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3>Apropos du cours</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
          ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
          labore et dolore magnam aliquam quaerat voluptatem.</p>
      </div>
      <div class="col-12 mb-4">
        <h3 class="mb-3">Ce que vous apprendrez</h3>
        <div class="col-12 px-0">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-styled">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-styled">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mb-4">
        <h3 class="mb-3">Prérequis</h3>
        <ul class="list-styled">
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati unde nulla? Lorem, ipsum
            dolor. Lorem, ipsum.</li>
        </ul>
      </div>
      <div class="col-12 mb-5">
        <h3>Certification</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        </p>
      </div>
      <!-- teacher -->
      <div class="col-12">
        <h5 class="mb-3">Enseignant</h5>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="media mb-2 mb-sm-0">
            <img class="mr-4 img-fluid" src="images/img-essai/formateur-gondo.jpg" alt="Formateur" style="width: 70px;height: 70px;">
            <div class="media-body">
              <h4 class="mt-0">Gondo Eric</h4>
              Developper d'application
            </div>
          </div>
          <div class="social-link">
            <h6 class="d-none d-sm-block">Liens Réseaux Sociaux</h6>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="border-bottom border-primary mt-4"></div>
      </div>
    </div>
  </div>
</section>
<!-- /section -->

<!-- related course -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Les parcours populaires</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- cours populaire 1 -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="parcour-cour.html">
            <img class="card-img-top rounded-0" src="images/img-essai/img-parcour-infographe.jpg" alt="course thumb" style="width: 328px;height: 290px;">
          </a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> 25 Inscrits</li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Infographe</h4>
            </a>
            <p class="card-text mb-4">
              L’infographiste a pour mission de réaliser des images 
              et des graphismes en deux ou trois dimensions pour un site internet ou une édition papier de supports de ...
            </p>
            <a href="course-single.html" class="btn btn-primary btn-sm" style="background-color: #d70b52;">Commencer</a>
          </div>
        </div>
      </div>

      <!-- cours populaire 2 -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="parcour-cour.html">
            <img class="card-img-top rounded-0" src="images/img-essai/img-parcour-back-end.jpg" alt="course thumb" style="width: 328px;height: 290px;">
          </a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> 25 Inscrits</li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Developpeur Back-end</h4>
            </a>
            <p class="card-text mb-4">
              Bien sûr créer son site internet présente de nombreux avantages 
              mais pour en profiter encore faut il savoir comment créer un site internet soi même...
            </p>
            <a href="course-single.html" class="btn btn-primary btn-sm" style="background-color: #d70b52;">Commencer</a>
          </div>
        </div>
      </div>

      <!-- cours populaire 3 -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="parcour-cour.html">
            <img class="card-img-top rounded-0" src="images/img-essai/img-parcour-office.gif" alt="course thumb" style="width: 328px;height: 290px;">
          </a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> 25 Inscrits</li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Bureautique (Pack Complet)</h4>
            </a>
            <p class="card-text mb-4">
              Bien sûr créer son site internet présente de nombreux avantages 
              mais pour en profiter encore faut il savoir comment créer un site internet soi même.
            </p>
            <a href="course-single.html" class="btn btn-primary btn-sm" style="background-color: #d70b52;">Commencer</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /related course -->

<!-- footer -->
<?php
include "footer.php";
?>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>