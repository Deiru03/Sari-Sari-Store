<form method="POST" action="{{ route('product.store') }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
        <input type="text" name="product_name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
        <textarea name="product_description" id="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
            <label for="orig-price" class="block text-gray-700 font-bold mb-2">Original Price</label>
            <input type="number" name="product_orig_price" id="orig_price" step="0.01" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required onchange="calculateProfit()">
        </div>
        <div>
            <label for="your-price" class="block text-gray-700 font-bold mb-2">My Price</label>
            <input type="number" name="product_your_price" id="your_price" step="0.01" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required onchange="calculateProfit()">
        </div>
        <div>
            <label for="quantity" class="block text-gray-700 font-bold mb-2">Stock</label>
            <input type="number" name="product_quantity" id="quantity" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label for="profit" class="block text-gray-700 font-bold mb-2">Profit Per Item</label>
            <input type="number" name="product_profit" id="item_profit" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
        </div>

        <script>
            function calculateProfit() {
            const origPrice = parseFloat(document.getElementById('orig_price').value) || 0;
            const yourPrice = parseFloat(document.getElementById('your_price').value) || 0;
            const profit = yourPrice - origPrice;
            document.getElementById('item_profit').value = profit.toFixed(2);
            }
        </script>
    <div>
        <label for="total-profit" class="block text-gray-700 font-bold mb-2">Total Profit</label>
        <input type="number" name="product_total_profit" id="total_profit" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
    </div>

    <script>
        document.getElementById('quantity').addEventListener('change', calculateTotalProfit);
        
        function calculateTotalProfit() {
            const profit = parseFloat(document.getElementById('item_profit').value) || 0;
            const quantity = parseInt(document.getElementById('quantity').value) || 0;
            const totalProfit = profit * quantity;
            document.getElementById('total_profit').value = totalProfit.toFixed(2);
        }
    </script>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Add Product
        </button>
    </div>
</form>