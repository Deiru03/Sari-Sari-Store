<x-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Product Dashboard</h1>
                <a href="{{ route('product.create') }}"
                    class="w-full sm:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 text-center">
                    <i class="fas fa-plus mr-2"></i> Add New Product
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2 truncate">
                                {{ $product->name }}
                            </h3>
                            <div class="space-y-2">
                                <p class="text-gray-600 text-sm">
                                    <span class="font-semibold">Description:</span>
                                    <span class="line-clamp-2">{{ $product->description }}</span>
                                </p>
                                <p class="text-gray-600 text-sm flex justify-between items-center">
                                    <span class="font-semibold">Price:</span>
                                    <span class="text-green-600 font-bold">₱{{ number_format($product->price, 2) }}</span>
                                </p>
                                <p class="text-gray-600 text-sm flex justify-between items-center">
                                    <span class="font-semibold">Stock:</span>
                                    <span class="@if($product->quantity < 10) text-red-600 @else text-blue-600 @endif font-bold">
                                        {{ $product->quantity }} units
                                    </span>
                                </p>
                            </div>
                            <div class="mt-4 flex gap-2">
                                <button class="flex-1 bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg transition duration-300">
                                    Edit
                                </button>
                                <button class="flex-1 bg-red-500 hover:bg-red-700 text-white text-sm font-bold py-2 px-4 rounded-lg transition duration-300">
                                    Delete
                                </button>
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