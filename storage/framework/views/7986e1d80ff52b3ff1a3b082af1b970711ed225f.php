<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>app-web</title>

  <!-- css -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  
  
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  


  <!-- javascript -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

<?php if(auth()->guard()->guest()): ?>
<?php else: ?>
<style type="text/css">
  
    .divleft {
      position: fixed;
      margin-left: 8px;
      width: 10%;
      margin-top: 5%;
      height: 100%;
     /* background-color: rgb(240, 252, 252); */
    }


    .divright {
      position: fixed;
      width: 20%;
     /* margin-right:10%; */
    
      height: 100%;
      /*background-color: rgb(240, 252, 252);*/ 
      
    }


   
    .image {
  
  width: 2em;
  height: 2em;
}
    
  </style>
<?php endif; ?>

<style  type="text/css">
   body {
    
margin-top: 60px;

}

.footre {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color:  #D0D4D9  ; /* #F1F5E6; //#77D70A #858680*/
            color: white;
            text-align: center;
          }


</style>

 
  


<?php echo $__env->yieldContent('style'); ?>

<script>


    $(document).ready(function () {

       
        <?php echo $__env->yieldContent('script'); ?>

        $("#descution").hide();
$("#descute").click(function () {

    $("#descution").toggle();
  

});
        

    });



</script>
</head>

<body >
  


<?php if(auth()->guard()->guest()): ?>
    
<div style="background-image:url(/img/bg.jpg); width:100%;height: 100%; position:fixed;"></div>
<?php endif; ?>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <span class=" fas fa-dove fa-2x" style="color: #339af0 ; ">SMI_SHARE </span>  
      
         <img src="/img/ibnzohr.jpg" alt="..." class="rounded" width="5%" style="margin-left: 10px;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if(auth()->guard()->guest()): ?>

            <?php else: ?>
            
            &nbsp;&nbsp
                <a class="nav-link nav-item active" href="<?php echo e(url('/home')); ?> "><span class="fa fa-home" aria-hidden="true"></span> Page d'acueil <span
                    class="sr-only">(current)</span></a>
              
              <li class="nav-item">
                <a class="nav-link" href=" <?php echo e(url('/actualite')); ?> "><span class="fa fa-globe"></span>
                  Partager Actualité</a>
              </li>
              <li class="nav-item dropdown" id="ajouteractualiter">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-graduation-cap" aria-hidden="true"></span> Partager une offre
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo e(route('formation.create')); ?>"><span class="fa fa-graduation-cap"></span> Formation</a>
    
                  <a class="dropdown-item" href="<?php echo e(route('stage.create')); ?>"><span class="fa fa-graduation-cap"></span> Stage</a>
    
                  <a class="dropdown-item" href="<?php echo e(route('ecole.create')); ?>"><span class="fa fa-graduation-cap" aria-hidden="true"></span> Ecole
                    supérieure</a>
    
                  <a class="dropdown-item" href="<?php echo e(route('emploi.create')); ?>"><span class="fa fa-briefcase" aria-hidden="true"></span> Offre de
                    travaille</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-bolt" aria-hidden="true"></span> Consulter Actualité
                </a>
    
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    
                  <a class="dropdown-item" href=" <?php echo e(route('formation.index')); ?> "><span class="fa fa-graduation-cap"></span> Formation</a>
    
                  <a class="dropdown-item" href="<?php echo e(route('stage.index')); ?> "><span class="fa fa-graduation-cap"></span> Stage</a>
    
                  <a class="dropdown-item" href="<?php echo e(route('ecole.index')); ?>"><span class="fa fa-graduation-cap" aria-hidden="true"></span> Ecole
                    supérieure</a>
    
                  <a class="dropdown-item" href="<?php echo e(route('emploi.index')); ?>"><span class="fa fa-briefcase" aria-hidden="true"></span> Offre de
                    travaille</a>
                </div>
              </li>

            
            <?php endif; ?>
         
        </ul>
         <?php if(auth()->guard()->guest()): ?>
    <a href="<?php echo e(route('login')); ?>" class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><span class="fa fa-home"></span>
            Se connecter</a>

            <a href="<?php echo e(route('contact')); ?>" class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><i class="fa fa-envelope"></i>
              Contact</a>

            <a href="<?php echo e(route('register')); ?>" class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><i class="fa fa-sign-in-alt" aria-hidden="true"></i>
                S'inscrire</a>

          <?php else: ?>      
         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-inline-secondary my-2 my-sm-0" type="submit"><span class="fa fa-search"
                aria-hidden="true"></span> recherche</button>
          </form>
          
          
            <a class="nav-link nav-item" href="<?php echo e(route('etudiant.show',['etudiant'=>Auth::guard('web')->id()])); ?>"> 
              
              <?php if(Auth::guard('web')->user()->img): ?>
            <img src="/img/<?php echo e(Auth::guard('web')->user()->img); ?>" class="image rounded-circle" alt="">
              <?php else: ?>
              <span class="fa fa-user-circle" ></span>
              <?php endif; ?>
              
              <em> Profil</em></a>

              
        
          <a  class=" outline-secondary  nav-item nav-link"  href="<?php echo e(route('deconnexion')); ?>"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
            Déconnexion
            <form id="logout-form" action="<?php echo e(route('deconnexion')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
          </a> 
        
         
          
         

      <?php endif; ?>
      </div>
    </nav>
  


  <!-- the nav bar is complited !!!  -->

