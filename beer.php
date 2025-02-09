<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Punk rock and roll bar in the west side of Providence, RI. Great craft beer selection. Huge outdoor beer garden. Open 5PM-1AM 365 Days a Year. 2AM on the weekends.">
    <meta name="keywords" content="bar,pub,punk,rock,garage,metal,rockabilly,country,craft,beer,booze,scotch,bourbon,rye,whiskey,whisky,mezcal,tequila,vodka,rum,gin,parking,pool,pinball,outdoor seating,beer garden,scurvy dog,providence">
    <meta name="author" content="Jami Sleaze, CNIC, Scurvy Dog">
    <title>the Scurvy Dog - Beer / Booze / Punk Rock and Roll Bar in Providence, RI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/style-old.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/beer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:ital,wght@0,400;0,800;1,400;1,800&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body id="beer">
<!-- Begin Wrapper -->
    <div id="wrapper">
      <header>
        <div id="mobile-logo">
          <a href="/"><img src="images/scurvy_dog_text_logo_mobile.svg" class="logo" alt="Scurvy Dog Bar logo"></a>
          <button id="menu-toggle"></button>
        </div>
        <div id="menu">
          <nav>
            <a href="/">Home</a>
            <a href="beer.php" class="active">Beer</a>
            <a href="booze.html">Booze</a>
            <a href="noise.html">Noise</a>
            <a href="swag.html">Swag</a>
            <a href="pics.html">Pics</a>
            <a href="events.html">Events</a>
            <a href="faq.html">FAQ</a>
          </nav>
          <nav>
            <a href="https://goo.gl/maps/wTh9f8utvp32" rel="external">directions</a>
            <a href="signup.html">join mailing list</a>
            <a href="mailto:info@scurvydogbar.com">Contact</a>
          </nav>
        </div>
      </header>
      <main>
        <div>
            <h3 class="white">Draft List - <?php include("php/date.php");?>:</h3>
            <p><?php include_once("php/home_drafts.php");?></p>
            <h3 class="white">Domestics and <br />Non-Exciting Imports:</h3>
            <p><?php include_once("php/home_bottles_crap.php");?></p>
        </div>
        <div>
          <h3 class="white">Craft Bottles and Cans - <?php include("php/date.php");?>:</h3>
          <p><?php include_once("php/home_bottles_no_crap.php");?></p>
        </div>
      </main>
      <aside>
        <img src="images/scurvy_dog_logo_plus_skull.svg" class="logo" alt="Scurvy Dog Bar logo">
        <a href="http://www.yelp.com/biz/scurvy-dog-providence" rel="external" id="yelp_link"><img src="images/yelp_1.png" alt="People Hate Us On Yelp!"></a>
  <!-- End yelp_area -->
        <p>Open 365 Days A Year</p>
        <ul>          
          <li>Sun - Thu: 5PM - 1AM</li>
          <li>Fri - Sat: 5PM - 2AM</li>
        </ul>
        <div id="social_area">
          <a href="http://www.ratebeer.com/p/the-scurvy-dog-providence/46536/" rel="external"><img src="images/ratebeer-logo-vector.svg" alt="RateBeer logo"></a>
          <a href="http://www.beeradvocate.com/beer/profile/29408/" rel="external"><img src="images/beeradvocate-nav-logo-retro.png" alt="Beer Advocate logo"></a>
          <a href="https://www.facebook.com/scurvydogbar/" rel="external"><img src="images/f_logo_RGB-Blue_1024.svg" alt="Facebook icon"></a>
        </div>
<!-- End social_area -->
      </aside>
<!-- End right_column -->
      <footer>
        <address>1718 Westminster Street, Providence, RI 02909 &#183; <a>(401) 270-7980</a></address>
        <ul>
          <li><a href="https://goo.gl/maps/wTh9f8utvp32" rel="external">directions</a></li>
          <li><a href="signup.html">join mailing list</a></li>
          <li><a href="mailto:info@scurvydogbar.com">info@scurvydogbar.com</a></li>
        </ul>
      </footer>
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-77027855-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type='text/javascript' src='js/push-menu.js'></script>
  </body>
</html>