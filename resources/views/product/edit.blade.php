<div>
    <h1>Edit Product</h1>
    <form method="POST" :action="`/products/{$currentProduct->id}`" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
            <input type="text" name="product_name" id="name" x-model="currentProduct.name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="product_description" id="description" rows="3" x-model="currentProduct.description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                <input type="number" name="product_price" id="price" step="0.01" x-model="currentProduct.price" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label for="quantity" class="block text-gray-700 font-bold mb-2">Stock</label>
                <input type="number" name="product_quantity" id="quantity" x-model="currentProduct.quantity" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Update Product
            </button>
        </div>
    </form>
</div>