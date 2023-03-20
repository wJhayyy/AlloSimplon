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
                    <a href="film.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">Nos films</a>
                    <a href="contact.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">Contact</a>
                    <a href="about.php" class="py-4 px-2 text-slate-500 font-semibold hover:text-slate-50  transition duration-300">A propos</a>
                </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                <a href="signup.php" class="py-2 px-2 font-medium text-slate-500 rounded hover:bg-gray-400 hover:text-slate-50 transition duration-300">Se connecter</a>
                <a href="signin.php" class="py-2 px-2 font-medium text-slate-500 rounded hover:bg-gray-400 hover:text-slate-50 transition duration-300">S'inscrire</a>
                <a href="profil.php"><ion-icon class="text-slate-500 hover:bg-gray-400 hover:text-slate-50 transition duration-300 rounded-full" size="large" name="person-outline"></ion-icon>
                </div>
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
                <li><a href="film.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Nos films</a></li>
                <li><a href="contact.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Contact</a></li>
                <li><a href="about.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">A propos</a></li>
                <li><a href="signup.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">Se connecter</a></li>
                <li><a href="signin.php" class="block text-sm px-2 py-4 bg-slate-500 hover:bg-slate-50 text-slate-800 transition duration-300">S'inscrire</a></li>
            </ul>
            </div>
        </nav>
        