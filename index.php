<?php 

session_start();

?>

<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>AlloSimplon</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.tailwindcss.com/"></script>
</head>


<body>

<!-- Navbar goes here -->
<nav class="shadow-lg mb-16 z-10 relative">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">
      <div class="flex space-x-7">
        <div>
          <!-- Website Logo -->
          <a href="#" class="flex items-center py-4 px-2">
            <img src="assets/img/allosimplonimg.png" alt="Logo" class="h-12 w-40 mr-2">
          </a>
        </div>
        <!-- Primary Navbar items -->
        <div class="hidden md:flex items-center space-x-1">
          <a href="content/film.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">Nos films</a>
          <a href="content/contact.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">Contact</a>
          <a href="content/about.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">A propos</a>
        </div>
      </div>
      <!-- Secondary Navbar items -->
      
      <?php

        if(!isset($_SESSION['email'])){

         echo '<div class="hidden md:flex items-center space-x-3 ">';
         echo   '<a href="content/signup.php" class="py-2 px-2 font-medium text-slate-500 rounded hover:bg-gray-400 hover:text-slate-50 transition duration-300">Se connecter</a>';
         echo   '<a href="content/signin.php" class="py-2 px-2 font-medium text-slate-500 rounded hover:bg-gray-400 hover:text-slate-50 transition duration-300">Sinscrire</a>';
        } else {
            
           echo '<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block h-min mt-auto mb-auto font-medium text-lg text-slate-500 hover:bg-gray-400 hover:text-slate-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-300" type="button">
                Bonjour ' . $_SESSION['name'];
           echo  '</button>';
          echo '</div>';
        }

      ?>



      <!-- Mobile menu button -->
      <div class="md:hidden flex items-center">
        <button class="outline-none mobile-menu-button">
        <svg class=" w-6 h-6 text-gray-500 hover:text-slate-50"
          x-show="!showMenu"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      </div>
    </div>
  </div>
  <!-- mobile menu -->
  <div class="hidden mobile-menu z-10">
    <ul class="">
      <li><a href="content/film.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Nos films</a></li>
      <li><a href="content/contact.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Contact</a></li>
      <li><a href="content/about.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">A propos</a></li>
      <li><a href="content/signin.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Se connecter</a></li>
      <li><a href="content/signup.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">S'inscrire</a></li>
    </ul>
  </div>
</nav>


<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
              <div class="relative w-full h-full max-w-2xl md:h-auto">
                  <!-- Modal content -->
                  <div class="relative bg-slate-900 rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-xl font-semibold text-slate-50 dark:text-white m-auto">
                              Profil
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                          <p class="text-base leading-relaxed text-slate-50 dark:text-gray-400">
                          <?php echo 'Votre email est ' . $_SESSION['email']?> 
                          </p>
                          <p class="text-base leading-relaxed text-slate-50 dark:text-gray-400">
                          <?php echo 'Votre numéro de téléphone est ' . $_SESSION['num']?> 
                          </p>
                          <p class="text-base leading-relaxed text-slate-50 dark:text-gray-400">
                          <?php echo 'Votre mot de passe est ' . $_SESSION['password']?> 
                          </p>
                          <p class="text-base leading-relaxed text-slate-50 dark:text-gray-400">
                          <?php echo 'Vous vous appeler ' . $_SESSION['name'] . $_SESSION['firstname']?> 
                          </p>
                          <p class="text-base leading-relaxed text-slate-50 dark:text-gray-400">
                          <?php echo 'Vous etes ' . $_SESSION['id_role']?>
                          </p>
                      </div>
                      <!-- Modal footer -->
                      <form action="content/logout.php" method="POST">
                        <button type="submit" class="mb-4 ml-4 text-gray-400 bg-transparent hover:bg-red-600 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                              Deconnexion
                        </button>
                      </form>
                  </div>
              </div>
          </div>

          

          <!--Vérifie si l'utilisateur est connecté et a le rôle d'admin-->
          <?php
          if(isset($_SESSION) && ($_SESSION ['id_role'] == 2)){ ?>
            <button class="z-50 sticky text-slate-50 bg-slate-500 top-20 m-auto rounded-full pl-4 pr-4 p-2 pb-2 block hover:bg-stone-600 transition duration-300"><a href="content/crud.php">Panel Admin</a></button>
          <?php
          }
          ?>

          <!--<button type="button" class="z-50 sticky text-slate-50 bg-slate-500 top-20 m-auto rounded-full pl-4 pr-4 p-2 pb-2 block hover:bg-stone-600 transition duration-300"><a href="content/crud.php">Panel Admin</a>-->

          

          
        
<header>
  
<h1 class="">
  <a href="" class="typewrite text-4xl hover:cursor-default" data-period="2000" data-type='[ "Never gonna give you up", "Never gonna let you down", "Never gonna run around and desert you", "Never gonna make you cry" ]'>
    <span class="wrap"></span>
  </a>
</h1>

</header>


<!-- Slider -->

<div class="slider-div">

  <div id="controls-carousel" class="relative" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative overflow-hidden rounded-3xl taille-slider">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
              <img src="assets/img/img-carrousel-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="assets/img/img-carrousel-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="assets/img/img-carrousel-3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="assets/img/img-carrousel-4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="assets/img/img-carrousel-5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
  </div>

</div>

<a class="lien-esp-pa pl-2 pr-2" href="content/film.php" style="width: fit-content;display: block;margin-left: auto;margin-right: auto;">
  <h2 class="voir-plus-link text-center text-slate-800 bg-slate-500 rounded-full hover:bg-slate-50 transition duration-300">Voir notre liste de film</h2>
</a>

<!-- Cards -->


<h2 class="z-10 relative text-center text-2xl p-4 mt-16 bg-stone-400 w-fit m-auto rounded-full">A l'affiche 

</h2>

<div class="card-accueil flex mt-20">

  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-2/6 z-10 relative">
    <a href="#">
        <img class="rounded-t-lg" src="assets/img/affiche-accueil1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taxi</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vener retrouver le taxi le plus fou de Marseille en compagnie de son ami policier !</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slate-50 bg-slate-500 rounded-lg hover:bg-stone-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-300">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
  </div>

  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-2/6 z-10 relative">
    <a href="#">
        <img class="rounded-t-lg" src="assets/img/affiche-accueil2.jpg" alt="" />
    </a>
    <div class="p-5 bg-slate-50">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pirates des Caraibes</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aller découvrir l'aventure d'un pirate pas comme les autres au destin unique </p>
      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slate-50 bg-slate-500 rounded-lg hover:bg-stone-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-300">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
  </div>
</div>




<footer class="bg-zinc-700 dark:bg-gray-900 mt-40">
  <div class="mx-auto w-full container p-4 sm:p-6">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="index.php" class="flex items-center">
                <img src="assets/img/allosimplonimg.png" class="h-16 mr-3" alt="FlowBite Logo" />
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-slate-50 uppercase dark:text-white">Resources</h2>
                <ul class="text-slate-50 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                    </li>
                    <li>
                        <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-slate-50 uppercase dark:text-white">Retrouvez-nous</h2>
                <ul class="text-slate-50 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://github.com/wJhayyy/AlloSimplon" class="hover:underline ">Github</a>
                    </li>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-slate-50 uppercase dark:text-white">Légale</h2>
                <ul class="text-slate-50 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-slate-50 sm:text-center dark:text-gray-400">© 2023 <a href="index.php" class="hover:underline">AlloSimplon™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Dribbble account</span>
            </a>
        </div>
    </div>
  </div>
</footer>





























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