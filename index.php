<?php
  require "header.php"; 
?>
<!--~~~~~~~~~~~~~~~~~~~~
      Start main
~~~~~~~~~~~~~~~~~~~~~-->
<main>
<!--The section call to action containing 3 div-->
  <div id="callToAction" class="desktop width_80 center margin_auto">
    <div>
      <a href="page_modification"><img src="img/icons8_bulle.png" alt="Une icone de bulle pour messages"></a>
      <p>Proposer une modification</p>
    </div>
     <div>
       <a href="page_addrecette"><img src="img/icons8_message.png" alt="Une icone d'une enveloppe"></a>
      <p>Proposer une recette</p>
    </div>
    <div>
      <a href="page_critique"><img src="img/icons8_pouces.png" alt="Une icone avec un pouce levé et un baissé"></a>
      <p>Voir mes critiques</p>
    </div>
  </div>
<!--The article presentation-->
  <article id="presentation" class="center">
    <h3>Qui suis-je?<br>Un pâtissier amateur mais passionné</h3>
    <img class="width_80" src="http://www.emma-patisserie.fr/media/images/contenus/w-1900-h-600-hero3.jpg" alt="Une image avec plusieurs pâtisserie qui ont l'air délicieuses">
  </article>
<!--The section news recipes containing 3 articles-->
  <section id="news" class="center">
    <h2>Une petite sélection de mes recettes</h2>
    <div class="width_80 margin_auto tabletteOnly">
<!--The first article containing title, image, p and links-->
      <article class="border center margin_auto article_news">
        <h3>Charlotte au chocolat</h3>
        <img class="width_80" src="http://www.lechef-cestvous.com/images/patisserie/recette-charlotte-chocolat.jpg" alt="Une image d'une charlotte au chocolat">
        <p class="margin_2em">Je vous présente ma charlotte au chocolat</p>
        <div class="link_article">
          <a href="https://fr-fr.facebook.com/"><img src="img/icons8_facebook.png" alt="Le logo de facebook"></a>
          <a href="https://twitter.com/"><img src="img/icons8_twitter.png" alt="Le logo de twitter"></a>
          <a class="puce border" href="http://www.lechef-cestvous.com/recettes-gateaux/charlotte-chocolat">Voir</a>
        </div>
      </article>
<!--The second article containing title, image, p and links-->
      <article class="border center margin_auto article_news">
        <h3>Tarte à la mangue</h3>
        <img class="width_80" src="http://www.lechef-cestvous.com/images/patisserie/recette-tarte-mangue.jpg" alt="Une image de tarte à la mangue">
        <p class="margin_2em">Je vous présente ma tarte à la mangue</p>
        <div class="link_article">
          <a href="https://fr-fr.facebook.com/"><img src="img/icons8_facebook.png" alt="Le logo de facebook"></a>
          <a href="https://twitter.com/"><img src="img/icons8_twitter.png" alt="Le logo de twitter"></a>
          <a class="puce border" href="http://www.lechef-cestvous.com/recettes-tartes/tarte-mangue">Voir</a>
        </div>
      </article>
<!--The third article containing title, image, p and links-->
      <article class="border center margin_auto article_news">
        <h3>Le millefeuille aux fraises</h3>
        <img class="width_80" src="http://www.lechef-cestvous.com/images/patisserie/recette-millefeuille-aux-fraises.jpg" alt="Une image de Millefeuille aux fraises">
        <p class="margin_2em">Je vous présente mon millefeuille aux fraises</p>
        <div class="link_article">
          <a href="https://fr-fr.facebook.com/"><img src="img/icons8_facebook.png" alt="Le logo de facebook"></a>
          <a href="https://twitter.com/"><img src="img/icons8_twitter.png" alt="Le logo de twitter"></a>
          <a class="puce border" href="http://www.lechef-cestvous.com/recettes-gateaux/millefeuille-fraise">Voir</a>
        </div>
      </article>
  </div>
  </section>
</main>
<!--~~~~~~~~~~~~~~~~~~~~
      End main
~~~~~~~~~~~~~~~~~~~~~-->
<?php
  require "footer.php"; 
?>