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
    <body class="bg-gray-100">
        <div class="min-h-screen flex flex-col">
            <header class="bg-gradient-to-r from-green-600 to-green-700 shadow-lg sticky top-0 z-50">   
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center py-6">
                        <div class="flex-shrink-0">
                            <a href="{{ url('/') }}" class="text-2xl font-bold text-white hover:text-yellow-400">Mama's Sari-Sari Store</a>
                        </div>
                        <div class="hidden md:flex space-x-4">
                            <a href="{{ route('product.index')}}"
                               class="{{ request()->routeIs('products') ? 'bg-yellow-500' : 'bg-green-500' }} text-white px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md">
                                Products
                            </a>
                            <a href="{{-- route('stocks') --}}" 
                               class="{{ request()->routeIs('stocks') ? 'bg-yellow-500' : 'bg-green-500' }} text-white px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md">
                                Stocks
                            </a>
                            <a href="{{-- route('utang') --}}" 
                               class="{{ request()->routeIs('debts') ? 'bg-yellow-500' : 'bg-green-500' }} text-white px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md">
                                Utang
                            </a>
                            <a href="{{--route('sales') --}}" 
                               class="{{ request()->routeIs('sales') ? 'bg-yellow-500' : 'bg-green-500' }} text-white px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md">
                                Sales
                            </a>
                        </div>
                        <div class="md:hidden">
                            <button id="mobile-menu-button" class="text-white focus:outline-none">
                                <!-- Hamburger icon -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div id="mobile-menu" class="md:hidden hidden">
                    <a href="{{ route('product.index')}}""
                       class="{{ request()->routeIs('products') ? 'bg-yellow-500' : 'bg-green-500' }} text-white text-center block px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md mb-2">
                        Products
                    </a>
                    <a href="{{--route('sales') --}}" 
                       class="{{ request()->routeIs('stocks') ? 'bg-yellow-500' : 'bg-green-500' }} text-white block px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md text-center mb-2">
                        Stocks
                    </a>
                    <a href="{{--route('sales') --}}" 
                       class="{{ request()->routeIs('debts') ? 'bg-yellow-500' : 'bg-green-500' }} text-white block px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md text-center mb-2">
                        Utang
                    </a>
                    <a href="{{-- route('orders') --}}" 
                       class="{{ request()->routeIs('orders') ? 'bg-yellow-500' : 'bg-green-500' }} text-white block px-4 py-2 rounded-full hover:bg-yellow-400 transition duration-300 shadow-md text-center mb-2">
                        Orders
                    </a>
                </div>
            </header>
    
            <!-- Main Content -->
            <main class="flex-grow max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </main>
    
            <!-- Footer -->
            <footer class="bg-gradient-to-r from-green-700 to-green-800 text-white">
                <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 text-center">
                    <p class="text-lg">&copy; {{ date('Y') }} Sari-Sari Store. All rights reserved.</p>
                </div>
            </footer>
        </div>
    
        <!-- Mobile Menu Script -->
        <script>
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                var menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });
        </script>
    </body>
</html>