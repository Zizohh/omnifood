  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37789867-5"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-37789867-5');
      </script>

      <!--
        Google Hosted Library (jQuery)
        https://developers.google.com/speed/libraries/
      -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

      <!--
        jsdelivr (respond)
        https://www.jsdelivr.com/package/npm/respond
        Respond is an auto-responding Async CLI/CMD wrapper for NodeJS with a syntax based on: node, nodejs, suppose, respond, child_proccess, CLI, CMD, async, wrapper
      -->
      <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>

      <!--
        jsdelivr (html5shiv)
        https://www.jsdelivr.com/package/npm/html5shiv
        The HTML5 Shiv enables use of HTML5 sectioning elements in legacy Internet Explorer and provides basic HTML5 styling for Internet Explorer 6-9, Safari 4.x (and iPhone 3.x), and Firefox 3.x.
      -->
      <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>

      <!--
        jsdelivr (selectivizr)
        https://www.jsdelivr.com/package/npm/selectivizr
        Selectivizr is a JavaScript utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8.
      -->
      <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>

      <!--
        Waypoints
        http://imakewebthings.com/waypoints/
        Waypoints is the easiest way to trigger a function when you scroll to an element.
      -->
      <!--<script src="assets/vendor/js/noframework.waypoints.min.js"></script>-->
      <script src="assets/vendor/js/jquery.waypoints.min.js"></script>

      <!--
        Google Maps script
        https://github.com/hpneo/gmaps
        https://developers.google.com/maps/documentation/javascript/get-api-key#registering-authorized-urls
        https://developers.google.com/maps/documentation/javascript/v2tov3
        https://developers.google.com/maps/documentation/javascript/get-api-key
      -->
      <!--<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBpRyjZNx8Vv3KlKEEhZqNYIoCsz22gxnk"></script>-->
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

      <!--
        Custom script
      -->
      <script src="assets/js/script.js"></script>

      <!--
        GMaps script
        https://hpneo.github.io/gmaps/
      -->
      <script src="assets/vendor/js/gmaps.js"></script>



      <!-- /* Big tablet to 1200px (widths smaller than the 1140px row) */
@media only screen and (max-width: 1200px) {

  .main-nav { display: inline-block; }

  .hero-txt-box {
    width: 100%;
    padding: 0 2%;
  }

  .row { padding: 0 2%; }
}

/* Small tablet to big tablet: from 768 to 1023px */
@media only screen and (max-width: 1023px) {
  body { font-size: 18px; }
  
  section { padding: 60px 0; }

  .long-copy {
    width: 80%;
    margin-left: 10%;
  }

  .steps-box { margin-top: 10px; }

  .steps-box:last-child { margin-top: 10px; }

  .works-step { margin-bottom: 40px; }

  .works-step:last-of-type { margin-bottom: 60px; }

  .app-screen { width: 50%; }

  .icon-small { 
    width: 17px; 
    margin-right: 5px;  
  }

  .city-feature { font-size: 90%; }

  .plan-box {
    width: 100%;
    margin-left: 0;
  }

  .plan-price { font-size: 250%; }

  .contact-form {width: 90%; }
}

/* Small phones to small tablets: from 481 to 767px */
@media only screen and (max-width: 767px) {
  body { font-size: 16px; }

  section { padding: 30px 0; }

  .row,
  .hero-txt-box { padding: 0 4%; }

  .col { 
    width: 100%; 
    margin: 0 0 4% 0;
  }

  .logo {
    height: 70px;
    margin-top: 20px;
}

  .mobile-nav-icon { display: inline-block; }

  /* .main-nav { display: none; } */

  .main-nav { 
    float: left; 
    margin-top: 35px;
    margin-left: 0;
    display: none;
  }

  .main-nav li { display: block; }

  .main-nav li a:link,
  .main-nav li a:visited { 
    display: block; 
    border: 0; /* no border need on phone display */
    padding: 10px 0;
    font-size: 100%;
  }

  .sticky .main-nav { margin-top: 10px !important; }

  .sticky .main-nav li a:link,
  .sticky .main-nav li a:visited { padding: 10px 0; }

  /*.sticky .mobile-nav-icon i { */
    .sticky a.mobile-nav-icon { margin-top: 10px; }

  .sticky .mobile-nav-icon i { color: #555555; }

  h1 { font-size: 180%; }

  h2 { font-size: 150%; }

  .long-copy {
    width: 100%;
    margin-left: 0;
  }

  .app-screen { width: 40%; }

  .steps-box { margin-top: 10px; }

  .steps-box:first-child { text-align: center; }

  .steps-box:last-child { margin-top: 10px; }

  .works-step div {
    height: 40px;
    width: 40px;
    padding: 5px;
    margin-right: 15px;
  }

  .works-step { margin-bottom: 20px; }

  .works-step:last-of-type { margin-bottom: 20px; }

  .map-box {
    width: 100%;
    height: auto;
    position: relative; /* You must specifiy 'relative' if living within 'absolute' */
  }
  
  .map {
    width: 100%;
    height: 300px;
    position: relative; /* You must specifiy 'relative' if living within 'absolute' */
    z-index: 0;
  }
  
  .form-box {
    position: relative;
    width: 100%;
    height: auto;
    padding: 30px 0;
  }

}

/* Small phones: from 0 to 480px */
@media only screen and (max-width: 480px) {

  section { padding: 25px 0; }

  .icon-big { 
    text-align: center; 
    margin-bottom: 4%;
    border: 2px solid #e67e22;
    border-radius: 50%;
    height: 100px;
    width: 100px;
    display: inline-block; /* Element does not force a line break */
    padding: 12px;
    font-size: 380%;
  }

  .box .icon-big { text-align: center; }

  .contact-form { width: 100%; }

  .footer-nav {
    margin-bottom: 10px;
  }

  .footer-nav,
  .social-links {
    text-align: center;
    float: none;
  }

  .map-box input[type=text], 
  .map-box input[type=email], 
  .map-box select, 
  .map-box textarea { margin-bottom: 15px; }

} -->