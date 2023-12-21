<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpeedBall Tennis Club</title>
  <link rel="icon" href="./img/icnT0.ico" type="image/x-icon">
  <link rel="shortcut icon" href="./img/icnT0.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <div class="banner-container">
      <div class="banner-content">
        <h1>Speed'Ball Tennis Club</h1>
        <button href="Connexion.php" title="Connexion" id="login-btn">Connexion</button>
        <div class="sidebar">
           <div class="banner"></div>

          <nav>
            <ul>
              <li><a href="Connexion.php" title="Accueil" class="sidebar-btn">Accueil</a></li>
              <li><a href="index.php" title="Actualités" class="sidebar-btn">Actualités</a></li>
              <li><a href="#" title="Joueurs" class="sidebar-btn">Joueurs</a></li>
              <li><a href="#" title="Calendrier" class="sidebar-btn">Calendrier</a></li>
              <li><a href="#" title="Boutique" class="sidebar-btn">Boutique</a></li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <h2>Bienvenue sur notre site dédié au tennis</h2>
      <p>Découvrez les dernières nouvelles, les meilleurs joueurs, et plus encore !</p>
      <a href="#" class="cta-button">En savoir plus</a>
    </section>

    <section class="news">
      <h2>Actualités récentes</h2>
      <article>
        <img src="news1.jpg" alt="Nouvelle actualité">
        <h3>Titre de l'actualité 1</h3>
        <p>Description de l'actualité 1</p>
      </article>
      <article>
        <img src="news2.jpg" alt="Nouvelle actualité">
        <h3>Titre de l'actualité 2</h3>
        <p>Description de l'actualité 2</p>
      </article>
    </section>
    <div class="PartenaireOfficiel">
      <img src="./img/icon/Logo0028.png" /><img src="./img/icon/Logo0029.png">
      <img src="./img/icon/Logo0032.png" />
      <div class="title-Partenaire">Nos partenaires principaux : </div>
    </div>
  </main>

  <footer>
    <div class="container-Main">
    </div> <br />
    </div>

    <div class="FollowUs">
      <div class="container-follow">Nous suivre</div>

    </div>

    <div class="Juridique">
      <div class="container-Juridique">
        <ul class="menu nav">
          <li class="ExCertificatMedic"><span class="nolink" tabindex="0">Juridique</span>
            <ul class="menu nav">
              <li class="first leaf menu-mlid-3671"><a href="https://tenup.fft.fr/sites/default/files/actency_online_license/modele_certificat_medical.pdf" target="_blank">Exemple de certificat médical</a></li>
              <li class="leaf menu-mlid-3672"><a href="/mentions-legales">Mentions légales et CGU</a></li>
              <li class="leaf menu-mlid-3674"><a href="/protection-des-donnees">Protection des données</a></li>
              <li class="leaf menu-mlid-3675"><a href="/Garanties-assurances">Garanties d'assurances</a></li>
              <li class="leaf active menu-mlid-4477 privacyCenter active"><a href="/" class="active">Gestion des cookies</a></li>
              <li class="last leaf menu-mlid-4478"><a href="/politique-cookies">Politique cookies</a></li>
            </ul>
          </li><span class="clear-sm"></span>
          <li class=""><span class="nolink" tabindex="0">Nos sites</span>
            <ul class="menu nav">
              <li class="first leaf menu-mlid-4060"><a href="Index.php">Application IOS</a></li>
              <li class=""><a href="Index.php">Application Android</a></li>
              <li class="leaf menu-mlid-3677"><a href="Index.php" target="_blank">FFT.fr</a></li>
              <li class="leaf menu-mlid-4144"><a href="Index.php">Proshop FFT</a></li>
              <li class="Mon_arbitrage"><a href="Index.php" target="_blank">Mon espace arbitrage</a></li>
            </ul>
          </li>

          <li class="last expanded menu-mlid-3682 col-xs-12 col-sm-6 col-md-3"><span class="nolink footerMenuMobileDropDown-processed" tabindex="0">Aide</span>
            <ul class="menu nav">
              <li class="first leaf menu-mlid-3683"><a href="https://fft.jotform.com/232504643274857?sujet=divers">Nous contacter </a></li>
              <li class="last leaf menu-mlid-3684"><a href="/FAQ" title="Foire aux questions">FAQ</a></li>
            </ul>
          </li>
        </ul>

      </div>

      <div class="OthersWebSite">
        <div class="container-OtherSite">

        </div>


























        <!-- 

              <div class="row">
        <h2 class="block-title">Nous suivre</h2>
    
  <ul class="menu nav">
      <span class="sr-only">facebook</span></a></li>
<li class="leaf menu-link-twitter"><a href="https://twitter.com/FFTennis" title="Nous suivre sur Twitter" target="_blank" class="fa fa-twitter socialMenuFooter-processed" onclick="
      var url = jQuery('ol.breadcrumb');
      if(url.length == 0) {
        if(jQuery('.menu-name').text() == '') {
          var chap2 = 'homepage_deconecte';
        } else {
          var chap2 = 'homepage_connecte';
        }
      } else {
        var chap2 = url.text().toString().trim().replace(/\s/g,'_');
      }
      tc_events_19(this,'clic',{
      'event_type':'exit',
      'event_chapter1':'footer',
      'event_chapter2': chap2,
      'event_name':'twitter'})"><span class="sr-only">twitter</span></a></li>
