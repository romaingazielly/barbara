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
      <header class="small">
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
                <li><a href="projets/animaux-sante.php">Animaux Santé</a></li>
                <li><a href="projets/saupiquet.php">Saupiquet</a></li>
                <li><a href="projets/balle-au-bond.php">La balle au bond</a></li>
                <li><a href="projets/le-petit-marseillais.php">Le Petit Marseillais</a></li>
                <li><a href="projets/auzou.php">Auzou éditions</a></li>
                <li><a href="projets/classic-expert.php">Classic Expert</a></li>
                <li><a href="projets/igloo.php">L'igloo immobilier</a></li>
                <li><a href="projets/wilkinson-summer.php">Wilkinson Summer</a></li>
              </ul>
              <p><a href="">Moodboards</a></p>
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

      <section class="container projets auzou">

        <article class="intro-projet">
          <div class="title-projet">
            <img src="images/projets/projet-5-mini.png"><h1><span>Éditions</span><br/><span>Auzou</span></h1>
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
          <section class="solo">
            <img src="images/projets/projet-2-cover.jpg">
          </section>

          <section class="full">
            <img src="images/projets/projet-2-full.png">
            <a href="#">Website</a>
          </section>

          <section class="full">
            <img src="images/projets/projet-2-full-2.jpg">  
          </section>

          <section class="full">
            <img src="images/projets/projet-2-full-3.jpg">
          </section>
          
          <section class="double">
            <img src="images/projets/projet-2-double-1.jpg">
            <img src="images/projets/projet-2-double-2.jpg">
          </section>

          <section class="full nomarg">
            <img src="images/projets/projet-2-full-4.jpg">  
          </section>

          <section class="full nomarg">
            <img src="images/projets/projet-2-full-5.jpg">  
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

      <footer>
        <!-- Logo -->
        <a href="/" id="logo-footer" title="Barbara Sevin">
          <img src="images/logo.png" alt="Barbara Sevin" width="144" height="19" srcset="images/logo-x2.png 2x">
          <span>Branding & Digital ideas</span>
        </a>

        <div class="links">
          <div class="join">
            <h1>Barbara Sevin - <strong>Art Director</strong></h1>
            <a href="mailto:barbara.sevin@gmail.com">barbara.sevin@gmail.com</a>
          </div>

          <ul class="social">
            <li><a href="">Behance</a></li>
            <li><a href="">LinkedIn</a></li>
          </ul>
        </div>
      </footer>

    </body>
    <script src="js/libs/jquery-2.2.1.min.js"></script>
    <script src="js/libs/gsap/TweenLite.min.js"></script>
    <script src="js/libs/gsap/plugins/CSSPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/ScrollToPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/EasePack.min.js"></script>

    <script src="js/script.js"></script>
</html>