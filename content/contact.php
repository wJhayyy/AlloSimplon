<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.tailwindcss.com/"></script>
</head>


<body>





<section class="bg-white dark:bg-gray-900 contact-bg">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md contact-background">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center  dark:text-white">Contactez nous </h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-slate-50 dark:text-gray-400 sm:text-xl">Erreur technique ? Vous voulez nous faire pars d'un retour à propos du site ? Besoin de détail ? Faites le nous savoir.</p>
      <form action="post-contact.php" method="POST" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium dark:text-gray-300">Your email *</label>
              <input type="email" id="email" name="email" class="text-stone-900 shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="nom@gmail.com" required>
          </div>
          <div>
              <label for="sujet" class="block mb-2 text-sm font-medium  dark:text-gray-300">Sujet</label>
              <input type="text" id="sujet" name="sujet" class=" text-stone-900 block p-3 w-full text-sm  bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Sur quoi pouvons nous vous aider ?" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium  dark:text-gray-400">Your message</label>
              <textarea id="message" name="message" rows="6" class="text-stone-900 block p-2.5 w-full text-sm bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Votre commentaire" required></textarea>
          </div>
          <button class="co-inscri-button block ml-auto mr-auto w-3/5 mt-12 mb-8 text-slate-50 bg-slate-500 hover:bg-stone-600 text-white font-bold py-2 px-4 rounded-full transition: duration-300">
                Envoyer un message
            </button>

            <div clas="text-center">
              <a class="text-center no-underline hover:underline" href="../index.php"><p class="text-base mt-8">Home</p></a>
            </div>
      </form>
  </div>
</section>






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
