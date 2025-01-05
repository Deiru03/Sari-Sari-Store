<div class="max-w-2xl mx-auto py-2 px-2">
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-blue-300">
        <div class="p-8 border-b border-gray-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4" x-text="currentProduct.name"></h3>
            
            <div class="space-y-6">
                <div class="prose text-gray-600" x-text="currentProduct.description"></div>
                
                <div class="flex items-center justify-between border-t border-b border-gray-300 py-4">
                    <div>
                        <div class="flex items-center">
                            <span class="text-gray-500">My Price:</span>
                            <span class="ml-2 text-2xl font-bold text-green-600">₱<span x-text="currentProduct.your_price"></span></span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-500">Original Price:</span>
                            <span class="ml-2 text-2xl font-bold text-yellow-600">₱<span x-text="currentProduct.orig_price"></span></span>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <span class="text-gray-500">Stock:</span>
                        <span class="ml-2 font-medium" x-text="currentProduct.quantity"></span>
                        <span class="ml-1 text-gray-500">units</span>
                    </div>
                </div>

                <div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <span class="text-gray-500">Per Item Profits: </span>
                            <span class="ml-2 text-2xl font-bold text-blue-600">₱<span x-text="currentProduct.item_profit"></span></span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-500">Total Profits will be gain:</span>
                            <span class="ml-2 text-2xl font-bold text-blue-600">₱<span x-text="currentProduct.total_profit"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>