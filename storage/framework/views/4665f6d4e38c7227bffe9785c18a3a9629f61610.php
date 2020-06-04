<!DOCTYPE html>
<html>

<head>
    <title>app-web</title>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- java script  -->
 <script src="/js/jquery.min.js"></script>
 <script src="/js/popper.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {

            background-color: rgb(240, 252, 252);


             }

        .div1 {
            width: 98%;
            padding-right: 5px;
            padding-left: 5px;
            margin-right: auto;
            margin-left: auto;
           }

        .icon {

            min-height: 2em;

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
    <script>


        $(document).ready(function () {

           
            <?php echo $__env->yieldContent('script'); ?>


            

        });



    </script>
</head>

<body style="margin-top: 50px;">

    <div style="background-image:url(/img/bg.jpg); width:100%;height: 100%; position:fixed;"></div>

    <div class="div1 row justify-content-center fixed-top" style="margin-top: 5px;">



        <div class="col-">
            <h2 ><i class="icon fas fa-dove fa-2x" style="color: #339af0 ; ">SMI-FSA-AGADIR </i></h2>
        </div>
        <div class="col-xl col-">
            <nav class="nav nav-tabs nav-light justify-content-end  bg-light">
        
            <a href="<?php echo e(route('login')); ?>" class="nav-item nav-link " id="etlogin">
                    <i class="fa fa-home"></i> Se connecter
             </a>
           
            <a href="<?php echo e(route('register')); ?>" class="nav-item nav-link " id="etlogin">
                    <i class="fa fa-sign-in"></i> S'inscrire
                </a>
                <a href="" class="nav-item nav-link" id="etcontacte">
                    <i class="fa fa-envelope"></i> Contacte
                </a>
                &nbsp;&nbsp;&nbsp;

                <img src="/img/ibnzohr.jpg" alt="" class="rounded" width="15%">
                       

            </nav>

        </div>



    </div>
   
    <br>
    <br>
    <br>

<?php echo $__env->yieldContent('content'); ?>



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

</html><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/auth/layout.blade.php ENDPATH**/ ?>