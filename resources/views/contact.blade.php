
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zach Mueller</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="About Zach Mueller" />
  <meta name="keywords" content="" />
  <meta name="author" content="Zach Mueller" />

    <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FreeHTML5.co
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
  -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  </head>
  <body>
  <div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

      <h1 id="fh5co-logo"><a href="/">Zach</a></h1>
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
          <li id="selector-home" class="selectors"><a href="/">Home</a></li>
          <li id="selector-blog" class="selectors"><a href="http://blog.zachalanmueller.com">Blog</a></li>
          <li id="selector-portfolio" class="selectors"><a href="/portfolio">Portfolio</a></li>
          <li id="selector-about" class="selectors"><a href="/about">About</a></li>
          <li id="selector-contact" class="selectors"><a href="/contact">Contact</a></li>
        </ul>
      </nav>
      </div>

    </aside>
    <div id="fh5co-main">
      <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
          <ul class="slides">
            <li style="background-image: url(/images/bg-1.jpg);">
              <div class="overlay"></div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                    <div class="slider-text-inner">
                      <h1 ><strong>Want to see more?</strong> <br><p>If you wish to talk to me or to reach me directly, please email me at <a href="mailto:zach@zachalanmueller.com">zach@zachalanmueller.com</a>.</p>
                       <a href="#" class="lead" id="more-contact">Other ways to contact me <i class="icon-arrow-right3"></i></a>
                       <p id="direct-contact">If you are in need of a more immidiate contact or a less formal medium of contact suits you, feel free to reach me on discord. My username is Zaedonn#5031, feel free to add me there.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            </ul>
          </div>
      </aside>
    </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  
  
  <!-- MAIN JS -->
  <script src="js/main.js"></script>
  <script>
    $('#selector-contact').addClass('fh5co-active');
    $('#direct-contact').hide();
    $('#more-contact').click(function(e){
      e.preventDefault();
      $('#direct-contact').css("font-size", "12px");
      $('#direct-contact').show(500);
    })
  </script>
  </body>
</html>

