<?php
session_start();

include_once('fonction.php');

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
<?php
include_once('include/navbar.php');
?>



<!-- Modal toggle -->
<div class="flex justify-center m-5">
    <button id="defaultModalButton" data-modal-toggle="createcrudModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
    Ajouter un film
    </button>
</div>

<!-- Main modal -->
<div id="createcrudModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ajouter
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createcrudModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="formulaireadd.php" method="POST">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du film :</label>
                        <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : Matrix" required="">
                    </div>
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Année de sortie :</label>
                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : 2012" required="">
                    </div>
                    <div>
                        <label for="trailer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trailer :</label>
                        <input type="text" name="trailer" id="trailer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lien youtube" required="">
                    </div>
                    <div>
                        <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories :</label>
                        <select id="categorie" name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Catégorie</option>
                            <option value="Horreur">Horreur</option>
                            <option value="Comedie">Comédie</option>
                            <option value="Drame">Drame</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Synopsis</label>
                        <textarea name="synopsis" id="synopsis" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ecrivez le synopsis ici"></textarea>                    
                    </div>

                    <div>
                        <label for="trailer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lien youtube" required="">
                    </div>
                </div>

                <?php

                echo '<button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">';
                echo '<svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Confirmer';
                echo '</button>';

                ?>
            </form>
        </div>
    </div>
</div>







<div class="w-fit relative overflow-x-auto shadow-md sm:rounded-lg m-auto mt-20 ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom du film : 
                </th>
                <th scope="col" class="px-6 py-3">
                    Année de sortie :
                </th>
                <th scope="col" class="px-6 py-3">
                    Catégorie : 
                </th>
                <th scope="col" class="px-6 py-3">
                    Trailer : 
                </th>
                <th scope="col" class="px-16 py-3">
                    Action : 
                </th>
            </tr>
        </thead>


        
        <tbody class="bg-white">
        <?php
        try {
            $slct = $bdd->prepare("SELECT id_film, nom, date, categorie, trailer FROM films WHERE id_film >= 306");
            $slct->execute();
            $resultat = $slct->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultat as $row) {
                echo "<tr>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['categorie'] . "</td>";
                echo "<td>" . $row['trailer'] . "</td>";
                echo "<td>";
                echo "<div class='flex w-fit mb-4'>";
                echo "<a href='modifier.php?id=" . $row['id_film'] . "'><button data-modal-toggle='Modalmodifycrud' class='block text-blue-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800' type='button'>Modifier</button></a>";
                echo "<form method='POST' action='delete.php'><input type='hidden' name='id' value='" . $row['id_film'] . "'><button type='submit' name='delete' class='text-slate-50 ml-4 inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800'>Supprimer</button></form>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>
                    
            </form>
                    <!-- Modal toggle -->


                        <!-- Main modal -->
                        <div id="Modalmodifycrud" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Modifié
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="Modalmodifycrud">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="fonction.php" method="POST">
                                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du film :</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : Matrix" required="">
                                            </div>
                                            <div>
                                                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Année de sortie :</label>
                                                <input type="date" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemple : 2018" required="">
                                            </div>
                                            <div>
                                                <label for="trailer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trailer :</label>
                                                <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lien youtube" required="">
                                            </div>
                                            <div>
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégorie :</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected="">Catégorie</option>
                                                    <option value="Horreur">Horreur</option>
                                                    <option value="Comedie">Comédie</option>
                                                    <option value="Drame">Drame</option>
                                                    <option value="Sci-Fi">Sci-Fi</option>
                                                </select>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Synopsis</label>
                                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Synopsis du film ici "></textarea>                    
                                            </div>
                                        </div>
                                        <button type="submit" name="confirm" class="text-slate-50 inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Confirmer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>








<?php
include_once('include/footer.php')
?>
<script>
  const btn = document.querySelector("button.mobile-menu-button");
  const menu = document.querySelector(".mobile-menu");

  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>


</body>


</html>