<?php if(auth()->guard()->guest()): ?>

 <?php else: ?>  
 <div class="divleft ">
    <div class="btn-group-vertical">
      
   
    <a href="<?php echo e(route('formation.index')); ?>" class=" btn  " style="background: #F1F5E6;">Formation</a>
      <br>
      <a href="<?php echo e(route('stage.index')); ?>" class=" btn  " style="background: #F1F5E6;" >Stage</a>
      <br>
      <a href="<?php echo e(route('ecole.index')); ?>" class=" btn  " style="background: #F1F5E6;" >Ecole supérieure</a>
      <br>
      <a href="<?php echo e(route('emploi.index')); ?>" class=" btn  " style="background: #F1F5E6;" >Offre Emploi</a>
    </div>

  </div>


  <div class="row justify-content-end ">
    
      <div class="divright  " >
       
        <div class="btn-group-vertical">
          <br>
          <br>
          <br>
          
          <a href=" <?php echo e(route('etudiant.index')); ?> " class=" btn  " style="background: #F1F5E6;" > <span class="fas fa-hat-cowboy"></span> Membres</a>
          <br>
          <button class=" btn  " style="background: #F1F5E6;" type="submit" id="descute"><span class="fa fa-comment"
              aria-hidden="true"></span> demande d'information</button>
          <br>
         
      
          
           <div style=" min-height: 400px; " id="descution">
           
                <iframe class="embed-responsive-item"  src="http://localhost:8000/descution#message" frameborder="0" style="min-height: 400px;"></iframe>




           </div>
           
          <button class=" btn  " style="background: #F1F5E6;display: none;" type="submit"><span class="fa fa-exchange"
              aria-hidden="true" ></span> Statistique</button>
          <br>
          
        </div>
        
      </div>
       


      
    
    
  </div>
  
 
<?php endif; ?>
 
<div class="container col-8"  style="margin:auto;  margin-right:20%; min-height: 700px; ">

  <?php echo $__env->yieldContent('content'); ?>  

</div>

<br><br>
  
  <!-- footer -->
  
  
  <footer class="page-footer font-small blue pt-4 footre">
  
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
  
          <!-- Grid row -->
          <div class="row">
  
              <!-- Grid column -->
              <div class="col-md-6 mt-md-0 mt-3">
  
                  <!-- Content -->
                  <h5 class="text-uppercase" style="color: black">SMI-FSA-AGADIR</h5>
  
                 <a href="//m.facebook.com/amarighmostapha" ><i class="fab fa-facebook"></i></a> &nbsp;&nbsp;
                  <a href=""><i class="fab fa-linkedin"></i></a> &nbsp;&nbsp;
                  <a href=""><i class="fab fa-twitter"></i></a> 
  
              </div>
              <!-- Grid column -->
  
              <hr class="clearfix w-100 d-md-none pb-3">
              <div><a href="<?php echo e(route('contact')); ?> " style="color: black"><i class="fa fa-envelope"></i> Contactez-nous</a></div>
              <div class="footer-copyright text-center py-3 col-md-6 mt-md-0 mt-3" style="color: black">© 2020 Copyright:
  
              </div>
          </div>
      </div>
  
  
  
  
  </footer>





</body>

</html><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/layouts/app.blade.php ENDPATH**/ ?>