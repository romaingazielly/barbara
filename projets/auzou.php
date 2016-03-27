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
            <img src="/images/projets/auzou-mini.png"><h1><span>Éditions</span><br/><span>Auzou</span></h1>
          </div>

          <div class="infos-projet">
            <section class="date">
              <p class="bold">Project date:</p>
              <p>Summer 2013</p>
            </section>
            
            <section class="mission">
              <p class="bold">Mission:</p>
              <p>Defining a new global identity for the floating Café «La Balle au bond». New image should express fresh & peculiar atmosphere of the place.</p>
            </section>
            
            <section class="description">
              <p class="bold">About project:</p>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </section>
          </div>
        </article>

        <article class="gallerie">

          <section class="full">
            <img src="/images/projets/auzou-full.png">
          </section>

          <section class="full">
            <img src="/images/projets/auzou-full-2.jpg">  
          </section>

          <section class="full">
            <img src="/images/projets/auzou-full-3.jpg">
          </section>
          
          <section class="double">
            <img src="/images/projets/auzou-double-1.jpg">
            <img src="/images/projets/auzou-double-2.jpg">
          </section>

          <section class="full nomarg">
            <img src="/images/projets/auzou-full-4.jpg">  
          </section>

          <section class="full nomarg">
            <img src="/images/projets/auzou-full-5.jpg">  
          </section>

        </article>

        <aside>
          <a class="projet-nav" id="projet-prev" href="javascript:;" title="">
            <span>Previous project</span>
            <span class="projet-name">Saupiquet</span>
          </a>
          <a id="projet-top" href="" title="Go to Top">Top</a>
          <a class="projet-nav" id="projet-next" href="javascript:;" title="">
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