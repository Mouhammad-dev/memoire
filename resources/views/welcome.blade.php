<!DOCTYPE html>
<html lang="fr">
<head>

     <title>Sen Caytu Yaaram Online</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-5">
                         <p>Bienvenue chez un professionnel de la santé</p>
                    </div>
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 33 951 56 65</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 - 23:00 (Lundi - Dimanche)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">caytuyaaram-online@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-ambulance" aria-hidden="true"></i>Sen Caytu Yaaram Online</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Accueil</a></li>
                         <li><a href="#about" class="smoothScroll">A propos de nous</a></li>
                         <li><a href="#footer" class="smoothScroll">Contact</a></li>
                         <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    {{-- <a href="{{ url('/dashboard') }}" class="btn btn-primary ml-lg-3">Tableau de Bord</a> --}}

                                @else
                                    <a href="{{ route('login') }}" type="submit" class="btn ml-2" style="background: #BEFF33;">Se Connecter</a>

                                    @if (Route::has('register'))
                                        {{-- <a href="{{ route('register') }}" class="btn btn-primary ml-lg-3">S'inscrire</a> --}}
                                    @endif
                                @endauth
                            @endif
                        </li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Rendons votre vie plus heureuse</h3>
                                             <h1>Vie saine</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Rencontrez nos médecins</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Sen Caytu Yaarram Online</h3>
                                             <h1>Nouveau style de vie</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">En savoir plus sur nous</a>
                                        </div>
                                   </div>
                              </div>


                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Bienvenue dans <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                Sen Caytu Yaaram Online</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Sen Caytu Yaaram Online est une première au Sénégal. Une clinique de nouveau 3 située dans la capitale sénégalaise, très accessible</p>
                                   <p>Nous proposons plusieurs services. Avec l'essor de la technologie, nous avons mis en place une plateforme de consultation médicale en ligne</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Nos Contacts</h4>
                              <p>Sen Caytu Yaaram Online, une vie saine
                                Un style de vie meilleur.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 33 951 56 65</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">caytuyaaram-online@gmail.com</a></p>
                              </div>
                         </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Heures d'ouvertures</h4>
                                   <p>Lundi - Vendredi <span>06:00 - 21:00 </span></p>
                                   <p>Samedi <span>09:00  - 20:00 </span></p>
                                   <p>Dimanche <span>Visite - Urgence</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2022 Sen Caytu Yaaram Online</p>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
