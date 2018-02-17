<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portfolio de Barbara Sevin. Directrice Artistique digital, spécialisée en UI et Social Branding. Webdesign // UI // UX // Identité // Webdesign // Design.">
        <title>Barbara Sevin - Directrice Artistique</title>

        <?php include('partials/meta.php'); ?>

        <link rel='canonical' href='https://barbara-sevin.fr/' />
        <link rel='shortlink' href='https://barbara-sevin.fr/' />
        <link href="https://barbara-sevin.fr/" rel="alternate" hreflang="fr">
        <link href="/images/icons/favicon.ico" rel="shortcut icon">
        <link href="/images/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body class="page-home">
      <header>
        <div class="left">

          <div class="sub-head">
            <!-- Logo -->
            <a href="/" id="logo" title="Barbara Sevin">
              <img src="/images/logo.png" alt="Barbara Sevin" width="144" height="19" srcset="/images/logo-x2.png 2x">
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
                <li><a href="projets/animaux-sante">Animaux Santé</a></li>
                <li><a href="projets/saupiquet">Saupiquet</a></li>
                <li><a href="projets/balle-au-bond">La balle au bond</a></li>
                <li><a href="projets/le-petit-marseillais">Le Petit Marseillais</a></li>
                <li><a href="projets/auzou">Auzou éditions</a></li>
                <li><a href="projets/classic-expert">Classic Expert</a></li>
                <li><a href="projets/igloo">L'igloo immobilier</a></li>
                <li><a href="projets/wilkinson-summer">Wilkinson Summer</a></li>
              </ul>
              <p><a href="/moodboard" title="Moodboards">Moodboards</a></p>
              <p><a href="/about">About</a></p>
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
            <div class="padd">
              <div class="proj-left">
                <div class="resume">
                  <div id="miniature-projet">
                    <img src="images/projets/balle-au-bond/balle-au-bond-mini.png" srcset="images/projets/balle-au-bond/balle-au-bond-mini-x2.png 2x" alt="La balle au bond" />
                  </div>
                  <h1 id="titre-projet"><a href="/projets/balle-au-bond" title="La balle au bond"><span>La balle</span><br/><span>au bond</span></a></h1>
                  <p id="subtitle-projet" class="legend">Off & online branding</p>
                </div>
                <a class="projet-link" href="/projets/balle-au-bond" title="La balle au bond">View project</a>
              </div>
            </div>

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
            <div class="pic-hide">
              <div class="pic-container">
                <div class="pic-slider" style="transform: translate3d(0,0,0);">
                  <div class="pic" id="pic-balle-au-bond">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/balle-au-bond" title="Projet : La balle au bond"></a>
                  </div>
                  <div class="pic" id="pic-saupiquet">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/saupiquet" title="Projet : Saupiquet"></a>
                  </div>
                  <div class="pic" id="pic-le-petit-marseillais">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/le-petit-marseillais" title="Projet : Le Petit Marseillais"></a>
                  </div>
                  <div class="pic" id="pic-animaux-sante">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/animaux-sante" title="Projet : Animaux Santé"></a>
                  </div>
                  <div class="pic" id="pic-igloo">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/igloo" title="Projet : L'igloo"></a>
                  </div>
                  <div class="pic" id="pic-wilkinson-summer">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/wilkinson-summer" title="Projet : Wilkinson Summer"></a>
                  </div>
                  <div class="pic" id="pic-auzou">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/auzou" title="Projet : Auzou"></a>
                  </div>
                  <div class="pic" id="pic-classic-expert">
                    <div class="border"></div>
                    <a class="img-link" href="/projets/classic-expert" title="Projet : Classic Expert"></a>
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