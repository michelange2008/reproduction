<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>animation</title>
    <link rel="stylesheet" href="css/reproduction.css">

</head>
<body>
  <div class="container">
    <div id="barre-titre">
      <h1>le cycle ovarien de la vache<span class="detail"> (après vélage et sans fécondation)</span></h1>
      <div class="logos">
        <div class="cc"></div>
        <div class="antikor"></div>
      </div>
    </div>

    <nav id="menu">
      <button id="depart" class="control"><div class="depart"></div> </button>
      <button id="pause" class="control"><div class="pause"></div></button>
      <button id="play" class="control"><div class="play"></div></button>
      <div id="timeline">
        <div id="ligne">
          <?php for ($i=0; $i < 40 ; $i++) {
            echo "<div class='jour'></div>";
          } ?>
        </div>
        <div id="marque"></div>
      </div>
    </nav>
    <div class="animation">
      <div id="moniteur">
        <div class="moniteur-item compteur">
          <div id="jours" class="compteur-chiffres">
            <p style="margin:0">0</p>
          </div>
          <p class="moniteur-texte">Nombre de jours</p>
        </div>
        <div class="moniteur-item">
          <div class="bouton bouton-rond">
            <div id="position" class="roller"></div>
          </div>
          <p class="moniteur-texte">progression</p>
        </div>
        <div class="moniteur-item">
          <div class="bouton bouton-demi">
            <div id="speed" class="aiguille"></div>
            <div class="base-aiguille"></div>
          </div>
          <p class="moniteur-texte">vitesse</p>
        </div>

      </div>
      <div class="organe">
        <div class="container-texte">
          <p class="texte" id="explication">-</p>
        </div>
          <?php include("svg/ovaire.svg") ?>
      </div>
    </div>
  </div>
    <script src="gsap/TweenMax.min.js"></script>
    <script src="gsap/TextPlugin.min.js"></script>
    <script src="gsap/Draggable.min.js"></script>
    <script src="reproduction.js"></script>
</body>
</html>
