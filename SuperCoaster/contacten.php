<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Add your site or application content here -->

  <header>
      <div class="navbar">
        <div class="wrapper">
           <img src="img/logo-big-v4.png" alt="a" width="150">
          <h1>Contacten</h1>
          <nav>
            <a href="index.php">Home</a>
            <a href="contructie.php">Contructie</a>
            <a href="karretjes.php">Karretjes</a>
            <a href="contacten.php">Contacten</a>
            <a href="">Bedrijf zelf</a>
          </nav>
        <body>
      </div>
      <div class="banner">
        <div class="banner-text">
          <p>Heb je nog vragen? Stuur ons dan een bericht!</p>
        </div>
    </header>
    <main>
      <div class="form">
      <form action="backend/questionController.php" method="post">
          <div class="form-group">
            <label for="fullName">Naam:</label>
            <input type="text" name="fullName">
          </div>

          <div class="form-group">
            <label for="email">E-mailadres:</label>
            <input id= "email"type="email" name="email" placeholder="testemail@.com">
          </div>

          <div class="form-group">
            <label for="message">Bericht:</label>
              <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>


            <div class="form-group">
             <input type="submit" value="Verzenden">
           </div>
         </div>
       </div>
       </form>
     </main>

       <?php
    require_once('footer.php')
    ?>







  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
