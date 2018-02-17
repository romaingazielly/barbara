<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=">L'Igloo est un moteur de recherche instantané et responsive, répertoriant un grand nombre d'annonces immobilières.">
        <title>Barbara Sevin - Projet Igloo</title>
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

      <section class="container projets igloo">

        <article class="intro-projet">
          <div class="title-projet">
            <img src="/images/projets/igloo/igloo-mini.png"><h1><span>L’igloo</span><br/><span>immobilier</span></h1>
          </div>

          <div class="infos-projet">
            <section class="date">
              <p class="bold">Date :</p>
              <p>2014 - 2015</p>
            </section>
            
            <section class="mission">
              <p class="bold">Mission :</p>
              <p>Créer un moteur de recherche innovant et proposer un axe de communication original et décalé qui accompagnera le développement de la marque.</p>
            </section>
            
            <section class="description">
              <p class="bold">Description :</p>
              <p>L'Igloo est <strong>un moteur de recherche instantané</strong> et responsive, répertoriant un grand nombre d'annonces immobilières. Petit frère du site <a href="http://www.leparking.fr" target="_blank">Leparking.fr</a>, L'Igloo a nécessité un long <strong>processus de R&D</strong> avant d'aboutir à sa version actuelle.Durant ces phases de réflexion, l<strong>'UX et l'UI ont été des sujets centraux</strong>, prouvant le désir de fournir une interface simple mais différenciante. La création d'une charte graphique et d'un logotype ont finalement dessiné un ensemble qui affiche <strong>sa touche d'humour et de folie.</strong></p>
            </section>
          </div>
        </article>

        <article class="gallerie">

          <section class="full nomarg">
            <img src="/images/projets/igloo/igloo-full.jpg">
          </section>

          <section class="full">
            <img src="/images/projets/igloo/igloo-full-2.jpg">
          </section>

          <section class="solo">
            <img src="/images/projets/igloo/igloo-cover-2.jpg">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/igloo/igloo-full-3.jpg">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/igloo/igloo-full-4.jpg">
          </section>

          <section class="solo">
            <img src="/images/projets/igloo/igloo-cover-3.jpg">
          </section>

          <section class="solo">
            <img src="/images/projets/igloo/igloo-cover-4.jpg">
          </section>

          <section class="solo">
            <img src="/images/projets/igloo/igloo-cover-5.jpg">
          </section>

        </article>

        <aside>
          <a class="projet-nav" id="projet-prev" href="/projets/animaux-sante" title="Voir le projet Animaux Santé">
            <span>Previous project</span>
            <span class="projet-name">Animaux Santé</span>
          </a>
          <a id="projet-top" href="" title="Go to Top">Top</a>
          <a class="projet-nav" id="projet-next" href="/projets/wilkinson-summer" title="Voir le projet Wilkinson Summer">
            <span>Next project</span>
            <span class="projet-name">Wilkinson Summer</span>
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