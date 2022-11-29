<?php
   $categ = null ;

   if (isset($_POST['categorie'])){
      $categ = $_POST['categorie'];
   
      if ($categ == 'chambre'){
         $nom = $_POST['nom'];
         $arrivee = $_POST['date-arrivee'];
         $depart = $_POST['date-depart'];
         $type = $_POST['type'];

         $message = "Bonjour, je suis " . $nom . " J'aimerais réserver une chambre " . $type . " dans votre hôtel pour la période du " . $arrivee . " au " . $depart . "." ;

         $message_encode = str_replace(' ', '%20', $message);

         $link = "Location: https://wa.me/65689156?text=" . $message_encode;

         header($link);
         exit();
      }

      if ($categ == 'salle'){
         $nom = $_POST['nom'];
         $debut = $_POST['date-arrivee'];
         $fin = $_POST['date-depart'];
         $type = $_POST['type'];

         $message = "Bonjour, je suis " . $nom . " J'aimerais réserver votre " . $type . " salle de conférence pour la période du " . $debut . " au " . $fin . "." ;

         $message_encode = str_replace(' ', '%20', $message);

         $link = "Location: https://wa.me/65689156?text=" . $message_encode;

         header($link);
         exit();
      }

      
   }
   
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Complexe Lama</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="./css/responsive.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.min.css">

      <!-- FontAwesome-->
      <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">

      <!-- Réservation-->
      <link rel="stylesheet" href="./css/reservation.css">

      <!-- Chambres -->
      <link rel="stylesheet" href="./css/chambres.css">
      
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="./images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="./images/logo-good.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">A propos</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Nous contacter</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1>BIENVENUE AU COMPLEXE HÔTELIER LAMA</h1>
                        <p>Un cadre sécurisé, apaisant et oxygéné pour vos séjours à Bobo-Dioulasso</p>
                        <a href="#about">En savoir plus</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      
      <!-- choose  section -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="choose_box">
                     <div class="titlepage">
                        <h2><span class="text_norlam">Choisissez la chambre qui</span> <br>vous convienne le mieux</h2>
                     </div>
                     <p>Une diversité de chambres confortables à des prix donnés à tous. Nos chambres sont pensées pour donner à nos clients une expérience maximum de repos et apaisement et ils nous le rendent par leurs nombreux commentaires positifs.</p>
                  </div>
               </div>
               <div class="col-md-6 hide">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="img_box">
                           <figure><img src="./images/image1.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="img_box">
                           <figure><img src="./images/image2.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="img_box">
                           <figure><img src="./images/image3.jpg" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose  section -->

      <!-- Section Chambres -->
      <div id="chambres">
         <div class="chambre">
            <div class="chambre-type">Chambre ventillée</div>

            <div class="chambre-description">
               <div class="chambre-img">
                  <img src="./images/ventile.jpg" alt="" width="100%" height="100%">
               </div>

               <div class="chambre-text">
                  Chambre ventillée, lit de taille moyenne et un accès à plus de 200 chaines de télé. Vous pourrez y séjourner à 12500FCFA soit 20€ la nuit.
               </div>
            </div>
         </div>
         <div class="chambre">
            <div class="chambre-type">Chambre climatisée</div>

            <div class="chambre-description">
               <div class="chambre-img">
                  <img src="./images/climatise.jpg" alt="" width="100%" height="100%">
               </div>

               <div class="chambre-text">
                  Chambre climatisée, lit de taille moyenne et un accès à plus de 200 chaines de télé. Vous pourrez y séjourner à 18500FCFA soit 29€ la nuit.
               </div>
            </div>
         </div>
         <div class="chambre">
            <div class="chambre-type">Chambre prestige</div>

            <div class="chambre-description">
               <div class="chambre-img">
                  <img src="./images/prestige.jpg" alt="" width="100%" height="100%">
               </div>

               <div class="chambre-text">
                  Une pièce luxueuse avec un lit de grande taille, climatiseur, table de travail, divan, réfrigérateur et accès à plus de 210 chaines télé. Vous pourrez y séjourner au prix de 20500FCFA soit 32€ la nuit.
               </div>
            </div>
         </div>
         <div class="chambre">
            <div class="chambre-type">Chambre privilège</div>

            <div class="chambre-description">
               <div class="chambre-img">
                  <img src="./images/privilege.jpg" alt="" width="100%" height="100%">
               </div>

               <div class="chambre-text">
                  Un grand espace riche avec un lit XXL, un réfrigérateur, un climatiseur, une table de travail, un divan, un tapis de sol et une baignore dans la salle de bain et un accès à plus de 210 chaînes de télé. Vous pouvez y séjourner à 35500FCFA soit 55€ la nuit.
               </div>
            </div>
         </div>
      </div>
      <!-- Fin section chambre -->

      <div id="reserv-btn"><button class="read_more" id="reserv-bouton" >Faire une réservation</button></div>

      <!-- Section réservation -->
         <div id="reservation">
            <form action="" id='reservation-form' method="post">
               <input type="hidden" name="categorie" value="chambre">

               <div class="reservation-form-champ">
                  <input type="text" name="nom" placeholder="Nom complet" id="nom" required>
               </div>
               <div class="reservation-form-champ-date">
                  <label for="date-">Date d'arrivée</label>
                  <input type="date" name="date-arrivee" id="date-arrivee" placeholder="Date d'arrivée" required>
               </div>
               <div class="reservation-form-champ-date">
                  <label for="date-">Date de départ</label>
                  <input type="date" name="date-depart" id="date-depart" placeholder="Date de départ" required>
               </div>

               <div class="reservation-form-champ">
                  <div class="reservation-form-champ-type-radio"><input type="radio" name="type" id="ventile" value="Ventilée" checked> <label for="ventile">Chambre ventilée</label></div>
                  <div class="reservation-form-champ-type-radio"><input type="radio" name="type" id="climatise" value="Climatisée"> <label for="climatise">Chambre climatisée</label></div>
                  <div class="reservation-form-champ-type-radio"><input type="radio" name="type" id="prestige" value="Prestige"> <label for="prestige">Chambre prestige</label></div>
                  <div class="reservation-form-champ-type-radio"><input type="radio" name="type" id="privilege" value="Privilège"> <label for="privilege">Chambre privilège</label></div>
               </div>

               <div class="reservation-form-champ-submit">
                  <input type="submit" value="Réserver">
               </div>
            </form>
         </div>
      <!-- Fin section réservation-->

      <!-- our  section -->
      <div class="our">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="img_box">
                     <figure><img src="./images/resto.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="our_box">
                     <div class="titlepage">
                        <h2><span class="text_norlam">Découvrez aussi</span> <br>notre restaurant</h2>
                     </div>
                     <p>Le restaurant vous est ouvert de 07h30 à 23h00. Selon vos envies vous pourrez déguster sur commandes des plats africains et occidentaux. <br> Le restaurant est accompagné d'un bar ouvert à partir de 08h00 mais la boisson est disponible à tout moment à la réception. <br> Nous mettons aussi à votre disposition un service traiteur pour tous vos évènements.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our  section -->

      <!-- Salle  section -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="choose_box">
                     <div class="titlepage">
                        <h2><span class="text_norlam">A la recherche d'un cadre</span> <br>plus formel ?</h2>
                     </div>

                     <div class="row" id="seek">
                        <div class="col-md-12">
                           <div class="img_box">
                              <figure><img src="./images/conf1.jpg" alt="#"/></figure>
                           </div>
                        </div>
                     </div>

                     <p align="justify">Notre complexe dispose de deux salles de conférences pouvant respectivement accueillir 50 personnes et 150 personnes. Vous pourrez y organiser vos rencontres et dîners. Le prix de la location des ses salles est de 75000FCFA/jour pour la petite salle et 175000FCFA/jour pour la grande salle.</p>
                  </div>
               </div>
               <div class="col-md-6 hide">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="img_box">
                           <figure><img src="./images/conf1.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="img_box">
                           <figure><img src="./images/conf2.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6 hide">
                        <div class="img_box">
                           <figure><img src="./images/conf3.jpg" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end Salle  section -->

      <div id="reserv-salle-btn"><button class="read_more" id="reserv-salle-bouton" >Faire une réservation</button></div>

      <!-- Section réservation -->
      <div id="reservation-salle">
         <form action="" id='reservation-salle-form' method="post">
            <input type="hidden" name="categorie" value="salle">

            <div class="reservation-form-champ">
               <input type="text" name="nom" placeholder="Nom complet" id="nom" required>
            </div>
            <div class="reservation-form-champ-date">
               <label for="date-">Date de début de réservation</label>
               <input type="date" name="date-debut" id="date-debut" placeholder="Date de début réservation" required>
            </div>
            <div class="reservation-form-champ-date">
               <label for="date-">Date de fin de réservation</label>
               <input type="date" name="date-fin" id="date-fin" placeholder="Date de fin de réservation" required>
            </div>

            <div class="reservation-form-champ">
               <div class="reservation-form-champ-type-radio"><input type="radio" name="type" id="petite" value="petite" checked> <label for="petite">Petite salle de conférence</label></div>
               <div class="reservation-form-champ-type-radio"><input type="radio" name="type" id="grande" value="grande"> <label for="grande">Grande salle de conférence</label></div>
            </div>

            <div class="reservation-form-champ-submit">
               <input type="submit" value="Réserver">
            </div>
         </form>
      </div>
      <!-- Fin section réservation-->

      <!-- Espace  section -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="choose_box">
                     <div class="titlepage">
                        <h2><span class="text_norlam">Besoin d'un environement</span> <br>festif ?</h2>
                     </div>

                     <p align="justify">Nous avons imaginé et conçu pour vous espace évènementiel et un jardin récréatif d'un hectare. Profitez alors de ces cadres aérés pour la tenue de vos receptions, anniversaires, baptèmes.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="img_box">
                           <figure><img src="./images/espace01.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="img_box">
                           <figure><img src="./images/espace02.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="img_box">
                           <figure><img src="./images/espace03.jpg" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end Espace  section -->
      
      <!-- about -->
      <div id="about"  class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="about_text">
                     <div class="titlepage">
                        <h2>A propos du Complexe Lama</h2>
                        <p>Le Complexe Hôtelier LAMA est un complexe hôtelier installé à Bobo-Dioulasso, capitale économique du BURKINA FASO. Il est situé à 3 minutes de marche de la forêt classée de Kou, ce qui en fait un cadre oxygéné et apaisant pour le repos et la détente. Il est doté de chambres de tout standing, ventillées et climatisées, d'un restaurant, d'un bar, de deux salles de conférences, d'une grande terrase et d'un grand espace vert aéré de près d'un hectare. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img src="./images/about.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->

      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="titlepage">
                        <h2>Contactez nous</h2>
                     </div>
                     <div class="cont">
                        <h3>Complexe Lama </h3>
                        <p>
                           <p><i class="fa fa-envelope"></i> Email : complexe.lama@yahoo.com</p>
                           <p><i class="fa fa-tty"></i> Fixe : +226 20 95 66 99</p>
                           <p><i class="fab fa-whatsapp"></i> Whatsapp : +226 66 90 44 44</p>
                           <p><i class="fa fa-phone"></i> Téléphone : +226 73 75 81 03</p>
                        </p>
                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2022 <i class="fa fa-copyright"></i> All Right Reserved By Constel</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="./js/jquery.min.js"></script>
      <script src="./js/popper.min.js"></script>
      <script src="./js/bootstrap.bundle.min.js"></script>
      <script src="./js/jquery-3.0.0.min.js"></script>
      <script src="./js/plugin.js"></script>
      <script src="./js/reservation.js"></script>
      <!-- sidebar -->
      <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="./js/custom.js"></script>
   </body>
</html>

