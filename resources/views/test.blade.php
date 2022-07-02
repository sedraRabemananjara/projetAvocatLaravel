<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>gestion du contenu</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" type="text/css" rel="stylesheet">
	<link href="{{asset('css/magnific-popup.css')}}" type="text/css" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" type="text/css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">GASYTECH</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#register">PV<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="rapportDeMission.jsp">Rapport De Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="Pv-getAllPv.do">admin<span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown">
                            <span id="clock"></span>
                        </div>
                        <h1>ENTREPRISE NY SEDRA</h1>
                        <p class="p-large">Entreprise Malagasy specilisant sur la domaine du batiment et travaux publics</p>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        
        <!-- Image Slider -->
        <div class="outer-container">
            <div class="slider-container">
                <div class="swiper-container image-slider-1">
                    <div class="swiper-wrapper">
                        
                        <!-- Slide -->
                        <div class="swiper-slide" >
                            <img class="img-fluid" src="images/details-slide-1.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/details-slide-2.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/details-slide-3.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->
                    
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->
                    
                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
        </div> <!-- end of outer-container -->
        <!-- end of image slider -->

    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                       
                        <div class="countdown">
                            <span id="clock"></span>
                        </div>
                        <h1 style="text-align: center">INSERTION DU PV</h1>
                        <p class="p-large"></p>
                        
                    </div> <!-- end of text-container -->
                        
                       
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-12">
                        
       
    
                    <!-- Registration Form -->
                    <div class="form-container">
                        <form action="Pv-insertPv.do" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="contenu" >
                                <label class="label-control" for="rname">contenu pv</label>
                              
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="image" name="image" >
                                <label class="label-control" for="rphone">image</label>
                               
                            </div>
                            
                             
                            <div class="form-group">
                               
                                <input type="date" class="form-control-input" id="datePV" name="datePV">
                               
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lieuPv" name="lieuPv" >
                                <label class="label-control" for="lieuPv">lieu</label>
                             
                            </div>
                          
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">INSERER</button>
                            </div>
                           
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
  



    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>ENTREPRISE NY SEDRA</h5>
                        <p class="p-small">nous sommes ravis de vous acceuillir</p>
                    </div>
                </div> <!-- end of col -->
              
               
                <div class="col-md-3">
                    <div class="footer-col fourth">
                        <h5>Social Media</h5>
                        <p class="p-small">For news & updates follow us</p>
                        <a href="#your-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="https://inovatik.com">gasyTech</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->

    <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>
