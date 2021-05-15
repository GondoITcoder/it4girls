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
</head>

<body>
<?php
 include "menu.php";
?>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/img-essai/bg-titre-cours.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item">
            <a class="h2 font-secondary text-rose" href="courses.html">Nos Parcours</a>
          </li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- Debut section cours -->
<section class="section">
  <div class="container">
    <!-- Debut Liste des cours ligne 1 -->
    <div class="row justify-content-center">
      <!-- cours 1 -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="details-cour.php">
            <img class="card-img-top rounded-0" src="images/img-essai/cour1.jpg" alt="course thumb" style="width: 328px;height: 290px;">
          </a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> 25 Inscrits</li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Developpeur Front-end</h4>
            </a>
            <p class="card-text mb-4">
              Bien sûr créer son site internet présente de nombreux avantages 
              mais pour en profiter encore faut il savoir comment créer un site internet soi même...
            </p>
            <a href="course-single.html" class="btn btn-primary btn-sm" style="background-color: #d70b52;">Commencer</a>
          </div>
        </div>
      </div>

      <!-- cours 2 -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="parcour-cour.html">
            <img class="card-img-top rounded-0" src="images/img-essai/img-parcour-flutter.jpg" alt="course thumb" style="width: 328px;height: 290px;">
          </a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> 25 Inscrits</li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Developpeur Flutter</h4>
            </a>
            <p class="card-text mb-4">
              Flutter est un framework développer par GOOGLE 
              dont la première version est sortir en 2017. Il est basé sur du dart qui est un langage...
            </p>
            <a href="course-single.html" class="btn btn-primary btn-sm" style="background-color: #d70b52;">Commencer</a>
          </div>
        </div>
      </div>
      
      <!-- cours 3 -->
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
    </div>
    <!-- Fin Liste des cours ligne 1 -->

    <!-- Debut Liste des cours ligne 2 -->
    <div class="row justify-content-center">
      <!-- cours 1 -->
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

      <!-- cours 2 -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="parcour-cour.html">
            <img class="card-img-top rounded-0" src="images/img-essai/img-parcour-robotique.jpg" alt="course thumb" style="width: 328px;height: 290px;">
          </a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> 25 Inscrits</li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Robotique</h4>
            </a>
            <p class="card-text mb-4">
              Flutter est un framework développer par GOOGLE 
              dont la première version est sortir en 2017. Il est basé sur du dart qui est un langage...
            </p>
            <a href="course-single.html" class="btn btn-primary btn-sm" style="background-color: #d70b52;">Commencer</a>
          </div>
        </div>
      </div>
      
      <!-- cours 3 -->
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
    <!-- Fin Liste des cours ligne 1 -->
  </div>
  </div>
</section>
<!-- Fin section des cours -->

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