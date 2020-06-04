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

            //  coucher la formulaire de l'inscription et celui de contace 
            $("#etudiantdiplome,#etudiantnondiplome,#contacte").hide();
            // coucher le champe de secteur de travaille
            $("#secteur_travail").hide();



            $("#secteureoui").click(function () {
                $("#secteur_travail").show();


            });

            $("#secteureno").click(function () {
                $("#secteur_travail").hide();


            });

            $("#entreprise").hide();

            $("select.entreprise").change(function () {
                var langage = $(this).children("option:selected").val();

                if (langage == 'autre') {

                    $("#entreprise").show();


                }
                else $("#entreprise").hide();
            });


            $("#etlogin").click(function () {
                $("#login").show();


                $("#etudiantnondiplome,#etudiantdiplome,#contacte").hide();


            });

            $("#etcontacte").click(function () {
                $("#contacte").show();


                $("#etudiantnondiplome,#etudiantdiplome,#login").hide();


            });

            $("#etdiplome").click(function () {
                $("#etudiantdiplome").show();


                $("#etudiantnondiplome,#login,#contacte").hide();


            });
            $("#etnondiplome").click(function () {
                $("#etudiantdiplome,#login,#contacte").hide();


                $("#etudiantnondiplome").show();


            });

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
                <li class="nav-item nav-link " id="etlogin">
                    <i class="fa fa-home"></i> Se connecter
                </li>
                <li class="nav-item  dropdown">
                <li class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-sign-in" aria-hidden="true"></span> S'inscrire
                </li>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li class="dropdown-item" id="etdiplome"><span class="fa fa-graduation-cap"></span> Comme Etudiant
                        Diplomé</li>

                    <li class="dropdown-item" id="etnondiplome"><span class="fa fa-graduation-cap"></span> Comme
                        Etudiant Non
                        Diplomé</li>

                </div>
                </li>
                <li class="nav-item nav-link" id="etcontacte">
                    <i class="fa fa-envelope"></i> Contacte
                </li>
                &nbsp;&nbsp;&nbsp;

                <img src="/img/ibnzohr.jpg" alt="" class="rounded" width="15%">
                       

            </nav>

        </div>



    </div>
   
    <br>
    <br>
    <br>

    <!-- login -->
    <div class="container" id="login">



        <div class="row justify-content-center">

            <div class="col-6">
                <form style="background-color:#a5aaaa;padding: 10%; margin-top:20%;">

                    <div class="form-group">
                        <label for="email">CNE</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon2"><span class="fa fa-user"></span></div>
                            </div>
                            <input type="text" class="form-control" id="email" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="MotDePasse">Mot de passe</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon2"><span class="fa fa-lock"></span>
                                </div>
                            </div>
                            <input type="password" class="form-control" id="MotDePasse" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-dark">Se connecter</button>
                        </div>

                        <div class="col">
                            <a href="#" class=" btn-outline-danger">Mot de passe oublié </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- inscription etudiant diplomé -->

    <div class="container" id="etudiantdiplome">


        <div class="col-md-9 ftco-animate ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Se Connecter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inscription en tant que Etudiant diplomé</li>
                </ol>
            </nav>

        </div>


        <div class="row justify-content-center">

            <div class="col-8">
                <h1 class="mb-0 bread text-center" style="color: white;">Inscriez vous</h1>
                <form class="needs-validation" name="F"
                    style=" margin-bottom: 5%;background-color:#a5aaaa;padding:10%; margin-top:10%;">
                    <div class="form-row">
                        <div class="col">
                            <label for="Nom">Nom</label>
                            <input type="text" class="form-control" id="Nom" placeholder="votre nom" required>

                        </div>
                        <div class="col">
                            <label for="Prenom">Prénom</label>
                            <input type="text" class="form-control" id="Prenom" placeholder="votre prénom" required>

                        </div>

                    </div>


                    <div class="form-row">
                        <div class="col-6">
                            <label for="CNE">CNE</label>
                            <input type="text" class="form-control" id="CNE" placeholder="Code National d'Etudiant"
                                required>

                        </div>
                        <div class="col-6">
                            <label for="CIN">CIN</label>
                            <input type="text" class="form-control" id="CIN"
                                placeholder="N° de carte national d'identité" required>

                        </div>

                    </div>


                    <br>

                    <div class="col-8 form-row">
                        <label for="dateNaissance">Date de naissance</label>
                        <input type="date" class="form-control" id="dateNaissance" required>

                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col-4">Sex:</div>

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sex" id="Homme" value="Homme" checked>
                            <label class="form-check-label" for="inlineRadio1">Homme</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sex" id="Femme" value="Femme">
                            <label class="form-check-label" for="Femme">Femme</label>
                        </div>

                    </div>


                    <br>

                    <div class="col-8 form-row">
                        <label for="diplome">Votre Diplome</label>
                        <input type="text" class="form-control" id="diplome" placeholder="Votre Diplome" required>

                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col-8">Vous avez Travaillé à ce Diplome??</div>
                        <!-- &nbsp;&nbsp;&nbsp; -->
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="secteure" id="secteureoui" value="OUI">
                            <label class="form-check-label" for="secteureoui">OUI</label>
                        </div>
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="secteure" id="secteureno" value="NO"
                                checked>
                            <label class="form-check-label" for="secteureno">NO</label>
                        </div>
                    </div>
                    <br>
                    <div class="from-row " id="secteur_travail">
                        <div class="col-8 ">
                            <label for="travail">Secteure de travaille</label>
                            <input class="form-control" type="text" name="secteuretravail" id="travail"
                                placeholder="votre secteure de travaille">


                        </div>
                        <div class="w-100"></div>
                        <br>
                        <div class="col-8 ">
                            <label for="ent">Entreprise</label> &nbsp;&nbsp;&nbsp;
                            <select class="entreprise">
                                <option value="bts" selected>BTS</option>
                                <option value="helpweb">Helpweb</option>
                                <option value="autre">autre</option>


                            </select>
                        </div>
                        <div class="w-100"></div>

                        <br>
                        <div class="col-8 " id="entreprisee">

                            <label for="entreprise">Entreprise</label>
                            <input type="text" class="form-control" id="Email"
                                placeholder="nom d'entreprise ou établissent">

                        </div>
                    </div>
                    <br>


                    <div class="col-12 form-row">
                        <label for="Email">Adresse mail</label>
                        <input type="email" class="form-control" id="Email" required placeholder="votre adresse mail">


                    </div>

                    <br>

                    <div class="col-12 form-row">

                        <label for="Tel">Tel</label>
                        <input type="text" class="form-control" id="Tel" placeholder="N° de votre téléphonne" required>

                    </div>


                    <br>

                    <div class="col-8 form-row">

                        <label for="MotDePasse">Mot de passe</label>
                        <input type="password" class="form-control" id="MotDePasse" name="MotDePasse" required
                            placeholder="saisir le mot de passe">

                    </div>

                    <br>
                    <div class="col-8 form-row">
                        <label for="ConfMotDePasse">Confirmation du mot de passe</label>
                        <input type="password" class="form-control" id="ConfMotDePasse" name="ConfMotDePasse" required
                            placeholder="Confirmer votre mot de passe">



                    </div>
                    <br>

                    <button class="btn btn-dark col-4" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>







    <!-- /   etudiant Non diplomé -->


    <div class="container" id="etudiantnondiplome">

        <div class="col-md-9 ftco-animate ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Se Connecter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inscription en tant que Etudiant Non diplomé
                    </li>
                </ol>
            </nav>

        </div>

        <div class="row justify-content-center">

            <div class="col-8">
                <h1 class="mb-0 bread text-center" style="color: white;">Inscriez vous</h1>
                <form class="needs-validation"
                    style=" margin-bottom: 5%;background-color:#a5aaaa;padding:10%; margin-top:10%;">
                    <div class="form-row">
                        <div class="col">
                            <label for="Nom1">Nom</label>
                            <input type="text" class="form-control" id="Nom1" placeholder="votre nom" required>

                        </div>
                        <div class="col">
                            <label for="Prenom1">Prénom</label>
                            <input type="text" class="form-control" id="Prenom1" placeholder="votre prénom" required>

                        </div>

                    </div>


                    <div class="form-row">
                        <div class="col-6">
                            <label for="CNE1">CNE</label>
                            <input type="text" class="form-control" id="CNE1" placeholder="Code National d'Etudiant"
                                required>

                        </div>
                        <div class="col-6">
                            <label for="CIN1">CIN</label>
                            <input type="text" class="form-control" id="CIN1"
                                placeholder="N° de carte national d'identité" required>

                        </div>

                    </div>


                    <br>

                    <div class="col-8 form-row">
                        <label for="dateNaissance1">Date de naissance</label>
                        <input type="date" class="form-control" id="dateNaissance1" required>

                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col-4">Sex:</div>

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sex" id="Homme1" value="Homme" checked>
                            <label class="form-check-label" for="homme1">Homme</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sex" id="Femme1" value="Femme">
                            <label class="form-check-label" for="Femme1">Femme</label>
                        </div>

                    </div>


                    <br>




                    <div class="col-12 form-row">
                        <label for="Email1">Adresse mail</label>
                        <input type="email" class="form-control" id="Email1" required placeholder="votre adresse mail">


                    </div>

                    <br>

                    <div class="col-12 form-row">

                        <label for="Tel1">Tel</label>
                        <input type="text" class="form-control" id="Tel1" placeholder="N° de votre téléphonne" required>

                    </div>


                    <br>

                    <div class="col-8 form-row">

                        <label for="MotDePasse1">Mot de passe</label>
                        <input type="password" class="form-control" id="MotDePasse1" name="MotDePasse" required
                            placeholder="saisir le mot de passe">

                    </div>

                    <br>
                    <div class="col-8 form-row">
                        <label for="ConfMotDePasse1">Confirmation du mot de passe</label>
                        <input type="password" class="form-control" id="ConfMotDePasse1" name="ConfMotDePasse" required
                            placeholder="Confirmer votre mot de passe">



                    </div>
                    <br>

                    <button class="btn btn-dark col-4" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>




    <!-- contacte  -->

    <br>

    <div class="container" id="contacte">




        <div class="col-md-9 ftco-animate ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Se Connecter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">contacte</li>
                </ol>
            </nav>
            <h1 class="mb-0 bread text-center" style="color: white;">contacte nous</h1>
        </div>


        <br>
        <section class="ftco-section contact-section bg-light">
            <div class="container">

                <div class="row d-flex mb-5 contact-info">
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Addresse:</span> Rue 12 alhoriya ouled teima agadir</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Téléphone:</span> <a href="tel://1234567920">+212 673938202</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">amarighmustapha@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Website</span> <a
                                    href="http://e-commerce97.000webhostapp.com">e-commerce97.000webhostapp.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="row d-flex mb-5 contact-info">
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Addresse:</span> 198 anzi, tiznit, maroc</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Téléphone:</span> <a href="#">0707909180</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Email:</span> <a href="#">faridelkharazi@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>Website</span> <a
                                    href="http://e-commerce97.000webhostapp.com">e-commerce97.000webhostapp.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="row block-9 justify-content-center">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="" class="bg-white p-5 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="votre nom">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="votre email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="objet">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>

                    </div>
                </div>



            </div>
        </section>
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

</html><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/login/index.blade.php ENDPATH**/ ?>