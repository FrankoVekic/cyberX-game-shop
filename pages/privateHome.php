<?php 
  require_once '../includes/branched/config.php'; 
  siteProtection ($appLink);

?>
<html class="no-js" lang="en">
  <head>
   <?php
  require_once '../includes/branched/head.php';
    ?>
  </head>
  <body>
   <?php 
  require_once '../includes/branched/header.php';
   ?>
    <!-- End Top Bar -->
    
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
      <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        <li class="is-active orbit-slide">
          <img class="orbit-image" src="../includes/images/orbit/valorant1.jpg" alt="Space">
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="../includes/images/orbit/ct1.jpg" alt="Space">
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="../includes/images/orbit/coldwar1.jpg" alt="Space">
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="../includes/images/orbit/gta51.jpg" alt="Space">
        </li>
      </ul>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr"></span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr"></span></button>
        <button data-slide="2"><span class="show-for-sr"></span></button>
        <button data-slide="3"><span class="show-for-sr"></span></button>
      </nav>
    </div>
    
    <br>
    <div class="text-center">
      <h2>TOP RATED GAMES THIS WEEK</h2>
      <hr>
    </div>
    
    <article class="grid-container">
      <div class="grid-x grid-margin-x small-up-2 medium-up-2 large-up-4">
        <div class="cell">
          <img class="thumbnail" src="/includes/images/toprated/doom.jpg">
          <h5>Doom</h5>
          <p>$49.99</p>
          <a href="#" class="button expanded">Buy</a>
        </div>
        <div class="cell">
          <img class="thumbnail" src="/includes/images/toprated/fifa20.png">
          <h5>Fifa 20</h5>
          <p>$59.99</p>
          <a href="#" class="button expanded">Buy</a>
        </div>
        <div class="cell">
          <img class="thumbnail" src="/includes/images/toprated/fallout.jpg">
          <h5>Fallout 4</h5>
          <p>$49.99</p>
          <a href="#" class="button expanded">Buy</a>
        </div>
        <div class="cell">
          <img class="thumbnail" src="/includes/images/toprated/crysis3.jpg">
          <h5>Crysis 3</h5>
          <p>$39.99</p>
          <a href="#" class="button expanded">Buy</a>
        </div>
      </div>
    
      
    
        <hr>
    
        <div class="text-center">
          <h2>UPCOMING GAMES in 2020</h2>
          <hr>
        </div>
    
        <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-6">
          <div class="cell">
            <img class="thumbnail" src="../includes/images/upcoming/ark2.jpg">
            <h5>Ark II</h5>
            <p>$79.99</p>
            <a href="#" class="button small expanded hollow">Preorder</a>
          </div>
          <div class="cell">
            <img class="thumbnail" src="../includes/images/upcoming/batman.jpg">
            <h5>Gotham Knights</h5>
            <p>$89.99</p>
            <a href="#" class="button small expanded hollow">Preorder</a>
          </div>
          <div class="cell">
            <img class="thumbnail" src="../includes/images/upcoming/callisto.jpg">
            <h5>Callisto Protocol</h5>
            <p>$100</p>
            <a href="#" class="button small expanded hollow">Preorder</a>
          </div>
          <div class="cell">
            <img class="thumbnail" src="../includes/images/upcoming/gt7.jpg">
            <h5>Gran Turismo 7</h5>
            <p>$89.99</p>
            <a href="#" class="button small expanded hollow">Preorder</a>
          </div>
          <div class="cell">
            <img class="thumbnail" src="../includes/images/upcoming/splatoon.jpg">
            <h5>Splatoon 3</h5>
            <p>$49.99</p>
            <a href="#" class="button small expanded hollow">Preorder</a>
          </div>
          <div class="cell">
            <img class="thumbnail" src="../includes/images/upcoming/forespoken.jpg">
            <h5>Forspoken</h5>
            <p>$79.99</p>
            <a href="#" class="button small expanded hollow">Preorder</a>
          </div>
        </div>
    
        <hr>
        <div class="grid-x align-bottom">
          <div class="medium-4 cell">
            <h4>Where can you find us?</h4>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/osijek.jpg">
              </div>
              <div class="media-object-section">
                <h5>OSIJEK</h5>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/zagreb.jpg">
              </div>
              <div class="media-object-section">
              <h5>ZAGREB</h5>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/rijeka.jpg">
              </div>
              <div class="media-object-section">
              <h5>RIJEKA</h5>
              </div>
            </div>
          </div>
          <div class="medium-4 cell">
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/zadar.jpg">
              </div>
              <div class="media-object-section">
              <h5>ZADAR</h5>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/Vukovar.jpg">
              </div>
              <div class="media-object-section">
              <h5>VUKOVAR</h5>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/dubrovnik.jpg">
              </div>
              <div class="media-object-section">
                <h5>DUBROVNIK</h5>
              </div>
            </div>
          </div>
          <div class="medium-4 cell">
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/vinkovci.jpg">
              </div>
              <div class="media-object-section">
                <h5>VINKOVCI</h5>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/sb.jpg">
              </div>
              <div class="media-object-section">
                <h5>SLAVONSKI BROD</h5>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="/includes/images/gamestores/karlovac.jpg">
              </div>
              <div class="media-object-section">
                <h5>KARLOVAC</h5>
              </div>
            </div>
          </div>
        </div>
    </article>
    <br>
        <footer class="callout large secondary">
          <article class="grid-container">
          <div class="grid-x">
            <div class="large-4 cell">
              <h5>Vivamus Hendrerit Arcu Sed Erat Molestie</h5>
              <p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit.</p>
            </h4>
          </div>
          <div class="large-3 large-offset-2 cell">
            <ul class="menu vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
              <li><a href="#">Four</a></li>
            </ul>
          </div>
          <div class="large-3 cell">
            <ul class="menu vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
              <li><a href="#">Four</a></li>
            </ul>
          </div>
          </article>
        </footer>
        <?php require_once '../includes/branched/footer.php';
              require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>