<li class="leaf menu-link-youtube"><a href="https://www.youtube.com/user/FFT" title="Nous suivre sur Youtube" target="_blank" class="fa fa-youtube socialMenuFooter-processed" onclick="
      var url = jQuery('ol.breadcrumb');
      if(url.length == 0) {
        if(jQuery('.menu-name').text() == '') {
          var chap2 = 'homepage_deconecte';
        } else {
          var chap2 = 'homepage_connecte';
        }
      } else {
        var chap2 = url.text().toString().trim().replace(/\s/g,'_');
      }
      tc_events_19(this,'clic',{
      'event_type':'exit',
      'event_chapter1':'footer',
      'event_chapter2': chap2,
      'event_name':'youtube'})"><span class="sr-only">youtube</span></a></li>
<li class="last leaf menu-link-instagram"><a href="https://www.instagram.com/FFTennis/" title="Nous suivre sur Instagram" target="_blank" class="fa fa-instagram socialMenuFooter-processed" onclick="
      var url = jQuery('ol.breadcrumb');
      if(url.length == 0) {
        if(jQuery('.menu-name').text() == '') {
          var chap2 = 'homepage_deconecte';
        } else {
          var chap2 = 'homepage_connecte';
        }
      } else {
        var chap2 = url.text().toString().trim().replace(/\s/g,'_');
      }
      tc_events_19(this,'clic',{
      'event_type':'exit',
      'event_chapter1':'footer',
      'event_chapter2': chap2,
      'event_name':'instagram'})"><span class="sr-only">instagram</span></a></li>
</ul>
</section>
<section id="block-menu-block-3" class="block block-menu-block">

      
  <div class="menu-block-wrapper menu-block-3 menu-name-menu-footer parent-mlid-0 menu-level-1">
  <ul class="menu nav"><li class="first expanded menu-mlid-3670 col-xs-12 col-sm-6 col-md-3 footerMenuMobileDisplay-processed"><span class="nolink footerMenuMobileDropDown-processed" tabindex="0">Juridique</span><ul class="menu nav"><li class="first leaf menu-mlid-3671"><a href="https://tenup.fft.fr/sites/default/files/actency_online_license/modele_certificat_medical.pdf" target="_blank">Exemple de certificat médical</a></li>
<li class="leaf menu-mlid-3672"><a href="/mentions-legales">Mentions légales et CGU</a></li>
<li class="leaf menu-mlid-3674"><a href="/protection-des-donnees">Protection des données</a></li>
<li class="leaf menu-mlid-3675"><a href="/Garanties-assurances">Garanties d'assurances</a></li>
<li class="leaf active menu-mlid-4477 privacyCenter active"><a href="/" class="active">Gestion des cookies</a></li>
<li class="last leaf menu-mlid-4478"><a href="/politique-cookies">Politique cookies</a></li>
</ul></li><span class="clear-sm"></span>
<li class="expanded menu-mlid-3676 col-xs-12 col-sm-6 col-md-3"><span class="nolink footerMenuMobileDropDown-processed" tabindex="0">Nos sites</span><ul class="menu nav"><li class="first leaf menu-mlid-4060"><a href="https://apps.apple.com/fr/app/tenup/id1457871907">Application IOS</a></li>
<li class="leaf menu-mlid-4061"><a href="https://play.google.com/store/apps/details?id=com.fft.tenup&amp;hl=fr">Application Android</a></li>
<li class="leaf menu-mlid-3677"><a href="http://www.fft.fr/" target="_blank">FFT.fr</a></li>
<li class="leaf menu-mlid-4144"><a href="https://proshop.fft.fr/">Proshop FFT</a></li>
<li class="last leaf menu-mlid-4513"><a href="https://mon-espace-arbitrage.fft.fr/" target="_blank">Mon espace arbitrage</a></li>
</ul></li>
<li class="last expanded menu-mlid-3682 col-xs-12 col-sm-6 col-md-3"><span class="nolink footerMenuMobileDropDown-processed" tabindex="0">Aide</span><ul class="menu nav"><li class="first leaf menu-mlid-3683"><a href="https://fft.jotform.com/232504643274857?sujet=divers">Nous contacter </a></li>
<li class="last leaf menu-mlid-3684"><a href="/FAQ" title="Foire aux questions">FAQ</a></li>
</ul></li>
</ul></div>

</section>

<button id="backtotop" class="jquery-once-2-processed" style="display: inline-block;">Back to top</button>

    <input type="button" id="le_bouton" value="backtotop" OnClick="window.location.href="Index.php"> -->

        <p>&copy; 2023 - SpeedBall Tennis Club. Tous droits réservés.</p>
  </footer>
</body>

</html>