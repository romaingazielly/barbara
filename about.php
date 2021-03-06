<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Barbara, 27 ans Directrice Artistique en agence digitale chez Drive - Lyon">
        <meta name="keywords" content="Art direction, Web design, Barbara Sevin">
        <title>Barbara Sevin - À propos</title>

        <?php include('partials/meta.php'); ?>
        
        <link href="https://barbara-sevin.fr/about" rel="alternate" hreflang="fr-FR">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="page-about">
      <?php include('partials/header.php'); ?>

      <!-- Container -->
      <section class="container about">

        <article class="infos">
          <figure>
            <img src="/images/barbara.png" alt="Barbara Sevin">
            <figcaption>
              <h1>À propos</h1>
              <p>Après 3 années partagées entre le poste de <strong>Directrice Artistique</strong> au sein de l'agence <a href="http://www.wise-digital.com" target="_blank"><strong>Wise digital</strong></a> et la réalisation de projets en freelance, je suis à la recherche de nouveaux challenges auprès d'une agence dynamique et audacieuse.</p>

              <p><strong>Expertises :</strong> Social branding & gaming // Web design // Identité</p>

              <p><strong>Clients :</strong> Taxis G7, Le Petit Marseillais, Théâtre des Champs Elysées, Wilkinson, Babyliss, Salle Gaveau, RBMG groupe, Editions Auzou...</p>

              <div class="link"><a href="" title="Curriculum Vitae">Take a look at my CV</a></div>
            </figcaption>
          </figure>
        </article>

        <article class="worked">
          <div class="text">
             <h1>Nous avons travaillé ensemble</h1>
             <p>Services, beauté, Culture ou food, j’ai eu la chance de travailler au contact de clients variés.<br/> 
             En voici quelques exemples !</p>
          </div>
         
          <ul>
            <li><a href="http://www.hawaiiantropic.fr/" title="Hawaiian Tropic" target="_blank"><img src="/images/clients/hawaiian.jpg" srcset="/images/clients/hawaiian-x2.jpg 2x" alt="Hawaiian Tropic"></a></li> 
            <li><a href="http://www.theatrechampselysees.fr/" title="Théâtre des Champs-Élysées" target="_blank"><img src="/images/clients/tce.jpg" srcset="/images/clients/tce-x2.jpg 2x" alt="Théâtre des Champs-Élysées"></a></li> 
            <li><a href="http://www.mywilkinson.fr/" title="Wilkinson Summer" target="_blank"><img src="/images/clients/wilki.jpg" srcset="/images/clients/wilki-x2.jpg 2x" alt="Wilkinson Summer"></a></li> 
            <li><a href="https://slowcow.com/" title="Slow Cow" target="_blank"><img src="/images/clients/slowcow.jpg" srcset="/images/clients/slowcow-x2.jpg 2x" alt="Slow Cow"></a></li> 
            <li><a href="https://www.lepetitmarseillais.com/" title="Le Petit Marseillais" target="_blank"><img src="/images/clients/lpm.jpg" srcset="/images/clients/lpm-x2.jpg 2x" alt="Le Petit Marseillais"></a></li> 
            <li><a href="https://www.g7.fr/" title="Taxis G7" target="_blank"><img src="/images/clients/tg7.jpg" srcset="/images/clients/tg7-x2.jpg 2x" alt="Taxis G7" /></a></li>
          </ul>
        </article>

        <article class="contact">
          <div>
            <h1>
              <span>Say hello!</span>
              <a id="mail" href="mailto:barbara.sevin@gmail.com" title="Say hello!">barbara.sevin@gmail.com</a>
            </h1>
          </div>
          <a id="go-top" href="javascript:;" title="Go to Top">Top</a>
        </article>

      </section>
      <!-- Fin Container -->

      <?php include('partials/footer.php') ?>

    </body>
    <script src="js/libs/jquery-2.2.1.min.js"></script>
    <script src="js/libs/gsap/TweenLite.min.js"></script>
    <script src="js/libs/gsap/plugins/CSSPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/ScrollToPlugin.min.js"></script>
    <script src="js/libs/gsap/plugins/EasePack.min.js"></script>

    <script src="js/script.js"></script>
</html>