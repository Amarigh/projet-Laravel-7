<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>app-web</title>

  <!-- css -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- javascript -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>


  <style type="text/css">
    .divleft {
      position: fixed;
      margin-left: 8px;
      width: auto;
      margin-top: 5%;
      height: 100%;
      background-color: rgb(240, 252, 252);
    }


    .divright {
      position: fixed;
      width: 30%;
      margin-top: 5%;
      height: 100%;
      background-color: rgb(240, 252, 252);
    }

    body {

margin-top: 50px;
}

.footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: lightsteelblue;
            color: white;
            text-align: center;
          }
    
  </style>
  <!-- css profil -->


<?php echo $__env->yieldContent('style'); ?>
</head>

<body style="background-color: rgb(240, 252, 252);">
  <!-- homme -->


  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <img src="/img/ibnzohr.jpg" alt="..." class="rounded" width="5%">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link " href="#"><span class="fa fa-user-circle"></span> Profil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="fa fa-home" aria-hidden="true"></span> Page d'acueil <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="fa fa-globe"></span>
              Ajouter Actualité</a>
          </li>
          <li class="nav-item dropdown" id="ajouteractualiter">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="fa fa-graduation-cap" aria-hidden="true"></span> Ajouter une offre
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><span class="fa fa-graduation-cap"></span> Formation</a>

              <a class="dropdown-item" href="#"><span class="fa fa-graduation-cap"></span> Stage</a>

              <a class="dropdown-item" href="#"><span class="fa fa-graduation-cap" aria-hidden="true"></span> Ecole
                supérieure</a>

              <a class="dropdown-item" href="#"><span class="fa fa-briefcase" aria-hidden="true"></span> Offre de
                travaille</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="fa fa-bolt" aria-hidden="true"></span> Consulter Actualité
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="#"><span class="fa fa-graduation-cap"></span> Formation</a>

              <a class="dropdown-item" href="#"><span class="fa fa-graduation-cap"></span> Stage</a>

              <a class="dropdown-item" href="#"><span class="fa fa-graduation-cap" aria-hidden="true"></span> Ecole
                supérieure</a>

              <a class="dropdown-item" href="#"><span class="fa fa-briefcase" aria-hidden="true"></span> Offre de
                travaille</a>
            </div>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><span class="fa fa-search"
              aria-hidden="true"></span> recherche</button>
        </form>

        <button class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><span class="fa fa-sign-out"></span>
          Déconnexion</button>
      </div>
    </nav>
  


  <!-- the nav bar is complited !!!  -->


  <div class="divleft">
    <div class="btn-group-vertical">
      <br>
      <br>
      <br>
      <br>
      <button class="exper btn btn-outline-dark my-2 my-sm-0" type="submit">Formation</button>
      <br>
      <button class="exper btn btn-outline-dark my-2 my-sm-0" type="submit">Stage</button>
      <br>
      <button class="exper btn btn-outline-dark my-2 my-sm-0" type="submit">Ecole supérieure</button>
      <br>
      <button class="exper btn btn-outline-dark my-2 my-sm-0" type="submit">Offre Emploi</button>
    </div>

  </div>
  <div class="row justify-content-end">
    <div class="col-2">
      <div class="divright">
        <div class="btn-group-vertical">
          <br>
          <br>
          <br>
          <br>
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><span class="fa fa-comment"
              aria-hidden="true"></span> demande d'enformation</button>
          <br>
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><span class="fa fa-exchange"
              aria-hidden="true"></span> Statistique</button>
          <br>
          <button class="btn btn-inline-secondary my-2 my-sm-0" type="submit"></button>
          <br>
          <button class="btn btn-inline-secondary my-2 my-sm-0" type="submit"></button>
        </div>
      </div>
    </div>
  </div>



  <br>



  <div class="container" style="margin-right: 250px;">

    <?php echo $__env->yieldContent('content'); ?>

  </div>   



  

  <br>
  <br>
  <br>
  <br><br>
  
  <!-- footer -->
  
  <footer class="page-footer font-small blue pt-4 footer">
  
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
  
          <!-- Grid row -->
          <div class="row">
  
              <!-- Grid column -->
              <div class="col-md-6 mt-md-0 mt-3">
  
                  <!-- Content -->
                  <h5 class="text-uppercase">SMI-FSA-AGADIR</h5>
  
                  <a href=""> <span class="fa fa-facebook-official " aria-hidden="true"></span> </a>&nbsp;&nbsp;
                  <a href=""><span class="fa fa-twitter" aria-hidden="true"></span></a> &nbsp;&nbsp;
                  <a href=""><span class="fa fa-linkedin-square" aria-hidden="true"></span></a>
  
              </div>
              <!-- Grid column -->
  
              <hr class="clearfix w-100 d-md-none pb-3">
  
              <!-- Grid column -->
              <div class="footer-copyright text-center py-3 col-md-6 mt-md-0 mt-3">© 2020 Copyright:
  
              </div>
          </div>
  
  
  
  
  </footer>





</body>

</html><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/layout.blade.php ENDPATH**/ ?>