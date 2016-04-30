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

      <section class="container projets wilkinson-summer">

        <article class="intro-projet">
          <div class="title-projet">
            <img src="/images/projets/wilkinson-summer-mini.png"><h1><span>Wilkinson</span><br/><span>Summer</span></h1>
          </div>

          <div class="infos-projet">
            <section class="date">
              <p class="bold">Date :</p>
              <p>Été 2015</p>
            </section>
            
            <section class="mission">
              <p class="bold">Mission :</p>
              <p>Pousser les fans à se déplacer in-store grâce à la création d’un duo d’applications Facebook sur le thème des vacances.</p>
            </section>
            
            <section class="description">
              <p class="bold">Description :</p>
              <p>Wilkinson Summer est un <strong>duo d'applications Facebook</strong> visant à développer les ventes de rasoirs et recruter des fans durant la période estivale.
              Les pages <strong>Wilkinson pour lui & Wilkinson pour elle</strong> proposent des <strong>univers funs et colorés</strong> qui invitent à l'aventure au masculin comme au féminin. Les hommes sont conviés à découvrir "quel aventurier sommeille en eux" à travers <strong>un quiz décalé</strong> tandis que l'application féminine propose aux participantes <strong>un instant gagnant</strong> autour des destinations rêvées.</p>
            </section>
          </div>
        </article>

        <article class="gallerie">
          <section class="full">
            <img src="/images/projets/wilkinson-summer-full.jpg" srcset="/images/projets/wilkinson-summer-full-x2.jpg 2x" alt="Wilkinson Summer">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/wilkinson-summer-full2.jpg" srcset="/images/projets/wilkinson-summer-full2-x2.jpg 2x" alt="Wilkinson Summer">
          </section>

          <section class="full">
            <img src="/images/projets/wilkinson-summer-full3.jpg" srcset="/images/projets/wilkinson-summer-full3-x2.jpg 2x" alt="Wilkinson Summer">
          </section>

          <section class="double">
            <img src="/images/projets/wilkinson-summer-double-1.jpg" srcset="/images/projets/wilkinson-summer-double-1.jpg 2x" alt="Wilkinson Summer">
            <img src="/images/projets/wilkinson-summer-double-2.jpg" srcset="/images/projets/wilkinson-summer-double-2.jpg 2x" alt="Wilkinson Summer">
          </section>

        </article>

        <aside>
          <a class="projet-nav" id="projet-prev" href="/projets/igloo" title="Voir le projet L'Igloo">
            <span>Previous project</span>
            <span class="projet-name">L'Igloo</span>
          </a>
          <a id="projet-top" href="" title="Go to Top">Top</a>
          <a class="projet-nav" id="projet-next" href="/projets/auzou" title="Voir le projet Auzou">
            <span>Next project</span>
            <span class="projet-name">Auzou</span>
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