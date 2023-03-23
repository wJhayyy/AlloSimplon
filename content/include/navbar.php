<nav class="shadow-lg mb-16 z-10 relative">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">
      <div class="flex space-x-7">
        <div>
          <!-- Website Logo -->
          <a href="../index.php" class="flex items-center py-4 px-2">
            <img src="../assets/img/allosimplonimg.png" alt="Logo" class="h-12 w-40 mr-2">
          </a>
        </div>
        <!-- Primary Navbar items -->
        <div class="hidden md:flex items-center space-x-1">
          <a href="../content/film.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">Nos films</a>
          <a href="../content/contact.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">Contact</a>
          <a href="../content/about.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">A propos</a>
        </div>
      </div>
      <!-- Secondary Navbar items -->
      
      <?php

        if(!isset($_SESSION['email'])){

         echo '<div class="hidden md:flex items-center space-x-3 ">';
         echo   '<a href="../content/signup.php" class="py-2 px-2 font-medium text-slate-500 rounded hover:bg-gray-400 hover:text-slate-50 transition duration-300">Se connecter</a>';
         echo   '<a href="../content/signin.php" class="py-2 px-2 font-medium text-slate-500 rounded hover:bg-gray-400 hover:text-slate-50 transition duration-300">Sinscrire</a>';
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
      <li><a href="../content/film.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Nos films</a></li>
      <li><a href="../content/contact.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Contact</a></li>
      <li><a href="../content/about.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">A propos</a></li>
      <li><a href="../content/signin.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Se connecter</a></li>
      <li><a href="../content/signup.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">S'inscrire</a></li>
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
                              <?php

                              echo 'Bonjour ' . $_SESSION['name'];

                              ?>
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
                      <form action="../content/logout.php" method="POST">
                        <button type="submit" class="mb-4 ml-4 text-gray-400 bg-transparent hover:bg-red-600 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                              Deconnexion
                        </button>
                      </form>
                  </div>
              </div>
          </div>

          <?php

          if ($_SESSION['id_role'] == 2) { // Vérifie si l'utilisateur est connecté et a le rôle d'admin
    
          echo '<a href="crud.php"><button class="z-50 sticky text-slate-50 bg-slate-500 top-20 m-auto rounded-full pl-4 pr-4 p-2 pb-2 block hover:bg-stone-600 transition duration-300">Panel Admin</button></a>';
          }
          ?>

<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
          