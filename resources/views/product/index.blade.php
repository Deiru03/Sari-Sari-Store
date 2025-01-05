<x-layout>
    <div class="min-h-screen bg-gray-100" x-data="{ showModal: false, showEditModal: false, showProductModal: false, currentProduct: null }">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <div class="flex items-center space-x-4">
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 relative">
                        Product Dashboard
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-blue-500 rounded-full"></span>
                    </h1>
                </div>
                <div class="flex items-center space-x-4 w-full sm:w-auto">
                    <div class="relative w-full sm:w-64">
                        <input type="search" 
                            placeholder="Search products..." 
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <span class="absolute right-3 top-2.5 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </span>
                    </div>
                    <button @click="showModal = true"
                        class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Add Product
                    </button>
                </div>
            </div>
            <div class="flex items-center mb-6 bg-white p-6 rounded-lg shadow-md">
                <div class="mr-6">
                    <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Total Products</h2>
                    <p class="text-3xl font-bold text-blue-600">{{ $products->total() }}</p>
                </div>
                <div class="ml-auto">
                    <svg class="w-16 h-16 text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14h-2v-4H6v-2h4V7h2v4h4v2h-4v4z"/>
                    </svg>
                </div>
            </div>

            @session('status', 'success')
                <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-4" role="alert">
                    <p class="font-bold">Success</p>
                    <p>{{ session('status') }}</p>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                        <svg class="h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path fill="currentColor" d="M14.348 14.849a1 1 0 0 1-1.414 1.414l-3.535-3.536-3.536 3.536a1 1 0 1 1-1.414-1.414l3.536-3.535-3.536-3.536a1 1 0 0 1 1.414-1.414l3.536 3.536 3.535-3.536a1 1 0 0 1 1.414 1.414l-3.536 3.536 3.536 3.535z"></path>
                        </svg>
                    </span>
                </div>
            @endsession

            <!-- Modal -->
            <div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-20 z-50">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold">Add New Product</h2>
                        <button @click="showModal = false" class="text-gray-600 hover:text-gray-900">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <x-add-product-form />
                </div>
            </div>

             <!-- Edit Product Modal -->
             <div x-show="showEditModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold">Edit Product</h2>
                        <button @click="showEditModal = false" class="text-gray-600 hover:text-gray-900">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div x-show="currentProduct">
                    @include('product.edit')
                </div>
            </div>

            <!-- Show Product Modal -->
            <div x-show="showProductModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                <div class="bg-white rounded-lg shadow-lg p-2 w-full max-w-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold">Product Details</h2>
                        <button @click="showProductModal = false" class="text-gray-600 hover:text-gray-900">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    @include('product.show')
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden h-full">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 truncate">
                                {{ $product->name }}
                            </h3>
                            <div class="space-y-1.5">
                                <p class="text-gray-600 text-sm">
                                    <span class="font-semibold">Description: <span class=" text-blue-700">{{ Str::limit($product->description, 50) }}</span></span>
                                </p>
                                <hr class="border-gray-200">
                                <p class="text-gray-600 text-sm flex justify-between items-center">
                                    <span class="font-semibold">Original Price:</span>
                                    <span class="text-blue-600 font-bold">₱{{ number_format($product->orig_price, 2) }}</span>
                                </p>
                                <p class="text-gray-600 text-sm flex justify-between items-center">
                                    <span class="font-semibold">My Price:</span>
                                    <span class="text-green-600 font-bold">₱{{ number_format($product->your_price, 2) }}</span>
                                </p>
                                <hr class="border-gray-200">
                                <p class="text-gray-600 text-sm flex justify-between items-center">
                                    <span class="font-semibold">Stock:</span>
                                    <span class="@if($product->quantity < 10) text-yellow-600 @else text-blue-600 @endif font-bold">
                                        {{ $product->quantity }} units
                                    </span>
                                </p>
                            </div>
                            <div class="mt-3 grid grid-cols-3 gap-1">
                                <button @click="showEditModal = true; currentProduct = {{ $product }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-1.5 px-2 rounded transition duration-300">
                                    Edit
                                </button>
                                <button @click="showProductModal = true; currentProduct = {{ $product }}"
                                    class="bg-green-500 hover:bg-green-700 text-white text-xs font-bold py-1.5 px-2 rounded transition duration-300">
                                    View
                                </button>
                                <form method="POST" action="{{ route('product.destroy', $product) }}" class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full bg-red-500 hover:bg-red-700 text-white text-xs font-bold py-1.5 px-2 rounded transition duration-300">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-layout>