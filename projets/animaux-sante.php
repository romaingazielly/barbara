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

    <body class="page-projet">
      <header class="color">
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
                <li><a href="/projets/animaux-sante">Animaux Santé</a></li>
                <li><a href="/projets/saupiquet">Saupiquet</a></li>
                <li><a href="/projets/balle-au-bond">La balle au bond</a></li>
                <li><a href="/projets/le-petit-marseillais">Le Petit Marseillais</a></li>
                <li><a href="/projets/auzou">Auzou éditions</a></li>
                <li><a href="/projets/classic-expert">Classic Expert</a></li>
                <li><a href="/projets/igloo">L'igloo immobilier</a></li>
                <li><a href="/projets/wilkinson-summer">Wilkinson Summer</a></li>
              </ul>
              <p><a href="/moodboard" title="Moodboards">Moodboards</a></p>
              <p><a href="/about.html">About</a></p>
              </div>
            </div>
          </nav>
        </div>
        <div class="right">
          <a class="back-home" href="/">Back to Projects</a>
          <div class="burger"><a href="javascript:;" class="btn-burger" menu-button=""><span>Menu</span></a></div>
        </div>
      </header>

      <section class="container projets animaux-sante">

        <article class="intro-projet">
          <div class="title-projet">
            <img src="/images/projets/animaux-sante/animaux-sante-mini.png"><h1><span>Animaux</span><br/><span>Santé</span></h1>
          </div>

          <div class="infos-projet">
            <section class="date">
              <p class="bold">Date :</p>
              <p>Automne 2016</p>
            </section>
            
            <section class="mission">
              <p class="bold">Mission :</p>
              <p>Refondre l’identité du service et de son site corporate en s’adaptant à la cible qui consulte principalement sur mobile.</p>
            </section>
            
            <section class="description">
              <p class="bold">Description :</p>
              <p>Animaux Santé <strong>protège et prend soin des animaux</strong> de compagnie grâce à des solutions d'assurance sur-mesure. A travers la création d'une <strong>nouvelle charte graphique</strong> et d'un <strong>site B2C</strong>, le service tend à se rapprocher de ses souscripteurs et proposer une image alliant <strong>simplicité, sécurité et tendresse</strong>. Le projet a été proposé en <strong>mobile first</strong> pour une utilisation optimum sur les smalls devices qui représentent 70% du volume de connexions.</p>
            </section>
          </div>
        </article>

        <article class="gallerie">
          
          <section class="full">
            <img src="/images/projets/animaux-sante/animaux-sante-full.jpg" srcset="/images/projets/animaux-sante/animaux-sante-full-x2.jpg 2x" alt="Animaux Santé">
          </section>

          <section class="full">
            <img src="/images/projets/animaux-sante/animaux-sante-full2.jpg" srcset="/images/projets/animaux-sante/animaux-sante-full2-x2.jpg 2x" alt="Animaux Santé">
          </section>

          <section class="double">
            <img src="/images/projets/animaux-sante/animaux-sante-double-1.jpg" srcset="/images/projets/animaux-sante/animaux-sante-double-1-x2.jpg 2x" alt="Animaux Santé">
            <img src="/images/projets/animaux-sante/animaux-sante-double-2.jpg" srcset="/images/projets/animaux-sante/animaux-sante-double-2-x2.jpg 2x" alt="Animaux Santé">
          </section>

          <section class="full">
            <img src="/images/projets/animaux-sante/animaux-sante-full3.jpg" srcset="/images/projets/animaux-sante/animaux-sante-full3-x2.jpg 2x" alt="Animaux Santé">
          </section>

          <section class="double">
            <img src="/images/projets/animaux-sante/animaux-sante-double-3.jpg" srcset="/images/projets/animaux-sante/animaux-sante-double-3-x2.jpg 2x" alt="Animaux Santé">
            <img src="/images/projets/animaux-sante/animaux-sante-double-4.jpg" srcset="/images/projets/animaux-sante/animaux-sante-double-4-x2.jpg 2x" alt="Animaux Santé">
          </section>

        </article>

        <aside>
          <a class="projet-nav" id="projet-prev" href="/projets/le-petit-marseillais" title="Voir le projet Le Petit Marseillais">
            <span>Previous project</span>
            <span class="projet-name">Le Petit Marseillais</span>
          </a>
          <a id="projet-top" href="" title="Go to Top">Top</a>
          <a class="projet-nav" id="projet-next" href="/projets/igloo" title="Voir le projet L'Igloo">
            <span>Next project</span>
            <span class="projet-name">L'Igloo</span>
          </a>
        </aside>

      </section>

      <?php include('../partials/footer.php') ?>

    </body>
    <script src="/js/libs/jquery-2.2.1.min.js"></script>
    <script src="/js/libs/gsap/TweenLite.min.js"></script>
    <script src="/js/libs/gsap/plugins/CSSPlugin.min.js"></script>
    <script src="/js/libs/gsap/plugins/ScrollToPlugin.min.js"></script>
    <script src="/js/libs/gsap/plugins/EasePack.min.js"></script>
    <script src="/js/script.js"></script>
</html>