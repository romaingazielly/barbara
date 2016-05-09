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
      <?php include('../partials/header.php'); ?>

      <section class="container projets auzou">

        <article class="intro-projet">
          <div class="title-projet">
            <img src="/images/projets/auzou/auzou-mini.png"><h1><span>Éditions</span><br/><span>Auzou</span></h1>
          </div>

          <div class="infos-projet">
            <section class="date">
              <p class="bold">Date :</p>
              <p>Été - Automne 2016</p>
            </section>
            
            <section class="mission">
              <p class="bold">Mission :</p>
              <p>Proposer une nouvelle plateforme e-commerce et un catalogue en ligne qui sauront refléter la richesse des collections d’Auzou.</p>
            </section>
            
            <section class="description">
              <p class="bold">Description :</p>
              <p>Les éditions Auzou proposent plusieurs collections de <strong>romans et albums illustrés à destination des 0-13ans</strong>.
              Pour satisfaire l'objectifs d'accroissement du nombre de visites et de ventes en ligne, un nouveau site e-commerce a été pensé. <strong>L'univers riche et coloré</strong> assure une expérience immersive pour petits et grands avec l'utilisation d'un background dynamique. <strong>Le tunnel d'achat et les étapes de création de compte ont été optimisés</strong> pour une utilisation simplifiée sur tous les devices.</p>
            </section>
          </div>
        </article>

        <article class="gallerie">

          <section class="full">
            <img src="/images/projets/auzou/auzou-full.jpg" srcset="/images/projets/auzou/auzou-full-x2.jpg 2x" alt="Auzou">
          </section>

          <section class="full">
            <img src="/images/projets/auzou/auzou-full-2.jpg" srcset="/images/projets/auzou/auzou-full-x2.jpg 2x" alt="Auzou">  
          </section>

          <section class="full">
            <img src="/images/projets/auzou/auzou-full-3.jpg" srcset="/images/projets/auzou/auzou-full-3-x2.jpg 2x" alt="Auzou">
          </section>
          
          <section class="double">
            <img src="/images/projets/auzou/auzou-double-1.jpg" srcset="/images/projets/auzou/auzou-double-1-x2.jpg 2x" alt="Auzou">
            <img src="/images/projets/auzou/auzou-double-2.jpg" srcset="/images/projets/auzou/auzou-double-2-x2.jpg 2x" alt="Auzou">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/auzou/auzou-full-4.jpg" srcset="/images/projets/auzou/auzou-full-4-x2.jpg 2x" alt="Auzou">  
          </section>

        </article>

        <aside>
          <a class="projet-nav" id="projet-prev" href="/projets/wilkinson-summer" title="Voir le projet Wilkinson Summer">
            <span>Previous project</span>
            <span class="projet-name">Wilkinson Summer</span>
          </a>
          <a id="projet-top" href="" title="Go to Top">Top</a>
          <a class="projet-nav" id="projet-next" href="/projets/classic-expert" title="Voir le projet Classic Expert">
            <span>Next project</span>
            <span class="projet-name">Classic Expert</span>
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