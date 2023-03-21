<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com/"></script>
</head>


<body>


      <section class="section2">
        <div class="form-box h-2/5">
            <div class="form-value">
                <form action="connexionbdd.php" method="POST">





                    <h2 class="text-center text-xl font-bold mb-12 mt-12">Connexion</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Mot de passe</label>
                    </div>





                    <div class="forget">
                        <label for=""><input type="checkbox">Se souvenir de moi  <a class="ml-8" href="#">Mot de passe oublié ?</a></label>
                      
                    </div>
                    <input type="submit" class="co-inscri-button block ml-auto mr-auto w-3/5 mt-12 mb-8 text-slate-50 bg-slate-500 hover:bg-stone-600 text-white font-bold py-2 px-4 rounded-full transition: duration-300">
                    <div class="register">
                        <p>Pas de compte ? <a href="signin.php">Inscrivez-vous</a></p>
                    </div>
                    <div clas="text-center">
                      <a class="text-center no-underline hover:underline" href="../index.php"><p class="text-base mb-12 mt-8">Accueil</p></a>
                    </div>
                </form>





            </div>
        </div>
    </section>



    
    
    
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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