<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sari-Sari Store</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-br from-yellow-50 to-green-50">
        <div class="relative min-h-screen">
            <!-- Header/Navigation -->
            <header class="bg-gradient-to-r from-green-600 to-green-700 shadow-lg">
                <div class="max-w-7xl mx-auto px-4 py-4 sm:py-6 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-xl sm:text-3xl font-bold text-white hover:text-yellow-200 transition duration-300">
                        Mama's Store
                    </h1>
                    <nav>
                        <div class="flex items-center">
                            <!-- Mobile Menu Button -->
                            <button id="mobile-menu-button" class="md:hidden text-white hover:text-yellow-200 focus:outline-none p-2">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>

                            <!-- Desktop Navigation -->
                            <div class="hidden md:block">
                                <a href="{{ route('dashboard')}}" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-400 transition duration-300 shadow-md">
                                    Dashboard →
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Mobile Navigation Menu -->
                <div id="mobile-menu" class="hidden md:hidden w-full bg-green-600 pb-4 px-4">
                    <a href="{{ route('dashboard')}}" class="block text-white hover:bg-green-500 px-4 py-2 rounded-md text-center">
                        Dashboard →
                    </a>
                </div>
            </header>

            <!-- Main Content -->
            <main class="max-w-7xl mx-auto py-8 sm:py-16 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
                    <!-- Welcome Card -->
                    <div class="bg-white rounded-xl shadow-xl p-6 sm:p-8 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 sm:h-16 sm:w-16 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white mb-4 sm:mb-6">
                            <svg class="h-6 w-6 sm:h-8 sm:w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 sm:mb-4">Welcome</h2>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Your one-stop shop for all your daily needs.</p>
                    </div>

                    <!-- Featured Products Card -->
                    <div class="bg-white rounded-xl shadow-xl p-6 sm:p-8 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 sm:h-16 sm:w-16 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white mb-4 sm:mb-6">
                            <svg class="h-6 w-6 sm:h-8 sm:w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 sm:mb-4">Products</h2>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Discover our everyday essentials at great prices.</p>
                    </div>

                    <!-- Store Hours Card -->
                    <div class="bg-white rounded-xl shadow-xl p-6 sm:p-8 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 sm:h-16 sm:w-16 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white mb-4 sm:mb-6">
                            <svg class="h-6 w-6 sm:h-8 sm:w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 sm:mb-4">Hours</h2>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Open daily: 6:00 AM - 9:00 PM</p>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-gradient-to-r from-green-700 to-green-800 text-white mt-8 sm:mt-12">
                <div class="max-w-7xl mx-auto py-6 sm:py-8 px-4 sm:px-6 lg:px-8 text-center">
                    <p class="text-sm sm:text-lg">&copy; {{ date('Y') }} Sari-Sari Store</p>
                </div>
            </footer>
        </div>

        <!-- Mobile Menu Script -->
        <script>
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>
    </body>
</html>
