<?php
session_start();
?>

<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.tailwindcss.com/"></script>
</head>


<body>

<?php require_once('include/navbar.php')?>

<header>

<h1 class="text-4xl">

  <a href="#" class="typewrite hover:cursor-default" data-period="2000" data-type='[ "Nous sommes un collectif", "Nous sommes passionnés", "Mbappé >>>> Messi", "Rocket League meilleur jeu existant" ]'>
    <span class="wrap"></span>
  </a>

</h1>

</header>

<container class="z-50 relative w-full block" style="background-color: #02111B;">


    <h2 class="text-center text-2xl pt-16 pb-12 ml-4 mr-4">A propos de AlloSimplon</h2>    

    <p class="text-about-princ text-center ">AlloSimplon est un projet ayant démarré début Mars 2023 est ayant comme date de fin début Avril 2023, celui-ci se porte sur la création en
        solitaire d'un site se basant sur le modèle d'Allociné, le principe est simple, répertorier et proposer des films avec leur synopsis,
        acteurs, réalisateurs etc. Ils ne sont pas disponible en streaming mais seulement les bandes d'annonces sont disponible avec une redirection 
        vers des sites externes pour pouvoir regarder ces films.
    </p>
    

    <p class="text-about-princ text-center mt-12">

    Notre équipe est composé de moi même, Developpeurs Web, spécialiste du cinéma, et d'autres ... Je fais mon possible pour rendre
    honneur au 7ème art qu'est le cinéma. 

    </p>

    <p class="text-center text-about-princ mt-12">

    Actuellement, le site faisons partie de la famille AlloCiné depuis Décembre 2021, je travaille avec des gens qui partagent cette philosophie d'amour
    pour cet art qu'est le cinéma et je fais mon possible pour en donner la meilleur image possible.

    </p>
  
    <p class="text-center text-xl pt-16 mr-8 ml-8">Vous souhaitez me poser une question ? Envoyer un CV ? En apprendre plus sur moi ? <a class="no-underline hover:underline font-bold" href="contact.php">Alors venez me le demander !</p></a>



            <div class="flex justify-center mt-8">
        <div
            class="flex flex-col rounded-lg bg-white shadow-lg dark:bg-neutral-700 md:max-w-xl md:flex-row">
            <img
            class="h-56 w-full rounded-t-lg object-cover md:h-auto md:w-56 md:rounded-none md:rounded-l-lg"
            src="../assets/img/aboutmepdp.jpg"
            alt="" />
            <div class="flex flex-col justify-start p-6">
            <h5
                class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                Jérémie T.
            </h5>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Developpeur Web.<br>
                Joueur de Rocket League
            </p>
            <p class="text-xs text-neutral-500 dark:text-neutral-300">
                Dernière mise à jour : il y a 5 minutes
            </p>
            </div>
          </div>
        </div>
  
        

    <div class="mt-16" style="margin-right:8%; margin-left:8%;">

    <hr class="mb-8">

      <a href="#"><div class="mb-8 flex justify-between">

        <img class="w-32" src="../assets/img/big-ben.png">
      
        <h3 class="m-auto text-slate-50 uppercase">Londres</h3>
        <p class="m-auto uppercase">Postes disponibles : 2</p>

      </div></a>

      <hr class="mb-8">

      <a href="#"><div class="mb-8 flex justify-between">

        <img class="w-32" src="../assets/img/paris-tour-eiffel.png">

        <h3 class="m-auto text-slate-50 uppercase">Paris</h3>
        <p class="m-auto uppercase">Postes disponibles : 5</p>

      </div>
      </a>

      <hr class="mb-8">

    </div>











</container>

  


<?php require_once('include/footer.php') ?>



























<script>

  var TxtType = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
      };
  
      TxtType.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];
  
          if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
          }
  
          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
          var that = this;
          var delta = 200 - Math.random() * 100;
  
          if (this.isDeleting) { delta /= 2; }
  
          if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
          }
  
          setTimeout(function() {
          that.tick();
          }, delta);
      };
  
      window.onload = function() {
          var elements = document.getElementsByClassName('typewrite');
          for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-type');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
              }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
          document.body.appendChild(css);
      };
  
  </script>







<script>
  const btn = document.querySelector("button.mobile-menu-button");
  const menu = document.querySelector(".mobile-menu");

  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>

  <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>


</html>