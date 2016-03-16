<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portfolio de Barbara Sevin">
        <title>Barbara Sevin - Portfolio 2016</title>
        <link href="images/icons/favicon.ico" rel="shortcut icon">
        <link href="images/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
      <header>
        <div class="left">

          <div class="sub-head">
            <!-- Logo -->
            <a href="/" id="logo" title="Barbara Sevin">
              <img src="images/logo.png" alt="Barbara Sevin" width="144" height="19" srcset="images/logo-x2.png 2x">
              <span>Branding & Digital ideas</span>
            </a>

            <!-- Nav -->
            <div class="burger"><a href="javascript:;" class="btn-burger" menu-button=""><span>Menu</span></a></div>
          </div>
          <nav>
            <div class="vert-center">
              <div>
              <p><a href="">Projects</a></p>
              <ul>
                <li><a href="">Animaux Santé</a></li>
                <li><a href="">Saupiquet</a></li>
                <li><a href="projet.html">La balle au bond</a></li>
                <li><a href="">Le Petit Marseillais</a></li>
                <li><a href="projet-2.html">Auzou éditions</a></li>
                <li><a href="">Classic Expert</a></li>
                <li><a href="">L'igloo immobilier</a></li>
                <li><a href="">Wilkinson Adventure</a></li>
              </ul>
              <p><a href="">Moodboards</a></p>
              <p><a href="/about.html">About</a></p>
              </div>
            </div>
          </nav>
        </div>
        <div class="right">
          
        </div>
      </header>

      <section class="container home">
        <article class="projet" id="balle-au-bond">
          <section class="projet-infos">
            <div class="resume">
              <img id="miniature-projet" src="images/projets/balle-au-bond-mini.png" srcset="images/projets/balle-au-bond-mini-x2.png 2x">
              <h1 id="titre-projet"><span>La balle</span><br/><span>au bond</span></h1>
              <p id="subtitle-projet" class="legend">Off & online branding</p>
            </div>
            <a class="projet-link" href="/projet.html">View project</a>
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
            <div class="pic">
              <div class="border"></div>
            </div>
          </section>

        </article>
      </section>

    </body>
    <script src="js/libs/jquery-2.2.1.min.js"></script>
    <script src="js/libs/gsap/TweenLite.min.js"></script>
    <script src="js/libs/gsap/plugins/CSSPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/ScrollToPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/EasePack.min.js"></script>

    <script src="js/script.js"></script>
</html>