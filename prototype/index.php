<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>H.C. Andersen-Samfundet i Odense</title>

    <!-- Stylesheets / CDN -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <link href="css/mediaelementplayer.css" rel="stylesheet">
    <link href="css/hcas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- HEADER REGION -->
    <?php include('includes/components/header/header.tpl.php'); ?>

    <main class="main-content">
      <div style="display: flex;">
      <?php
      $colors = array (
        'antiquewhite',
        'ghostwhite',
        'ivory',
        'linen',
        'moccasin',
        'oldlace',
        'papayawhip',
        'peru',
        'saddlebrown',
        'sandybrown',
        'seashell',
        'sienna',
        'whitesmoke',
        'silver',
        'slategrey',
        'tan',
        'wheat',
      );

      foreach ($colors as $color) {
        print '<div style="height: 300px; width: 70px; background: ' . $color . ';"><div style="transform: rotate(90deg); transform-origin: 50% 55%; padding: 15px; font-size: 2rem; color: black;">' . $color . '</div></div>';
      }
      ?>
      </div>
      <!-- page__content -->
      <?php include('includes/components/component-teaser-group.tpl.php'); ?>
    </main>

    <footer class="page__footer">
      <div class="page__footer--inner">
        <?php include('includes/components/footer.tpl.php'); ?>
      </div>
      <div class="copyright">
        © H.C. Andersen-Samfundet i Odense
        <?php
        setlocale(LC_TIME, 'da_DA', 'da_DA.UTF-8');
        print strftime('%Y');
        ?>
      </div>

    </footer>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    <script src="assets/js/jquery.mobile.custom.min.js"></script>
    <script src="assets/js/mediaelement-and-player.min.js"></script>
    <script src="assets/js/hcas.js"></script>
    <script src="assets/js/burger.js"></script>
  </body>
</html>