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

      <section class="container projets saupiquet">

        <article class="intro-projet">
          <div class="title-projet">
            <img src="/images/projets/saupiquet-mini.png"><h1><span>Saupiquet</span></h1>
          </div>

          <div class="infos-projet">
            <section class="date">
              <p class="bold">Date :</p>
              <p>Automne 2014</p>
            </section>
            
            <section class="mission">
              <p class="bold">Mission :</p>
              <p>Proposer un nouvel axe de développement digital visant à dépoussiérer l’image des produits Saupiquet.</p>
            </section>
            
            <section class="description">
              <p class="bold">Description :</p>
              <p>Pour honorer sa nouvelle signature "Donner des couleurs à la mer" et rendre à ses produits leurs notes savoureuses, la marque de conserves Saupiquet aspire à <strong>un nouvel axe de développement online</strong>. Le dispositif digital est composé d'un <strong>site responsive et d'une série de jeux et publications</strong> visant à animer la page Facebook de la marque. Une nouvelle image plus <strong>colorée et ludique</strong> a été choisie pour véhiculer l'esprit convivial du produit et ses temps forts de consommation (pic-nic, apéritif...).</p>
            </section>
          </div>
        </article>

        <article class="gallerie">

          <section class="full">
            <img src="/images/projets/saupiquet-full.jpg">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/saupiquet-full-2.jpg">
          </section>

          <section class="full">
            <img src="/images/projets/saupiquet-full-3.jpg">
          </section>

          <section class="double">
            <img src="/images/projets/saupiquet-double-1.jpg">
            <img src="/images/projets/saupiquet-double-2.jpg">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/saupiquet-full-4.jpg">
          </section>

        </article>

        <aside>
          <a class="projet-nav" id="projet-prev" href="/projets/balle-au-bond" title="Voir le projet La Balle au Bond">
            <span>Previous project</span>
            <span class="projet-name">La Balle au bond</span>
          </a>
          <a id="projet-top" href="" title="Go to Top">Top</a>
          <a class="projet-nav" id="projet-next" href="/projets/le-petit-marseillais" title="Voir le projet Le Petit Marseillais">
            <span>Next project</span>
            <span class="projet-name">Le petit Marseillais</span>
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