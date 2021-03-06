<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Moodboards réalisés en agence digitale afin de définir la charte graphique de chaque projet.">
        <title>Barbara Sevin - Moodboards</title>

        <?php include('partials/meta.php'); ?>

        <link href="https://barbara-sevin.fr/moodboards" rel="alternate" hreflang="fr-FR">
        <link href="/images/icons/favicon.ico" rel="shortcut icon">
        <link href="/images/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800">
        <link rel="stylesheet" href="/css/lightgallery.css" /> 
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="page-moodboard">
      <?php include('partials/header.php'); ?>

      <!-- Container -->
      <section class="container moodboard">

        <div id="lightgallery">

          <a class="sticker" id="kinder" href="/images/moodboard/kinder.jpg" title="Kinder">
            <img src="/images/moodboard/kinder.jpg" class="mini-sticker" alt="Kinder" />
          </a>
          <a class="sticker" id="pyramide" href="/images/moodboard/pyramide.jpg" title="Pyramide">
            <img src="/images/moodboard/pyramide.jpg" class="mini-sticker" alt="Pyramide" />
          </a>
          <a class="sticker" id="babyliss-maman" href="/images/moodboard/babyliss-maman.jpg" title="Babyliss Maman">
            <img src="/images/moodboard/babyliss-maman.jpg" class="mini-sticker" alt="Babyliss Maman" />
          </a>
          <a class="sticker" id="slowcow" href="/images/moodboard/slowcow.jpg" title="Slowcow">
            <img src="/images/moodboard/slowcow.jpg" class="mini-sticker" alt="Slowcow" />
          </a>
          <a class="sticker" id="lpm" href="/images/moodboard/lpm.jpg" title="Le petit Marseillais" data-sub-html="<h1>Le Petit Marseillais</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p><div id='lg-counter'><span id='lg-counter-current'>5</span> / <span id='lg-counter-all'>9</span></div>">
            <img src="/images/moodboard/lpm.jpg" class="mini-sticker" alt="Le petit Marseillais" />
          </a>
          <a class="sticker" id="babyliss" href="/images/moodboard/babyliss.jpg" title="Babyliss" data-sub-html="<h1>Babyliss</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p><div class='controls'><div class='lg-prev lg-icon' id='prev'></div><div id='lg-counter'><span id='lg-counter-current'>6</span> / <span id='lg-counter-all'>9</span></div><div class='lg-next lg-icon' id='next'></div></div>">
            <img src="/images/moodboard/babyliss.jpg" class="mini-sticker" alt="Babyliss" />
          </a>
          <a class="sticker" id="hawaiian" href="/images/moodboard/hawaiian.jpg" title="Hawaiian Tropic">
            <img src="/images/moodboard/hawaiian.jpg" class="mini-sticker" alt="Hawaiian Tropic" />
          </a>
          <a class="sticker" id="saupiquet" href="/images/moodboard/saupiquet.jpg" title="Saupiquet">
            <img src="/images/moodboard/saupiquet.jpg" class="mini-sticker" alt="Saupiquet 2"/>
          </a>
          <a class="sticker" id="saupiquet2" href="/images/moodboard/saupiquet2.jpg" title="Saupiquet 2">
            <img src="/images/moodboard/saupiquet2.jpg" class="mini-sticker" alt="Saupiquet 2" />
          </a>
          

        </div>

      </section>
      <!-- Fin Container -->

      <?php include('partials/footer.php') ?>

    </body>
    <script src="js/libs/jquery-2.2.1.min.js"></script>
    <script src="js/libs/gsap/TweenLite.min.js"></script>
    <script src="js/libs/gsap/plugins/CSSPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/ScrollToPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/EasePack.min.js"></script>
    <script src="js/libs/lightgallery.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $("#lightgallery").lightGallery({
            width: '50%',
            mode: 'lg-fade',
            addClass: 'fixed-size',
            counter: true,
            download: false,
            startClass: '',
            enableSwipe: false,
            enableDrag: false,
            speed: 500,
            appendCounterTo: ''
          });
      });
    </script>
</html>