<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portfolio de Barbara Sevin">
        <title>Barbara Sevin - Portfolio 2016</title>
        <link href="/images/icons/favicon.ico" rel="shortcut icon">
        <link href="/images/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>
      <?php include('partials/header.php'); ?>

      <section class="container home">
        <article class="projet" id="balle-au-bond">
          <section class="projet-infos">
            <div class="resume">
              <img id="miniature-projet" src="images/projets/balle-au-bond-mini.png" srcset="images/projets/balle-au-bond-mini-x2.png 2x">
              <h1 id="titre-projet"><span>La balle</span><br/><span>au bond</span></h1>
              <p id="subtitle-projet" class="legend">Off & online branding</p>
            </div>
            <a class="projet-link" href="projets/balle-au-bond.php">View project</a>
          </section>

          <!-- Nav Projet -->
          <div class="nav">
            <a id="prev-projet" href="javascript:;" title="Previous"><span></span></a>
            <div class="num">
              <span id="num-projet">1</span>
              <hr/>
              <span id="total-projet">9</span>
            </div>
            <a id="next-projet" href="javascript:;" title="Next"><span></span></a>
          </div>
          <!-- Fin Nav Projet -->

          <section class="preview">
            <div class="pic-proj">
              <div class="pic-container">
                <div class="pic-slider">
                  <div class="pic" id="pic-prev">
                    <a href="projets/balle-au-bond.php"></a>
                    <div class="border"></div>
                  </div>
                  <div class="pic" id="pic-current">
                    <a href="projets/balle-au-bond.php"></a>
                    <div class="border"></div>
                  </div>
                  <div class="pic" id="pic-next">
                    <a href="projets/balle-au-bond.php"></a>
                    <div class="border"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </article>
      </section>

    </body>
    <script src="/js/libs/jquery-2.2.1.min.js"></script>
    <script src="/js/libs/gsap/TweenLite.min.js"></script>
    <script src="/js/libs/gsap/plugins/CSSPlugin.min.js"></script>
    <script src="/js/libs/gsap/plugins/ScrollToPlugin.min.js"></script>
    <script src="/js/libs/gsap/plugins/EasePack.min.js"></script>

    <script src="/js/script.js"></script>
</html>