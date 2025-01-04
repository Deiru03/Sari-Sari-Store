<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <!-- Header -->
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center md:text-left">
                Welcome to the Dashboard
            </h1>

            <!-- Quick Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-blue-100 p-4 rounded-lg">
                    <h3 class="font-semibold text-blue-800">Total Sales</h3>
                    <p class="text-2xl font-bold text-blue-600">₱0.00</p>
                </div>
                <div class="bg-green-100 p-4 rounded-lg">
                    <h3 class="font-semibold text-green-800">Products</h3>
                    <p class="text-2xl font-bold text-green-600">0</p>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg">
                    <h3 class="font-semibold text-yellow-800">Orders Today</h3>
                    <p class="text-2xl font-bold text-yellow-600">0</p>
                </div>
                <div class="bg-purple-100 p-4 rounded-lg">
                    <h3 class="font-semibold text-purple-800">Customers</h3>
                    <p class="text-2xl font-bold text-purple-600">0</p>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="#" class="bg-blue-500 text-white p-4 rounded-lg text-center hover:bg-blue-600 transition">
                    <i class="fas fa-plus-circle mb-2"></i>
                    <span class="block">New Sale</span>
                </a>
                <a href="#" class="bg-green-500 text-white p-4 rounded-lg text-center hover:bg-green-600 transition">
                    <i class="fas fa-box mb-2"></i>
                    <span class="block">Manage Inventory</span>
                </a>
            </div>
        </div>
    </div>
</x-layout>